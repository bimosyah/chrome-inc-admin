<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chat extends CI_Model {

	public function insert($object)
	{
		$query = $this->db->insert('chat', $object);
		return $query;
	}	

	public function get()
	{
		$query = $this->db->get('chat')->result();
		return $query;
	}

}

/* End of file M_chat.php */
/* Location: ./application/models/M_chat.php */