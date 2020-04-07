<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai','pegawai');
	}

	public function index()
	{
		$data['pegawai'] = $this->pegawai->get();
		$this->load->view('pegawai/index',$data);
	}

	public function insert()
	{
		$this->load->view('pegawai/insert');
	}

	public function save()
	{
		$nama_pegawai = $this->input->post('nama_pegawai');
		$jabatan = $this->input->post('jabatan');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');

		$object = array(
			'nama_pegawai' => $nama_pegawai,
			'jabatan' => $jabatan,
			'username' => $username,
			'password' => md5($password),
			'no_telp' => $no_telp,
			'alamat' => $alamat
		);

		$save = $this->pegawai->insert($object);
		if ($save) {
			redirect('pegawai','refresh');
		}
	}

	public function edit($id)
	{
		$data['pegawai'] = $this->pegawai->get($id);
		$this->load->view('pegawai/insert',$data);
	}

	public function update($id)
	{
		$nama_pegawai = $this->input->post('nama_pegawai');
		$jabatan = $this->input->post('jabatan');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');

		$object = array(
			'nama_pegawai' => $nama_pegawai,
			'jabatan' => $jabatan,
			'username' => $username,
			'password' => md5($password),
			'no_telp' => $no_telp,
			'alamat' => $alamat
		);

		// echo json_encode($object);
		$update = $this->pegawai->update($id,$object);
		if ($update) {
			redirect('pegawai','refresh');
		}
	}

	public function delete($id)
	{
		$delete = $this->pegawai->delete($id);
		if ($delete) {
			redirect('pegawai','refresh');
		}
	}

}

/* End of file C_pegawai.php */
/* Location: ./application/controllers/C_pegawai.php */