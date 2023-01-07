<?php
 // write your name and student id here
class Penyimpanan extends CI_model
{
   
	public function getAllpenyimpananNoid()
	{
		//use query builder to get data table "keranjang"
		$this->db->select('*');
		$this->db->from('keranjang');
		$quary = $this->db->get();
		return $quary->result();
	}

	public function getAllpenyimpanan($id_pengguna,$id_produk)
	{
		//use query builder to get data table "keranjang"
		$$this->db->where('id_pengguna', $id_pengguna);
		$this->db->where('id_produk',$id_produk);
		return $this->db->get('keranjang',)->row_array();
	}
    public function tambahProduk($pengguna, $produk)
	{
		$data = [
			"id_pengguna" => $pengguna,
			"id_produk" => $produk,
		];
		//use query builder to insert $data to table "keranjang"
        $this->db->insert('keranjang',$data);
	}
	public function hapusDataPenyimpanan($id_produk)
	{
		//use query builder to delete data based on id 
		$this->db->where('id_produk',$id_produk);
		$this->db->delete('keranjang');
	}
}