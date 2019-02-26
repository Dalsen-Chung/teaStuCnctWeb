<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->is_login) {
			$this->session->login_error = '请先登录!';
			return redirect('web/login');
		}
	}

	public function view($page = 'college')
	{
		if ( ! file_exists(APPPATH.'views/college/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$college_list = $this->get_college();
		$data['college_list'] = $college_list;
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('college/college', $data);
		$this->load->view('common/footer');
	}

	public function icon_upload()	//	上传学院图标
	{
        $config['upload_path'] = './public/common/image/college/';
        $config['allowed_types'] = 'jpg|png|gif|bmp|jpeg';
        $config['encrypt_name'] = true;
		$this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('iconImg'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            echo json_encode($data);
        }
	}

	public function get_college() 
	{
		$this->load->model('web/college_model');
		$res = $this->college_model->get_college();
		return $res;
	}

	public function add_college()	//	往数据库添加学院信息
	{
        $data = array(
            'college_name' => $this->input->post('college_name'),
            'college_icon' => $this->input->post('college_icon'),
            'college_address' => $this->input->post('college_address'),
            'college_introduction' => $this->input->post('college_introduction')
        );
		$this->load->model('web/college_model');
		$res = $this->college_model->insert_college($data);
		if ($res == 1) {
			return redirect('web/org_mgt/college');
		}
	}

	public function delete_college()	//	删除学院信息
	{
		$college_id = $this->input->get('college_id');
		$this->load->model('web/college_model');
		$res = $this->college_model->delete_college($college_id);
		if ($res == 1) {
			return redirect('web/org_mgt/college');
		}
	}
}
