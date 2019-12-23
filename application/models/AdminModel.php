<?php


class AdminModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getCategories()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}

	public function getProducts()
	{
		$query = $this->db->get('product');
		return $query->result_array();
	}

	public function getProdByCat($idCat)
	{
		$this->db->select('name, count(*)');
		$this->db->where('category', $idCat);
		$query = $this->db->get('product');
		return $query->result_array();
	}

}
