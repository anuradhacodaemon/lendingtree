<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Autoloanmccu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    //
    public function get_user($id = 0, $limit, $start, $filterData, $sortData = "") {

        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        if (!empty($filterData['firstname'])) {
            $this->db->like('user.first_name', urldecode($filterData['firstname']), 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.last_name', urldecode($filterData['lastname']), 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.p_email', urldecode($filterData['email']));
        }
        if (!empty($filterData['type'])) {
            $this->db->where('user.loan_type', urldecode($filterData['type']));
        }
        if (!empty($filterData['requested_amount'])) {
            $this->db->where('user.requested_amount', urldecode($filterData['requested_amount']));
        }

        if (!empty($filterData['job_title'])) {
            $this->db->where('user.job_title', urldecode($filterData['job_title']));
        }
        if (!empty($filterData['pre_tax_income1']) && empty($filterData['pre_tax_income2'])) {
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
                $this->db->group_start();
            $this->db->where('user.employment_monthly_income <=', $filterData['pre_tax_income1']);
        }
        if (!empty($filterData['pre_tax_income2']) && empty($filterData['pre_tax_income1'])) {
            $this->db->where('user.employment_monthly_income >=', $filterData['pre_tax_income2']);
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
                $this->db->group_end();
        }
        if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2'])) {

            $this->db->group_start();
            $this->db->where('employment_monthly_income BETWEEN ' . $filterData['pre_tax_income2'] . ' and ' . $filterData['pre_tax_income1'] . '');
            $this->db->group_end();
        }
        if (!empty($filterData['search'])) {
            $this->db->group_start();
            $this->db->like('user.p_email', $filterData['search'], 'both');
            $this->db->or_like('user.first_name', $filterData['search'], 'both');
            $this->db->or_like('user.personal_phone', $filterData['search'], 'both');
            $this->db->or_like('user.business_phone', $filterData['search'], 'both');
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
            $this->db->like('user.domain', $domain, 'both');
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
            $this->db->like('user.first_name', urldecode($filterData['firstname']), 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.last_name', urldecode($filterData['lastname']), 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.p_email', urldecode($filterData['email']));
        }
        if (!empty($filterData['type'])) {
            $this->db->where('user.loan_type', urldecode($filterData['type']));
        }
        if (!empty($filterData['requested_amount'])) {
            $this->db->where('user.requested_amount', urldecode($filterData['requested_amount']));
        }

        if (!empty($filterData['job_title'])) {
            $this->db->where('user.job_title', urldecode($filterData['job_title']));
        }

        if (!empty($filterData['pre_tax_income1']) && empty($filterData['pre_tax_income2'])) {
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
                $this->db->group_start();
            $this->db->where('user.employment_monthly_income <=', urldecode($filterData['pre_tax_income1']));
        }
        if (!empty($filterData['pre_tax_income2']) && empty($filterData['pre_tax_income1'])) {
            $this->db->where('user.employment_monthly_income >=', urldecode($filterData['pre_tax_income2']));
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
                $this->db->group_end();
        }
        if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2'])) {

            $this->db->group_start();
            $this->db->where('employment_monthly_income BETWEEN ' . urldecode($filterData['pre_tax_income2']) . ' and ' . urldecode($filterData['pre_tax_income1']) . '');
            $this->db->group_end();
        }
        if (!empty($filterData['search'])) {
            $this->db->group_start();
            $this->db->like('user.p_email', $filterData['search'], 'both');
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
            $this->db->like('user.domain', $domain, 'both');
        }
        $this->db->from(AUTO_MMCU_LOAN . ' as user');

        $result = $this->db->get();
        //echo $this->db->last_query();exit;
        return $result->num_rows();
    }
    //
    public function checklead_approved_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(lend_id) as numLead');
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
            $this->db->like('domain', $domain, 'both');
        }
        $this->db->where('active_status', 1);
        $this->db->from(AUTO_MMCU_LOAN);
        $result = $this->db->get();
        //echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    //
    public function checklead_pending_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(lend_id) as numLead');
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
        
        $this->db->select('count(lend_id) as numLead');
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
    //
    public function get_userdetails($shopId = 0) {
        $this->db->select('shop.*');
        $this->db->from(AUTO_MMCU_LOAN . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.lend_id', $shopId);
        $result = $this->db->get();
        return $result->row_array();
    }
    //
    public function get_userall() {

        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        //$filter = 'user.first_name,user.last_name,user.p_phone,user.p_email,user.loan_type,user.requested_amount,user.current_employer,user.pre_tax_income,user.job_title,user.domain,user.address,s.name as state,c.name as city,user.zip,user.ssn';
        $filter = 'user.first_name,user.last_name,user.p_phone,user.p_email,user.loan_type,user.requested_amount,user.current_employer,user.pre_tax_income,user.job_title,user.domain,user.p_address';
        //print_r($this->session->userdata['export']);
        if (!empty($this->session->userdata['export'])) {


            if (!empty($filterData['email'])) {
                $this->db->where('user.p_email', $filterData['email']);
            }
            if (!empty($filterData['type'])) {
                $this->db->where('user.type', $filterData['type']);
                // $filter .= 'user.type,';
            }
            if (!empty($filterData['requested_amount'])) {
                $this->db->where('user.requested_amount', $filterData['requested_amount']);
                //$filter .= 'user.requested_amount,';
            }
            if (!empty($filterData['pre_tax_income1']) && empty($filterData['pre_tax_income2'])) {
                if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
                    $this->db->group_start();
                $this->db->where('user.pre_tax_income <=', $filterData['pre_tax_income1']);
            }
            if (!empty($filterData['pre_tax_income2']) && empty($filterData['pre_tax_income1'])) {
                $this->db->where('user.pre_tax_income >=', $filterData['pre_tax_income2']);
                if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
                    $this->db->group_end();
            }
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2'])) {

                $this->db->group_start();
                $this->db->where('pre_tax_income BETWEEN ' . $filterData['pre_tax_income2'] . ' and ' . $filterData['pre_tax_income1'] . '');
                $this->db->group_end();
            }

            if (!empty($filterData['job_title'])) {
                $this->db->where('user.job_title', $filterData['job_title']);
                // $filter .= 'user.job_title,';
            }

        } else {
            //$filter .= 'user.type,user.requested_amount,user.pre_tax_income,user.job_title,user.domain,';
        }
        //$filter = substr($filter, 0, -1);

        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
                $this->db->like('user.domain', $filterData['domain'], 'both');
        }
        else
        {
            $this->db->like('user.domain', $domain, 'both');
        }

        $this->db->select('*');

        $this->db->from(AUTO_MMCU_LOAN . ' as user');
        $this->db->order_by('user.updated_at', 'desc');
        $result = $this->db->get();
        //echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    //
    public function updateactiveStatus($lendid) {
        $userData['active_status'] = '0';
        $this->db->where("lend_id", $lendid);
        $this->db->update(AUTO_MMCU_LOAN, $userData);
        return $this->db->affected_rows();
    }
    //
    public function updateStatus($lendid, $status) {
        $userData['status'] = $status;
        $this->db->where("lend_id", $lendid);
        $this->db->update(AUTO_MMCU_LOAN, $userData);
        return $this->db->affected_rows();
    }




    //============================================END OF FILE===========================================
}