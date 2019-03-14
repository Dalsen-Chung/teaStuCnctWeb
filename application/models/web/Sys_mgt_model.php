<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sys_mgt_model extends CI_Model {

    public static $table_name = 'admin_user_tb';

    public function get_base_info($admin_id) 
    {
        $this->db->select('*');
        $this->db->join('college_info_tb','college_info_tb.college_id = admin_user_tb.college_id');
        $this->db->join('major_info_tb','major_info_tb.major_id = admin_user_tb.major_id');
        $this->db->where('admin_id', $admin_id);
        $query_res = $this->db->get(self::$table_name);
        return $query_res->row_array();
    }

    public function update_password($admin_id,$password)
    {
        $this->db->set('admin_password', $password);
        $this->db->where('admin_id', $admin_id);
        $query_res = $this->db->update(self::$table_name);
        return $query_res;
    }

}