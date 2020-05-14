<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function daftarBarangMasuk(){
		$query = $this->db->get('daftar_barang_masuk')->result();
		return $query;		
	}

	

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */