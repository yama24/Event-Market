<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_model');
		if (!$this->session->userdata('user_email')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your are not logged in! please login.</div>');
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'Event List';
		$data['event'] = $this->Event_model->getAllEvent();
		$this->load->view('b/templates/header', $data);
		$this->load->view('b/templates/bar', $data);
		$this->load->view('b/event/index', $data);
		$this->load->view('b/templates/footer');
	}
	public function add()
	{
		$data['title'] = 'Event Add';


		$this->form_validation->set_rules('event_name', 'Event Name', 'trim|required');
		$this->form_validation->set_rules('event_description', 'Description', 'trim|required|min_length[100]');
		// $this->form_validation->set_rules('event_image', 'Image', 'required');
		$this->form_validation->set_rules('event_date', 'Date', 'required');
		$this->form_validation->set_rules('event_time', 'Time', 'required');
		$this->form_validation->set_rules('event_price', 'Price', 'numeric');

		if (empty($_FILES['event_image']['name'])) {
			$this->form_validation->set_rules('event_image', 'Image', 'required');
		}

		if ($this->form_validation->run() == false) {
			$this->load->view('b/templates/header', $data);
			$this->load->view('b/templates/bar', $data);
			$this->load->view('b/event/add', $data);
			$this->load->view('b/templates/footer');
		} else {
			$this->Event_model->insertEvent();
		}
	}
	public function edit()
	{
		$data['title'] = 'Event Edit';
		$data['event'] = $this->Event_model->getEventById();


		$this->form_validation->set_rules('event_name', 'Event Name', 'trim|required');
		$this->form_validation->set_rules('event_description', 'Description', 'trim|required|min_length[100]');
		// $this->form_validation->set_rules('event_image', 'Image', 'required');
		$this->form_validation->set_rules('event_date', 'Date', 'required');
		$this->form_validation->set_rules('event_time', 'Time', 'required');
		$this->form_validation->set_rules('event_price', 'Price', 'numeric');

		if ($this->form_validation->run() == false) {
			$this->load->view('b/templates/header', $data);
			$this->load->view('b/templates/bar', $data);
			$this->load->view('b/event/edit', $data);
			$this->load->view('b/templates/footer');
		} else {
			$this->Event_model->updateEvent();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event edited!</div>');
			redirect('event');
		}
	}
	public function delete($event_id)
	{
		$this->Event_model->deleteEvent($event_id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Event deleted!</div>');
		redirect('event');
	}
}
