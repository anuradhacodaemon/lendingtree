<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Details extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

   

    public function get_state($state_id = 0) {

        $this->db->from(STATE);
        $this->db->where('id', $state_id);
        $result = $this->db->get();


        return $result->result_array();
    }

    public function get_city($city_id = 0) {
//$this->db->select('id,name');
        $this->db->from(CITY);
        $this->db->where('id', $city_id);
        $result = $this->db->get();
        //echo $this->db->last_query();

        return $result->result_array();
    }

   

}
?>

