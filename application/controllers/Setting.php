<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

	class setting extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            if (!$this->session->userdata('status')):
                header("Location:" . base_url());
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

		private function cargarArchivos() {

			$files = [];
			$error = "";
	
			if(!empty($_FILES)) {
	
				$count = count($_FILES['files']['name']);
				$upload_path = "materialize/img/avisos/";
	
				if (strlen($_FILES['files']['name'][0]) > 0) {
	
					for ($i = 0; $i < $count; $i++) {
	
						$_FILES['userfile']['name']     = $_FILES['files']['name'][$i];
						$_FILES['userfile']['type']     = $_FILES['files']['type'][$i];
						$_FILES['userfile']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$_FILES['userfile']['error']    = $_FILES['files']['error'][$i];
						$_FILES['userfile']['size']     = $_FILES['files']['size'][$i];
	
						$config['upload_path']      = $upload_path;
						$config['allowed_types']    = "*";
						$config['max_size']         = 1000;//1MB
	
						$this->load->library('upload', $config);
	
						if (!$this->upload->do_upload()) {
	
							# ocurrio un error:
							$error = $this->upload->display_errors();
							break;
						}
						else {
	
							$file_data = $this->upload->data();
							$file_name = $file_data['file_name'];
							array_push($files, $file_name);
						}
					}
				}
			}
	
			return array('files' => $files, 'uploadError' => $error);
		}

		public function UpdateImage()
		{

			$files = $this->cargarArchivos();
			print_r($files);

		}
		

	}
?>