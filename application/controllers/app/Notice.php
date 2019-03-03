<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

    public function save_notice()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $notice_tea_id = $this->input->post('notice_tea_id');
        $notice_time = $this->input->post('notice_time');
        $notice_title = $this->input->post('notice_title');
        $notice_content = $this->input->post('notice_content');
        $college_id = $this->input->post('college_id');
        $major_id = $this->input->post('major_id');
        $notice_is_all = $this->input->post('notice_is_all');
    }
}
