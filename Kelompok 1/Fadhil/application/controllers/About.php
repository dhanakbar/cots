<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
	{
		$this->load->view('About');
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Login'),'refresh');
		}
	}
}
