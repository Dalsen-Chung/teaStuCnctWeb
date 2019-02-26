<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edu_branch extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->is_login) {
			$this->session->login_error = '请先登录!';
			return redirect('web/login');
		}
	}

	public function view($page = 'edu_branch')
	{
		if ( ! file_exists(APPPATH.'views/edu_branch/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['edu_branch_list'] = $this->get_edu_branch();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('edu_branch/edu_branch', $data);
		$this->load->view('common/footer');
	}

	public function get_edu_branch() 
	{
		$this->load->model('web/edu_branch_model');
		$res = $this->edu_branch_model->get_edu_branch();
		return $res;
	}

	public function add_edu_branch()	//	往数据库添加部门信息
	{
        $data = array(
            'edu_branch_name' => $this->input->post('edu_branch_name'),
            'edu_branch_address' => $this->input->post('edu_branch_address'),
            'edu_branch_introduction' => $this->input->post('edu_branch_introduction')
        );
		$this->load->model('web/edu_branch_model');
		$res = $this->edu_branch_model->insert_edu_branch($data);
		if ($res == 1) {
			return redirect('web/org_mgt/edu_branch');
		}
	}

	public function delete_edu_branch()	//	删除部门信息
	{
		$edu_branch_id = $this->input->get('edu_branch_id');
		$this->load->model('web/edu_branch_model');
		$res = $this->edu_branch_model->delete_edu_branch($edu_branch_id);
		if ($res == 1) {
			return redirect('web/org_mgt/edu_branch');
		}
	}
}
