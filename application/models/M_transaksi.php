<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function insert($object)
	{
		$query = $this->db->insert('transaksi', $object);
		return $query;
	}

	public function get($id = null)
	{
		if ($id == null) {
			$query = $this->db->get('transaksi')->result();	
		}else {
			$this->db->where('id_transaksi', $id);
			$query = $this->db->get('transaksi')->result();
		}
		
		return $query;
	}

	public function BarangDanHarga(){
		$query = $this->db->get('barang')->result();
		return $query;	
	}

	public function viewBarangMasuk(){
		$query = $this->db->get('view_daftar_barang_masuk')->result();
		return $query;
	}

	public function viewTransaksiByName($customer_name)
	{
		$this->db->like('nama_customer', $customer_name, 'both'); 
		$query = $this->db->get('view_daftar_barang_masuk')->result();
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

	public function viewCustomerByIdTransaksi($id_transaksi)
	{
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->get('view_transaksi_customer')->result();
		return $query;
	}
	
	public function update($id_transaksi,$object)
	{
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->update('transaksi', $object);
		return $query;
	}

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */