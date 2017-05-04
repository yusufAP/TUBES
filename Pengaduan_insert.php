<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan_insert extends CI_Model {

	public function insertData($table_name,$data)
	{
		$insert = $this->db->insert($table_name,$data);
		return $insert;
	}
}
