<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->helper('captcha');
    }

	public function index($page = 'login')
	{
		if ( ! file_exists(APPPATH.'views/login/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		// session_destroy();	//	先销毁session
		$codeimg = $this->show_captcha();
		$this->session->codeimg = $codeimg;
		$this->load->view('login/login');
	}

	public function show_captcha() 
	{
        $vals = array(
            'word'      => '',
            'img_path'  => './public/common/captcha/',
            'img_url'   => base_url().'public/common/captcha/',
            'img_width' => '100',
            'img_height'    => 30,
            'expiration'    => 7200,
            'word_length'   => 5,
            'font_size' => 16,
            'img_id'    => 'verifycode',
            'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        
            // White background and border, black text and red grid
            'colors'    => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );
		$cap = create_captcha($vals);
		$this->session->verifyCode = $cap['word'];
        return $cap['image'];
	}

	public function do () //	处理登录
	{
		$this->load->model('web/login_model');
		$account = $this->input->post('account');
		$password = $this->input->post('password');
		$verify_code = strtolower($this->input->post('verify_code'));
		if ($verify_code !== strtolower($this->session->verifyCode)) { // 判断验证码
			$this->redirect_to_login('验证码错误');
		} else {
			$user_info = $this->login_model->get_user_info($account);
			if (isset($user_info)) {	// 数组不存在则账号不存在
				$md5_pass = md5($password);
				if ($md5_pass != $user_info['admin_password']) {	//	判断密码是否一样
					$this->redirect_to_login('密码错误');
				} else {
					$this-> redirect_to_order_mgt($user_info);
				}
			} else {
				$this->redirect_to_login('账号不存在');
			}
		}
	}

	public function redirect_to_login($alert) {
		$codeimg = $this->show_captcha();
		$this->session->codeimg = $codeimg;
		$this->session->login_error = $alert;
		return redirect('web/login');
	}

	public function redirect_to_order_mgt($user_info) {
		$this->session->login_error = '';
		$this->session->admin_name = $user_info['admin_name'];
		$this->session->account = $user_info['admin_account'];
		$this->session->college_id = $user_info['college_id'];
		$this->session->major_id = $user_info['major_id'];
		$this->session->is_login = true;
		return redirect('web/order_mgt');
	}
}
