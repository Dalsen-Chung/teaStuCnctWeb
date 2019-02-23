<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($page = 'login')
	{
		if ( ! file_exists(APPPATH.'views/login/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('common/header');
		$this->load->view('login/login');
		$this->load->view('common/footer');
	}
}
