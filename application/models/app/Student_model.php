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

    public function get_stu_by_college_major($college_id, $major_id) {
        $query = $this->db->select('stu_id,stu_spell,stu_name')->from(self::$table_name)
                    ->where('college_id', $college_id)->where('major_id', $major_id)
                    ->order_by('stu_spell', 'ASC')->get()->result_array();
        return $query;
    }
    
}