<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function daftarBarangMasuk(){
		$query = $this->db->get('daftar_barang_masuk')->result();
		return $query;		
	}

	public function BarangDanHarga(){
		$query = $this->db->get('barang')->result();
		return $query;	
	}

	public function viewBarangMasuk(){
		$query = $this->db->get('view_barang_masuk')->result();
		return $query;
	}

	public function viewTransaksi()
	{
		$query = $this->db->get('view_transaksi')->result();
		return $query;
	}

	public function viewTransaksiDetail()
	{
		$query = $this->db->get('view_transaksi_detail')->result();
		return $query;
	}

	public function viewTransaksiDetailByIdTransaksi($id_transaksi)
	{
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->get('view_transaksi_detail')->result();
		return $query;
	}
	

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */