<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Refinance extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($id = 0, $limit, $start, $filterData, $sortData = "") {

        $domain = 'http://' . $_SERVER['SERVER_NAME'];
        
        if (!empty($filterData['firstname'])) {
            $this->db->like('user.firstname', $filterData['firstname'], 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.lastname', $filterData['lastname'], 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.email', $filterData['email']);
        }
        

        if (!empty($filterData['vin'])) {
            $this->db->where('user.vin', $filterData['vin']);
        }

//        if (!empty($filterData['domain'])) {
//            $this->db->like('user.domain', $filterData['domain'], 'both');
//        }
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
            $this->db->or_like('user.firstname', $filterData['search'], 'both');
            $this->db->or_like('user.personal_phone', $filterData['search'], 'both');
            $this->db->or_like('user.business_phone', $filterData['search'], 'both');
            $this->db->or_like('user.lastname', $filterData['search'], 'both');
            $this->db->group_end();
        }


        $this->db->select('*,user.add_date as date');
        $this->db->from(REFINANCE . ' as user');
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
            $this->db->like('user.domain', $domain,'both');
        }
        if (!is_array($sortData) || ($sortData['sort_by'] == "" && $sortData['sort_direction'] == ""))
            $this->db->order_by('user.add_date', 'desc');
        else
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);
        $this->db->limit($limit, $start);

        $result = $this->db->get();
        //echo $this->db->last_query();

        return $result->result_array();
    }

    public function get_count_user($filterData = array()) {

        $domain = 'http://' . $_SERVER['SERVER_NAME'];
        
        if (!empty($filterData['firstname'])) {
            $this->db->like('user.firstname', $filterData['firstname'], 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.lastname', $filterData['lastname'], 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.email', $filterData['email']);
        }
       
        

        if (!empty($filterData['vin'])) {
            $this->db->where('user.vin', $filterData['vin']);
        }

//        if (!empty($filterData['domain'])) {
//            $this->db->like('user.domain', $filterData['domain'], 'both');
//        }
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
            $this->db->or_like('user.firstname', $filterData['search'], 'both');
            $this->db->or_like('user.personal_phone', $filterData['search'], 'both');
            $this->db->or_like('user.business_phone', $filterData['search'], 'both');
            $this->db->or_like('user.lastname', $filterData['search'], 'both');
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
            $this->db->like('user.domain', $domain,'both');
        }
        $this->db->from(REFINANCE . ' as user');

        $result = $this->db->get();
        //echo $this->db->last_query();
        return $result->num_rows();
    }

    public function get_userdetails($shopId = 0) {
        $this->db->select('shop.*');

        $this->db->from(REFINANCE . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.ref_id', $shopId);

        $result = $this->db->get();

        return $result->result_array();
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

    public function get_column_name() {
        $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='" . LOANS . "'";

        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function get_userall() {

        $domain = 'http://' . $_SERVER['SERVER_NAME'];
        
        $filterData = $this->session->userdata['export'];
        $filter = 'user.firstname,user.lastname,user.phone,user.email,user.currently_owe,user.monthly_payment,user.vin,user.current_milage,user.dob,user.domain,user.address,s.name as state,c.name as city,user.ssn';
        //print_r($this->session->userdata['export']);
        if (!empty($this->session->userdata['export'])) {


           if (!empty($filterData['email'])) {
            $this->db->where('user.email', $filterData['email']);
        }
       
        

        if (!empty($filterData['vin'])) {
            $this->db->where('user.vin', $filterData['vin']);
        }

//        if (!empty($filterData['domain'])) {
//            $this->db->like('user.domain', $filterData['domain'], 'both');
//        }
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
            $this->db->like('user.domain', $domain,'both');
        }
        $this->db->select($filter);

        $this->db->from(REFINANCE . ' as user');
        $this->db->order_by('user.add_date', 'desc');
        $this->db->join(STATE . ' as s', 's.id = user.state', 'left');
        $this->db->join(CITY . ' as c', 'c.id = user.city', 'left');

        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function updateStatus($lendid, $status) {
        $userData['status'] = $status;
        $this->db->where("ref_id", $lendid);
        $this->db->update(REFINANCE, $userData);
        // echo $this->db->last_query();
        return $this->db->affected_rows();
    }

    public function updateactiveStatus($lendid) {
        $userData['active_status'] = '0';
        $this->db->where("ref_id", $lendid);
        $this->db->update(REFINANCE, $userData);

        return $this->db->affected_rows();
    }

    public function checklead() {
        $this->db->select('count(ref_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->from(REFINANCE);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_pending() {
        $this->db->select('count(ref_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->where("status", 2);
        $this->db->from(REFINANCE);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_approved() {
        $this->db->select('count(ref_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->where("status", 1);
        $this->db->from(REFINANCE);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    
    public function checklead_pending_forDomain() {
        $domain = 'http://' . $_SERVER['SERVER_NAME'];
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
        $this->db->from(REFINANCE);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_approved_forDomain() {
        $domain = 'http://' . $_SERVER['SERVER_NAME'];
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
            $this->db->like('domain', $domain, 'both');
        }
        $this->db->where('active_status', 1);
        $this->db->from(REFINANCE);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    
    public function checklead_denied_forDomain() {
        $domain = 'http://' . $_SERVER['SERVER_NAME'];
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
        $this->db->from(REFINANCE);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    
    public function valid_domain_allemail(){
        $this->db->from(EMAILS . ' as e');
        $this->db->join(DOMAIN . ' as d', 'd.domain_id = e.domain_id', 'LEFT');
        $this->db->where('d.domain',BASE_URL);
        $result = $this->db->get();
        return $result->result_array();
    }

}
?>

