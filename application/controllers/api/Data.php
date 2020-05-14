<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai', 'M_barang', 'M_inventory');
		$this->load->model('M_transaksi', 'transaksi');
	}

	public function insert_pegawai(){

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

	public function load_pegawai()
	{
		$data = $this->db->get('pegawai')->result();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function insert_barang(){

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

	public function load_barang()
	{
		$data = $this->db->get('barang')->result();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function insert_inventory(){

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

	public function getTransaksi(){
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

	



}

/* End of file Data.php */
/* Location: ./application/controllers/api/Data.php */