<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_model extends CI_Model {

    public static $table_name = 'tea_user_tb';

    public function get_teacher_info($account) {
        $query = $this->db->select('*')->from(self::$table_name)
                    ->where('tea_account', $account)
                        ->get()->row_array();
        return $query;
    }
    
}