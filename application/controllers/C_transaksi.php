<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi','transaksi');
		if (!isset($_SESSION['logged_in'])) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['transaksi'] = $this->transaksi->viewTransaksi();
		$this->load->view('transaksi/index', $data);
	}

	public function detail($id_transaksi)
	{
		$detail_transaksi = $this->transaksi->viewTransaksiDetailByIdTransaksi($id_transaksi);
		$data['detail_transaksi'] = $detail_transaksi;
		$data['total_detail_transaksi'] = $this->totalHargaTransaksi($id_transaksi);
		$data['gambar'] = $this->getGambar($id_transaksi);

		$this->load->view('transaksi/detail', $data);	
	}

	public function totalHargaTransaksi($id_transaksi)
	{
		$detail_transaksi = $this->transaksi->viewTransaksiDetailByIdTransaksi($id_transaksi);
		$total_harga = 0;

		foreach ($detail_transaksi as $value) {
			$total_harga += $value->harga_total;
		}

		return $total_harga;
	}

	public function getGambar($id_transaksi)
	{
		$transaksi = $this->transaksi->get($id_transaksi);
		$gambar = $transaksi[0]->gambar;
		return $gambar;
	}

}

/* End of file C_transaksi.php */
/* Location: ./application/controllers/C_transaksi.php */