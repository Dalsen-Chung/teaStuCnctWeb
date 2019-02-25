<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public $name;
    public $account;
    public $password;
    public $college_name;
    public static $table_name = 'admin_user_tb';

    public function get_user_info($account) {
        $query = $this->db->select('*')->from(self::$table_name)
                    ->where('admin_account', $account)
                        ->get()->row_array();
        return $query;
    }
    
}