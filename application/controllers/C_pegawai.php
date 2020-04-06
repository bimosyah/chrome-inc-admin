<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pegawai extends CI_Controller {

	public function index()
	{
		$this->load->view('pegawai/index');
	}

	public function insert()
	{
		$this->load->view('pegawai/insert');
	}

}

/* End of file C_pegawai.php */
/* Location: ./application/controllers/C_pegawai.php */