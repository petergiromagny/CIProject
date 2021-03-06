<?php


class Categories extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CategoryModel');
		$this->load->helper('url_helper');
	}

	/************Show all categories************/
	public function categories()
	{
		$data['category'] = $this->CategoryModel->getCategory();

		$this->load->view('templates/header');
		$this->load->view('pages/categories', $data);
		$this->load->view('templates/footer');
	}

	/************Show products from id categories************/
	public function viewProdByCat($idCat)
	{
		//TODO Bouton ajouter au panier

		$data['category'] = $this->CategoryModel->getCategory();
		$data['product'] = $this->CategoryModel->getProdByCat($idCat);

		if (empty($data['product']))
		{
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('pages/products', $data);
		$this->load->view('templates/footer');

	}

	/************Show products one by one************/
	public function viewProduct($idProduct = NULL)
	{
		//TODO Bouton ajouter au panier

		$data['category'] = $this->CategoryModel->getCategory();
		$data['oneproduct'] = $this->CategoryModel->get_products($idProduct);

		if (empty($data['oneproduct']))
		{
			show_404();
		}

		$data['name'] = $data['oneproduct']['name'];

		$this->load->view('templates/header');
		$this->load->view('pages/viewProduct', $data);
		$this->load->view('templates/footer');

	}

	public function clear_url($url)
	{
		$url = strtolower($url);
		$url = strstr($url, "àäåâôöîïûüéè", "aaaaooiiuuee");
		$url = str_replace(' ', '-', $url);
		return $url;
	}

}
