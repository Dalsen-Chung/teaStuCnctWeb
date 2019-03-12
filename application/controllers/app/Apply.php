<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends CI_Controller {

    public function save_apply()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $apply_reason = $this->input->post('apply_reason');
        $apply_user_id = $this->input->post('apply_user_id');
        $apply_user_type = $this->input->post('apply_user_type');
        $check_user_id = $this->input->post('check_user_id');
        $check_user_type = $this->input->post('check_user_type');
        $check_user_name = $this->input->post('check_user_name');
        $data = array(
            'apply_time' => date("Y-m-d H:i:s"),
            'apply_reason' => $apply_reason,
            'apply_user_id' => $apply_user_id,
            'apply_user_type' => $apply_user_type,
            'check_user_id' => $check_user_id,
            'check_user_type' => $check_user_type,
            'check_user_name' => $check_user_name,
            'apply_result' => 0
        );
        $this->load->model('app/apply_model');
		$res = $this->apply_model->save_apply($data);
        echo json_encode($res);
    }

    public function get_apply()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $apply_user_id = $this->input->post('apply_user_id');
        $apply_user_type = $this->input->post('apply_user_type');
        $this->load->model('app/apply_model');
		$res = $this->apply_model->get_apply($apply_user_id,$apply_user_type);
        echo json_encode($res);
    }
}
