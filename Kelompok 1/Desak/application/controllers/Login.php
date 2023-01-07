<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		/*load Model*/
		$this->load->model('Pengguna');
	}

	public function index()
	{
		$data['akun'] = $this->Pengguna->getAllakun();
		$this->load->view('Login');
	}

	public function aksi_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$username = $this->input->post('username', true);
		$pass = $this->input->post('password', true);

		$where = array(
			'username' => $username,
			'password' => $pass
		);
		$cek = $this->Pengguna->cek_login("pengguna", $where)->num_rows();
		$id  = $this->Pengguna->getPenggunaId($username, $pass);
		if ($cek > 0) {

			// Desak
		} else {
			$this->session->set_flashdata('flash', 'Username dan password salah !');
			redirect(base_url('Login'));
		}
	}

	public function logout()
	{
		$this->session->set_userdata('status', FALSE);
		$this->session->sess_destroy();
		redirect('Login');
	}
}
