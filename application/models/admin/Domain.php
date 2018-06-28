<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Domain extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_domain($id = 0, $limit, $start, $filterData, $sortData = "") {
        $this->db->from(DOMAIN . ' as domain');
        if ($id > 0) {
            $this->db->where('domain_id', $id);
        }
        $this->db->limit($limit, $start);
        //$this->db->like('domain',$_SERVER['HTTP_HOST'],'both');    
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] != 'superadmin' ) {
            $this->db->like('domain',base_url(),'both');
        }

        if (!is_array($sortData) || ($sortData['sort_by'] == "" && $sortData['sort_direction'] == ""))
            $this->db->order_by('domain.created_date', 'desc');
        else
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);

        $result = $this->db->get();
        return $result->result_array();
    }

    public function get_count_domain($filterData = array()) {
        $this->db->from(DOMAIN . ' as domain');
        //$this->db->like('domain',$_SERVER['HTTP_HOST'],'both');    
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] != 'superadmin' ) {
            $this->db->like('domain',base_url(),'both');
        }
        $this->db->order_by('domain.created_date', 'DESC');
        $result = $this->db->get();

        return $result->num_rows();
    }

    public function add_domain($data) {
        $this->db->insert(DOMAIN, $data);

        $id = $this->db->insert_id();
        if ($this->db->affected_rows() > 0) {
            return $id;
        } else {
            return false;
        }
    }

    public function edit_domain($data) {
        $this->db->where('domain_id', $data["domain_id"]);
        $this->db->update(DOMAIN, $data);
        return $this->db->affected_rows();
    }

    public function inactive_domain($Id) {
        $fileData['status'] = '0';
        $this->db->where('domain_id', $Id);
        $this->db->update(DOMAIN, $fileData);
        return $this->db->affected_rows();
    }

    public function active_domain($Id) {
        $fileData['status'] = '1';
        $this->db->where('domain_id', $Id);
        $this->db->update(DOMAIN, $fileData);
        return $this->db->affected_rows();
    }

   

}
?>

