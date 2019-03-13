<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_model extends CI_Model {

    public static $table_name = 'tea_user_tb';

    public function get_teacher() 
    {
        $this->db->select('*');
        $this->db->join('college_info_tb','college_info_tb.college_id = tea_user_tb.college_id');
        $this->db->join('major_info_tb','major_info_tb.major_id = tea_user_tb.major_id');
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function insert_teacher($teacher) 
    {
        $query_res = $this->db->insert(self::$table_name, $teacher);
        return $query_res;
    }

    public function delete_teacher($teacher_id) 
    {
        $query_res = $this->db->delete(self::$table_name, array('tea_id' => $teacher_id));
        return $query_res;
    }

}