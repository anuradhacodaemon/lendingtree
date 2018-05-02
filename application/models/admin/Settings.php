<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_settings($id = 0) {
        $this->db->from(ADMINSETTING . ' as settings');
        if ($id > 0) {
            $this->db->where('id', $id);
        }
       
        $result = $this->db->get();
        return $result->result_array();
    }

    public function get_count_settings() {
        $this->db->from(ADMINSETTING . ' as settings');
        //$this->db->order_by('settings.created_date', 'DESC');
        $result = $this->db->get();

        return $result->num_rows();
    }
    
   

    public function edit_settings($data) {
        $this->db->where('id', $data["id"]);
        $this->db->update(ADMINSETTING, $data);
        return $this->db->affected_rows();
    }

   
   

}
?>

