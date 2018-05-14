<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loancalculator extends CI_Controller {

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
        $this->load->model('loan_model');
    }

    public function index() {


        if (empty($this->session->userdata['userdata'])) {
            $data = array();
        }

        $this->session->set_userdata('panel', 'frontend');
         $data['loandetails']=$this->loan_model->get_phone(); 
        $this->template->view('loancalculator',$data);
    }
    public function page_landing($type, $id) {
        if ($id >= 50000)
            $amt = 1;
        if ($id >= 40000 && $id <= 50000)
            $amt = 2;
        if ($id >= 30000 && $id <= 40000)
            $amt = 3;
        if ($id >= 20000 && $id <= 30000)
            $amt = 4;
        if ($id >= 15000 && $id <= 20000)
            $amt = 5;
        if ($id >= 10000 && $id <= 15000)
            $amt = 6;
        if ($id >= 5000 && $id <= 10000)
            $amt = 7;
        $data = array(
            'type' => $type,
            'requested_amount' => $amt
        );
        $this->session->set_userdata($data);
        $url = base_url();
        header('location:' . $url . 'auto?step=1');
    }
    
}
