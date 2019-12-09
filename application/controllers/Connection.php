<?php


class Connection extends CI_Controller
{
	//TODO la session ne tiens pas plusieurs changement de page
	public function logout()
	{
		unset($_SESSION);
		redirect('home', 'refresh');
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mail', 'mail', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		$mail = $this->input->post('mail');
		$password = $this->input->post('password');

		$this->load->model('ConnectionModel');

		if ($this->ConnectionModel->can_login($mail, $password))
		{
			
		}

//		if (isset($_POST['mail']) && isset($_POST['password']))
//		{
//			if ($this->form_validation->run())
//			{
//				$mail = htmlspecialchars($_POST['mail']);
//				$password = sha1($_POST['password']);
//
//				$this->db->select('*');
//				$this->db->from('user');
//				$this->db->where(array(
//						'mail'=>$mail,
//						'password'=>$password)
//				);
//				$query = $this->db->get();
//				$user = $query->row();
//
//				if ($user->mail)
//				{
//					$this->load->library('session');
//					//temporary message
//					$this->session->set_flashdata('success', 'You are logged in');
//					//set session variables
//					$_SESSION['user_logged'] = TRUE;
//					$_SESSION['username'] = $user->username;
//					//redirect to profile page
//
//					//redirect("user/profile","refresh");
//
//
//				} else {
//					$this->session->set_flashdata('error', 'No such account exists in database');
//					//redirect("login","refresh");
//
//				}
//			}
//		}

		$this->load->view('templates/header');
		$this->load->view('authentification/login');
	}

	public function register()
	{
		if (isset($_POST['register']))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('firstname', 'first name', 'required');
			$this->form_validation->set_rules('lastname', 'last name', 'required');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('mail', 'mail', 'required');
			$this->form_validation->set_rules('password', 'first password', 'required');
			$this->form_validation->set_rules('password2', 'confirm password', 'required');
			$this->form_validation->set_rules('RGPD', 'privacy condition', 'required');

			if ($this->form_validation->run() == TRUE)
			{
				$username = htmlspecialchars($_POST['username']);
				$firstname = htmlspecialchars($_POST['firstname']);
				$lastname = htmlspecialchars($_POST['lastname']);
				$mail = htmlspecialchars($_POST['mail']);
				$password = sha1($_POST['password']);
				$password2 = sha1($_POST['password2']);

				if($password == $password2)
				{
					$data = array(
						'username'=>$username,
						'firstname'=>$firstname,
						'lastname'=>$lastname,
						'mail'=>$mail,
						'password'=>$password,
						'created_at'=>date('Y-m-d')
					);

					//TODO valider les deux mot de passe et si l'username n'est pas utilisé

					$this->db->insert('user', $data);
					$this->session->set_flashdata('success', 'Your account has been registered. You can login now');
					redirect("register", "refresh");
				}
				else
				{
					echo "Les mots de passes ne correspondent pas";
				}
			}
		}

		$this->load->view('templates/header');
		$this->load->view('authentification/register');
	}

}
