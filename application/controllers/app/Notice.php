<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

    public function save_notice()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $notice_tea_id = $this->input->post('notice_tea_id');
        $notice_title = $this->input->post('notice_title');
        $notice_content = $this->input->post('notice_content');
        $college_id = $this->input->post('college_id');
        $major_id = $this->input->post('major_id');
        $notice_is_all = $this->input->post('notice_is_all');
        $data = array(
            'notice_tea_id' => $notice_tea_id, 
            'notice_time' => date("Y-m-d H:i:s"),
            'notice_title' => $notice_title,
            'notice_content' => $notice_content,
            'notice_read_times' => 0,
            'college_id' => $college_id,
            'major_id' => $major_id,
            'notice_pass_review' => 0,
            'notice_is_all' => $notice_is_all
        );
        $this->load->model('app/notice_model');
		$res = $this->notice_model->save_notice($data);
        echo json_encode($res);
    }

    public function get_notice()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $this->load->model('app/notice_model');
		$res = $this->notice_model->get_notice();
        echo json_encode($res);
    }
}
