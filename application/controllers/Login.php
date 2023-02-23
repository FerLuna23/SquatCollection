<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

    public function auth()
    {
        $this->load->model('login_model');

        $post['user'] = $this->input->post('user');
        $post['pass'] = $this->input->post('pass');

        $result = $this->login_model->auth_user($post);

        $session = [];

        if (count($result) > 0) {
            //login exitoso:
            $session = [
                'usuario' => trim($result[0]['nombre'])." ".trim($result[0]['APaterno'])." ".trim($result[0]['AMaterno']),
                'status' => true,
                'message' => ''
            ];

            $this->session->set_userdata($session);
            
        } else {
            //usuario o contraseña incorrectos:
            $session = [
                'usuario' => '',
                'status' => false,
                'message' => 'Favor de verificar que el usuario y contraseña sean correctos.'
            ];
        }

        echo json_encode($session);
    }

    public function recovery()
    {
        $this->load->model('login_model');
        $post['user'] = $this->input->post('user');
        $result = $this->login_model->recover_user($post);

        $response = [];

        if (count($result) > 0) {

            $correo = trim($result[0]['Correo']);
            $pass = trim($result[0]['Contraseña']);
            $message = "Buen día de acuerdo a su solicitud la contraseña de su cuenta: ".$correo." es la siguiente: ".$pass;

            $this->load->library('email');

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'smtp.office365.com';
            $config['smtp_port']    = '587';
            $config['smtp_timeout'] = '60';
            $config['smtp_crypto'] = 'tls';
            $config['smtp_user']    = 'recovery.system23@outlook.com';
            $config['smtp_pass']    = '#3&8r#9C2#gFgduK';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $this->email->initialize($config);

            $this->email->from('recovery.system23@outlook.com', 'Recovery System');
            $this->email->to($correo);
            $this->email->subject('Recuperación de contraseña');
            $this->email->message($message);

            if ($this->email->send()) {

                $response = [
                    'email' => $correo,
                    'status' => true,
                    'message' => "La contraseña fue enviada al correo: ".$correo
                ];
                
            } else {

                $response = [
                    'email' => '',
                    'status' => false,
                    'message' => 'Ocurrió un error al enviar el correo, intente más tarde.'
                ];
            }


        } else {

            $response = [
                'email' => '',
                'status' => false,
                'message' => 'No fue posible enviar la contraseña al correo especificado.'
            ];
        }

        echo json_encode($response);
    }
}
