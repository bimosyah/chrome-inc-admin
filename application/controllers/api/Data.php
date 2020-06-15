<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi', 'transaksi');
	}

	public function dashboard()
	{
		$jumlah_transaksi= $this->getJumlahTransaksi();
		$jumlah_selesai = $this->getJumlahTransaksiByStatus(3);
		$jumlah_dikerjakan = $this->getJumlahTransaksiByStatus(2);
		$jumlah_menunggu = $this->getJumlahTransaksiByStatus(1);

		$data = array(
			'jumlah_transaksi' => $jumlah_transaksi,
			'jumlah_selesai' => $jumlah_selesai,
			'jumlah_dikerjakan' => $jumlah_dikerjakan,
			'jumlah_menunggu' => $jumlah_menunggu
		);

		echo json_encode($data);
	}

	public function getJumlahTransaksi()
	{
		$jumlah = $this->transaksi->get();
		return count($jumlah);
	}

	public function getJumlahTransaksiByStatus($id_status)
	{
		$jumlah = $this->transaksi->getByStatus($id_status);
		return count($jumlah);
	}



}

/* End of file Data.php */
/* Location: ./application/controllers/api/Data.php */