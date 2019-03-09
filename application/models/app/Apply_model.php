<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_model extends CI_Model {

    public static $table_name = 'apply_record_tb';

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