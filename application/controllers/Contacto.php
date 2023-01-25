<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {


	public function index()
	{ 
		//print_r($this->db);
		$this->load->view('contacto');
	}


	
}
?>