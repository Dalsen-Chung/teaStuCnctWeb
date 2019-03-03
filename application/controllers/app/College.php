<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {

	public function view($page = 'college')
	{
		if ( ! file_exists(APPPATH.'views/college/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$college_list = $this->get_college();
		$data['college_list'] = $college_list;
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('college/college', $data);
		$this->load->view('common/footer');
	}

	public function get_college() 
	{
        $this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->load->model('web/college_model');
		$res = $this->college_model->get_college();
		echo json_encode($res);
	}
}
