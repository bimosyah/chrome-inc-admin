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

	public function getByStatus($id_status)
	{
		$this->db->where('id_status', $id_status);
		$query = $this->db->get('transaksi')->result();	
		return $query;
	}

	public function getBydate($date)
	{
		$this->db->where('tanggal_masuk', $date);
		$query = $this->db->get('transaksi')->result();
		return $query;
	}

	public function BarangDanHarga(){
		$query = $this->db->get('barang')->result();
		return $query;	
	}

	public function viewBarangMasuk(){
		$query = $this->db->query("select transaksi.id_transaksi AS id_transaksi,customer.nama_customer AS nama_customer,transaksi.tanggal_masuk AS tanggal_masuk,status.nama_status AS nama_status from ((transaksi join customer on((transaksi.id_customer = customer.id_customer))) join status on((transaksi.id_status = status.id_status))) ORDER BY id_transaksi DESC")->result();
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
		$query = $this->db->query("select transaksi.id_transaksi AS id_transaksi,transaksi.tanggal_masuk AS tanggal_masuk,transaksi.tanggal_keluar AS tanggal_keluar,customer.nama_customer AS nama_customer,pegawai.nama_pegawai AS nama_pegawai,status.nama_status AS status,transaksi.gambar AS gambar,transaksi.estimasi AS estimasi from (((transaksi join customer on((transaksi.id_customer = customer.id_customer))) join pegawai on((transaksi.id_pegawai = pegawai.id_pegawai))) join status on((transaksi.id_status = status.id_status))) order by transaksi.id_transaksi desc")->result();
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

	public function omsetHarian()
	{
		$result = $this->db->query("SELECT transaksi.tanggal_masuk as tanggal, SUM(barang.omset_pabrik) as omset_per_hari FROM transaksi JOIN detail_transaksi on transaksi.id_transaksi = detail_transaksi.id_transaksi JOIN barang ON barang.id_barang = detail_transaksi.id_barang GROUP BY transaksi.tanggal_masuk")->result();

		return $result;
	}

	public function transaksiHarian()
	{
		$result = $this->db->query("SELECT COUNT(transaksi.id_transaksi) AS jumlah_transaksi , tanggal_masuk as tanggal
			FROM transaksi GROUP BY tanggal_masuk ORDER BY tanggal_masuk ASC")->result();

		return $result;
	}

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */