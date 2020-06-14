<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai','pegawai');

	}

	public function index()
	{
		if (isset($_SESSION['logged_in'])) {
			redirect('dashboard','refresh');
		}
		$this->load->view('login/index');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->pegawai->login($username, md5($password));

		if($query){
			$newdata = array(
				'username'  => $username,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('dashboard','refresh');
		}else {
			redirect('login','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file C_login.php */
/* Location: ./application/controllers/C_login.php */