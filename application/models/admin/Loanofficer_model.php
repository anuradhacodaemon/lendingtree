<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loanofficer_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_loanofficer() {
        $this->db->where('status', 1);
        $query = $this->db->get('lend_loanofficer');
	return $query->result_array();
    }
    
    public function add_loanofficer($data)
    {
        $this->db->insert('lend_loanofficer', $data); 

        if ($this->db->affected_rows() > 0)
        {
            return TRUE;
        }

        return FALSE;
    }
    
    public function get_officerdata($id) {
        $this->db->where('status', 1);
        $this->db->where('id', $id);
        $query = $this->db->get('lend_loanofficer');
	return $query->result_array();
    }

    public function edit_domain($data) {
        $this->db->where('id', $data["id"]);
        $this->db->update('lend_loanofficer', $data);
        return $this->db->affected_rows();
    }
    
    public function updateactiveStatus($id) {
        $userData['status'] = '0';
        $this->db->where("id", $id);
        $this->db->update('lend_loanofficer', $userData);

        return $this->db->affected_rows();
    }
}