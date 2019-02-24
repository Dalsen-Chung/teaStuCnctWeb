<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index($page = 'login')
	{
        if ($this->session->is_login) {
            $this->session->sess_destroy();
            return redirect('web/login');
        }
	}
}
