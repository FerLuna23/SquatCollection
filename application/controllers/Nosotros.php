<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {


	public function index()
	{ 
		//print_r($this->db);

		$this->load->model('home_model');
		$data['users'] = $this->home_model->getAll();
		$data['texto6'] = $this->home_model->texto7();
		$data['texto7'] = $this->home_model->texto8();
		$data['texto8'] = $this->home_model->texto9();
		$data['texto9'] = $this->home_model->texto10();

		$this->load->view('Nosotros', $data);
		
	}


}