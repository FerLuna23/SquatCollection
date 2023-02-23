<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

	class setting extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            if (!$this->session->userdata('status')):
                header("Location:" . base_url('index.php/login'));
            endif;
        }

		public function index()
		{   $this->load->model('home_model');
			$data['ContenidoTextos'] = $this->home_model->ReadAll();
			//var_dump($data);
			$this->load->view('setting', $data);
		}

		public function Agregar(){
		
			$this->load->helper('form');
			$this->load->model('home_model');

			$Contenido['nombre'] = $this->input->post('titulo');
			$Contenido['Texto'] = $this->input->post('texto');
			$this->home_model->Agregar($Contenido);
			//echo "Hola soy Fernanda";
		}
		

	}
?>