<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auto extends CI_Controller {

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

        $data = array();
        $data = array(
            'panel' => 'frontend'
        );
        $this->session->set_userdata('userdata', $data);
        $this->template->view('step1_view');
    }

    public function step1() {

        $this->load->view('step1_view');
    }

    public function step2($id = 0) {
        if ($id) {
            $data = array(
                'type' => $id
            );
            $this->session->set_userdata('userdata', $data);
        }
        $this->load->view('step2_view');
    }

    public function step3($id = 0) {
        if ($id) {
            $data = array(
                'requested_amount' => $id,
                'type' => $this->session->userdata['userdata']['type']
            );

            $this->session->set_userdata('userdata', $data);
        }
       // echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step3_view');
    }

    public function step4($id = 0, $pre_approved) {
        if ($id) {
            $data = array(
                'current_employer' => $id,
                'job_title' => $pre_approved,
                'requested_amount' => $this->session->userdata['userdata']['requested_amount'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step4_view');
    }

    public function step5($pre_tax_income = 0) {
        
        if ($pre_tax_income) {
            $data = array(
                'pre_tax_income' => $pre_tax_income,
                'current_employer' => $this->session->userdata['userdata']['current_employer'],
                'job_title' => $this->session->userdata['userdata']['job_title'],
                'requested_amount' => $this->session->userdata['userdata']['requested_amount'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
       
        $data['state']=$this->loan_model->get_state();
        $data['city']=$this->loan_model->get_city();
//echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step5_view',$data);
    }
    public function getcity($state_id=0){
        
     $city= $this->loan_model->get_city($state_id);
     echo json_encode($city);
    }

    public function step6($firstname = '', $lastname = '', $address, $city, $state, $zip, $ssn) {
        if ($firstname) {
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'zip' => $zip,
                'ssn' => $ssn,
                'pre_tax_income' => $this->session->userdata['userdata']['pre_tax_income'],
                'current_employer' => $this->session->userdata['userdata']['current_employer'],
                'job_title' => $this->session->userdata['userdata']['job_title'],
                'requested_amount' => $this->session->userdata['userdata']['requested_amount'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('step6_view');
    }

    public function step7($email = '', $phone = '') {
        if ($email) {
            $data = array(
                'email' => $email,
                'phone' => $phone,
                'firstname' => $this->session->userdata['userdata']['firstname'],
                'lastname' => $this->session->userdata['userdata']['lastname'],
                'address' => $this->session->userdata['userdata']['address'],
                'city' => $this->session->userdata['userdata']['city'],
                'state' => $this->session->userdata['userdata']['state'],
                'zip' => $this->session->userdata['userdata']['zip'],
                'ssn' => $this->session->userdata['userdata']['ssn'],
                'pre_tax_income' => $this->session->userdata['userdata']['pre_tax_income'],
                'current_employer' => $this->session->userdata['userdata']['current_employer'],
                'job_title' => $this->session->userdata['userdata']['job_title'],
                'requested_amount' => $this->session->userdata['userdata']['requested_amount'],
                'type' => $this->session->userdata['userdata']['type'],
                'add_date' => date('Y-m-d H:i:s'),
                'domain' =>'http://'.$_SERVER['SERVER_NAME'].'/'
            );

            $this->session->set_userdata('userdata', $data);
        }
       //echo '<pre>';
        // print_r($this->session->userdata());

        $result = $this->loan_model->add_loan($this->session->userdata['userdata']);

        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0)
        {
           $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call (409) 220-0612';
           $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
  
           //redirect('/');
           echo 1;
        }
        else {

            $error = 'Your email already exist';
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));

            $this->load->view('step6_view');
        }
    }

}
