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
		$nama_tukang = $this->input->post('nama_tukang');

		$object = array(
			'nama_tukang' => $nama_tukang,
			'nama_inv' => $nama_inv,
			'jumlah' => $jumlah,
			'satuan' => $satuan,
			'harga_beli' => $harga_beli,
			'keterangan' => $keterangan
		);

		$query = $this->inventory->insert($object);

		if ($query) {	

			require_once(APPPATH.'views/vendor/autoload.php');
			$options = array(
				'cluster' => 'ap1',
				'useTLS' => true
			);
			$pusher = new Pusher\Pusher(
				'fbe5e22f9f78edda72c3',
				'f8cc57c1d3dbcfc9525f',
				'1014149',
				$options
			);

			$data['message'] = 'sukses';
			$data['from'] = 'inventory';
			$pusher->trigger('my-channel', 'my-event', $data);
			
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

	public function daftartInventory()
	{
		$result = array();
		$data = $this->inventory->get();
		
		if ($data) {
			$result = array(
				'status' => 1,
				'message' => "berhasil",
				'inventory' => $data
			);
		}else {
			$result = array(
				'status' => 0,
				'message' => "gagal",
				'inventory' => array()
			);
		}

		echo json_encode($result);
	}

}

/* End of file Inventory.php */
/* Location: ./application/controllers/api/Inventory.php */