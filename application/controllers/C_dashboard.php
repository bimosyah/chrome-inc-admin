<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi','transaksi');
	}

	public function index()
	{
		$data['jumlahTransaksi'] = $this->getJumlahTransaksi();
		$data['jumlah_selesai'] = $this->getJumlahTransaksiByStatus(3);
		$data['jumlah_dikerjakan'] = $this->getJumlahTransaksiByStatus(2);
		$data['jumlah_menunggu'] = $this->getJumlahTransaksiByStatus(1);
		$data['chart_data'] = array();
		$data['chart_label'] = array();

		foreach ($this->transaksi->omsetHarian() as $value) {
			array_push($data['chart_data'], $value->omset_per_hari);
			array_push($data['chart_label'], $value->tanggal);			
		}

		$this->load->view('dashboard/index',$data);
		// echo json_encode($data['omset_harian']);
	}

	public function chart()
	{

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

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */