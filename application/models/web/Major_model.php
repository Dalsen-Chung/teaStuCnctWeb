<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major_model extends CI_Model {

    public static $table_name = 'major_info_tb';

    public function get_major() 
    {
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function get_major_option() // 返回所有学院名称及学院id
    {
        $this->db->select('major_id, major_name');
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function insert_major($major) 
    {        
        $query_res = $this->db->insert(self::$table_name, $major);
        return $query_res;
    }

    public function delete_major($major_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('major_id' => $major_id));
        return $query_res;
    }

}