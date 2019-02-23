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
		$imgsrc = $this->show_captcha();
		$this->load->view('login/login', array('codeimg' => $imgsrc));
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

	public function do () 
	{
		$account = $this->input->post('account');
		$password = $this->input->post('password');
		$verify_code = $this->input->post('verify_code');
		echo $account.'-'.md5($password).'-'.$verify_code;
	}
}
