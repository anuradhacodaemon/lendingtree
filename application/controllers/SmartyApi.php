<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SmartyApi extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        // Construct the parent class
        parent::__construct();
        
    }
    //

    public function getUsAddresses()
    {

        
        $search = $_POST['search'];
        $domain = 'https://us-autocomplete-pro.api.smartystreets.com/lookup?';
        $auth_id= 'auth-id='.SMARTY_AUTH_ID .'&';
        $auth_token= 'auth-token='.SMARTY_AUTH_TOKEN .'&';
        $search = 'search='.urlencode($search). '&';
        $selected = 'selected=&';
        $licesnse = 'license=us-autocomplete-pro-cloud';
        if(!empty($search))
        {
            $url = $domain. $auth_id. $auth_token. $search. $selected. $licesnse;

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $json = json_decode($response, true);
            /*echo "<pre>";
            print_r($json['suggestions']);exit;*/
            echo $response = json_encode($json['suggestions']);
            //echo $response;
        }
        else{
                return false;
            }
    }








    //=======================================END OF FILE==============================================================
}