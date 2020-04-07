<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function get($id = null)
	{
		if ($id == null) {
			$query = $this->db->get('pegawai')->result();
		}else {
			$this->db->where('id_pegawai', $id);
			$query = $this->db->get('pegawai')->result();
		}
		return $query;
	}


	public function insert($object)
	{
		$query = $this->db->insert('pegawai', $object);
		return $query;
	}

	public function update($id,$object)
	{
		$this->db->where('id_pegawai', $id);
		$query = $this->db->update('pegawai', $object);
		return $query;
	}

	public function delete()
	{
		$this->db->where('id_pegawai', $id);
		$query = $this->db->delete('pegawai');
		return $query;
	}

}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */