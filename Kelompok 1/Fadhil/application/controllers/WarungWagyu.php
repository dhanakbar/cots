<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WarungWagyu extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		// Fadhil
	}
	public function index()
	{
		$data['produk'] = $this->Produk->getAllproduk();
		$this->load->view('WarungWagyu', $data);
	}
}
