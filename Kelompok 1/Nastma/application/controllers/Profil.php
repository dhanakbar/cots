<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url('Login'),'refresh');
		}
        $this->load->model('Pengguna');

	}
    public function index()
	{
        $data['akun'] = $this->Pengguna->getAllakun();
		$this->load->view('Profil',$data);
		
	}
   public function UpdatePass($id_pengguna){
        $this->form_validation->set_rules('password', 'Password', 'required');
       
        $pass = $this->input->post('password', true);

        if ($this->form_validation->run() == false)
		{
            $this->session->set_flashdata('flash', 'Password tidak boleh kosong');
            redirect(base_url('Profil'));
        }else{
            $this->Pengguna->ubahPassPengguna($id_pengguna);
            echo '<script type="text/javascript">alert("Password berhasil di ubah");</script>';
            redirect(base_url('Beranda'), 'refresh'); 
                  
        }
   }
}
