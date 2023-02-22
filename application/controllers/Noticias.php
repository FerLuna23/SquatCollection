<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {


	public function index()
	{ 
		//print_r($this->db);

		/**$this->load->model('home_model');
		$data['users'] = $this->home_model->getAll();
		$data['texto6'] = $this->home_model->texto7();
		$data['texto1'] = $this->home_model->texto8();
		$data['texto2'] = $this->home_model->texto9();
		$data['texto3'] = $this->home_model->texto10();*/

		$this->load->view('noticias');
	}

}
?>