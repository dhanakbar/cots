<?php
 // write your name and student id here
class Produk extends CI_model
{

    
	public function getAllproduk()
	{
		//use query builder to get data table "produk"
		$this->db->select('*');
		$this->db->from('produk');
		$quary = $this->db->get();
		return $quary->result();
	}
	public function getAllprodukArray()
	{
		//use query builder to get data table "produk"
		$this->db->select('*');
		$this->db->from('produk');
		$quary = $this->db->get();
		return $quary->result_array();
	}

	public function tambahProduk()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
		];
		//use query builder to insert $data to table "produk"
        $this->db->insert('produk',$data);
	}

	public function hapusDataProduk($id_produk)
	{
		//use query builder to delete data based on id 
		$this->db->where('id_produk',$id_produk);
		$this->db->delete('produk');
	}

}
