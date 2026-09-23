<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class City_model extends CI_Model {

    const STATUS_ACTIVE = 0;
    const STATUS_INACTIVE = 1;

    public function __construct() {
        parent::__construct();
    }

    private function _apply_active_status($alias = 'city') {
        $this->db->where($alias . '.status', self::STATUS_ACTIVE);
    }

    public function get_cities($id = 0, $limit = '', $start = 0, $filterData = array(), $sortData = array()) {
        $this->db->select('city.*, state.name as state_name, state.country_id, country.name as country_name');
        $this->db->from(CITY . ' as city');
        $this->db->join(STATE . ' as state', 'state.id = city.state_id', 'left');
        $this->db->join(COUNTRY . ' as country', 'country.id = state.country_id', 'left');
        $this->_apply_active_status('city');
        $this->db->where('state.status', self::STATUS_ACTIVE);

        if ((int) $id > 0) {
            $this->db->where('city.id', (int) $id);
        }

        if (isset($filterData['state_id']) && $filterData['state_id'] !== '') {
            $this->db->where('city.state_id', (int) $filterData['state_id']);
        }

        if (isset($filterData['country_id']) && $filterData['country_id'] !== '') {
            $this->db->where('state.country_id', (int) $filterData['country_id']);
        }

        if (isset($filterData['search']) && $filterData['search'] !== '') {
            $this->db->like('city.name', $filterData['search'], 'both');
        }

        if (!is_array($sortData) || ($sortData['sort_by'] == '' && $sortData['sort_direction'] == '')) {
            $this->db->order_by('country.name', 'asc');
            $this->db->order_by('state.name', 'asc');
            $this->db->order_by('city.name', 'asc');
        } else {
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);
        }

        if ($limit !== '' && $limit !== null && $limit !== false) {
            $this->db->limit((int) $limit, (int) $start);
        }

        $result = $this->db->get();

        return $result->result_array();
    }

    public function get_count_cities($filterData = array()) {
        $this->db->from(CITY . ' as city');
        $this->db->join(STATE . ' as state', 'state.id = city.state_id', 'left');
        $this->_apply_active_status('city');
        $this->db->where('state.status', self::STATUS_ACTIVE);

        if (isset($filterData['state_id']) && $filterData['state_id'] !== '') {
            $this->db->where('city.state_id', (int) $filterData['state_id']);
        }

        if (isset($filterData['country_id']) && $filterData['country_id'] !== '') {
            $this->db->where('state.country_id', (int) $filterData['country_id']);
        }

        if (isset($filterData['search']) && $filterData['search'] !== '') {
            $this->db->like('city.name', $filterData['search'], 'both');
        }

        return $this->db->count_all_results();
    }

    public function get_city_by_id($id = 0) {
        $id = (int) $id;
        if ($id <= 0) {
            return array();
        }

        $this->db->select('city.id, city.name, city.state_id, city.status, state.name AS state_name, state.country_id, country.name AS country_name');
        $this->db->from(CITY . ' AS city');
        $this->db->join(STATE . ' AS state', 'state.id = city.state_id', 'left');
        $this->db->join(COUNTRY . ' AS country', 'country.id = state.country_id', 'left');
        $this->db->where('city.id', $id);
        $this->_apply_active_status('city');
        $this->db->where('state.status', self::STATUS_ACTIVE);
        $this->db->limit(1);
        $result = $this->db->get();

        return $result->row_array() ? $result->row_array() : array();
    }

    public function city_name_exists($name, $state_id, $exclude_id = 0) {
        $this->db->from(CITY);
        $this->db->where('state_id', (int) $state_id);
        $this->db->where('name', trim($name));
        $this->db->where('status', self::STATUS_ACTIVE);

        if ((int) $exclude_id > 0) {
            $this->db->where('id !=', (int) $exclude_id);
        }

        return ($this->db->count_all_results() > 0);
    }

    public function state_exists($state_id = 0) {
        if ((int) $state_id <= 0) {
            return false;
        }

        $this->db->from(STATE);
        $this->db->where('id', (int) $state_id);
        $this->db->where('status', self::STATUS_ACTIVE);
        $result = $this->db->get();

        return ($result->num_rows() > 0);
    }

    public function get_states_by_country($country_id = 0) {
        $this->db->from(STATE);
        $this->db->where('country_id', (int) $country_id);
        $this->db->where('status', self::STATUS_ACTIVE);
        $this->db->order_by('name', 'asc');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function add_city($data) {
        $insertData = array(
            'state_id' => (int) $data['state_id'],
            'name' => trim($data['name']),
            'status' => self::STATUS_ACTIVE,
        );

        $this->db->insert(CITY, $insertData);

        if ($this->db->affected_rows() > 0) {
            return $this->db->insert_id();
        }

        return false;
    }

    public function update_city($id, $data) {
        $updateData = array(
            'state_id' => (int) $data['state_id'],
            'name' => trim($data['name']),
        );

        $this->db->where('id', (int) $id);
        $this->db->where('status', self::STATUS_ACTIVE);
        $this->db->update(CITY, $updateData);

        return $this->db->affected_rows();
    }

    public function delete_city($id) {
        $this->db->where('id', (int) $id);
        $this->db->where('status', self::STATUS_ACTIVE);
        $this->db->update(CITY, array('status' => self::STATUS_INACTIVE));

        return $this->db->affected_rows();
    }
}
