<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edu_branch_model extends CI_Model {

    public static $table_name = 'edu_branch_info_tb';

    public function get_edu_branch() 
    {
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }
}