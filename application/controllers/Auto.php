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


        if (empty($this->session->userdata['userdata'])) {
            $data = array();
        }

        $this->session->set_userdata('panel', 'frontend');

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
            $this->session->set_userdata($data);
        }
        $this->load->view('step2_view');
    }

    public function step3($id = 0) {
        if ($id) {
            $data = array(
                'requested_amount' => $id
            );

            $this->session->set_userdata($data);
        }
        // echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step3_view');
    }

    public function step4($id = 0, $pre_approved = 0) {
        if ($id) {
            $data = array(
                'current_employer' => $id,
                'job_title' => $pre_approved
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step4_view');
    }

    public function step5($pre_tax_income = 0) {

        if ($pre_tax_income) {

            //$num = explode('$', $pre_tax_income);
            // $number = $num[1];
            //$real_integer = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
            $data = array(
                'pre_tax_income' => $pre_tax_income
            );

            $this->session->set_userdata($data);
        }

        $data['state'] = $this->loan_model->get_state();
        if (isset($this->session->userdata['userdata']['state'])) {
            $data['city'] = $this->loan_model->get_city($this->session->userdata['userdata']['state']);
        }
//echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step5_view', $data);
    }

    public function getcity($state_id = 0) {

        $city = $this->loan_model->get_city($state_id);
        echo json_encode($city);
    }

    public function step6($firstname = '', $lastname = '', $address = '', $city = '', $state = '', $zip = '') {
        if ($firstname) {
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'zip' => $zip
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('step6_view');
    }

    public function step7($month = 0, $day = 0, $year = 0, $ssn = '') {
        if ($ssn) {
            $data = array(
                'month' => $month,
                'day' => $day,
                'years' => $year,
                'dob' => $year . '-' . $month . '-' . $day,
                'ssn' => $ssn
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('step7_view');
    }

    public function step8($email = '', $phone = '') {
        if ($email) {
            $data = array(
                'email' => $email,
                'phone' => $phone,
                'add_date' => date('Y-m-d H:i:s'),
                'domain' => 'http://' . $_SERVER['SERVER_NAME'] . '/',
                'status' => "2"
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        //die;
        unset($this->session->userdata['panel']);
        unset($this->session->userdata['__ci_last_regenerate']);
        unset($this->session->userdata['userdata']);
        $result = $this->loan_model->add_loan($this->session->userdata());

        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0) {
            $getPhone = $this->loan_model->get_phone();
            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
            $this->session->userdata['userdata'] = '';
            $this->session->userdata['type'] = '';
            $this->session->userdata['requested_amount'] = '';
            $this->session->userdata['current_employer'] = '';
            $this->session->userdata['job_title'] = '';
            $this->session->userdata['pre_tax_income'] = '';
            $this->session->userdata['firstname'] = '';
            $this->session->userdata['lastname'] = '';
            $this->session->userdata['address'] = '';
            $this->session->userdata['state'] = '';
            $this->session->userdata['city'] = '';
            $this->session->userdata['zip'] = '';
            $this->session->userdata['month'] = '';
            $this->session->userdata['day'] = '';
            $this->session->userdata['years'] = '';
            $this->session->userdata['dob'] = '';
            $this->session->userdata['ssn'] = '';
            $this->session->userdata['email'] = '';
            $this->session->userdata['phone'] = '';
            //redirect('/');
            echo 1;
        } else {

            $error = 'Your email already exist';
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));

            $this->load->view('step6_view');
        }
    }

}
