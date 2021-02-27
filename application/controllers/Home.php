<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['event'] = $this->Home_model->getAllEvent();
		// $this->load->view('f/templates/header', $data);
		// $this->load->view('f/templates/bar', $data);
		$this->load->view('f/home/index', $data);
		// $this->load->view('f/templates/footer');
	}
}
