<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

    public function get_role()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $this->load->model('app/role_model');
		$res = $this->role_model->get_role();
        echo json_encode($res);
    }
}
