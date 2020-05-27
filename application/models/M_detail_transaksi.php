<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_transaksi extends CI_Model {

	public function insert($object)
	{
		$query = $this->db->insert('detail_transaksi', $object);
		return $query;
	}	

}

/* End of file M_detail_transaksi.php */
/* Location: ./application/models/M_detail_transaksi.php */