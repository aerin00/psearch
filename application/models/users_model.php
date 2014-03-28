<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
	function validate($username, $pw) {

		$where_array = array( 'username' => $username, 'pw' => $pw );
		$this->db->where($where_array);
		$query = $this->db->get('users');

		if ($query->num_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}

?>