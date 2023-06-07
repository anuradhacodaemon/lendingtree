<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AutoLoanMccu extends CI_Controller {

    /**
      *@Name User Controller
      *Description:  Class represents controller for dispatcher login
      *Operations : login,logout ,dashboard
      *@Author : Haroon
      *For Codaemon Softwares Pvt. Ltd.
      *For project - Contact Management Search
      *@params
      *@return
      *@since    6-11-2017
      *@createdDate 6-11-2017
      *@link : http:xyz.com/admin/user
     *
     */
    public function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model('admin/homeloan');
        $this->load->model('admin/Autoloanmccu_model');
        $this->load->library('pagination');
        $this->load->helper('csv');
    }

    /* This method used view contact detail after login else redirect to login page.
     */

     public function index() {
        ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
            if (isset($_GET))
                $this->session->set_userdata('export', $_GET);
            else
                $this->session->unset_userdata('export');
            
            if (isset($_GET['start_date'])) {
                if (!empty($_GET['start_date']))
                    $filterData['start_date'] = date('Y-m-d', strtotime($_GET['start_date']));
                //$this->session->set_userdata('start_date', date('Y-m-d', strtotime($_POST['start_date'])));
                else
                    $filterData['start_date'] = '';
            }
            if (isset($_GET['end_date'])) {
                if (!empty($_GET['end_date']))
                    $filterData['end_date'] = date('Y-m-d', strtotime($_GET['end_date']));
                else
                    $filterData['end_date'] = '';
            }
            if (isset($_GET['firstname'])) {
                $filterData['firstname'] = $_GET['firstname'];
            } else {
                $filterData['firstname'] = '';
            }
            if (isset($_GET['lastname'])) {
                $filterData['lastname'] = $_GET['lastname'];
            } else {
                $filterData['lastname'] = '';
            }
            if (isset($_GET['email'])) {
                $filterData['email'] = $_GET['email'];
            } else {
                $filterData['email'] = '';
            }
            if (isset($_GET['currently_owe1'])) {
                $filterData['currently_owe1'] = $_GET['currently_owe1'];
                //$this->session->set_userdata('client_id', $_POST['client_id']);
            } else {
                $filterData['currently_owe1'] = '';
            }
            if (isset($_GET['currently_owe2'])) {
                $filterData['currently_owe2'] = $_GET['currently_owe2'];
                //$this->session->set_userdata('client_id', $_POST['client_id']);
            } else {
                $filterData['currently_owe2'] = '';
            }
            if (isset($_GET['monthly_payment1'])) {
                $filterData['monthly_payment1'] = $_GET['monthly_payment1'];
            } else {
                $filterData['monthly_payment1'] = '';
            }
            if (isset($_GET['monthly_payment2'])) {
                $filterData['monthly_payment2'] = $_GET['monthly_payment2'];
            } else {
                $filterData['monthly_payment2'] = '';
            }
            if (isset($_GET['domain'])) {
                $filterData['domain'] = $_GET['domain'];
            } else {
                $filterData['domain'] = '';
            }
            if (isset($_GET['vin'])) {
                $filterData['vin'] = $_GET['vin'];
            } else {
                $filterData['vin'] = '';
            }
            if (isset($_GET['current_milage1'])) {
                $filterData['current_milage1'] = $_GET['current_milage1'];
            } else {
                $filterData['current_milage1'] = '';
            }
            if (isset($_GET['current_milage2'])) {
                $filterData['current_milage2'] = $_GET['current_milage2'];
            } else {
                $filterData['current_milage2'] = '';
            }
            if (isset($_GET['search'])) {
                $filterData['search'] = $_GET['search'];
            } else {
                $filterData['search'] = '';
            }
            if (isset($_GET['record_limit'])) {
                $config['per_page'] = $_GET['record_limit'];
            } else {
                $config['per_page'] = RECORD_LIMIT;
            }
            if (isset($_GET['sort_by'])) {
                $data['sort_by'] = $sortData['sort_by'] = $_GET['sort_by'];
            } else {
                $data['sort_by'] = $sortData['sort_by'] = '';
            }
            if (isset($_GET['sort_direction'])) {
                $data['sort_direction'] = $sortData['sort_direction'] = $_GET['sort_direction'];
            } else {
                $data['sort_direction'] = $sortData['sort_direction'] = '';
            }
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $config['base_url'] = BASE_URL . MASTERADMIN . '/autoloanmccu';
            $config['total_rows'] = $this->Autoloanmccu_model->get_count_user($filterData);
            $page = ($record_num) ? $record_num : 0;
            $config['reuse_query_string'] = TRUE;
            $config['use_page_numbers'] = TRUE;
            if ($page > 0)
                $page = ($page - 1) * $config['per_page'];
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $data["page_no"] = $page;
            $data["total_rows"] = $config['total_rows'];
            $data["record_limit"] = $config['per_page'];
            $data["userlisting"] = $this->Autoloanmccu_model->get_user('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/autoloanmccu/index', array_merge($data, $filterData));
        }
    }



    //========================================END OF FILE=====================================================
}