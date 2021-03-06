<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_user extends CI_Controller {

    /**
      @Name User Controller
      Description:  Class represents controller for dispatcher login
      Operations : login,logout ,dashboard
      @Author : Anuradha Chakraborti
      For Codaemon Softwares Pvt. Ltd.
      For project - Contact Management Search
      @params
      @return
      @since    6-11-2017
      @createdDate 6-11-2017
      @link : http:xyz.com/admin/user
     *
     */
    public function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model('admin/users');
        $this->load->library('pagination');
        $this->load->helper('csv');
    }

    /* This method used view contact detail after login else redirect to login page.

     */

    public function index() {

        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {


            if (isset($_GET))
                $this->session->set_userdata('export', $_GET);

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

            if (isset($_GET['type'])) {
                $filterData['type'] = $_GET['type'];
                //$this->session->set_userdata('client_id', $_POST['client_id']);
            } else {
                $filterData['type'] = '';
            }
            if (isset($_GET['years_emt'])) {
                $filterData['years_emt'] = $_GET['years_emt'];
            } else {
                $filterData['years_emt'] = '';
            }
            if (isset($_GET['buying_from'])) {
                $filterData['buying_from'] = $_GET['buying_from'];
            } else {
                $filterData['buying_from'] = '';
            }
            if (isset($_GET['pre_approved'])) {
                $filterData['pre_approved'] = $_GET['pre_approved'];
            } else {
                $filterData['pre_approved'] = '';
            }
            if (isset($_GET['amount1'])) {
                $filterData['amount1'] = $_GET['amount1'];
            } else {
                $filterData['amount1'] = '';
            }
            if (isset($_GET['amount2'])) {
                $filterData['amount2'] = $_GET['amount2'];
            } else {
                $filterData['amount2'] = '';
            }
            if (isset($_GET['pre_tax_income1'])) {
                $filterData['pre_tax_income1'] = $_GET['pre_tax_income1'];
            } else {
                $filterData['pre_tax_income1'] = '';
            }
            if (isset($_GET['pre_tax_income2'])) {
                $filterData['pre_tax_income2'] = $_GET['pre_tax_income2'];
            } else {
                $filterData['pre_tax_income2'] = '';
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

            $config['base_url'] = BASE_URL . MASTERADMIN . '/user';

            $config['total_rows'] = $this->users->get_count_user($filterData);
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
            $data["userlisting"] = $this->users->get_user('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/user/index', array_merge($data, $filterData));
        }
    }

    /* This function is used from showing details in admin panel */

    public function details($userId = 0) {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
            $data['userDetails'] = $this->users->get_userdetails($userId);
            /* Load the view using template */
            $this->template->view('admin/user/userdetails', $data);
        }
    }

    public function export() {
     
       
        $arr=array();
        $arr[]="First Name";
        $arr[]="Last Name";
        $arr[]="Email";
        if($this->session->userdata['export']['type'] !='')
            $arr[]="Type of Loan";
        if($this->session->userdata['export']['years_emt'] !='')
            $arr[]="Desired Term of Loan";
        if($this->session->userdata['export']['buying_from'] !='')
            $arr[]="Buying from";
          if($this->session->userdata['export']['pre_approved'] !='')
            $arr[]="Pre approved";
        if($this->session->userdata['export']['amount1'] !='' || $this->session->userdata['export']['amount2'] !='' )
            $arr[]="Down payment";
      
         if($this->session->userdata['export']['pre_tax_income1'] !='' || $this->session->userdata['export']['pre_tax_income2'] !='' )
            $arr[]="Yearly Income";
       
         if($this->session->userdata['export']['start_date'] !='' || $this->session->userdata['export']['end_date'] !='' )
            $arr[]="DOB";
          $arr=array($arr);
      
     
       $data2 = $this->users->get_userall();
     foreach ($data2 as $k => $v) {
            
        }
        
      /*  foreach ($arr as $file) {
    $result = [];
    array_walk_recursive($file, function($item) use (&$result) {
        $result[] = $item;
    });
    
    fputcsv($fp, $result);
    
}*/
        //fputcsv($fp, $arr);
   /*$filename = "loans.csv";
        $fp = fopen('php://output', 'w');
        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename=' . $filename);
        $num_column = count($arr);
        $data2 = $this->users->get_userall();
        foreach ($data2 as $k => $v) {
            fputcsv($fp, $v);
        }
    * 
    */
    } 

    public function exportbk() {
        $this->load->helper('url');
        $this->load->helper('csv');
        $query = $this->db->query('SELECT * FROM lend_loan');
        $num = $query->num_fields();
        $var = array();
        $i = 1;
        $fname = "";
        while ($i <= $num) {
            $test = $i;
            $value = $this->input->post($test);

            if ($value != '') {
                $fname = $fname . " " . $value;
                array_push($var, $value);
            }
            $i++;
        }

        $fname = trim($fname);

        $fname = str_replace(' ', ',', $fname);

        $this->db->select($fname);
        $quer = $this->db->get('lend_loan');

        query_to_csv($quer, TRUE, 'Products_' . date('dMy') . '.csv');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */