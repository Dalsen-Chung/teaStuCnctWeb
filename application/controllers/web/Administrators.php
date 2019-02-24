<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrators extends CI_Controller {


	public function view($page = 'admin')
	{
		if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('admin/admin');
		$this->load->view('common/footer');
	}
}
