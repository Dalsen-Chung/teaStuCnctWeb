<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_model extends CI_Model {

    public static $table_name = 'notice_tb';

    public function save_notice($notice) 
    {        
        $query_res = $this->db->insert(self::$table_name, $notice);
        return $query_res;
    }

    public function get_notice() 
    {        
        $query = $this->db->select('*')->from(self::$table_name)
                    ->where('notice_pass_review', 1)->order_by('notice_time', 'DESC')
                        ->get()->result_array();
        return $query;
    }

    public function get_notice_by_id($notice_id) 
    {        
        $query = $this->db->select('*')->from(self::$table_name)
                ->join('tea_user_tb','notice_tb.notice_tea_id = tea_user_tb.tea_id')
                ->where('notice_id', $notice_id)->get()->row_array();
        return $query;
    }

    public function add_read_num($notice_id)
    {
        $this->db->set('notice_read_times', 'notice_read_times+1', FALSE);
        $this->db->where('notice_id', $notice_id);
        $this->db->update(self::$table_name);
    }

    public function delete_major($major_id) 
    {        
        $query_res = $this->db->delete(self::$table_name, array('major_id' => $major_id));
        return $query_res;
    }

}