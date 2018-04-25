<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Refinance extends CI_Controller {

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

        $this->template->view('refinance_step1');
    }

    public function refinancestep1() {

        $this->load->view('refinance_step1');
    }

    public function refinancestep2($id = 0) {
        if ($id) {
            $data = array(
                'currently_owe' => $id
            );
            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        //print_r($this->session->userdata());
        $this->load->view('refinance_step2');
    }

    public function refinancestep3($id = 0) {
        if ($id) {
            $data = array(
                'monthly_payment' => $id
            );

            $this->session->set_userdata($data);
        }
        // echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('refinance_step3');
    }

    public function refinancestep4($id = 0,$current_milage=0) {
        if ($id) {
            $data = array(
                'vin' => $id,
                'current_milage' =>$current_milage
            );

            $this->session->set_userdata($data);
        }


        //echo '<pre>';
        // print_r($this->session->userdata());
        $data['state'] = $this->loan_model->get_state();
        if (isset($this->session->userdata['state'])) {
            $data['city'] = $this->loan_model->get_city($this->session->userdata['state']);
        }
        $this->load->view('refinance_step4', $data);
    }

    public function refinancestep5($firstname = '', $lastname = '', $address = '', $city = '', $state = '') {

        if ($firstname) {
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'address' => $address,
                'city' => $city,
                'state' => $state
            );

            $this->session->set_userdata($data);
        }
        
        $this->load->view('refinance_step5');
    }

    public function getcity($state_id = 0) {

        $city = $this->loan_model->get_city($state_id);
        echo json_encode($city);
    }

    public function refinancestep6($month = 0, $day = 0, $year = 0, $ssn = '') {
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
        
        $this->load->view('refinance_step6');
        //die;
    }

    public function refinancestep7($email = '', $phone = '') {
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

        unset($this->session->userdata['panel']);
        unset($this->session->userdata['__ci_last_regenerate']);
        unset($this->session->userdata['userdata']);
        $result = $this->loan_model->add_refinance($this->session->userdata());

        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0) {
            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call (409) 220-0612';
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
            $this->session->userdata['userdata'] = '';
            $this->session->userdata['currently_owe'] = '';
            $this->session->userdata['monthly_payment'] = '';
            $this->session->userdata['vin'] = '';
            $this->session->userdata['current_milage'] = '';
            $this->session->userdata['firstname'] = '';
            $this->session->userdata['lastname'] = '';

            $this->session->userdata['state'] = '';
            $this->session->userdata['city'] = '';
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

            $this->load->view('refinancestep6_view');
        }
    }

}
