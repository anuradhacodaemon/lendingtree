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
        if (!empty($filterData['requested_amount'])) {
            $this->db->where('user.requested_amount', $filterData['requested_amount']);
        }

        if (!empty($filterData['job_title'])) {
            $this->db->where('user.job_title', $filterData['job_title']);
        }

        if (!empty($filterData['domain'])) {
            $this->db->like('user.domain', $filterData['domain'], 'both');
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
        $this->db->where('active_status', 1);
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
        if (!empty($filterData['requested_amount'])) {
            $this->db->where('user.requested_amount', $filterData['requested_amount']);
        }

        if (!empty($filterData['job_title'])) {
            $this->db->where('user.job_title', $filterData['job_title']);
        }

        if (!empty($filterData['domain'])) {
            $this->db->like('user.domain', $filterData['domain'], 'both');
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

        $filterData = $this->session->userdata['export'];
        $filter = 'user.firstname,user.lastname,user.phone,user.email,user.type,user.requested_amount,user.current_employer,user.pre_tax_income,user.job_title,user.domain,user.address,s.name as state,c.name as city,user.zip,user.ssn';
        //print_r($this->session->userdata['export']);
        if (!empty($this->session->userdata['export'])) {


            if (!empty($filterData['email'])) {
                $this->db->where('user.email', $filterData['email']);
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

            if (!empty($filterData['domain'])) {
                $this->db->where('user.domain', $filterData['domain']);
                // $filter .= 'user.domain,';
            }
        } else {
            //$filter .= 'user.type,user.requested_amount,user.pre_tax_income,user.job_title,user.domain,';
        }
        //$filter = substr($filter, 0, -1);



        $this->db->select($filter);

        $this->db->from(LOANS . ' as user');
        $this->db->order_by('user.update_date', 'desc');
        $this->db->join(STATE . ' as s', 's.id = user.state', 'left');
        $this->db->join(CITY . ' as c', 'c.id = user.city', 'left');

        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function updateStatus($lendid, $status) {
        $userData['status'] = $status;
        $this->db->where("lend_id", $lendid);
        $this->db->update(LOANS, $userData);
        return $this->db->affected_rows();
    }

    public function updateactiveStatus($lendid) {
        $userData['active_status'] = '0';
        $this->db->where("lend_id", $lendid);
        $this->db->update(LOANS, $userData);

        return $this->db->affected_rows();
    }

    public function checklead() {
        $this->db->select('count(lend_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->from(LOANS);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_pending() {
        $this->db->select('count(lend_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->where("status", 2);
        $this->db->from(LOANS);
        $result = $this->db->get();
        // echo $this->db->last_query();
        //die;
        return $result->result_array();
    }

    public function checklead_approved() {
        $this->db->select('count(lend_id) as numLead');
        $this->db->like("add_date", date("Y-m-d"), "both");
        $this->db->where("status", 1);
        $this->db->from(LOANS);
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

    public function getVisitor() {
        $this->db->select('count(id) as Numrecord,datetime');
        $this->db->from(VISITOR);
        $this->db->group_by('datetime');
        $result = $this->db->get();

        return $result->result_array();
    }

}
?>

