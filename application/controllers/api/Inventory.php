<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai', 'M_barang', 'M_inventory');
		$this->load->model('M_transaksi', 'transaksi');
	}

	public function insertInventory()
	{

		$result = array();

		$no_inv = $this->input->post('no_inv');
		$nama_inv = $this->input->post('nama_inv');
		$jumlah = $this->input->post('jumlah');
		$satuan = $this->input->post('satuan');
		$harga_beli = $this->input->post('harga_beli');
		$keterangan = $this->input->post('keterangan');


		if ($no_inv != "" || $nama_inv != "" || $jumlah != "" || $satuan != "" || $harga_beli != "" || $keterangan != "") {

			$object = array(
				'no_inv' => $no_inv,
				'nama_inv' => $nama_inv,
				'jumlah' => $jumlah,
				'satuan' => $satuan,
				'harga_beli' => $harga_beli,
				'keterangan' => $keterangan
			);

			$query = $this->M_inventory->insert($object);

			if ($query) {				
				$result = array(
					'status' => 1,
					'message' => "sukses"
				);
				echo json_encode($result);
			}else {
				$result = array(
					'status' => 0,
					'message' => "gagal"
				);
				echo json_encode($result);
			}
		}else {
			$result = array(
				'status' => 0,
				'message' => "data_kosong"
			);
			echo json_encode($result);
		}	
	}

}

/* End of file Inventory.php */
/* Location: ./application/controllers/api/Inventory.php */