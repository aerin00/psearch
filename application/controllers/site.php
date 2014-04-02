<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->is_logged_in();
	}
	//Load main page
	function index() {
		$data['main_content'] = 'home_view';
		$this->load->view('include/template', $data);
	}

	function register() {
		$data['main_content'] = 'register_view';
		$this->load->view('include/template', $data);
	}

	function members_area() { //check to see if user is logged in first
		$data['main_content'] = 'members_view';
		$this->load->view('include/template', $data);
	}

	function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in'); //call the session data we created in login controller
		if (!isset($is_logged_in) || $is_logged_in != true) {
			echo 'Please login again'.'<br />';
			echo anchor('site/index', "Login");
		}
	}
}