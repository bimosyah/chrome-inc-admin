<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai', 'M_barang', 'M_inventory');
		$this->load->model('M_transaksi', 'transaksi');
	}

	public function insertPegawai()
	{

		$result = array();

		$nama_pegawai = $this->input->post('nama_pegawai');
		$jabatan = $this->input->post('jabatan');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');

		if ($nama_pegawai != "" || $jabatan != "" || $username != "" || $password != "" || $no_telp != "" || $no_telp != "" || $alamat != "") {

			$object = array(
				"nama_pegawai" => $nama_pegawai,
				"jabatan" => $jabatan,
				"username" => $username,
				"password" => $password,
				"no_telp" => $no_telp,
				"alamat" => $alamat
			);

			$query = $this->M_pegawai->insert($object);

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

	public function loadPegawai()
	{
		$data = $this->db->get('pegawai')->result();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/api/Pegawai.php */