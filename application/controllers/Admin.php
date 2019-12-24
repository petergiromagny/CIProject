<?php


class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
	}

	public function index()
	{
		$userdata = '';
		$this->session->set_userdata($userdata);

		if($this->session->userdata('level') == '2')
		{
			$this->load->view('templates/header_admin');
			$this->load->view('admin/home_admin');
			$this->load->view('templates/footer_admin');
		}
		else
		{
			redirect('home');
		}
	}

	public function Category()
	{
		//TODO Bouton DELETE et EDIT a faire

		if($this->session->userdata('level') == '2')
		{
			$data['category'] = $this->AdminModel->getCategories();

			$this->load->view('templates/header_admin');
			$this->load->view('admin/category', $data);
			$this->load->view('templates/footer_admin');
		}
		else
		{
			redirect('home');
		}
	}

	public function Product()
	{
		//TODO Bouton DELETE et EDIT a faire

		if($this->session->userdata('level') == '2')
		{
			$data['product'] = $this->AdminModel->getProducts();

			$this->load->view('templates/header_admin');
			$this->load->view('admin/products', $data);
			$this->load->view('templates/footer_admin');
		}
		else
		{
			redirect('home');
		}
	}

	public function order()
	{
		//TODO lister les commandes passée
	}

	public function adminAccess()
	{
		//TODO accés des admin, possibilité d'n ajouter ou d'en retirer
	}


}
