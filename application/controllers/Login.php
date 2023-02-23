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
}
