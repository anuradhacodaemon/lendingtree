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
                'years_emt' => $id,
                'type' => $this->session->userdata['userdata']['type']
            );

            $this->session->set_userdata('userdata', $data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step3_view');
    }

    public function step4($id = 0, $pre_approved) {
        if ($id) {
            $data = array(
                'amount' => $id,
                'pre_approved' => $pre_approved,
                'years_emt' => $this->session->userdata['userdata']['years_emt'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
        // echo '<pre>';
        //print_r($this->session->userdata());
        $this->load->view('step4_view');
    }

    public function step44($buyfrom = 0) {
        if ($buyfrom) {
            $data = array(
                'buying_from' => $buyfrom,
                'pre_approved' => $this->session->userdata['userdata']['pre_approved'],
                'amount' => $this->session->userdata['userdata']['amount'],
                'years_emt' => $this->session->userdata['userdata']['years_emt'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
        //echo '<pre>';
        //print_r($this->session->userdata());

        $this->load->view('step5_view');
    }

    public function step5($month = 0, $day = 0, $year = 0) {
        if ($month) {
            $data = array(
                'month' => $month,
                'day' => $day,
                'years' => $year,
                'pre_approved' => $this->session->userdata['userdata']['pre_approved'],
                'buying_from' => $this->session->userdata['userdata']['buying_from'],
                'amount' => $this->session->userdata['userdata']['amount'],
                'years_emt' => $this->session->userdata['userdata']['years_emt'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
        //echo '<pre>';
        //print_r($this->session->userdata());

        $this->load->view('step6_view');
    }

    public function step6($cemployee = '', $job_title = '') {
        if ($cemployee) {
            $data = array(
                'cemployee' => $cemployee,
                'job_title' => $job_title,
                'pre_approved' => $this->session->userdata['userdata']['pre_approved'],
                'buying_from' => $this->session->userdata['userdata']['buying_from'],
                'month' => $this->session->userdata['userdata']['month'],
                'day' => $this->session->userdata['userdata']['day'],
                'years' => $this->session->userdata['userdata']['years'],
                'amount' => $this->session->userdata['userdata']['amount'],
                'years_emt' => $this->session->userdata['userdata']['years_emt'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('step7_view');
    }

    public function step7($pre_tax_income = '', $other_income = '') {
        if ($pre_tax_income) {
            $data = array(
                'pre_tax_income' => $pre_tax_income,
                'other_income' => $other_income,
                'pre_approved' => $this->session->userdata['userdata']['pre_approved'],
                'buying_from' => $this->session->userdata['userdata']['buying_from'],
                'cemployee' => $this->session->userdata['userdata']['cemployee'],
                'job_title' => $this->session->userdata['userdata']['job_title'],
                'month' => $this->session->userdata['userdata']['month'],
                'day' => $this->session->userdata['userdata']['day'],
                'years' => $this->session->userdata['userdata']['years'],
                'amount' => $this->session->userdata['userdata']['amount'],
                'years_emt' => $this->session->userdata['userdata']['years_emt'],
                'type' => $this->session->userdata['userdata']['type'],
            );

            $this->session->set_userdata('userdata', $data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('step8_view');
    }

    public function step8($firstname = '', $lastname = '') {
        if ($firstname) {
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'pre_approved' => $this->session->userdata['userdata']['pre_approved'],
                'buying_from' => $this->session->userdata['userdata']['buying_from'],
                'pre_tax_income' => $this->session->userdata['userdata']['pre_tax_income'],
                'other_income' => $this->session->userdata['userdata']['other_income'],
                'cemployee' => $this->session->userdata['userdata']['cemployee'],
                'job_title' => $this->session->userdata['userdata']['job_title'],
                'month' => $this->session->userdata['userdata']['month'],
                'day' => $this->session->userdata['userdata']['day'],
                'years' => $this->session->userdata['userdata']['years'],
                'amount' => $this->session->userdata['userdata']['amount'],
                'years_emt' => $this->session->userdata['userdata']['years_emt'],
                'type' => $this->session->userdata['userdata']['type']
            );

            $this->session->set_userdata('userdata', $data);
        }

        //echo '<pre>';
        // print_r($this->session->userdata());
        // $this->loan_model->add_loan($this->session->userdata['userdata']);
        //$this->loan_model->add_loan($this->session->userdata['userdata']);
        $this->load->view('step9_view');
    }

    public function step9($email = '', $password = '') {
        if ($email) {
            $dob=$this->session->userdata['userdata']['years'].'-'.$this->session->userdata['userdata']['month'].'-'.$this->session->userdata['userdata']['day'];
            $data = array(
                'buying_from' => $this->session->userdata['userdata']['buying_from'],
                'email' => $email,
                'password' => $password,
                'pre_approved' => $this->session->userdata['userdata']['pre_approved'],
                'firstname' => $this->session->userdata['userdata']['firstname'],
                'lastname' => $this->session->userdata['userdata']['lastname'],
                'pre_tax_income' => $this->session->userdata['userdata']['pre_tax_income'],
                'other_income' => $this->session->userdata['userdata']['other_income'],
                'cemployee' => $this->session->userdata['userdata']['cemployee'],
                'job_title' => $this->session->userdata['userdata']['job_title'],
                'month' => $this->session->userdata['userdata']['month'],
                'day' => $this->session->userdata['userdata']['day'],
                'years' => $this->session->userdata['userdata']['years'],
                'amount' => $this->session->userdata['userdata']['amount'],
                'years_emt' => $this->session->userdata['userdata']['years_emt'],
                'type' => $this->session->userdata['userdata']['type'],
                'dob'=>$dob,
                'add_date' => date('Y-m-d H:i:s')
            );

            $this->session->set_userdata('userdata', $data);
        }
        // echo '<pre>';
        // print_r($this->session->userdata());
        $result = $this->loan_model->add_loan($this->session->userdata['userdata']);

        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0)
            $this->load->view('step10_view');
        else {

            $error = 'Your email already exist';
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));

            $this->load->view('step9_view');
        }
    }

}
