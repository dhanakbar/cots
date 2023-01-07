<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url('Login'), 'refresh');
        }
        $this->load->model('Pengguna');
    }
    public function index()
    {
        $data['akun'] = $this->Pengguna->getAllakun();
        $this->load->view('Profil', $data);
    }
    public function UpdatePass($id_pengguna)
    {
        // Agista
    }
}
