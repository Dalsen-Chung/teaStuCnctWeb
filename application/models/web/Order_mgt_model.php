<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_mgt_model extends CI_Model {

    public static $table_name = 'apply_record_tb';

    public function get_apply_list() 
    {
        $this->db->order_by('apply_time', 'DESC');
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function delete_apply($apply_id) 
    {
        $query_res = $this->db->delete(self::$table_name, array('apply_id' => $apply_id));
        return $query_res;
    }

    public function pass_apply($apply_id)
    {
        $this->db->set('apply_result', 1);
        $this->db->where('apply_id', $apply_id);
        $query_res = $this->db->update(self::$table_name);
        return $query_res;
    }

    public function unpass_apply($apply_id)
    {
        $this->db->set('apply_result', 2);
        $this->db->where('apply_id', $apply_id);
        $query_res = $this->db->update(self::$table_name);
        return $query_res;
    }

}