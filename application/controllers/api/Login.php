<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai','pegawai');

		
	}

	public function doLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->pegawai->login($username, md5($password));

		if($query){
			foreach ($query as $key => $value) {
				$nama = $value->nama_pegawai;
			}
			$result = array(
				'status' => 1,
				'message' => "sukses",
				'pegawai' => array(
					'nama_pegawai' => $nama
				)
			);
			echo json_encode($result);	
		}else {
			$result = array(
				'status' => 0,
				'message' => "gagal",
				'pegawai' => array()
			);
			echo json_encode($result);
		}
		
	}

}

/* End of file login.php */
/* Location: ./application/controllers/api/login.php */