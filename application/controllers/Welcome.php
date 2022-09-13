<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{ 
		//print_r($this->db);
		$this->load->view('Home');
	}

}
?>