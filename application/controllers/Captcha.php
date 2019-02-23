<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller {

	public function generate_code () 
	{
        $this->load->helper('captcha');
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
        echo $cap['image'];
	}
}
