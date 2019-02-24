<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edu_branch extends CI_Controller {


	public function view($page = 'edu_branch')
	{
		if ( ! file_exists(APPPATH.'views/edu_branch/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('edu_branch/edu_branch');
		$this->load->view('common/footer');
	}
}
