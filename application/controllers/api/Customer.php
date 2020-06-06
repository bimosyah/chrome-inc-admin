<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_customer','customer');

	}
	
	public function loadCustomer()
	{
		$result = array();
		$data_customer = $this->customer->get();
		if ($data_customer) {
			$result = array(
				'status' => 1,
				'message' => "sukses",
				'data_customer' => $data_customer
			);
		}else {
			$result = array(
				'status' => 0,
				'message' => "gagal",
				'data_customer' => array()
			);
		}

		header('Content-Type: application/json');
		echo json_encode($result);
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/api/Customer.php */