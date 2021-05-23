<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event_model extends CI_Model
{
	public function getAllEvent()
	{
		$this->db->order_by('event_id', 'DESC');
		return $this->db->get('event')->result_array();
	}
	public function getEventById()
	{
		$id_uri = $this->uri->segment(3);
		return $this->db->get_where('event', ['event_id' => $id_uri])->row_array();
	}
	public function insertEvent()
	{
		$name = str_replace(" ", "-", strtolower($this->input->post('event_name')));
		$slug_name = $name;
		$count = 2;
		while (true) {
			$cek_slug = $this->db->get_where('event', ['event_slug' => $slug_name]);
			if ($cek_slug->num_rows() == 0) break;
			$slug_name = $name . '-' . $count++;
		}

		$event_name = $this->input->post('event_name');
		$event_description = $this->input->post('event_description');
		$event_slug = $slug_name;
		$event_date = strtotime($this->input->post('event_date'));
		$event_time = strtotime($this->input->post('event_time'));

		$event_date_created = time();
		if ($this->input->post('event_status') == null) {
			$event_status = 0;
			$event_price = 0;
		} else {
			$event_status = 1;
			$event_price = $this->input->post('event_price');
		}

		$upload_image = $_FILES['event_image']['name'];
		if ($upload_image) {
			$config['upload_path'] = './assets/dist/img/event/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('event_image')) {
				$event_image = $this->upload->data('file_name');
				$data = [
					'event_name' => $event_name,
					'event_description' => $event_description,
					'event_image' => $event_image,
					'event_slug' => $event_slug,
					'event_date' => $event_date,
					'event_time' => $event_time,
					'event_status' => $event_status,
					'event_price' => $event_price,
					'event_date_created' => $event_date_created
				];
				$this->db->insert('event', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New event created!</div>');
				redirect('event');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Incorrect file type or size too large!</div>');
				redirect('event/add');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">The Image field is required!</div>');
			redirect('event/add');
		}
	}
	public function updateEvent()
	{
		$name = str_replace(" ", "-", strtolower($this->input->post('event_name')));
		$slug_name = $name;
		$count = 2;
		while (true) {
			$cek_slug = $this->db->get_where('event', ['event_slug' => $slug_name]);
			if ($cek_slug->num_rows() == 0) break;
			$slug_name = $name . '-' . $count++;
		}

		$event_id = $this->input->post('event_id');
		$event_name = $this->input->post('event_name');
		$event_description = $this->input->post('event_description');
		$event_slug = $slug_name;
		$event_date = strtotime($this->input->post('event_date'));
		$event_time = strtotime($this->input->post('event_time'));

		if ($this->input->post('event_status') == null) {
			$event_status = 0;
			$event_price = 0;
		} else {
			$event_status = 1;
			$event_price = $this->input->post('event_price');
		}

		$upload_image = $_FILES['event_image']['name'];
		if ($upload_image) {
			$config['upload_path'] = './assets/dist/img/event/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '2048';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('event_image')) {
				$old_image = $this->db->get_where('event', ['event_id' => $event_id])->row_array();
				unlink(FCPATH . 'assets/dist/img/event/' . $old_image['event_image']);
				$event_image = $this->upload->data('file_name');
				$this->db->set('event_image', $event_image);
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Event failed to edit! Image size is too large.</div>');
				redirect('event');
			}
		}
		$data = [
			'event_name' => $event_name,
			'event_description' => $event_description,
			'event_slug' => $event_slug,
			'event_date' => $event_date,
			'event_time' => $event_time,
			'event_status' => $event_status,
			'event_price' => $event_price,
		];
		$this->db->where('event_id', $event_id);
		$this->db->update('event', $data);
	}
	public function deleteEvent($event_id)
	{
		$image_name = $this->db->get_where('event', ['event_id' => $event_id])->row_array();
		unlink(FCPATH . 'assets/dist/img/event/' . $image_name['event_image']);
		$this->db->where('event_id', $event_id);
		$this->db->delete('event');
	}
}
