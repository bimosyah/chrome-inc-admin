<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_inventory', 'inventory');
	}

	public function insertInventory()
	{

		$result = array();

		$nama_inv = $this->input->post('nama_inv');
		$jumlah = $this->input->post('jumlah');
		$satuan = $this->input->post('satuan');
		$harga_beli = $this->input->post('harga_beli');
		$keterangan = $this->input->post('keterangan');

		$object = array(
			'nama_inv' => $nama_inv,
			'jumlah' => $jumlah,
			'satuan' => $satuan,
			'harga_beli' => $harga_beli,
			'keterangan' => $keterangan
		);

		$query = $this->inventory->insert($object);

		if ($query) {				
			$result = array(
				'status' => 1,
				'message' => "sukses"
			);
		}else {
			$result = array(
				'status' => 0,
				'message' => "gagal"
			);
		}
		echo json_encode($result);

	}

}

/* End of file Inventory.php */
/* Location: ./application/controllers/api/Inventory.php */