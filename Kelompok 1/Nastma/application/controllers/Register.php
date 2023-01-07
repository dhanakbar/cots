<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
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
        $this->load->view('Register', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmPass', 'ConfirmPass', 'required');

        $username = $this->input->post('username', true);
        $pass = $this->input->post('password', true);
        $confirmpass = $this->input->post('confirmPass', true);

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'Mohon di isi dengan benar');
            redirect(base_url('Register'));
        } else {
            $where = array(
                'username' => $username
            );
            $cek = $this->Pengguna->cek_user("pengguna", $where)->num_rows();
            if ($cek > 0) {
                // Nastma
            } else {
                // Nastma 
            }
        }
    }
}
