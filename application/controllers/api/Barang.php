<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang', 'barang');
		$this->load->model('M_customer','customer');
		$this->load->model('M_transaksi','transaksi');
	}

	public function getBarangHarga()
	{
		$query = $this->barang->get();
		$array_barang = array();
		if ($query) {
			foreach ($query as $key => $value) {
				$nama_barang = $value->nama_barang;
				$total_harga = $value->total_harga;
				$data = array(
					'id_barang' => $value->id_barang,
					'nama_barang' => $value->nama_barang,
					'total_harga' => $value->total_harga
				);
				array_push($array_barang, $data);
			}
			$result = array(
				'status' => 1,
				'message' => "sukses",
				'barang_harga' => $array_barang
			);
		}else{
			$result = array(
				'status' => 0,
				'message' => "gagal",
				'barang_harga' => $array_barang
			);
		}

		header('Content-Type: application/json');
		echo json_encode($result);
	}
}

/* End of file Barang.php */
/* Location: ./application/controllers/api/Barang.php */