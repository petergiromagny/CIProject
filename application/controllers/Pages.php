<?php


class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CategoryModel');
		$this->load->helper('url_helper');
	}

	public function view($page = 'home')
	{
		$data['category'] = $this->CategoryModel->getCategory();

		if(! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}

		//Met la première lettre en majuscule
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
