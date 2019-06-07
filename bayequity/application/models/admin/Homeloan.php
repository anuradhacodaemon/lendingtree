<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Homeloan extends CI_Model {

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

//        if (!empty($filterData['domain'])) {
//            $this->db->like('user.domain', $filterData['domain'], 'both');
//        }

        if (!empty($filterData['loan_type'])) {
            $this->db->where('user.loan_type', $filterData['loan_type']);
        }
        if (!empty($filterData['property_type'])) {
            $this->db->where('user.property_type', $filterData['property_type']);
        }

        if (!empty($filterData['property_value1']) && empty($filterData['property_value2'])) {
            if (!empty($filterData['property_value1']) && !empty($filterData['property_value2']))
                $this->db->group_start();
            $this->db->where('user.property_value <=', $filterData['property_value1']);
        }
        if (!empty($filterData['property_value2']) && empty($filterData['property_value1'])) {
            $this->db->where('user.property_value >=', $filterData['property_value2']);
            if (!empty($filterData['property_value1']) && !empty($filterData['property_value2']))
                $this->db->group_end();
        }
        if (!empty($filterData['property_value1']) && !empty($filterData['property_value2'])) {

            $this->db->group_start();
            $this->db->where('property_value BETWEEN ' . $filterData['property_value1'] . ' and ' . $filterData['property_value2'] . '');
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
        $this->db->from(HOMELOAN . ' as user');
        $this->db->where('active_status', 1);
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

//        if (!empty($filterData['domain'])) {
//            $this->db->like('user.domain', $filterData['domain'], 'both');
//        }


        if (!empty($filterData['loan_type'])) {
            $this->db->where('user.loan_type', $filterData['loan_type']);
        }
        if (!empty($filterData['property_type'])) {
            $this->db->where('user.property_type', $filterData['property_type']);
        }

        if (!empty($filterData['property_value1']) && empty($filterData['property_value2'])) {
            if (!empty($filterData['property_value1']) && !empty($filterData['property_value2']))
                $this->db->group_start();
            $this->db->where('user.property_value <=', $filterData['property_value1']);
        }
        if (!empty($filterData['property_value2']) && empty($filterData['property_value1'])) {
            $this->db->where('user.property_value >=', $filterData['property_value2']);
            if (!empty($filterData['property_value1']) && !empty($filterData['property_value2']))
                $this->db->group_end();
        }
        if (!empty($filterData['property_value1']) && !empty($filterData['property_value2'])) {

            $this->db->group_start();
            $this->db->where('property_value BETWEEN ' . $filterData['property_value1'] . ' and ' . $filterData['property_value2'] . '');
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
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
                $this->db->like('user.domain', $filterData['domain'], 'both');
        }
        else
        {
            $this->db->like('user.domain', $domain,'both');
        }
        $this->db->from(HOMELOAN . ' as user');

        $result = $this->db->get();
        //echo $this->db->last_query();
        return $result->num_rows();
    }

    public function get_userdetails($shopId = 0) {
        $this->db->select('shop.*');

        $this->db->from(HOMELOAN . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.loan_id', $shopId);

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
        $filter = 'user.firstname,user.lastname,user.phone,user.email,user.loan_type,user.property_type,user.home_type,user.plan_type,user.dob,user.domain,user.address,user.city,user.zip';
        //print_r($this->session->userdata['export']);
        if (!empty($this->session->userdata['export'])) {


            if (!empty($filterData['email'])) {
                $this->db->where('user.email', $filterData['email']);
            }



            if (!empty($filterData['loan_type'])) {
                $this->db->where('user.loan_type', $filterData['loan_type']);
            }
            if (!empty($filterData['property_type'])) {
                $this->db->where('user.property_type', $filterData['property_type']);
            }


//            if (!empty($filterData['domain'])) {
//                $this->db->like('user.domain', $filterData['domain'], 'both');
//            }


            if (!empty($filterData['property_value1']) && empty($filterData['property_value2'])) {
                if (!empty($filterData['property_value1']) && !empty($filterData['property_value2']))
                    $this->db->group_start();
                $this->db->where('user.property_value <=', $filterData['property_value1']);
            }
            if (!empty($filterData['property_value2']) && empty($filterData['property_value1'])) {
                $this->db->where('user.property_value >=', $filterData['property_value2']);
                if (!empty($filterData['property_value1']) && !empty($filterData['property_value2']))
                    $this->db->group_end();
            }
            if (!empty($filterData['property_value1']) && !empty($filterData['property_value2'])) {

                $this->db->group_start();
                $this->db->where('property_value BETWEEN ' . $filterData['property_value1'] . ' and ' . $filterData['property_value2'] . '');
                $this->db->group_end();
            }
        } else {
            //$filter .= 'user.type,user.requested_amount,user.pre_tax_income,user.job_title,user.domain,';
        }
        //$filter = substr($filter, 0, -1);

        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
                $this->db->like('user.domain', $filterData['domain'], 'both');
        }
        else
        {
            $this->db->like('user.domain', $domain,'both');
        }
        
        $this->db->select($filter);

        $this->db->from(HOMELOAN . ' as user');
        $this->db->order_by('user.add_date', 'desc');
        //$this->db->join(STATE . ' as s', 's.id = user.state', 'left');
       // $this->db->join(CITY . ' as c', 'c.id = user.city', 'left');

        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function updateStatus($lendid, $status) {
        $userData['status'] = $status;
        $this->db->where("loan_id", $lendid);
        $this->db->update(HOMELOAN, $userData);
        // echo $this->db->last_query();
        return $this->db->affected_rows();
    }

    public function updateactiveStatus($lendid) {
        $userData['active_status'] = '0';
        $this->db->where("loan_id", $lendid);
        $this->db->update(HOMELOAN, $userData);

        return $this->db->affected_rows();
    }

    public function checklead() {
        $this->db->select('count(loan_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->from(HOMELOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_pending() {
        $this->db->select('count(loan_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->where("status", 2);
        $this->db->from(HOMELOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_approved() {
        $this->db->select('count(loan_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->where("status", 1);
        $this->db->from(HOMELOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    
    public function checklead_pending_forDomain() {
        $domain = 'http://' . $_SERVER['SERVER_NAME'];
        
        $filterData = $this->session->userdata['export'];
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
               $this->db->like('domain', $filterData['domain'], 'both');     
        }
        else
        {
            $this->db->like('domain', $domain,'both');
        }
        
        $this->db->select('count(loan_id) as numLead');
        $this->db->where("status", '2');
        $this->db->where('active_status', '1');
        $this->db->from(HOMELOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_approved_forDomain() {
        $domain = 'http://' . $_SERVER['SERVER_NAME'];
        
        $filterData = $this->session->userdata['export'];
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
               $this->db->like('domain', $filterData['domain'], 'both');     
        }
        else
        {
            $this->db->like('domain', $domain,'both');
        }
        
        $this->db->select('count(loan_id) as numLead');
        $this->db->where("status", 1);
        $this->db->where('active_status', 1);
        $this->db->from(HOMELOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    
    public function checklead_denied_forDomain() {
        $domain = 'http://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
               $this->db->like('domain', $filterData['domain'], 'both');     
        }
        else
        {
            $this->db->like('domain', $domain,'both');
        }
        
        $this->db->select('count(loan_id) as numLead');
        $this->db->where("status", 0);
        $this->db->where('active_status', 1);
        $this->db->from(HOMELOAN);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function valid_domain_allemail() {
        $this->db->from(EMAILS . ' as e');
        $this->db->join(DOMAIN . ' as d', 'd.domain_id = e.domain_id', 'LEFT');
        $this->db->where('d.domain', BASE_URL);
        $result = $this->db->get();
        return $result->result_array();
    }

}
?>
