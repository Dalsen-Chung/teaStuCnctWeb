<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_mgt extends CI_Controller {

	public function __construct()
  {
		parent::__construct();
        if (!$this->session->is_login) {
			$this->session->login_error = '请先登录!';
			return redirect('web/login');
		}
	}
	
	public function view($page = 'order_mgt')
	{
		if ( ! file_exists(APPPATH.'views/order_mgt/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['apply_list'] = $this->get_apply_list();
		$this->load->view('common/header');
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('order_mgt/order_mgt', $data);
		$this->load->view('common/footer');
	}

	public function get_apply_list()
	{
		$this->load->model('web/Order_mgt_model');
		$res = $this->Order_mgt_model->get_apply_list();
		return $res;
	}

	public function delete_apply()
	{
		$apply_id = $this->input->get('apply_id');
		$this->load->model('web/Order_mgt_model');
		$res = $this->Order_mgt_model->delete_apply($apply_id);
		if ($res == 1) {
			return redirect('web/order_mgt');
		}
	}

	public function pass_apply()
	{
		$apply_id = $this->input->get('apply_id');
		$this->load->model('web/Order_mgt_model');
		$res = $this->Order_mgt_model->pass_apply($apply_id);
		if ($res == 1) {
			return redirect('web/order_mgt');
		}
	}

	public function unpass_apply()
	{
		$apply_id = $this->input->get('apply_id');
		$this->load->model('web/Order_mgt_model');
		$res = $this->Order_mgt_model->unpass_apply($apply_id);
		if ($res == 1) {
			return redirect('web/order_mgt');
		}
	}
}
