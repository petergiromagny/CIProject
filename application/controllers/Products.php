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

	public function viewProduct($idProduct = NULL)
	{
		$data['oneproduct'] = $this->product->get_products($idProduct);

		if (empty($data['oneproduct']))
		{
			//show_404();
			echo "ERROR";
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
