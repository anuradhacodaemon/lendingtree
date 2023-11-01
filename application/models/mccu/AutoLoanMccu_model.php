<?php

/**  user model for technician client user * */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AutoLoanMccu_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //This is used to insert data in lend_mccu_loan
    public function add_auto_loan($logData) 
    {
        /*echo "from model";
        echo "<pre>";
        print_r($logData);*/
        $logData['status'] = 2;
        $logData['date_of_application'] = date('Y-m-d', strtotime($logData['date_of_application']));
        //unset($logData['cosigner_email']);
        if(isset($logData['final_step']) && !empty($logData['final_step']) && $logData['final_step'] == 23)
        {
            $logData['user_did_last_step'] = $logData['final_step'];
            unset($logData['final_step']);
        }
        if(isset($logData['final_step']) && !empty($logData['final_step']) && $logData['final_step'] == 43)
        {
            $logData['user_did_last_step'] = $logData['final_step'];
            unset($logData['final_step']);
        }
        $this->db->insert(AUTO_MMCU_LOAN, $logData);
        //echo $this->db->last_query();exit;
        $id = $this->db->insert_id();
        return $id;
    }
    //
    public function get_userdetailsloanpdf($shopId = 0) {
        $this->db->select('shop.*');
        $this->db->from(AUTO_MMCU_LOAN . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.lend_id', $shopId);
        $result = $this->db->get();
        return $result->row_array();
    }
   





    //##################################END OF MODEL################################
}