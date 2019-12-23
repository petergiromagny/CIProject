<?php


class CategoryModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getCategory($idCat = FALSE)
	{
		if ($idCat === FALSE)
		{
			$query = $this->db->get('category');
			return $query->result_array();
		}

		$query = $this->db->get_where('category', array('id_category' => $idCat));
		return $query->row_array();
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

	public function getProdByCat($idCat)
	{
		$this->db->where('category', $idCat);
		$query = $this->db->get('product');
		return $query->result_array();
	}

}
