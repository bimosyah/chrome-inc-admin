<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi', 'transaksi');
	}
	
	public function getTransaksi()
	{
		$query = $this->transaksi->daftarBarangMasuk();
		if ($query) {
			foreach ($query as $key => $value) {
				$nama = $value->nama_customer;
				$tanggal = $value->tanggal_masuk;
				$status = $value->status;
			}
			$result = array(
				'status' => 1,
				'message' => "sukses",
				'daftar_barang' => array(
					'nama' => $nama,
					'tanggal' => $tanggal,
					'status' => $status
				)
			);
			echo json_encode($result);
		}else{
			$result = array(
				'status' => 0,
				'message' => "gagal",
				'daftar_barang' => array()
			);
			echo json_encode($result);
		}
	}

	public function getDaftarBarangMasuk()
	{
		$query = $this->transaksi->viewBarangMasuk();
		header('Content-Type: application/json');
		echo json_encode($query);
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/api/Transaksi.php */