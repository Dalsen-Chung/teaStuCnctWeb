<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {


	public function view($page = 'notice')
	{
		if ( ! file_exists(APPPATH.'views/notice/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['notice_list'] = $this->get_all_notice();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('notice/notice', $data);
		$this->load->view('common/footer');
	}
	
	public function get_all_notice()
	{
		$this->load->model('web/notice_model');
		$res = $this->notice_model->get_all_notice();
		return $res;
	}

	public function delete_notice()
	{
		$notice_id = $this->input->get('notice_id');
		$this->load->model('web/notice_model');
		$res = $this->notice_model->delete_notice($notice_id);
		if ($res == 1) {
			return redirect('web/nt_mgt/notice_list');
		}
	}

	public function get_unreview_notice()
	{
		$this->load->model('web/notice_model');
		$res = $this->notice_model->get_unreview_notice();
		return $res;
	}
    
	public function unreview($page = 'unreview')
	{
		if ( ! file_exists(APPPATH.'views/notice/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['unreview_notice_list'] = $this->get_unreview_notice();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('notice/unreview', $data);
		$this->load->view('common/footer');
	}

	public function pass_notice()
	{
		$notice_id = $this->input->get('notice_id');
		$this->load->model('web/notice_model');
		$res = $this->notice_model->pass_notice($notice_id);
		if ($res == 1) {
			return redirect('web/nt_mgt/notice_list');
		}
	}

	public function unpass_notice()
	{
		$notice_id = $this->input->get('notice_id');
		$this->load->model('web/notice_model');
		$res = $this->notice_model->unpass_notice($notice_id);
		if ($res == 1) {
			return redirect('web/nt_mgt/notice_list');
		}
	}
}
