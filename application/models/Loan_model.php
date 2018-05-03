<?php

/**  user model for technician client user * */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /** This function used to read user for all available filters * */
    public function get_country() {

        $this->db->from(COUNTRY);
        $result = $this->db->get();
        checkForError();

        return $result->result_array();
    }

    public function get_state() {

        $this->db->from(STATE);
        $this->db->where('country_id', '231');
        $result = $this->db->get();


        return $result->result_array();
    }

    public function get_city($state_id = 0) {
//$this->db->select('id,name');
        $this->db->from(CITY);
        $this->db->where('state_id', $state_id);
        $result = $this->db->get();
        //echo $this->db->last_query();

        return $result->result_array();
    }

    public function add_loan($logData) {

        $this->db->select('lend_id');
        $this->db->from(LOANS);
        $this->db->where('email', $logData['email']);
        //$this->db->where("lastname", $logData['lastname']);
        $result = $this->db->get();
        $num = $result->num_rows();
        //echo $this->db->last_query();
        if ($num == 0) {
            $this->db->insert(LOANS, $logData);
            $id = $this->db->insert_id();
            if ($this->db->affected_rows() > 0) {
                return $id;
            }
        } else {
            return 0;
        }
    }
    public function add_refinance($logData) {

        $this->db->select('ref_id');
        $this->db->from(REFINANCE);
        $this->db->where('email', $logData['email']);
        //$this->db->where("lastname", $logData['lastname']);
        $result = $this->db->get();
        $num = $result->num_rows();
        //echo $this->db->last_query();
        if ($num == 0) {
            $this->db->insert(REFINANCE, $logData);
            $id = $this->db->insert_id();
            if ($this->db->affected_rows() > 0) {
                return $id;
            }
        } else {
            return 0;
        }
    }


    public function addvisitor($ipaddress, $page, $referrer, $datetime, $useragent, $remotehost) {

        $logData = array('ip_address' => $ipaddress, 'page' => $page, 'referrer' => $referrer, 'datetime' => $datetime, 'useragent' => $useragent, 'remotehost' => $remotehost);

        $this->db->select('id');
        $this->db->from(VISITOR);
        $this->db->where('ip_address', $ipaddress);
        $this->db->where("remotehost", $remotehost);

        $result = $this->db->get();
        $num = $result->num_rows();
        //echo $this->db->last_query();
        if ($num == 0) {
            $this->db->insert(VISITOR, $logData);
            $id = $this->db->insert_id();
            if ($this->db->affected_rows() > 0) {
                return $id;
            }
        } else {
            return 0;
        }
    }

    /** user list * */
    public function get_phone() {
        $this->db->from(DOMAIN);
        $this->db->where('domain', BASE_URL);
        $result = $this->db->get();
        return $result->result_array();
    }

}
?>

