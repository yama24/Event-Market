<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}
	public function index()
	{
		if ($this->session->userdata('user_email')) {
			if ($this->session->userdata('user_role_id') == 1) {
				redirect('admin');
			} else {
				redirect('user');
			}
		}

		$data['title'] = 'Login';
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('user_password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('b/auth/index', $data);
		} else {
			$this->_login();
		}
	}
	private function _login()
	{
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');

		$user = $this->Auth_model->getUserByEmail($user_email);
		if ($user) {
			if ($user['user_is_active'] == 1) {
				if (password_verify($user_password, $user['user_password'])) {
					$data = [
						'user_name' => $user['user_name'],
						'user_email' => $user['user_email'],
						'user_image' => $user['user_image'],
						'user_role_id' => $user['user_role_id'],
						'user_date_created' => $user['user_date_created']
					];
					$this->session->set_userdata($data);
					if ($user['user_role_id'] == 1) {
						redirect('admin');
					} else {
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');
		}
	}
	public function signUp()
	{
		if ($this->session->userdata('user_email')) {
			if ($this->session->userdata('user_role_id') == 1) {
				redirect('admin');
			} else {
				redirect('user');
			}
		}
		$data['title'] = 'Registration';
		$this->form_validation->set_rules('user_name', 'Full name', 'trim|required');
		$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email|is_unique[user.user_email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('user_password1', 'Password', 'trim|required|min_length[8]|matches[user_password2]');
		$this->form_validation->set_rules('user_password2', 'Retype password', 'trim|required|min_length[8]|matches[user_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('b/auth/registration', $data);
		} else {
			$inputtoken = base64_encode(random_bytes(32));
			$this->_sendEmail($inputtoken, 'verify');
		}
	}
	private function _sendEmail($inputtoken, $type)
	{
		$this->load->library('email');
		$setting = $this->db->get('setting')->row_array();
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => $setting['smtp_host'],
			'smtp_user' => $setting['smtp_user'],
			'smtp_pass' => $setting['smtp_pass'],
			'smtp_port' => $setting['smtp_port'],
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n",
			'wordwrap' => true
		];
		$this->email->initialize($config);
		$this->email->from($this->config->item('smtp_user'), $this->config->item('app_name'));
		$this->email->to($this->input->post('user_email'));
		if ($type == 'verify') {
			$this->email->subject('Account Verification');
			$this->email->message('Click this link to verify your account : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('user_email') . '&token=' . urlencode($inputtoken) . '">Verify</a> <br>The link expires in 24 hours');
			if ($this->email->send()) {

				$user_email = $this->input->post('user_email', true);

				$this->Auth_model->insertUser();
				$this->Auth_model->insertToken($user_email, $inputtoken);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created. Please check your email to activate your account</div>');
				redirect('auth');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to send email!</div>');
				redirect('auth');
			}
		}
	}
	public function verify()
	{
		$user_email = $this->input->get('email');
		$token = $this->input->get('token');
		$user = $this->Auth_model->getUserByEmail($user_email);
		if ($user) {
			$user_token = $this->Auth_model->getTokenByToken($token);
			if ($user_token) {
				if (time() - $user_token['token_date_created'] < (60 * 60 * 24)) {
					$this->Auth_model->updateActiveUser($user_email);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $user_email . ' has been activated! Please login.</div>');
					redirect('auth');
				} else {
					$this->Auth_model->deleteInactiveUser($user_email);
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Token expired.</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Token invalid.</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Account activation failed! Wrong email.</div>');
			redirect('auth');
		}
	}
	public function logout()
	{
		$data = [
			'user_name',
			'user_email',
			'user_image',
			'user_role_id',
			'user_date_created'
		];
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
		redirect('auth');
	}
}
