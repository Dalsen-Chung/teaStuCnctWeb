<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edu_branch extends CI_Controller {

	public function get_branch() 
	{
        $this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->load->model('web/edu_branch_model');
		$res = $this->edu_branch_model->get_edu_branch();
		echo json_encode($res);
	}
}
