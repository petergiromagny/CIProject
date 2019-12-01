<?php


class Products extends CI_Controller
{
	public function index()
	{
		//Met la première lettre en majuscule
		$data['title'] = 'Latest Posts';

		$data['products'] = $this->product->get_products();

		$this->load->view('templates/header');
		$this->load->view('pages/products', $data);
		$this->load->view('templates/footer');
	}
}
