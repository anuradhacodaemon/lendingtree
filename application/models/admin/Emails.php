<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Emails extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_emails($id = 0, $limit, $start, $filterData, $sortData = "") {
        $this->db->from(EMAILS . ' as emails');
        if ($id > 0) {
            $this->db->where('emails_id', $id);
        }
        $this->db->limit($limit, $start);

        if (!is_array($sortData) || ($sortData['sort_by'] == "" && $sortData['sort_direction'] == ""))
            $this->db->order_by('emails.created_date', 'desc');
        else
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);

        $result = $this->db->get();
        return $result->result_array();
    }

    public function get_count_emails($filterData = array()) {
        $this->db->from(EMAILS . ' as emails');
        $this->db->order_by('emails.created_date', 'DESC');
        $result = $this->db->get();

        return $result->num_rows();
    }
    
    public function get_domains($id=0) {
        $this->db->from(DOMAIN);
       if ($id > 0) {
            $this->db->where('domain_id', $id);
        }
        $result = $this->db->get();

        return $result->result_array();
    }

    public function add_emails($data) {
        $this->db->insert(EMAILS, $data);

        $id = $this->db->insert_id();
        if ($this->db->affected_rows() > 0) {
            return $id;
        } else {
            return false;
        }
    }

    public function edit_emails($data) {
        $this->db->where('emails_id', $data["emails_id"]);
        $this->db->update(EMAILS, $data);
        return $this->db->affected_rows();
    }

    public function inactive_emails($Id) {
        $fileData['status'] = '0';
        $this->db->where('emails_id', $Id);
        $this->db->update(EMAILS, $fileData);
        return $this->db->affected_rows();
    }

    public function active_emails($Id) {
        $fileData['status'] = '1';
        $this->db->where('emails_id', $Id);
        $this->db->update(EMAILS, $fileData);
        return $this->db->affected_rows();
    }

   

}
?>

