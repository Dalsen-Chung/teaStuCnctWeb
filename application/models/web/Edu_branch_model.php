<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edu_branch_model extends CI_Model {

    public static $table_name = 'edu_branch_info_tb';

    public function get_edu_branch() 
    {
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function insert_edu_branch($edu_branch) 
    {        
        $query_res = $this->db->insert(self::$table_name, $edu_branch);
        return $query_res;
    }

    public function delete_edu_branch($edu_branch_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('edu_branch_id' => $edu_branch_id));
        return $query_res;
    }

}