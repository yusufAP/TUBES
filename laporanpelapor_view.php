<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanpelapor_view extends CI_Model {

	public function GetPengaduanSaya($data)
	{
		$pengaduan = $this->db->query("SELECT * FROM pengaduan where username='$data' order by kode_laporan desc");
		return $pengaduan;
		
	}
}