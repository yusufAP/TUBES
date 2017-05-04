<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jawaban_dinasview extends CI_Model {

	public function GetJawaban()
	{
		//order by kode_laporan desc => untuk menampilkan laporan terbaru menjadi di atas
		$jawaban = $this->db->query('SELECT * FROM divisi order by kode_laporan desc');
		return $jawaban;
		
	}
	
	public function GetJawabanSingle($kode_laporan){
		$single = $this->db->select('*')
							->from('divisi')
							->where('kode_laporan',$kode_laporan)
							->get();
	
		return $single;
	}
}