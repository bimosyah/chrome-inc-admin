<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_customer','customer');
	}

	public function index()
	{
		$data['customer'] = $this->customer->get();
		$this->load->view('customer/index',$data);
	}

	public function histori($id_customer)
	{
		$data['histori'] = $this->customer->histori($id_customer);
		$this->load->view('customer/histori',$data);

	}

}

/* End of file C_customer.php */
/* Location: ./application/controllers/C_customer.php */