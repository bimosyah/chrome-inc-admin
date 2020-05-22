<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang', 'barang');
	}

	public function insertBarang()
	{

		$result = array();

		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$ongkos_seleb = $this->input->post('ongkos_seleb');
		$bahan_seleb = $this->input->post('bahan_seleb');
		$ongkos_crom = $this->input->post('ongkos_crom');
		$bahan_crom = $this->input->post('bahan_crom');
		$ongkos_hapus_cat = $this->input->post('ongkos_hapus_cat');
		$marketing = $this->input->post('marketing');
		$listrik = $this->input->post('listrik');
		$pengepakan_barang = $this->input->post('pengepakan_barang');
		$bonus = $this->input->post('bonus');
		$peralatan = $this->input->post('peralatan');
		$omset_pabrik = $this->input->post('omset_pabrik');
		$total_harga = $this->input->post('total_harga');

		if ($kode_barang != "" || $nama_barang != "" || $ongkos_seleb != "" || $bahan_seleb != "" || $ongkos_crom != "" || $bahan_crom != "" || $ongkos_hapus_cat != "" || $marketing != "" || $listrik != "" || $pengepakan_barang != "" || $bonus != "" || $peralatan != "" || $omset_pabrik != "" || $total_harga != "") {

			$object = array(
				'kode_barang' => $kode_barang,
				'nama_barang' => $nama_barang,
				'ongkos_seleb' => $ongkos_seleb,
				'bahan_seleb' => $bahan_seleb,
				'ongkos_crom' => $ongkos_crom,
				'bahan_crom' => $bahan_crom,
				'ongkos_hapus_cat' => $ongkos_hapus_cat,
				'marketing' => $marketing,
				'listrik' => $listrik,
				'pengepakan_barang' => $pengepakan_barang,
				'bonus' => $bonus,
				'peralatan' => $peralatan,
				'omset_pabrik' => $omset_pabrik,
				'total_harga' => $total_harga
			);

			$query = $this->M_barang->insert($object);

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

	public function loadBarang()
	{
		$data = $this->db->get('barang')->result();
		header('Content-Type: application/json');
		echo json_encode($data);
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