<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	/**public function __constuct(){

		parent::__constuct();
		$this->load->helper('form');
		$this->load->model('home_model');
	}*/

	public function index()
	{ 
		//print_r($this->db);
		/**$this->load->database(); //Cargamos la base de datos
		$this->load->model('HomeModel'); //Cargamos el modelo
		$data['listado']=$this->HomeModel->getAll(); //El metodo del modelo

		$this->load->view('Home', $data); //Cargamos la variable data*/

		//$datos[''] = $this->;

        $this->load->model('home_model');
		$data['users'] = $this->home_model->getAll();
		$data['texto'] = $this->home_model->texto1();
		$data['texto1'] = $this->home_model->texto2();
		$data['texto2'] = $this->home_model->texto3();
		$data['texto3'] = $this->home_model->texto4();
		$data['texto4'] = $this->home_model->texto5();
		$data['texto5'] = $this->home_model->texto6();

		$this->load->view('Home', $data);
	}


}
?>


