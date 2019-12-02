<?php

//Récupération de la table product dans la BDD
class Product extends CI_Model
{
	//On fait un constructeur qui va se connecter à la BDD
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_products($name = FALSE)
	{
		if ($name === FALSE)
		{
			$query = $this->db->get('product');
			return $query->result_array();
		}

		$query = $this->db->get_where('product', array('name' => $name));
		return $query->row_array();
	}
}
