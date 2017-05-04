<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Model {

	public function insertAkunadmin($table_name,$data)
	{
		$insert = $this->db->insert($table_name,$data);
		return $insert;
	}
	public function loginakunadmin($table_name,$data)
	{
		$this->db->select('usernameadmin,passwordadmin');
		return $this->db->get_where($table_name,$data);

	}
}