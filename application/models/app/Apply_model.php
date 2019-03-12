<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_model extends CI_Model {

    public static $table_name = 'apply_record_tb';

    public function get_apply($apply_user_id,$apply_user_type)
    {
        $query = $this->db->select('*')->from(self::$table_name)
                    ->join('role_info_tb', 'role_info_tb.role_id = apply_record_tb.check_user_type')
                    ->where('apply_user_id', $apply_user_id)->where('apply_user_type', $apply_user_type)
                    ->order_by('apply_time', 'DESC')->get()->result_array();
        return $query;
    }

    public function save_apply($apply) 
    {        
        $query_res = $this->db->insert(self::$table_name, $apply);
        return $query_res;
    }

    public function delete_apply($apply_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('apply_id' => $apply_id));
        return $query_res;
    }

}