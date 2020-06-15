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

	public function transaksiHarian()
	{
		$data['chart_data'] = array();
		$data['chart_label'] = array();
		$data = array();

		foreach ($this->transaksi->transaksiHarian() as $value) {
			$temp = array(
				'tanggal' => $value->tanggal,
				'jumlah' => $value->jumlah_transaksi
			);			
			array_push($data, $temp);
		}

		$result = array(
			'status' => 1,
			'message' => "sukses",
			'transaksi' => $data
		);

		echo json_encode($result);
	}

	public function omsetHarian()
	{
		$data['chart_data'] = array();
		$data['chart_label'] = array();
		$data = array();

		foreach ($this->transaksi->omsetHarian() as $value) {
			$temp = array(
				'tanggal' => $value->tanggal,
				'jumlah' => $value->omset_per_hari
			);			
			array_push($data, $temp);
		}

		$result = array(
			'status' => 1,
			'message' => "sukses",
			'omset' => $data
		);

		echo json_encode($result);
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