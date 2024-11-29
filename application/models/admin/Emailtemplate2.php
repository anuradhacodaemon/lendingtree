<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Emailtemplate2 extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_domain($id = 0, $limit, $start, $filterData, $sortData = "") {
        $this->db->from(EMAILTEMPLATEPDF . ' as domain');
       
        $this->db->limit($limit, $start);

       
        $result = $this->db->get();
        // echo $this->db->last_query();

        return $result->result_array();
    }

    public function get_count_domain($filterData = array()) {
        $this->db->from(EMAILTEMPLATEPDF . ' as domain');
        //echo $this->db->db_last_query();
        //$this->db->order_by('domain.created_date', 'DESC');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function add_domain($data) {
        $this->db->insert(EMAILTEMPLATEPDF, $data);

        $id = $this->db->insert_id();
        if ($this->db->affected_rows() > 0) {
            return $id;
        } else {
            return false;
        }
    }

    public function edit_domain($data) {
        $this->db->where('id', $data["id"]);
        $this->db->update(EMAILTEMPLATEPDF, $data);
        return $this->db->affected_rows();
    }

    public function inactive_domain($Id) {
        $fileData['status'] = '0';
        $this->db->where('domain_id', $Id);
        $this->db->update(EMAILTEMPLATEPDF, $fileData);
        return $this->db->affected_rows();
    }

    public function active_domain($Id) {
        $fileData['status'] = '1';
        $this->db->where('domain_id', $Id);
        $this->db->update(EMAILTEMPLATEPDF, $fileData);
        return $this->db->affected_rows();
    }

   

}
?>

