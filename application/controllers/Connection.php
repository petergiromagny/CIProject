<?php


class Connection extends CI_Controller
{
	public function login()
	{
		$this->load->view('templates/header');
		$this->load->view('authentification/login');
	}

	public function register()
	{
		if (isset($_POST['register']))
		{
			$this->form_validation->set_rules('firstname', 'Firstname', 'required');
			$this->form_validation->set_rules('secondname', 'Secondname', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('mail', 'Mail', 'required');
			$this->form_validation->set_rules('password', 'first password', 'required');
			$this->form_validation->set_rules('password', 'second password', 'required');

			if ($this->form_validation->run() == TRUE)
			{
				echo "form validated";
				//add user in DB
				$data = array(
					'username'=>$_POST['username'],
					'firstname'=>$_POST['firstname'],
					'secondname'=>$_POST['secondname'],
					'mail'=>$_POST['mail'],
					'password'=>$_POST['password'],
				);

				$this->db->insert();
			}


		}

		$this->load->view('templates/header');
		$this->load->view('authentification/register');
	}

}
