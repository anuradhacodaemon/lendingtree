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
        if (!empty($filterData['personal_phone'])) {
            $this->db->where('user.personal_phone', $filterData['personal_phone']);
        }
        if (!empty($filterData['business_phone'])) {
            $this->db->where('user.business_phone', $filterData['business_phone']);
        }
        if (!empty($filterData['start_date'])) {
            $this->db->where('user.add_date >= ', $filterData['start_date'] . " 00:00:00");
        }
        if (!empty($filterData['end_date'])) {
            $this->db->where('user.update_date <= ', $filterData['end_date'] . " 23:59:59");
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


        $this->db->select('*,user.update_date as date');
        $this->db->from(LOANS . ' as user');

        if (!is_array($sortData) || ($sortData['sort_by'] == "" && $sortData['sort_direction'] == ""))
            $this->db->order_by('user.update_date', 'desc');
        else
            $this->db->order_by($sortData['sort_by'], $sortData['sort_direction']);
        $this->db->limit($limit, $start);
        //echo $this->db->last_query();
        $result = $this->db->get();
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
        if (!empty($filterData['personal_phone'])) {
            $this->db->where('user.personal_phone', $filterData['personal_phone']);
        }
        if (!empty($filterData['business_phone'])) {
            $this->db->where('user.business_phone', $filterData['business_phone']);
        }
        if (!empty($filterData['start_date'])) {
            $this->db->where('user.add_date >= ', $filterData['start_date'] . " 00:00:00");
        }
        if (!empty($filterData['end_date'])) {
            $this->db->where('user.update_date <= ', $filterData['end_date'] . " 23:59:59");
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

    public function get_emailtemplate() {
        $this->db->from(EMAIL . ' as email');
        $result = $this->db->get();
        return $result->result_array();
    }

    public function mail_sent_to($data) {
        foreach ($data as $k => $v) {
            $this->db->select('*');
            $this->db->from(USERS . ' as user');
            $this->db->where('user.id', $v);
            $result = $this->db->get();
            $a[] = $result->result_array();
        }
        return $a;
    }

    public function update_user_email($id) {
        $this->db->select('*');
        $this->db->from(USERS . ' as user');
        $this->db->where('user.id', $id);
        $query = $this->db->get();
        $row = $query->row();
        $emailsent = $row->emails_sent + 1;
        $emails_received = $row->emails_received + 1;
        $categoryData = array('emails_sent' => $emailsent, 'emails_received' => $emails_received);
        $this->db->where('id', $id);
        $this->db->update(USERS, $categoryData);
        return $this->db->affected_rows();
    }

}
?>

