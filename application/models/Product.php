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

	public function get_products($id_product = FALSE)
	{
		if ($id_product === FALSE)
		{
			$query = $this->db->get('product');
			return $query->result_array();
		}

		$query = $this->db->get_where('product', array('id_product' => $id_product));
		return $query->row_array();
	}
}
