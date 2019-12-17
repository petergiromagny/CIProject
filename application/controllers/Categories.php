<?php


class Categories extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CategoryModel');
	}

	public function categories()
	{

		$data['category'] = $this->CategoryModel->getCategory();

		$this->load->view('templates/header');
		$this->load->view('pages/categories', $data);
		$this->load->view('templates/footer');
	}

	public function viewCategory($idCat = NULL)
	{
		$data['onecategory'] = $this->category->getProdByCat($idCat);

		if (empty($data['onecategory']))
		{
			show_404();
		}

		$data['name'] = $data['oneproduct']['name'];

		$this->load->view('templates/header');
		$this->load->view('pages/products', $data);
		$this->load->view('templates/footer');

	}

}
