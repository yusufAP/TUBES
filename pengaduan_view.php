<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_view extends CI_Model {

	public function GetPengaduan()
	{
		//order by kode_laporan desc => untuk menampilkan laporan terbaru menjadi di atas
		$pengaduan = $this->db->query('SELECT * FROM pengaduan order by kode_laporan desc');
		return $pengaduan;
		
	}
	
	public function GetPengaduanSingle($kode_laporan){
		$single = $this->db->select('*')
							->from('pengaduan')
							->where('kode_laporan',$kode_laporan)
							->get();
	
		return $single;
	}
}