<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_model extends CI_Model {

    public static $table_name = 'notice_tb';

    public function save_notice($notice) 
    {        
        $query_res = $this->db->insert(self::$table_name, $notice);
        return $query_res;
    }

    public function delete_major($major_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('major_id' => $major_id));
        return $query_res;
    }

}