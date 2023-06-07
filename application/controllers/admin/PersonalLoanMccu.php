<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PersonalLoanMccu extends CI_Controller {

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
        $this->load->model('admin/Personalloanmccu_model');
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

        if (isset($_GET['type'])) {
            $filterData['type'] = $_GET['type'];
            //$this->session->set_userdata('client_id', $_POST['client_id']);
        } else {
            $filterData['type'] = '';
        }
        if (isset($_GET['requested_amount'])) {
            $filterData['requested_amount'] = $_GET['requested_amount'];
        } else {
            $filterData['requested_amount'] = '';
        }

        if (isset($_GET['domain'])) {
            $filterData['domain'] = $_GET['domain'];
        } else {
            $filterData['domain'] = '';
        }
        if (isset($_GET['job_title'])) {
            $filterData['job_title'] = $_GET['job_title'];
        } else {
            $filterData['job_title'] = '';
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
            /*echo "<pre>";
            print_r($filterData);exit;*/
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $config['base_url'] = BASE_URL . MASTERADMIN . '/autoloanmccu';
            $config['total_rows'] = $this->Personalloanmccu_model->get_count_user($filterData);
            $page = (is_numeric($record_num)) ? $record_num : 0;
            $config['reuse_query_string'] = TRUE;
            $config['use_page_numbers'] = TRUE;
            if ($page > 0)
                $page = ($page - 1) * $config['per_page'];
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $data["page_no"] = $page;
            $data["total_rows"] = $config['total_rows'];
            $data["record_limit"] = $config['per_page'];
            $data["userlisting"] = $this->Personalloanmccu_model->get_user('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/personalloanmccu/index', array_merge($data, $filterData));
        }
    }
    //
    public function details($userId = 0) {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
            $data['userDetails'] = $this->Personalloanmccu_model->get_userdetails($userId);
            /* Load the view using template */
            $this->template->view('admin/personalloanmccu/userdetails', $data);
        }
    }
    //
    public function pdfLoan($id = 0) 
    {
        $data['userDetails'] = $this->Personalloanmccu_model->get_userdetails($id);
        $name = $data['userDetails']['first_name'] . '_' . $data['userDetails']['p_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('mccu_auto_view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    //
    public function export() {
        
        $arr = array();
        $arr[] = "First Name";
        $arr[] = "Last Name";
        $arr[] = "Phone";
        $arr[] = "Email";
        $arr[] = "Type of Loan";
        $arr[] = "Requested Amount";
        $arr[] = "Current Employer";
        $arr[] = "Gross Monthly Income";
        $arr[] = "Job Title";
        $arr[] = "Domain";
        $arr[] = "Address";
       /* $arr[] = "State";
        $arr[] = "City";
        $arr[] = "Zip";
        $arr[] = "SSN";*/
        //}
        $arr = array($arr);
        $data2 = $this->Personalloanmccu_model->get_userall();
        // die;
        $type = '';
        $years = '';
        $a = array();
        foreach ($data2 as $k => $v) {  
            
            if ($v['loan_type'] == 1)
            $type = 'New Car Purchase';
            elseif ($v['loan_type'] == 2)
                $type = 'Used Car Purchase';
            elseif ($v['loan_type'] == 3)
                $type = 'Refinance';
            elseif ($v['loan_type'] == 4)
                $type = 'Lease Buy Out';
            else
                $type = '';
        
            if ($v['requested_amount'])
                $years = $v['requested_amount'];
            else
            $years = '';
            $a[0] = $v['first_name'];
            $a[1] = $v['last_name'];
            $a[2] = $v['p_phone'];
            $a[3] = $v['p_email'];
            $a[4] = $type;
            $a[5] = $years;
            $a[6] = $v['current_employer'];
            $a[7] = '$'.number_format($v['employment_monthly_income']);
            $a[8] = $v['job_title'];
            $a[9] = $v['domain'];
            $a[10] = $v['p_address'];
            
            /*array_push($a, $v['state']);
            array_push($a, $v['city']);
            array_push($a, $v['zip']);
            array_push($a, $v['ssn']);*/
            $arr[] = $a;
        }
        /*echo '<pre>';
        print_r($arr);
        exit;*/
        $filename = "autoloans.csv";
        $fp = fopen('php://output', 'w');       
        fputcsv($fp, $arr[0]);
        unset($arr[0]);
        foreach ($arr as $user) {
            fputcsv($fp, $user);
        }
        fclose($fp);
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
   
    }
    //
    public function delete_inactive($p_id=0)
    {
        $this->Personalloanmccu_model->updateactiveStatus($p_id);
    }
    //
    public function deleteall()
    {
        foreach($this->input->post('c') as $k=>$v)
        {
             $this->Personalloanmccu_model->updateactiveStatus($v);
        }
    }
    //
    public function updatestatus()
    {
        $this->Personalloanmccu_model->updateStatus($this->input->post('lendId'),$this->input->post('status'));
    }



    //========================================END OF FILE=====================================================
}