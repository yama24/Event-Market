<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function getAllEvent()
	{
		$this->db->order_by('event_id', 'DESC');
		return $this->db->get('event')->result_array();
	}
}
