<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	//Load main page
	public function index() {
		$data['main_content'] = 'home_view';
		$this->load->view('include/template', $data);
	}

	function register() {
		$data['main_content'] = 'register_view';
		$this->load->view('include/template', $data);
	}
}