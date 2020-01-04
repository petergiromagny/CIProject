<?php


class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/meta');
		$this->load->view('pages/cart');
	}

	public function payment()
	{
		//TODO condition que le panier soit au moins d'un article
		$this->load->view('templates/meta');
		$this->load->view('pages/cart');
	}
}
