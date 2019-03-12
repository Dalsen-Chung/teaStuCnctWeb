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
        if($major_id==='') {
            $query = $this->db->select('stu_id,stu_spell,stu_name,role_id')->from(self::$table_name)
            ->where('college_id', $college_id)->order_by('stu_spell', 'ASC')->get()->result_array();
        } else {
            $query = $this->db->select('stu_id,stu_spell,stu_name,role_id')->from(self::$table_name)
            ->where('college_id', $college_id)->where('major_id', $major_id)
            ->order_by('stu_spell', 'ASC')->get()->result_array();
        }
        return $query;
    }

    public function get_stu_by_id($stu_id)  {
        $query = $this->db->select('*')->from(self::$table_name)
                ->join('college_info_tb','college_info_tb.college_id = stu_user_tb.college_id')
                ->join('major_info_tb','major_info_tb.major_id = stu_user_tb.major_id')
                ->where('stu_id', $stu_id)->get()->row_array();
        return $query;
    }
    
    public function update_stu_info($stu_id,$stu_phone,$stu_password) {
        $data = array(
            'stu_password' => $stu_password,
            'stu_phone' => $stu_phone
        );
        $this->db->where('stu_id', $stu_id);
        $query = $this->db->update(self::$table_name, $data);
        return $query;
    }
}