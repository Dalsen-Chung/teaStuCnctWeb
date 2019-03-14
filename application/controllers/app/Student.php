<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


    public function login()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->load->model('app/student_model');
		$account = $this->input->post('account');
        $password = $this->input->post('password');
        $user_info = $this->student_model->get_student_info($account);
        if (isset($user_info)) {	// 数组不存在则账号不存在
            $md5_pass = md5($password);
            if ($md5_pass != $user_info['stu_password']) {	//	判断密码是否一样
                echo json_encode(array('resMsg' => 'failed', 'resBody' => '密码错误'));
            } else {
                echo json_encode(array('resMsg' => 'success', 'resBody' => $user_info));
            }
        } else {
            $this->output->set_header("Access-Control-Allow-Origin: * ");
            echo json_encode(array('resMsg' => 'failed', 'resBody' => '账号不存在'));
        }
    }

	public function get_stu_by_college_major()
	{
		$this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->output->set_header('Content-Type:application/json');
		$this->load->model('app/student_model');
		$college_id = $this->input->post('collegeId');
		$major_id = $this->input->post('majorId');
		$res = $this->student_model->get_stu_by_college_major($college_id, $major_id);
		$en = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$resultArr = array();
		foreach ($en as $enValue) {
			foreach ($res as $stuValue) {
				$aa = $stuValue;
				$spell = $stuValue['stu_spell'];
				$firstEn = strtoupper(substr($spell,0,1));
				if ($enValue === $firstEn) {
					if (!isset($resultArr[$enValue])) {
						$resultArr[$enValue] = array();
						array_push($resultArr[$enValue], array(
							"id" => intval($stuValue['stu_id']),
							"spell" => $stuValue['stu_spell'],
							"name" => $stuValue['stu_name'],
							"roleId" => intval($stuValue['role_id'])
						));
					} else {
						array_push($resultArr[$enValue], array(
							"id" => intval($stuValue['stu_id']),
							"spell" => $stuValue['stu_spell'],
							"name" => $stuValue['stu_name'],
							"roleId" => intval($stuValue['role_id'])
						));
					}
				}
			}
		}
		echo json_encode($resultArr);
	}

	public function get_stu_by_id() 
	{
		$this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->output->set_header('Content-Type:application/json');
		$stu_id = intval($this->input->post('user_id'));
		$this->load->model('app/student_model');
		$res = $this->student_model->get_stu_by_id($stu_id);
		echo json_encode($res);
	}

	public function update_stu_info()
	{
		$this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->output->set_header('Content-Type:application/json');
		$stu_id = intval($this->input->post('user_id'));
		$stu_phone = $this->input->post('phone');
		$stu_password = md5($this->input->post('password'));
		$this->load->model('app/student_model');
		$res = $this->student_model->update_stu_info($stu_id,$stu_phone,$stu_password);
		echo json_encode($res);
	}

	public function get_major_option() 
	{
		$this->load->model('web/major_model');
		$res = $this->major_model->get_major_option();
		return $res;
	}

	public function get_student() 
	{
		$this->load->model('web/student_model');
		$res = $this->student_model->get_student();
		return $res;
	}

}
