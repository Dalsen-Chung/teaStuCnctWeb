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

	public function view($page = 'student')
	{
		if ( ! file_exists(APPPATH.'views/student/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['college_option'] = $this->get_college_option();
		$data['major_option'] = $this->get_major_option();
		$data['student_list'] = $this->get_student();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('student/student', $data);
		$this->load->view('common/footer');
	}

	public function get_college_option() 
	{
		$this->load->model('web/college_model');
		$res = $this->college_model->get_college_option();
		return $res;
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
