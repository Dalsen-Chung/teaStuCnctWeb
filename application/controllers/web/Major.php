<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->is_login) {
			$this->session->login_error = '请先登录!';
			return redirect('web/login');
		}
	}

	public function view($page = 'major')
	{
		if ( ! file_exists(APPPATH.'views/major/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['major_list'] = $this->get_major();
		$data['college_option'] = $this->get_college_option();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('major/major', $data);
		$this->load->view('common/footer');
	}

	public function get_major() 
	{
		$this->load->model('web/major_model');
		$res = $this->major_model->get_major();
		return $res;
	}

	public function get_college_option() 
	{
		$this->load->model('web/college_model');
		$res = $this->college_model->get_college_option();
		return $res;
	}

	public function add_major()	//	往数据库添加专业信息
	{
        $data = array(
            'major_name' => $this->input->post('major_name'),
            'major_introduction' => $this->input->post('major_introduction'),
            'college_id' => $this->input->post('college_id')
        );
		$this->load->model('web/major_model');
		$res = $this->major_model->insert_major($data);
		if ($res == 1) {
			return redirect('web/org_mgt/major');
		}
	}

	public function delete_major()	//	删除专业信息
	{
		$major_id = $this->input->get('major_id');
		$this->load->model('web/major_model');
		$res = $this->major_model->delete_major($major_id);
		if ($res == 1) {
			return redirect('web/org_mgt/major');
		}
	}
}
