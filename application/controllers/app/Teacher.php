<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {


    public function login()
    {
        $this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->load->model('app/teacher_model');
		$account = $this->input->post_get('account');
        $password = $this->input->post_get('password');
        $user_info = $this->teacher_model->get_teacher_info($account);
        if (isset($user_info)) {	// 数组不存在则账号不存在
            $md5_pass = md5($password);
            if ($md5_pass != $user_info['tea_password']) {	//	判断密码是否一样
                echo json_encode(array('resMsg' => 'failed', 'resBody' => '密码错误'));
            } else {
                echo json_encode(array('resMsg' => 'success', 'resBody' => $user_info));
            }
        } else {
            echo json_encode(array('resMsg' => 'failed', 'resBody' => '账号不存在'));
        }
    }

	public function get_tea_by_college_major()
	{
		$this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->output->set_header('Content-Type:application/json');
		$this->load->model('app/teacher_model');
		$college_id = $this->input->post('collegeId');
		$major_id = $this->input->post('majorId');
		$res = $this->teacher_model->get_tea_by_college_major($college_id, $major_id);
		$en = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$resultArr = array();
		foreach ($en as $enValue) {
			foreach ($res as $teaValue) {
				$aa = $teaValue;
				$spell = $teaValue['tea_spell'];
				$firstEn = strtoupper(substr($spell,0,1));
				if ($enValue === $firstEn) {
					if (!isset($resultArr[$enValue])) {
						$resultArr[$enValue] = array();
						array_push($resultArr[$enValue], array(
							"id" => intval($teaValue['tea_id']),
							"spell" => $teaValue['tea_spell'],
							"name" => $teaValue['tea_name'],
							"roleId" => intval($teaValue['role_id'])
						));
					} else {
						array_push($resultArr[$enValue], array(
							"id" => intval($teaValue['tea_id']),
							"spell" => $teaValue['tea_spell'],
							"name" => $teaValue['tea_name'],
							"roleId" => intval($teaValue['role_id'])
						));
					}
				}
			}
		}
		echo json_encode($resultArr);
	}

	public function get_tea_by_id() 
	{
		$this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->output->set_header('Content-Type:application/json');
		$tea_id = intval($this->input->post('user_id'));
		$this->load->model('app/teacher_model');
		$res = $this->teacher_model->get_tea_by_id($tea_id);
		echo json_encode($res);
	}

	public function update_tea_info()
	{
		$this->output->set_header("Access-Control-Allow-Origin: * ");
		$this->output->set_header('Content-Type:application/json');
		$tea_id = intval($this->input->post('user_id'));
		$tea_phone = $this->input->post('phone');
		$tea_password = md5($this->input->post('password'));
		$this->load->model('app/teacher_model');
		$res = $this->teacher_model->update_tea_info($tea_id,$tea_phone,$tea_password);
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

	public function add_student()	//	往数据库添加学生信息
	{
        $data = array(
            'stu_account' => $this->input->post('stu_account'),
            'stu_password' => $this->input->post('stu_password'),
            'stu_name' => $this->input->post('stu_name'),
            'stu_sex' => $this->input->post('stu_sex'),
            'role_id' => $this->input->post('role_id'),
            'stu_grade' => $this->input->post('stu_grade'),
            'college_id' => $this->input->post('college_id'),
            'major_id' => $this->input->post('major_id'),
            'stu_class' => $this->input->post('stu_class'),
            'stu_phone' => $this->input->post('stu_phone'),
            'stu_address' => $this->input->post('stu_address')
        );
		$this->load->model('web/student_model');
		$res = $this->student_model->insert_student($data);
		if ($res == 1) {
			return redirect('web/user_mgt/student');
		}
	}

	public function delete_student()	//	删除学生信息
	{
		$stu_id = $this->input->get('stu_id');
		$this->load->model('web/student_model');
		$res = $this->student_model->delete_student($stu_id);
		if ($res == 1) {
			return redirect('web/user_mgt/student');
		}
	}
}
