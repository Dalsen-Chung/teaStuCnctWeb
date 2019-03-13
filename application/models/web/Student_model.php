<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {

    public static $table_name = 'stu_user_tb';

    public function get_student() 
    {
        $this->db->select('*');
        $this->db->join('college_info_tb','college_info_tb.college_id = stu_user_tb.college_id');
        $this->db->join('major_info_tb','major_info_tb.major_id = stu_user_tb.major_id');
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function insert_student($student) 
    {
        $query_res = $this->db->insert(self::$table_name, $student);
        return $query_res;
    }

    public function delete_student($student_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('stu_id' => $student_id));
        return $query_res;
    }

}