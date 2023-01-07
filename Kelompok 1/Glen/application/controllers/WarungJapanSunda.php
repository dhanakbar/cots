<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WarungJapanSunda extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Login'),'refresh');
		}
		$this->load->model('Produk');
	}
    public function index()
	{
		$data['produk'] = $this->Produk->getAllproduk();
		$this->load->view('WarungJapanSunda',$data);
	}
}
