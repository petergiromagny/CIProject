<?php


class ConnectionModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function can_login($mail, $password)
	{
		$this->db->where('mail', $mail);
		$this->db->where('password', $password);
		$query = $this->db->get('user');

		if ($query->num_rows() > 0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}

}
