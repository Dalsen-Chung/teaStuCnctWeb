<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function view($page = 'dashboard')
	{
		if ( ! file_exists(APPPATH.'views/dashboard/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('dashboard/dashboard');
		$this->load->view('common/footer');
	}
}
