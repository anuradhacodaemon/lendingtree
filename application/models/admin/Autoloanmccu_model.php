<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autoloanmccu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($id = 0, $limit, $start, $filterData, $sortData = "") 
    {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        if (!empty($filterData['firstname'])) {
            $this->db->like('user.first_name', $filterData['firstname'], 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.last_name', $filterData['lastname'], 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.p_email', $filterData['email']);
        }
        

        if (!empty($filterData['vin'])) {
            $this->db->where('user.vin', $filterData['vin']);
        }
        if (!empty($filterData['currently_owe1']) && empty($filterData['currently_owe2'])) {
            if (!empty($filterData['currently_owe1']) && !empty($filterData['currently_owe2']))
                $this->db->group_start();
            $this->db->where('user.currently_owe <=', $filterData['currently_owe1']);
        }
        if (!empty($filterData['currently_owe2']) && empty($filterData['currently_owe1'])) {
            $this->db->where('user.currently_owe >=', $filterData['currently_owe2']);
            if (!empty($filterData['currently_owe1']) && !empty($filterData['currently_owe2']))
                $this->db->group_end();
        }
        if (!empty($filterData['currently_owe1']) && !empty($filterData['currently_owe2'])) {

            $this->db->group_start();
            $this->db->where('currently_owe BETWEEN ' . $filterData['currently_owe1'] . ' and ' . $filterData['currently_owe2'] . '');
            $this->db->group_end();
        }
        if (!empty($filterData['current_milage1']) && empty($filterData['current_milage2'])) {
            if (!empty($filterData['current_milage1']) && !empty($filterData['current_milage2']))
                $this->db->group_start();
            $this->db->where('user.current_milage <=', $filterData['current_milage1']);
        }
        if (!empty($filterData['current_milage2']) && empty($filterData['current_milage1'])) {
            $this->db->where('user.current_milage >=', $filterData['current_milage2']);
            if (!empty($filterData['current_milage1']) && !empty($filterData['current_milage2']))
                $this->db->group_end();
        }
        if (!empty($filterData['current_milage1']) && !empty($filterData['current_milage2'])) {

            $this->db->group_start();
            $this->db->where('current_milage BETWEEN ' . $filterData['current_milage1'] . ' and ' . $filterData['current_milage2'] . '');
            $this->db->group_end();
        }

        if (!empty($filterData['monthly_payment1']) && empty($filterData['monthly_payment2'])) {
            if (!empty($filterData['monthly_payment1']) && !empty($filterData['monthly_payment2']))
                $this->db->group_start();
            $this->db->where('user.monthly_payment <=', $filterData['monthly_payment1']);
        }
        if (!empty($filterData['monthly_payment2']) && empty($filterData['monthly_payment1'])) {
            $this->db->where('user.monthly_payment >=', $filterData['monthly_payment2']);
            if (!empty($filterData['monthly_payment1']) && !empty($filterData['monthly_payment2']))
                $this->db->group_end();
        }
        if (!empty($filterData['monthly_payment1']) && !empty($filterData['monthly_payment2'])) {

            $this->db->group_start();
            $this->db->where('monthly_payment BETWEEN ' . $filterData['monthly_payment1'] . ' and ' . $filterData['monthly_payment2'] . '');
            $this->db->group_end();
        }

        if (!empty($filterData['search'])) {
            $this->db->group_start();
            $this->db->like('user.email', $filterData['search'], 'both');
            $this->db->or_like('user.first_name', $filterData['search'], 'both');
            $this->db->or_like('user.p_phone', $filterData['search'], 'both');
            //$this->db->or_like('user.business_phone', $filterData['search'], 'both');
            $this->db->or_like('user.last_name', $filterData['search'], 'both');
            $this->db->group_end();
        }


        $this->db->select('*,user.date_of_application as date');
        $this->db->from(AUTO_MMCU_LOAN . ' as user');
        $this->db->where('active_status', 1);
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
                $this->db->like('user.domain', $filterData['domain'], 'both');
        }
        else
        {
            //$this->db->like('user.domain', $domain,'both');
        }
        if (!is_array($sortData) || ($sortData['sort_by'] == "" && $sortData['sort_direction'] == ""))
            $this->db->order_by('user.date_of_application', 'desc');
        else
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);
        $this->db->limit($limit, $start);

        $result = $this->db->get();
        //echo $this->db->last_query();exit;

        return $result->result_array();

    }
    public function get_count_user($filterData = array()) {

        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        if (!empty($filterData['firstname'])) {
            $this->db->like('user.first_name', $filterData['firstname'], 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.last_name', $filterData['lastname'], 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.p_email', $filterData['email']);
        }
       
        

        if (!empty($filterData['vin'])) {
            $this->db->where('user.vin', $filterData['vin']);
        }

        if (!empty($filterData['currently_owe1']) && empty($filterData['currently_owe2'])) {
            if (!empty($filterData['currently_owe1']) && !empty($filterData['currently_owe2']))
                $this->db->group_start();
            $this->db->where('user.currently_owe <=', $filterData['currently_owe1']);
        }
        if (!empty($filterData['currently_owe2']) && empty($filterData['currently_owe1'])) {
            $this->db->where('user.currently_owe >=', $filterData['currently_owe2']);
            if (!empty($filterData['currently_owe1']) && !empty($filterData['currently_owe2']))
                $this->db->group_end();
        }
        if (!empty($filterData['currently_owe1']) && !empty($filterData['currently_owe2'])) {

            $this->db->group_start();
            $this->db->where('currently_owe BETWEEN ' . $filterData['currently_owe1'] . ' and ' . $filterData['currently_owe2'] . '');
            $this->db->group_end();
        }
        if (!empty($filterData['current_milage1']) && empty($filterData['current_milage2'])) {
            if (!empty($filterData['current_milage1']) && !empty($filterData['current_milage2']))
                $this->db->group_start();
            $this->db->where('user.current_milage <=', $filterData['current_milage1']);
        }
        if (!empty($filterData['current_milage2']) && empty($filterData['current_milage1'])) {
            $this->db->where('user.current_milage >=', $filterData['current_milage2']);
            if (!empty($filterData['current_milage1']) && !empty($filterData['current_milage2']))
                $this->db->group_end();
        }
        if (!empty($filterData['current_milage1']) && !empty($filterData['current_milage2'])) {

            $this->db->group_start();
            $this->db->where('current_milage BETWEEN ' . $filterData['current_milage1'] . ' and ' . $filterData['current_milage2'] . '');
            $this->db->group_end();
        }

        if (!empty($filterData['monthly_payment1']) && empty($filterData['monthly_payment2'])) {
            if (!empty($filterData['monthly_payment1']) && !empty($filterData['monthly_payment2']))
                $this->db->group_start();
            $this->db->where('user.monthly_payment <=', $filterData['monthly_payment1']);
        }
        if (!empty($filterData['monthly_payment2']) && empty($filterData['monthly_payment1'])) {
            $this->db->where('user.monthly_payment >=', $filterData['monthly_payment2']);
            if (!empty($filterData['monthly_payment1']) && !empty($filterData['monthly_payment2']))
                $this->db->group_end();
        }
        if (!empty($filterData['monthly_payment1']) && !empty($filterData['monthly_payment2'])) {

            $this->db->group_start();
            $this->db->where('monthly_payment BETWEEN ' . $filterData['monthly_payment1'] . ' and ' . $filterData['monthly_payment2'] . '');
            $this->db->group_end();
        }


        if (!empty($filterData['search'])) {
            $this->db->group_start();
            $this->db->like('user.email', $filterData['search'], 'both');
            $this->db->or_like('user.first_name', $filterData['search'], 'both');
            $this->db->or_like('user.personal_phone', $filterData['search'], 'both');
            $this->db->or_like('user.business_phone', $filterData['search'], 'both');
            $this->db->or_like('user.last_name', $filterData['search'], 'both');
            $this->db->group_end();
        }

        $this->db->where('active_status', 1);
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
                $this->db->like('user.domain', $filterData['domain'], 'both');
        }
        else
        {
            //$this->db->like('user.domain', $domain,'both');
        }
        $this->db->from(AUTO_MMCU_LOAN . ' as user');

        $result = $this->db->get();
        //echo $this->db->last_query();
        return $result->num_rows();
    }
    //
    public function checklead_approved_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(ref_id) as numLead');
        $this->db->where("status", '1');
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
               $this->db->like('domain', $filterData['domain'], 'both');     
        }
        else
        {
            //$this->db->like('domain', $domain, 'both');
        }
        $this->db->where('active_status', 1);
        $this->db->from(AUTO_MMCU_LOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    //
    public function checklead_pending_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(ref_id) as numLead');
        $this->db->where("status", '2');
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
               $this->db->like('domain', $filterData['domain'], 'both');     
        }
        else
        {
            $this->db->like('domain', $domain, 'both');
        }
        $this->db->where('active_status', 1);
        $this->db->from(AUTO_MMCU_LOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    //
    public function checklead_denied_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(ref_id) as numLead');
        $this->db->where("status", '0');
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
               $this->db->like('domain', $filterData['domain'], 'both');     
        }
        else
        {
            $this->db->like('domain', $domain, 'both');
        }
        $this->db->where('active_status', 1);
        $this->db->from(AUTO_MMCU_LOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    



    //============================================END OF FILE===========================================
}