<?php


class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
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
}
