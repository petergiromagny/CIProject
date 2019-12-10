<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connection extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ConnectionModel');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('authentification/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}

	public function login()
	{
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$result = $this->ConnectionModel->check_user($username, $password);

		if($result->num_rows() > 0)
		{
			$data = $result->row_array();
			$username = $data['username'];
			$mail = $data['mail'];
			$firstname = $data['firstname'];
			$lastname = $data['lastname'];
			$userdata = array(
				'username' => $username,
				'mail' => $mail,
				'firstname' => $firstname,
				'lastname' => $lastname,
				'logged_in' => TRUE
			);

			$this->session->set_userdata($userdata);

			redirect('profile');
		}
		else
		{
			echo '<script>alert("access denied");history.go(-1);</script>';
		}

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
					$this->session->set_flashdata('error', 'Les mots de passes ne correspondent pas');
				}
			}
		}

		$this->load->view('templates/header');
		$this->load->view('authentification/register');
	}

	public function user_profile()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/profile');
	}
}
