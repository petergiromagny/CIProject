<?php


class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('admin/home');
		$this->load->view('templates/footer_admin');
	}
}
