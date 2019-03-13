<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice_model extends CI_Model {

    public static $table_name = 'notice_tb';

    public function get_all_notice() 
    {
        $this->db->select('*');
        $this->db->join('college_info_tb','college_info_tb.college_id = notice_tb.college_id');
        $this->db->join('major_info_tb','major_info_tb.major_id = notice_tb.major_id');
        $this->db->join('tea_user_tb','tea_user_tb.tea_id = notice_tb.notice_tea_id');
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function get_unreview_notice() 
    {
        $this->db->select('*');
        $this->db->join('college_info_tb','college_info_tb.college_id = notice_tb.college_id');
        $this->db->join('major_info_tb','major_info_tb.major_id = notice_tb.major_id');
        $this->db->join('tea_user_tb','tea_user_tb.tea_id = notice_tb.notice_tea_id');
        $this->db->where('notice_pass_review', 0);
        $query_res = $this->db->get(self::$table_name);
        return $query_res->result_array();
    }

    public function delete_notice($notice_id) 
    {
        $query_res = $this->db->delete(self::$table_name, array('notice_id' => $notice_id));
        return $query_res;
    }

    public function pass_notice($notice_id)
    {
        $this->db->set('notice_pass_review', 1);
        $this->db->where('notice_id', $notice_id);
        $query_res = $this->db->update(self::$table_name);
        return $query_res;
    }

    public function unpass_notice($notice_id)
    {
        $this->db->set('notice_pass_review', 2);
        $this->db->where('notice_id', $notice_id);
        $query_res = $this->db->update(self::$table_name);
        return $query_res;
    }

}