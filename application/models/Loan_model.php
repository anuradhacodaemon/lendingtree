<?php

/**  user model for technician client user * */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /** This function used to read user for all available filters * */
    public function get_message($fields, $page = null, $limit = 10, $filters = array(), $likes = array(), $orders = array()) {
        $filters['status'] = '1'; // display active record
        set_query($fields, $page, $limit, $filters, $likes, $orders);
        $this->db->from(MESSAGE);
        $result = $this->db->get();
        checkForError();

        return $result->result_array();
    }

   public function add_loan($logData) {
       
        $this->db->select('lend_id');
        $this->db->from(LOANS);
        $this->db->where('firstname', $logData['firstname']);
        $this->db->where("lastname", $logData['lastname']);
        $result = $this->db->get();
        $num = $result->num_rows();
        if($num == 0)
        {
        $this->db->insert(LOANS, $logData);
        $id = $this->db->insert_id();
        if ($this->db->affected_rows() > 0) {
            return $id;
        } else {
            return false;
        }
        }
         return false;
    }

    public function update_user($id, $userData) {
        $this->db->where("user_id", $id);
        $this->db->update(MESSAGE, $userData);
        checkForError();
        $id = $this->db->affected_rows();
        if ($id) {
            return $id;
        } else {
            return false;
        }
    }

    public function delete_user($id) {
        $userData['status'] = '0';
        $this->db->where("user_id", $id);
        $this->db->update(MESSAGE, $userData);
        checkForError();
        return $this->db->affected_rows();
    }

    /** user list * */
}
?>

