<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_delete extends CI_Model {

	public function DeleteData($data, $kode_laporan)
	{
		$where = array('username' => $data, 'kode_laporan'=>$kode_laporan);
		$pengaduan = $this->db->delete('pengaduan', $where);
		return $pengaduan;
		
	}
}