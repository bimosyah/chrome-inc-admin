<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi','transaksi');
	}

	public function index()
	{
		$data['transaksi'] = $this->transaksi->viewTransaksi();
		$this->load->view('transaksi/index', $data);
	}

	public function detail($id_transaksi)
	{
		$data['detail_transaksi'] = $this->transaksi->viewTransaksiDetailByIdTransaksi($id_transaksi);
		$this->load->view('transaksi/detail', $data);	
	}

}

/* End of file C_transaksi.php */
/* Location: ./application/controllers/C_transaksi.php */