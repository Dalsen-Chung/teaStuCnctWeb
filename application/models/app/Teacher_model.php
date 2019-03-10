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

    public function get_tea_by_college_major($college_id, $major_id) {
        if ($major_id === '') {
            $query = $this->db->select('tea_id,tea_spell,tea_name,role_id')->from(self::$table_name)
            ->where('college_id', $college_id)->order_by('tea_spell', 'ASC')->get()->result_array();
        } else {
            $query = $this->db->select('tea_id,tea_spell,tea_name,role_id')->from(self::$table_name)
            ->where('college_id', $college_id)->where('major_id', $major_id)
            ->order_by('tea_spell', 'ASC')->get()->result_array();
        }
        return $query;
    }
    
    public function get_tea_by_id($tea_id)  {
        $query = $this->db->select('*')->from(self::$table_name)
                    ->where('tea_id', $tea_id)
                        ->get()->row_array();
        return $query;
    }
}