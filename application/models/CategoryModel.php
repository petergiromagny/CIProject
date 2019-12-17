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

	public function getProdByCat($idCat)
	{
		$query = $this->db->get_where('product', array('category' == $idCat));
		return $query->row_array();
	}

}
