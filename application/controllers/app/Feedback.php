<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

    public function save_feedback()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
        $fedb_user_name = $this->input->post('fedb_user_name');
        $fedb_content = $this->input->post('fedb_content');
        $data = array(
            'fedb_time' => date("Y-m-d H:i:s"),
            'fedb_user_name' => $fedb_user_name,
            'fedb_content' => $fedb_content,
        );
        $this->load->model('app/feedback_model');
		$res = $this->feedback_model->save_feedback($data);
        echo json_encode($res);
    }
}
