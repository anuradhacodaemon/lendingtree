<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($id = 0, $limit, $start, $filterData, $sortData = "") {

        if (!empty($filterData['firstname'])) {
            $this->db->like('user.firstname', $filterData['firstname'], 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.lastname', $filterData['lastname'], 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.email', $filterData['email']);
        }
        if (!empty($filterData['type'])) {
            $this->db->where('user.type', $filterData['type']);
        }
        if (!empty($filterData['years_emt'])) {
            $this->db->where('user.years_emt', $filterData['years_emt']);
        }
        if (!empty($filterData['buying_from'])) {
            $this->db->where('user.buying_from', $filterData['buying_from']);
        }
        
        if ($filterData['pre_approved']!='') {
            $this->db->where('user.pre_approved', $filterData['pre_approved']);
        }
        if (!empty($filterData['start_date'])) {
            $this->db->where('user.dob >= ', $filterData['start_date'] );
        }
        if (!empty($filterData['end_date'])) {
            $this->db->where('user.dob <= ', $filterData['end_date'] );
        }
        if (!empty($filterData['amount1'])) {
             if (!empty($filterData['amount1']) && !empty($filterData['amount2']))
            $this->db->group_start();
            $this->db->where(' user.amount <=', $filterData['amount1']);
        }
         if (!empty($filterData['amount2'])) {
            $this->db->or_where('user.amount >=', $filterData['amount2']);
             if (!empty($filterData['amount1']) && !empty($filterData['amount2']))
            $this->db->group_end();
        }
         if (!empty($filterData['pre_tax_income1'])) {
             if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
             $this->db->group_start();
            $this->db->where('user.pre_tax_income <=', $filterData['pre_tax_income1']);
        }
         if (!empty($filterData['pre_tax_income2'])) {
            $this->db->or_where('user.pre_tax_income >=', $filterData['pre_tax_income2']);
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
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
        $this->db->from(LOANS . ' as user');

        if (!is_array($sortData) || ($sortData['sort_by'] == "" && $sortData['sort_direction'] == ""))
            $this->db->order_by('user.update_date', 'desc');
        else
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);
        $this->db->limit($limit, $start);
        
        $result = $this->db->get();
        //echo $this->db->last_query();
       
        return $result->result_array();
    }

    public function get_count_user($filterData = array()) {

          if (!empty($filterData['firstname'])) {
            $this->db->like('user.firstname', $filterData['firstname'], 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.lastname', $filterData['lastname'], 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.email', $filterData['email']);
        }
        if (!empty($filterData['type'])) {
            $this->db->where('user.type', $filterData['type']);
        }
        if (!empty($filterData['years_emt'])) {
            $this->db->where('user.years_emt', $filterData['years_emt']);
        }
        if (!empty($filterData['buying_from'])) {
            $this->db->where('user.buying_from', $filterData['buying_from']);
        }
        
        if ($filterData['pre_approved']!='') {
            $this->db->where('user.pre_approved', $filterData['pre_approved']);
        }
        if (!empty($filterData['start_date'])) {
            $this->db->where('user.dob >= ', $filterData['start_date'] );
        }
        if (!empty($filterData['end_date'])) {
            $this->db->where('user.dob <= ', $filterData['end_date'] );
        }
        if (!empty($filterData['amount1'])) {
             if (!empty($filterData['amount1']) && !empty($filterData['amount2']))
            $this->db->group_start();
            $this->db->where(' user.amount <=', $filterData['amount1']);
        }
         if (!empty($filterData['amount2'])) {
            $this->db->or_where('user.amount >=', $filterData['amount2']);
             if (!empty($filterData['amount1']) && !empty($filterData['amount2']))
            $this->db->group_end();
        }
         if (!empty($filterData['pre_tax_income1'])) {
             if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
             $this->db->group_start();
            $this->db->where('user.pre_tax_income <=', $filterData['pre_tax_income1']);
        }
         if (!empty($filterData['pre_tax_income2'])) {
            $this->db->or_where('user.pre_tax_income >=', $filterData['pre_tax_income2']);
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
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

        $this->db->from(LOANS . ' as user');

        $result = $this->db->get();
        //echo $this->db->last_query();
        return $result->num_rows();
    }

    public function get_userdetails($shopId = 0) {
        $this->db->select('shop.*');

        $this->db->from(LOANS . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.lend_id', $shopId);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function get_column_name() {
        $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='" . LOANS . "'";

        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function get_userall() {
        
        $filterData=$this->session->userdata['export'];
        
         if (!empty($filterData['firstname'])) {
            $this->db->like('user.firstname', $filterData['firstname'], 'both');
        }
        if (!empty($filterData['lastname'])) {
            $this->db->like('user.lastname', $filterData['lastname'], 'both');
        }


        if (!empty($filterData['email'])) {
            $this->db->where('user.email', $filterData['email']);
        }
        if (!empty($filterData['type'])) {
            $this->db->where('user.type', $filterData['type']);
        }
        if (!empty($filterData['years_emt'])) {
            $this->db->where('user.years_emt', $filterData['years_emt']);
        }
        if (!empty($filterData['buying_from'])) {
            $this->db->where('user.buying_from', $filterData['buying_from']);
        }
        
        if ($filterData['pre_approved']!='') {
            $this->db->where('user.pre_approved', $filterData['pre_approved']);
        }
        if (!empty($filterData['start_date'])) {
            $this->db->where('user.dob >= ', $filterData['start_date'] );
        }
        if (!empty($filterData['end_date'])) {
            $this->db->where('user.dob <= ', $filterData['end_date'] );
        }
        if (!empty($filterData['amount1'])) {
             if (!empty($filterData['amount1']) && !empty($filterData['amount2']))
            $this->db->group_start();
            $this->db->where(' user.amount <=', $filterData['amount1']);
        }
         if (!empty($filterData['amount2'])) {
            $this->db->or_where('user.amount >=', $filterData['amount2']);
             if (!empty($filterData['amount1']) && !empty($filterData['amount2']))
            $this->db->group_end();
        }
         if (!empty($filterData['pre_tax_income1'])) {
             if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
             $this->db->group_start();
            $this->db->where('user.pre_tax_income <=', $filterData['pre_tax_income1']);
        }
         if (!empty($filterData['pre_tax_income2'])) {
            $this->db->or_where('user.pre_tax_income >=', $filterData['pre_tax_income2']);
            if (!empty($filterData['pre_tax_income1']) && !empty($filterData['pre_tax_income2']))
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
        
        

        $this->db->select('user.*');

        $this->db->from(LOANS . ' as user');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
      

        $result = $this->db->get();
       // echo $this->db->last_query();
          //die;
        return $result->result_array();
    }

}
?>

