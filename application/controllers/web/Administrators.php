<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrators extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->is_login) {
			$this->session->login_error = '请先登录!';
			return redirect('web/login');
		}
	}
	
	public function view($page = 'admin')
	{
		if ( ! file_exists(APPPATH.'views/admin/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['college_option'] = $this->get_college_option();
		$data['major_option'] = $this->get_major_option();
		$data['admin_list'] = $this->get_administrators();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('admin/admin', $data);
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

	public function get_administrators() 
	{
		$this->load->model('web/admin_model');
		$res = $this->admin_model->get_admin();
		return $res;
	}

	public function add_administrators()	//	往数据库添加管理员信息
	{
        $data = array(
            'admin_name' => $this->input->post('admin_name'),
            'college_id' => $this->input->post('college_id'),
            'major_id' => $this->input->post('major_id'),
            'admin_account' => $this->input->post('admin_account'),
            'admin_password' => $this->input->post('admin_password')
        );
		$this->load->model('web/admin_model');
		$res = $this->admin_model->insert_admin($data);
		if ($res == 1) {
			return redirect('web/user_mgt/administrators');
		}
	}

	public function delete_administrators()	//	删除管理员信息
	{
		$admin_id = $this->input->get('admin_id');
		$this->load->model('web/admin_model');
		$res = $this->admin_model->delete_admin($admin_id);
		if ($res == 1) {
			return redirect('web/user_mgt/administrators');
		}
	}
}
