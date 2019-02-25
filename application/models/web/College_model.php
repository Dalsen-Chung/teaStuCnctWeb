<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College_model extends CI_Model {

    public static $table_name = 'college_info_tb';

    public function get_user_info($account) 
    {
        $query = $this->db->select('*')->from(self::$table_name)
                    ->where('admin_account', $account)
                        ->get()->row_array();
        return $query;
    }

    public function get_college() {
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function insert_college($college) 
    {        
        $query_res = $this->db->insert(self::$table_name, $college);
        return $query_res;
    }

}