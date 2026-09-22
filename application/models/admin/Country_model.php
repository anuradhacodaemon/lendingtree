<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Country_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_countries() {
        $this->db->from(COUNTRY);
        $this->db->order_by('name', 'asc');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function country_exists($country_id = 0) {
        if ((int) $country_id <= 0) {
            return false;
        }

        $this->db->from(COUNTRY);
        $this->db->where('id', (int) $country_id);
        $result = $this->db->get();

        return ($result->num_rows() > 0);
    }

    public function get_country_by_id($country_id = 0) {
        $this->db->from(COUNTRY);
        $this->db->where('id', (int) $country_id);
        $result = $this->db->get();

        return $result->row_array();
    }
}
