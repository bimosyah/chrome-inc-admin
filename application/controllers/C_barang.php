<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_barang extends CI_Controller {

	public function index()
	{
		$this->load->view('barang/index');
	}

	public function insert()
	{
		$this->load->view('barang/insert');
	}

	public function save()
	{
		
	}

}

/* End of file C_barang.php */
/* Location: ./application/controllers/C_barang.php */