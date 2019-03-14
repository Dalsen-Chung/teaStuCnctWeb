<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->is_login) {
			$this->session->login_error = '请先登录!';
			return redirect('web/login');
		}
	}

	public function view($page = 'teacher')
	{
		if ( ! file_exists(APPPATH.'views/teacher/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['college_option'] = $this->get_college_option();
		$data['major_option'] = $this->get_major_option();
		$data['teacher_list'] = $this->get_teacher();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('teacher/teacher', $data);
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

	public function get_teacher() 
	{
		$this->load->model('web/teacher_model');
		$res = $this->teacher_model->get_teacher();
		return $res;
	}

	public function add_teacher()	//	往数据库添加教师信息
	{
        $data = array(
            'tea_account' => $this->input->post('tea_account'),
            'tea_password' => md5($this->input->post('tea_password')),
            'tea_name' => $this->input->post('tea_name'),
            'tea_spell' => $this->input->post('tea_spell'),
            'tea_sex' => $this->input->post('tea_sex'),
            'role_id' => 3,
            'college_id' => $this->input->post('college_id'),
            'major_id' => $this->input->post('major_id'),
            'tea_course' => $this->input->post('tea_course'),
            'tea_phone' => $this->input->post('tea_phone'),
            'tea_isInstructor' => $this->input->post('tea_isInstructor')
        );
		$this->load->model('web/teacher_model');
		$res = $this->teacher_model->insert_teacher($data);
		if ($res == 1) {
			return redirect('web/user_mgt/teacher');
		}
	}

	public function delete_teacher()	//	删除教师信息
	{
		$tea_id = $this->input->get('tea_id');
		$this->load->model('web/teacher_model');
		$res = $this->teacher_model->delete_teacher($tea_id);
		if ($res == 1) {
			return redirect('web/user_mgt/teacher');
		}
	}
}
