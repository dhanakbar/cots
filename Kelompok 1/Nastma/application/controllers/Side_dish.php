<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Side_dish extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Login'),'refresh');
		}
	}
    public function index()
	{
		$this->load->view('Side_dish');
		
	}

}
