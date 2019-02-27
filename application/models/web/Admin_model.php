<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public static $table_name = 'admin_user_tb';

    public function get_admin() 
    {
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function insert_admin($admin) 
    {
        $query_res = $this->db->insert(self::$table_name, $admin);
        return $query_res;
    }

    public function delete_admin($admin_id) 
    {
        $query_res = $this->db->delete(self::$table_name, array('admin_id' => $admin_id));
        return $query_res;
    }

}