<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jawaban_dinasinsert extends CI_Model {

	public function insertJawaban($table_name,$data)
	{
		$insert = $this->db->insert($table_name,$data);
		return $insert;
	}
}
