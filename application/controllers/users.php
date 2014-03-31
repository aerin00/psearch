<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function validate_user() {
		$this->load->model('users_model');

		$username = $this->input->post('username');
		$pw = $this->input->post('pw');

		if ($this->users_model->validate($username, $pw)) {
			$data['main_content'] = 'login_view';
			$this->load->view('include/template', $data);
		}
		else {
			$data['main_content'] = 'home_view';
			$this->load->view('include/template', $data);
		}

	}

/*
	|--------------------------------------------------------------------------
	| INCOMPLETE
	|--------------------------------------------------------------------------
	*/
	function register_user() {
		$this->load->model('users_model');

	}
}

?>