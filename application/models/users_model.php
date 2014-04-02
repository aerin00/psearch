<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
	// Validate User
	function validate() {
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('pw', md5($this->input->post('pw')));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| INCOMPLETE Register User
	|--------------------------------------------------------------------------
	*/
	function register() {
		$new_member_insert = array(
			'username' => $this->input->post('username'),
			'pw' => md5($this->input->post('pw')));

		$insert = $this->db->insert('users', $new_member_insert);
		return $insert; //returns TRUE or FALSE
	}
}

?>