<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function register() {
		$data['main_content'] = 'register_view';
		$this->load->view('include/template', $data);
	}

	function validate_user() {
		$this->load->model('users_model');
		$query = $this->users_model->validate();

		if ($query) { // if user credential is validated
			$data = array( //add these values to session
				'username' =>$this->input->post('username'),
				'is_logged_in' => TRUE
				);

			$this->session->set_userdata($data); // set user with session data

			redirect('site/members_area'); //redirect to the members area of the main controller
		}
		else {
			redirect('site/index'); //
		}

	}

	// register user
	function register_user() {
		//form_validation library autoloaded: field name, error message to generate on page, validation rules

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('pw', 'Password', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('pw2', 'Password Confirmation', 'trim|required|matches[pw]');
		
		if ($this->form_validation->run() == FALSE) {
			$this->register(); // if something wrong with user input, send back to registration form with error message
		}
		else {
			$this->load->model('users_model');
			if ($query = $this->users_model->register()) { //if inserting new member is worked
				$data['main_content'] = 'success_view';
				$this->load->view('include/template', $data);
			}
			else { //if issue with adding user to database
				$data['main_content'] = 'register_error_view';
				$this->load->view('include/template', $data);
			}
		}
	}
}

?>