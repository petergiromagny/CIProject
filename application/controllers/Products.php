<?php


class Products extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		//Met la première lettre en majuscule
		$data['title'] = 'Latest Posts';

		$data['product'] = $this->product->get_products();

		$this->load->view('templates/header');
		$this->load->view('pages/products', $data);
		$this->load->view('templates/footer');
	}

	public function view($name = NULL)
	{
		$data['news_product'] = $this->Product->get_products($name);
	}

}
