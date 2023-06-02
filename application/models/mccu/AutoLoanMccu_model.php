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
        $logData['p_email'] = 'johntest@gmail.com';
        $logData['status'] = 1;
        $logData['date_of_application'] = date('Y-m-d', strtotime($logData['date_of_application']));
        if(isset($logData['final_step']) && !empty($logData['final_step']) && $logData['final_step'] == 23)
        {
            $logData['user_did_last_step'] = $logData['final_step'];
            unset($logData['final_step']);
        }
        $this->db->insert(AUTO_MMCU_LOAN, $logData);
        //echo $this->db->last_query();exit;
        $id = $this->db->insert_id();
        return $id;
    }






    //##################################END OF MODEL################################
}