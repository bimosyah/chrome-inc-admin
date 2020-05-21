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
		$daftar_barang = array();
		if ($query) {
			foreach ($query as $key => $value) {
				$id_transaksi = $value->id_transaksi;
				$nama_customer = $value->nama_customer;
				$tanggal_masuk = $value->tanggal_masuk;
				$status = $value->nama_status;

				$data = array(
					'id_transaksi' => $id_transaksi,
					'nama_customer' => $nama_customer,
					'tanggal_masuk' => $tanggal_masuk,
					'status' => $status
				);

				array_push($daftar_barang, $data);
			}

			$result = array(
				'status' => 1,
				'message' => "sukses",
				'daftar_barang' => $daftar_barang 
			);			
		}else {
			$result = array(
				'status' => 0,
				'message' => "gagal",
				'daftar_barang' => $daftar_barang 
			);
		}

		header('Content-Type: application/json');
		echo json_encode($result);
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/api/Transaksi.php */