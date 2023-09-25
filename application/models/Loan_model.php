<?php

/**  user model for technician client user * */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /** This function used to read user for all available filters * */
    public function get_country() {

        $this->db->from(COUNTRY);
        $result = $this->db->get();
        checkForError();

        return $result->result_array();
    }

    public function get_state() {

        $this->db->from(STATE);
        $this->db->where('country_id', '231');
        $result = $this->db->get();


        return $result->result_array();
    }

    public function get_city($state_id = 0) {
//$this->db->select('id,name');
        $this->db->from(CITY);
        $this->db->where('state_id', $state_id);
        $result = $this->db->get();
        //echo $this->db->last_query();

        return $result->result_array();
    }

    public function add_loan($logData) {

        ///$this->db->select('lend_id');
        //$this->db->from(LOANS);
        //$this->db->where('email', $logData['email']);
        //$this->db->where("lastname", $logData['lastname']);
        //$result = $this->db->get();
        //$num = $result->num_rows();
        //echo $this->db->last_query();
       // if ($num == 0) {
            $this->db->insert(LOANS, $logData);
            $id = $this->db->insert_id();
            //if ($this->db->affected_rows() > 0) {
                return $id;
            //}
       // } else {
           // return 0;
        //}
    }
    
     public function add_homeloan($logData) {

        ///$this->db->select('lend_id');
        //$this->db->from(LOANS);
        //$this->db->where('email', $logData['email']);
        //$this->db->where("lastname", $logData['lastname']);
        //$result = $this->db->get();
        //$num = $result->num_rows();
        //echo $this->db->last_query();
       // if ($num == 0) {
            $this->db->insert(HOMELOAN, $logData);
            //echo $this->db->last_query();
            $id = $this->db->insert_id();
            //if ($this->db->affected_rows() > 0) {
                return $id;
            //}
       // } else {
           // return 0;
        //}
    }

    public function add_refinance($logData) {

       /* $this->db->select('ref_id');
        $this->db->from(REFINANCE);
        $this->db->where('email', $logData['email']);
        //$this->db->where("lastname", $logData['lastname']);
        $result = $this->db->get();
        $num = $result->num_rows();
        //echo $this->db->last_query();
        if ($num == 0) { **/
            $this->db->insert(REFINANCE, $logData);
           // echo $this->db->last_query();
            $id = $this->db->insert_id();
            return $id;
           /** if ($this->db->affected_rows() > 0) {
                return $id;
            }
        } else {
            return 0;
        }**/
    }

    public function addvisitor($ipaddress, $page, $referrer, $datetime, $useragent, $remotehost) {

        $logData = array('ip_address' => $ipaddress, 'page' => $page, 'referrer' => $referrer, 'datetime' => $datetime, 'useragent' => $useragent, 'remotehost' => $remotehost);

        $this->db->select('id');
        $this->db->from(VISITOR);
        $this->db->where('ip_address', $ipaddress);
        $this->db->where("remotehost", $remotehost);

        $result = $this->db->get();
        $num = $result->num_rows();
        //echo $this->db->last_query();
        if ($num == 0) {
            $this->db->insert(VISITOR, $logData);
            $id = $this->db->insert_id();
            if ($this->db->affected_rows() > 0) {
                return $id;
            }
        } else {
            return 0;
        }
    }

    /** user list * */
    public function get_phone() {
        $this->db->from(DOMAIN);
        $this->db->where('domain', BASE_URL);
        $result = $this->db->get();
        return $result->result_array();
    }
    
     public function get_emailtemplate() {
        $domain = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $this->db->from(EMAILTEMPLATE . ' as email');
        $this->db->like('email.domain_name', $domain,'both');
        $result = $this->db->get();
        return $result->result_array();
    }
    
    public function get_userdetailsrefinancepdf($shopId = 0) {
        $this->db->select('shop.*');

        $this->db->from(REFINANCE . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.ref_id', $shopId);

        $result = $this->db->get();

        return $result->result_array();
    }
     public function get_userdetailsloanpdf($shopId = 0) {
        $this->db->select('shop.*');

        $this->db->from(LOANS . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.lend_id', $shopId);

        $result = $this->db->get();

        return $result->result_array();
    }
    
    public function get_userdetailshomeloanpdf($shopId = 0) {
        $this->db->select('shop.*');

        $this->db->from(HOMELOAN . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.Loan_id', $shopId);

        $result = $this->db->get();

        return $result->result_array();
    }

    public function get_userdetailsforpdf($shopId = 0,$TABLE = 0, $auto_id) {
        $this->db->select('shop.*');

        $this->db->from($TABLE . ' as shop');
        // $this->db->join(LOGIN . ' as address', 'address.id = shop.contact_owner_id', 'left');
        $this->db->where('shop.'.$auto_id, $shopId);

        $result = $this->db->get();

        return $result->row_array();
    }
    
     public function get_emailtemplatepdf() {
        $this->db->from(EMAILTEMPLATEPDF . ' as email');
        $result = $this->db->get();
        return $result->result_array();
    }
    
     public function get_zip($zipcode = 0) {
//$this->db->select('id,name');
        $this->db->from(ZIPCODE);
        $this->db->where('zipcode', $zipcode);
        $result = $this->db->get();
        //echo $this->db->last_query();

        return $result->result_array();
    }

    public function send_to_zapier($postFields,$name,$id){
        //$zapierWebhookUrl = ZAPIER_HOOK_URL;

        $this->config->load('config');
        $zapierWebhookUrl = $this->config->item('ZAPIER_HOOK_URL');

        // Initialize cURL session
        $ch = curl_init();

        // Define the file to be sent as an attachment
        $fileAttachment =  $_SERVER['HTTP_HOST'].'/'.$name.'/pdfLoan/'.$id;
        $postFields["File"] = $fileAttachment;

        $api_key = $this->config->item('ZAPIER_API_KEY');
        // Set the Content-Type header to indicate multipart/form-data
        //$headers = array('Content-Type: multipart/form-data');
        $headers = array('api_key: '.$api_key,'Content-Type: multipart/form-data');

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $zapierWebhookUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Execute the cURL request
        $response = curl_exec($ch);

        // Check for cURL errors or process the response as needed
        if (curl_errno($ch)) {
            $status = 'fail';
        } else {
            // Decode the JSON string into an associative array
            $data = json_decode($response, true);

            // Extract the "status" value
            $status = $data['status'];
        }

        // Close cURL session
        curl_close($ch);
        return $status;
        
    }

}
?>

