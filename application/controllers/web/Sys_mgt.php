<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sys_mgt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->is_login) {
			$this->session->login_error = '请先登录!';
			return redirect('web/login');
		}
	}

	public function view($page = 'sysmgt')
	{
		if ( ! file_exists(APPPATH.'views/sysmgt/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['baseInfo'] = $this->get_base_info();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('sysmgt/sysmgt', $data);
		$this->load->view('common/footer');
	}

	public function get_base_info() 
	{
        $admin_id = $this->session->admin_id;
		$this->load->model('web/sys_mgt_model');
		$res = $this->sys_mgt_model->get_base_info($admin_id);
		return $res;
    }
    
    public function update_info() 
	{
        $admin_id = $this->input->post('admin_id');
        $newPassword = md5($this->input->post('newPassword'));
		$this->load->model('web/sys_mgt_model');
		$res = $this->sys_mgt_model->update_password($admin_id, $newPassword);
		if ($res == 1) {
            $this->session->login_error = '修改密码后请重新登录!';
			return redirect('web/login');
		}
	}
}
