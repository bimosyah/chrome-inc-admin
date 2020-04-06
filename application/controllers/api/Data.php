<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {	

	//cek route.php untuk memanggil fungsi	
	public function insert_jumlah()
	{
		$result = array();

		$jumlah = $this->input->post('jumlah');
		if ($jumlah != "") {
			$query = $this->db->insert('table_data', array('jumlah' => $jumlah));
			if ($query) {
				$result = array(
					'status' => 1,
					'message' => "sukses"
				);
				echo json_encode($result);
			}else {
				$result = array(
					'status' => 0,
					'message' => "gagal"
				);
				echo json_encode($result);
			}
		}else {
			$result = array(
				'status' => 0,
				'message' => "data_kosong"
			);
			echo json_encode($result);
		}
	}

	public function load_data()
	{
		$data = $this->db->get('table_data')->result();
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	//cek route.php untuk memanggil fungsi
	public function insert_alpha()
	{
		$result = array();

		$alpha = $this->input->post('alpha');
		if ($alpha != "") {
			$query = $this->db->insert('table_alpha', array('nilai_alpha' => $alpha));
			if ($query) {
				$result = array(
					'status' => 1,
					'message' => "sukses"
				);
				echo json_encode($result);
			}else {
				$result = array(
					'status' => 0,
					'message' => "gagal"
				);
				echo json_encode($result);
			}
		}else {
			$result = array(
				'status' => 0,
				'message' => "data_kosong"
			);
			echo json_encode($result);
		}
	}

	//cek route.php untuk memanggil fungsi
	public function double_exponential()
	{
		//ambil data dari database
		$get_all_data = $this->db->get('table_data')->result();
		//ambil nilai alpha dari database
		$get_alpha = $this->db->get('table_alpha')->result();
		//array untuk simpan data dari database
		$array_data = array();
		//array simpan nilai s't
		$array_st = array();
		//array simpan nilai s''t
		$array_st2 = array();
		//var nilai alpha
		$nilai_alpha = 0;
		//array simpan nilai at
		$array_at = array();
		//array simpan nilai bt
		$array_bt = array();
		//var hasil
		$hasil = 0;
		//var nilai m;
		$m = 1;

		//ambil nilai alpha dan set pada variable $nilai_alpha
		foreach ($get_alpha as $value) {
			$nilai_alpha = $value->nilai_alpha;
		}

		//ekstrak data dari database dan dimasukkan pada array
		foreach ($get_all_data as $value) {
			//push data ke array
			array_push($array_data, $value->jumlah);
		}

		//for untuk mengisi $array_st
		for ($i = 0; $i < count($array_data); $i++) {
			//cek jika posisi sekarang pada s't1 maka diisi dengan nilai array ke 1 pada $array_data
			//cek rumus di excel
			if ($i == 0) {
				array_push($array_st, $array_data[0]);
			}else {
				//menghitung nilai dengan rumus a.Xt + (1-a)S't-1
				//cek rumus di excel
				$nilai = ($nilai_alpha * $array_data[$i]) + (1 - $nilai_alpha) * $array_st[$i - 1];
				array_push($array_st, round($nilai,3));
			}
		}

		//for untuk mengisi $array_st2
		for ($i = 0; $i < count($array_data); $i++) {
			//cek jika posisi sekarang pada s't1 maka diisi dengan nilai array ke 1 pada $array_data
			//cek rumus di excel
			if ($i == 0) {
				array_push($array_st2, $array_data[0]);
			}else {
				//menghitung nilai dengan rumus a.Xt + (1-a)S't-1
				//cek rumus di excel
				$nilai = ($nilai_alpha * $array_st[$i]) + (1 - $nilai_alpha) * $array_st2[$i - 1];
				array_push($array_st2, round($nilai,3));
			}
		}

		//for untuk mengisi $array_at
		for ($i = 0; $i < count($array_data); $i++) {
			//rumusnya adalah at = 2st - st2
			//cek rumus di excel
			$nilai = (2 * $array_st[$i]) - $array_st2[$i];
			array_push($array_at, round($nilai,3));
		}

		//for untuk mengisi $array_bt
		for ($i = 0; $i < count($array_data); $i++) {
			//rumusnya adalah bt = (a / 1 - a) * (s't - s''t)
			//cek rumus di excel
			$nilai = ($nilai_alpha / (1 - $nilai_alpha)) * ($array_st[$i] - $array_st2[$i]);
			array_push($array_bt, round($nilai,3));
		}

		//menghitung nilai akhir = at + bt * m
		//cek rumus di excel
		$hasil = end($array_at) + (end($array_bt) * $m);

		echo json_encode($hasil);


	}

}

/* End of file Data.php */
/* Location: ./application/controllers/api/Data.php */