<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		if (!$this->session->userdata('user_email')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your are not logged in! please login.</div>');
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('b/templates/header', $data);
		$this->load->view('b/templates/bar', $data);
		$this->load->view('b/admin/index', $data);
		$this->load->view('b/templates/footer');
	}
}
