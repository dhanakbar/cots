<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Login'),'refresh');
		}
		$this->load->model('Produk');
		$this->load->model('Pengguna');
		$this->load->model('Penyimpanan');	
		}
    public function index()
	{
		$data['penyimanan'] = $this->Penyimpanan->getAllpenyimpananNoid();
		$data['produk'] = $this->Produk->getAllproduk();
		$this->load->view('Keranjang',$data);
		
	}
    public function insertProduk($id){
		if(isset($_SESSION['keranjang'][$id])){
			$_SESSION['keranjang'][$id]+=1;
		}else{
			$_SESSION['keranjang'][$id]=1;
		}
		$id_pengguna = $_SESSION['id_pengguna'];
		$this->Penyimpanan->tambahProduk($id_pengguna,$id);
		echo "<script> alert('Produk telah ditambahkan ke keranjang!!!');</script>";
		redirect(base_url($_SESSION['jenisproduk']),'refresh');	
		$this->session->unset_userdata('jenisproduk');
		
		
		// echo "<pre>";
		// echo print_r($_SESSION);
		// echo "</pre>";
	}
	public function deleteProduk($id){
		
		$this->Penyimpanan->hapusDataPenyimpanan($id);
		echo "<script> alert('Produk telah dihapus dari keranjang!!!');</script>";
		redirect(base_url('Keranjang'),'refresh');	
	}

	public function checkoutProduk($id){
		
		$this->Penyimpanan->hapusDataPenyimpanan($id);
		redirect(base_url('Keranjang'),'refresh');	
	}


	public function cek_keranjang($id_pengguna){
			$where = array(
				'id_pengguna' => $id_pengguna,
				);
			$cek = $this->Pengguna->cek_login("pengguna",$where)->num_rows();
			if($cek > 0){
				redirect(base_url('Keranjang'),'refresh');
			}
		
	}
    
}
