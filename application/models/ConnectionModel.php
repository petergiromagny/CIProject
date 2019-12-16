<?php


class ConnectionModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function check_user($username, $password)
	{
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('username', $username);
		$this->db->where('password', sha1($password));
		$query = $this->db->get();

		return $query;
	}
}
