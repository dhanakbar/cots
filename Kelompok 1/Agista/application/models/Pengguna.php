<?php
 // write your name and student id here
class Pengguna extends CI_model
{

    
	public function getAllakun()
	{
		//use query builder to get data table "pengguna"
		$this->db->select('*');
		$this->db->from('pengguna');
		$quary = $this->db->get();
		return $quary->result();
	}

	public function tambahAkun()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
		];
		//use query builder to insert $data to table "pengguna"
        $this->db->insert('pengguna',$data);
	}
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function cek_user($table,$where){		
		return $this->db->get_where($table,$where);
	}
	public function getPenggunaId($username,$pass)
	{
		$this->db->where('username', $username);
		$this->db->where('password',$pass);
		return $this->db->get('pengguna',)->row_array();
	}

	public function hapusDataPengguna($id_pengguna)
	{
		//use query builder to delete data based on kode 
		//$this->db->where('id_pengguna',$id_pengguna);
		//$this->db->delete('pengguna');
	}

	public function ubahPassPengguna($id_pengguna)
	{
		$data = [
				"password" => $this->input->post('password', true),   	
		];
		//use query builder class to update data pengguna based on kode
		$this->db->where('id_pengguna',$id_pengguna);
		$this->db->update('pengguna',$data);
			
	}

}
