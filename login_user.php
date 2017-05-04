<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model {

	public function insertAkun($table_name,$data)
	{
		$insert = $this->db->insert($table_name,$data);
		return $insert;
	}
	public function loginakun($table_name,$data)
	{
		$this->db->select('username,password');
		return $this->db->get_where($table_name,$data);

	}
}