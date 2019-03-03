<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    public static $table_name = 'stu_user_tb';

    public function get_student_info($account) {
        $query = $this->db->select('*')->from(self::$table_name)
                    ->where('stu_account', $account)
                        ->get()->row_array();
        return $query;
    }
    
}