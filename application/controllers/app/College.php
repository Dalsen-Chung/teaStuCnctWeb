<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {

	public function get_college() 
	{
        $this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->load->model('web/college_model');
		$res = $this->college_model->get_college();
		echo json_encode($res);
	}
}
