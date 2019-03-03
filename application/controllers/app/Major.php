<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {

	public function view($page = 'major')
	{
		if ( ! file_exists(APPPATH.'views/major/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['major_list'] = $this->get_major();
		$data['college_option'] = $this->get_college_option();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('major/major', $data);
		$this->load->view('common/footer');
	}

	public function get_major() 
	{
		$this->load->model('web/major_model');
		$res = $this->major_model->get_major();
		return $res;
	}

	public function get_college_option() 
	{
		$this->load->model('web/college_model');
		$res = $this->college_model->get_college_option();
		return $res;
	}

    public function get_major_by_college()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $college_id = $this->input->post('collegeId');
		$this->load->model('web/major_model');
		$res = $this->major_model->get_major_by_college($college_id);
		echo json_encode($res);
    }
}
