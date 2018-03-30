<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* Author: Anuradha
 * Description: Login model class
 */

class AdminLogin_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function validate($username, $password) {


        $this->db->where("(email = '$username' or username = '$username' )");
        $this->db->where('password', $password);
        // Run the query
        $query = $this->db->get(LOGIN);
        // Let's check if there are any results
        //echo $this->db->last_query();

        $count = $query->num_rows();
        if ($count > 0) {
            // If there is a user, then create session data
            $row = $query->row();

            $data = array(
                'adminid' => $row->id,
                'adminusername' => $row->username,
                'adminemail' => $row->email,
                'ud' => $row->user_type,
                'adminvalidated' => true,
                'panel' =>'admin'
            );
            $this->session->set_userdata('userdata', $data);
            return true;
        }
    }

}

?>
