<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model {

    public static $table_name = 'role_info_tb';

    public function get_role() 
    {
        $query_res = $this->db->where('role_id >', 1)->get(self::$table_name);
        return $query_res->result_array();
    }

    public function get_college_option() // 返回所有学院名称及学院id
    {
        $this->db->select('college_id, college_name');
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function insert_college($college) 
    {        
        $query_res = $this->db->insert(self::$table_name, $college);
        return $query_res;
    }

    public function delete_college($college_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('college_id' => $college_id));
        return $query_res;
    }

}