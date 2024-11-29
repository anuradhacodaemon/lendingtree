<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vsc extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($id = 0, $limit, $start, $filterData, $sortData = "") {

        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];

        if (!empty($filterData['email'])) {
            $this->db->where('user.email', $filterData['email']);
        }
        if (!empty($filterData['type'])) {
            $this->db->where('vsc.type', $filterData['type']);
        }
        if (!empty($filterData['vin'])) {
            $this->db->where('vsc.vin', $filterData['vin']);
        }

        if (!empty($filterData['current_milage'])) {
            $this->db->where('vsc.current_milage', $filterData['current_milage']);
        }
        // if (!empty($filterData['search'])) {
        //     $this->db->group_start();
        //     $this->db->like('user.email', $filterData['search'], 'both');
        //     $this->db->or_like('user.firstname', $filterData['search'], 'both');
        //     $this->db->or_like('user.personal_phone', $filterData['search'], 'both');
        //     $this->db->or_like('user.business_phone', $filterData['search'], 'both');
        //     $this->db->or_like('user.lastname', $filterData['search'], 'both');
        //     $this->db->group_end();
        // }


        $this->db->select('*,vsc.date_of_application as date');
        $this->db->from(VSC . ' as vsc');
        $this->db->where('active_status', 1);
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
                $this->db->like('vsc.domain', $filterData['domain'], 'both');
        }
        else
        {
            $this->db->like('vsc.domain', $domain, 'both');
        }
        if (!is_array($sortData) || ($sortData['sort_by'] == "" && $sortData['sort_direction'] == ""))
            $this->db->order_by('vsc.date_of_application', 'desc');
        else
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);
        $this->db->limit($limit, $start);

        $result = $this->db->get();
       // echo $this->db->last_query();

        return $result->result_array();
    }

    public function get_count_user($filterData = array()) {

        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        if (!empty($filterData['email'])) {
            $this->db->where('vsc.email', $filterData['email']);
        }
        if (!empty($filterData['type'])) {
            $this->db->where('vsc.type', $filterData['type']);
        }
        if (!empty($filterData['vin'])) {
            $this->db->where('vsc.vin', $filterData['vin']);
        }

        if (!empty($filterData['current_milage'])) {
            $this->db->where('vsc.current_milage', $filterData['current_milage']);
        }
        
        // if (!empty($filterData['search'])) {
        //     $this->db->group_start();
        //     $this->db->like('user.email', $filterData['search'], 'both');
        //     $this->db->or_like('user.firstname', $filterData['search'], 'both');
        //     $this->db->or_like('user.personal_phone', $filterData['search'], 'both');
        //     $this->db->or_like('user.business_phone', $filterData['search'], 'both');
        //     $this->db->or_like('user.lastname', $filterData['search'], 'both');
        //     $this->db->group_end();
        // }
        $this->db->where('active_status', 1);
        /* Domain Filter For admin and superadmin
         * 
         */
        if (isset($this->session->userdata['userdata']['ud']) && $this->session->userdata['userdata']['ud'] == 'superadmin' ) {
            if(!empty($filterData['domain']))
                $this->db->like('vsc.domain', $filterData['domain'], 'both');
        }
        else
        {
            $this->db->like('vsc.domain', $domain, 'both');
        }
        $this->db->from(VSC . ' as vsc');

        $result = $this->db->get();
        //echo $this->db->last_query();
        return $result->num_rows();
    }

    public function get_userdetails($shopId = 0) {
        $this->db->select('shop.*');

        $this->db->from(VSC . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.vsc_id', $shopId);

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

        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        $filter = 'vsc.type,vsc.current_milage,vsc.is_vin,vsc.email,vsc.vin,vsc.is_purchased,vsc.vehicle_year,vsc.vehicle_make_brand,vsc.vehicle_model,vsc.basic_warranty,vsc.domain,vsc.date_of_application';
        //print_r($this->session->userdata['export']);
        if (!empty($this->session->userdata['export'])) {


            if (!empty($filterData['email'])) {
                $this->db->where('vsc.email', $filterData['email']);
            }
            if (!empty($filterData['type'])) {
                $this->db->where('vsc.type', $filterData['type']);
            }
            if (!empty($filterData['vin'])) {
                $this->db->where('vsc.vin', $filterData['vin']);
            }
    
            if (!empty($filterData['current_milage'])) {
                $this->db->where('vsc.current_milage', $filterData['current_milage']);
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
                $this->db->like('vsc.domain', $filterData['domain'], 'both');
        }
        else
        {
            $this->db->like('vsc.domain', $domain, 'both');
        }

        $this->db->select($filter);

        $this->db->from(VSC . ' as vsc');
        $this->db->order_by('vsc.date_of_application', 'desc');

        $result = $this->db->get();
       ///  echo $this->db->last_query();
       // die;
        return $result->result_array();
    }

    public function updateStatus($lendid, $status) {
        $userData['status'] = $status;
        $this->db->where("vsc_id", $lendid);
        $this->db->update(VSC, $userData);
        return $this->db->affected_rows();
    }

    public function updateactiveStatus($lendid) {
        $userData['active_status'] = '0';
        $this->db->where("vsc_id", $lendid);
        $this->db->update(VSC, $userData);
        return $this->db->affected_rows();
    }

    public function checklead() {
        $this->db->select('count(vsc_id) as numLead');
        $this->db->like("date_of_application", date("Y-m-d"), "both");
        $this->db->from(VSC);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_pending() {
        $this->db->select('count(vsc_id) as numLead');
        $this->db->like("date_of_application", date("Y-m-d"), "both");
        $this->db->where("status", 2);
        $this->db->from(VSC);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_approved() {
        $this->db->select('count(lend_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->where("status", 1);
        $this->db->from(VSC);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checkvisitor() {
        $this->db->select('count(id) as numVisitor');
        $this->db->like("datetime", date("Y-m-d"), "both");
        $this->db->from(VISITOR);
        $result = $this->db->get();

        return $result->result_array();
    }
    
    public function checklead_pending_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(vsc_id) as numLead');
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
        $this->db->from(VSC);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_approved_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(vsc_id) as numLead');
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
        $this->db->from(VSC);
        $result = $this->db->get();
      //  echo $this->db->last_query();
        //die;
        return $result->result_array();
    }
    
    public function checklead_denied_forDomain() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $filterData = $this->session->userdata['export'];
        
        $this->db->select('count(vsc_id) as numLead');
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
        $this->db->from(VSC);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function getVisitor() {
        $this->db->select('count(id) as Numrecord,datetime');
        $this->db->from(VISITOR);
        $this->db->group_by('datetime');
        $result = $this->db->get();

        return $result->result_array();
    }

}
?>

