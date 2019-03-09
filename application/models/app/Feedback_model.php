<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model {

    public static $table_name = 'feedback_tb';

    public function save_feedback($feedback) 
    {        
        $query_res = $this->db->insert(self::$table_name, $feedback);
        return $query_res;
    }

    public function delete_feedback($fedb_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('fedb_id' => $fedb_id));
        return $query_res;
    }

}