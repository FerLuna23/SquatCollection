<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
        $this->load->view('contacto');
	}

    public function save()
    {
        $post['nombre'] = $this->input->post('nombre');
        $post['empresa'] = $this->input->post('empresa');
        $post['tel'] = $this->input->post('tel');
        $post['mail'] = $this->input->post('mail');
        $post['comen'] = $this->input->post('comen');

        $result = [];
        $this->load->model('contact_model');

        $result['status'] = $this->contact_model->insert_contact($post);
        $result['message'] = $result['status']? 'Solicitud enviada con éxito.': 'Error al envíar solicitud.'; 

        //mail sending
        $message = "Buen día se generó una solicitud de contacto con la siguiente información:\n";
        $message .= "Nombre: ". $post['nombre'] . "\n";
        $message .= "Empresa: ". $post['empresa'] . "\n";
        $message .= "Teléfono: ". $post['tel'] . "\n";
        $message .= "Email: ". $post['mail'] . "\n";
        $message .= "Comentarios: ". $post['comen'] . "\n";

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

        $this->email->from('recovery.system23@outlook.com', 'Administración de sistema');
        $this->email->to('mflunac18@gmail.com');
        $this->email->subject('Solicitud de contacto');
        $this->email->message($message);

        if ($this->email->send()) {

            $result['mailinfo'] = "Correo enviado";
            
        } else {

            $result['mailinfo'] = "No fue posible enviar el correo";
            $result['debugger'] = $this->email->print_debugger();
        }
        
        echo json_encode($result);
    }
}
?>