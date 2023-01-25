<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{ 
		//print_r($this->db);
		/**$this->load->database(); //Cargamos la base de datos
		$this->load->model('HomeModel'); //Cargamos el modelo
		$data['listado']=$this->HomeModel->getAll(); //El metodo del modelo

		$this->load->view('Home', $data); //Cargamos la variable data*/

        $this->load->model('home_model');
		$data['users'] = $this->home_model->getAll();
		$this->load->view('Home', $data);
	}

}
?>


