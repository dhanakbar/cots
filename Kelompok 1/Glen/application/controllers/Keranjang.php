<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url('Login'), 'refresh');
		}
		$this->load->model('Produk');
		$this->load->model('Pengguna');
		$this->load->model('Penyimpanan');
	}
	public function index()
	{
		$data['penyimanan'] = $this->Penyimpanan->getAllpenyimpananNoid();
		$data['produk'] = $this->Produk->getAllproduk();
		$this->load->view('Keranjang', $data);
	}
	public function insertProduk($id)
	{
		// Glen


		// echo "<pre>";
		// echo print_r($_SESSION);
		// echo "</pre>";
	}
	public function deleteProduk($id)
	{

		$this->Penyimpanan->hapusDataPenyimpanan($id);
		echo "<script> alert('Produk telah dihapus dari keranjang!!!');</script>";
		redirect(base_url('Keranjang'), 'refresh');
	}

	public function checkoutProduk($id)
	{

		$this->Penyimpanan->hapusDataPenyimpanan($id);
		redirect(base_url('Keranjang'), 'refresh');
	}


	public function cek_keranjang($id_pengguna)
	{
		// Glen
	}
}
