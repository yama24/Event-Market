<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	public function getUserByEmail($user_email)
	{
		return $this->db->get_where('user', ['user_email' => $user_email])->row_array();
	}
	public function insertUser()
	{
		$data = [
			'user_name' => htmlspecialchars($this->input->post('user_name')),
			'user_email' => htmlspecialchars($this->input->post('user_email', true)),
			'user_image' => 'default.jpg',
			'user_password' => password_hash($this->input->post('user_password1'), PASSWORD_DEFAULT),
			'user_role_id' => 2,
			'user_is_active' => 0,
			'user_date_created' => time()
		];
		$this->db->insert('user', $data);
		return;
	}
	public function getTokenByToken($token)
	{
		return $this->db->get_where('token', ['token_token' => $token])->row_array();
	}
	public function insertToken($user_email, $inputtoken)
	{
		$token = [
			'token_user_email' => $user_email,
			'token_token' => $inputtoken,
			'token_date_created' => time()
		];
		$this->db->insert('token', $token);
	}
	public function updateActiveUser($user_email)
	{
		$this->db->set('user_is_active', 1);
		$this->db->where('user_email', $user_email);
		$this->db->update('user');
		$this->db->delete('token', ['token_user_email' => $user_email]);
	}
	public function deleteInactiveUser($user_email)
	{
		$this->db->delete('user', ['user_email' => $user_email]);
		$this->db->delete('token', ['token_user_email' => $user_email]);
	}
}
