<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class State_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_states($id = 0, $limit = '', $start = 0, $filterData = array(), $sortData = array()) {
        $this->db->select('state.*, country.name as country_name');
        $this->db->from(STATE . ' as state');
        $this->db->join(COUNTRY . ' as country', 'country.id = state.country_id', 'left');

        if ((int) $id > 0) {
            $this->db->where('state.id', (int) $id);
        }

        if (!empty($filterData['country_id'])) {
            $this->db->where('state.country_id', (int) $filterData['country_id']);
        }

        if (!empty($filterData['search'])) {
            $this->db->like('state.name', $filterData['search'], 'both');
        }

        if (!is_array($sortData) || ($sortData['sort_by'] == '' && $sortData['sort_direction'] == '')) {
            $this->db->order_by('country.name', 'asc');
            $this->db->order_by('state.name', 'asc');
        } else {
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);
        }

        if ($limit !== '' && $limit !== null && $limit !== false) {
            $this->db->limit((int) $limit, (int) $start);
        }

        $result = $this->db->get();

        return $result->result_array();
    }

    public function get_count_states($filterData = array()) {
        $this->db->from(STATE . ' as state');

        if (!empty($filterData['country_id'])) {
            $this->db->where('state.country_id', (int) $filterData['country_id']);
        }

        if (!empty($filterData['search'])) {
            $this->db->like('state.name', $filterData['search'], 'both');
        }

        return $this->db->count_all_results();
    }

    public function get_state_by_id($id = 0) {
        $id = (int) $id;
        if ($id <= 0) {
            return array();
        }

        $this->db->select('state.id, state.name, state.country_id, country.name AS country_name');
        $this->db->from(STATE . ' AS state');
        $this->db->join(COUNTRY . ' AS country', 'country.id = state.country_id', 'left');
        $this->db->where('state.id', $id);
        $this->db->limit(1);
        $result = $this->db->get();

        return $result->row_array() ? $result->row_array() : array();
    }

    public function state_name_exists($name, $country_id, $exclude_id = 0) {
        $this->db->from(STATE);
        $this->db->where('country_id', (int) $country_id);
        $this->db->where('name', trim($name));

        if ((int) $exclude_id > 0) {
            $this->db->where('id !=', (int) $exclude_id);
        }

        return ($this->db->count_all_results() > 0);
    }

    public function add_state($data) {
        $insertData = array(
            'country_id' => (int) $data['country_id'],
            'name' => trim($data['name']),
        );

        $this->db->insert(STATE, $insertData);

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        }

        return false;
    }

    public function update_state($id, $data) {
        $updateData = array(
            'country_id' => (int) $data['country_id'],
            'name' => trim($data['name']),
        );

        $this->db->where('id', (int) $id);
        $this->db->update(STATE, $updateData);

        return $this->db->affected_rows();
    }

    public function delete_state($id) {
        $this->db->where('id', (int) $id);
        $this->db->delete(STATE);

        return $this->db->affected_rows();
    }

    public function count_cities_by_state($state_id = 0) {
        $this->db->from(CITY);
        $this->db->where('state_id', (int) $state_id);

        return $this->db->count_all_results();
    }
}
