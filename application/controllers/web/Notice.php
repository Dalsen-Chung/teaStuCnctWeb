<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {


	public function view($page = 'notice')
	{
		if ( ! file_exists(APPPATH.'views/notice/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('notice/notice');
		$this->load->view('common/footer');
    }
    
	public function unreview($page = 'unreview')
	{
		if ( ! file_exists(APPPATH.'views/notice/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('notice/unreview');
		$this->load->view('common/footer');
	}
}
