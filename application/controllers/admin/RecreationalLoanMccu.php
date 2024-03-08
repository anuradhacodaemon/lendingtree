<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class RecreationalLoanMccu extends CI_Controller {

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
        $this->load->model('admin/Recreationalloanmccu_model');
        $this->load->library('pagination');
        $this->load->helper('csv');
    }

    /* This method used view contact detail after login else redirect to login page.
     */

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
            $config['base_url'] = BASE_URL . MASTERADMIN . '/recreationalloanmccu';
            $config['total_rows'] = $this->Recreationalloanmccu_model->get_count_user($filterData);
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
            $data["userlisting"] = $this->Recreationalloanmccu_model->get_user('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/recreationalloanmccu/index', array_merge($data, $filterData));
        }
    }
    //
    public function details($userId = 0) {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
            $data['userDetails'] = $this->Recreationalloanmccu_model->get_userdetails($userId);
            /* Load the view using template */
            $this->template->view('admin/recreationalloanmccu/userdetails', $data);
        }
    }
    //
    public function pdfLoan($id = 0) 
    {
        $data['userDetails'] = $this->Recreationalloanmccu_model->get_userdetails($id);
        $name = $data['userDetails']['first_name'] . '_' . $data['userDetails']['rc_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('mccu_auto_view_fileloan_recreational_admin', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    //
    public function export() {
        
        $arr = array();
        $arr = $this->get_header(); //this is the Header of CSV file
        $arr = array($arr);
        $data2 = $this->Recreationalloanmccu_model->get_userall();
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
            elseif ($v['loan_type'] == 5)
                $type = "Personal Loan";
            elseif ($v['loan_type'] == 6)
                $type = 'Recreational Loan';
            else
                $type = '';

            if($v['coverage'] == 'A')
                    { 
                    $coverage = 'A:Life Enhanced';
            }elseif($v['coverage'] == 'B')
                    {  
                    $coverage = 'B:Life Enhanced & Disablity'; 
            }elseif($v['coverage'] == 'C')
                    { 
                    $coverage = 'C:Life Enhanced & Inventory Unemployment'; 
            }elseif($v['coverage'] == 'D')
                    { 
                    $coverage = 'D:Life Enhanced & Disablity & Inventory Unemployment'; 
            }else
                    { 
                    $coverage='-';
            }
        
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
            $a[9] = $v['p_address'];
            //
            $a[10] = $v['personal_refrence'];
            $a[11] = $v['personal_refrence_address'];
            $a[12] = $v['personal_refrence_phone'];
            $a[13] = $v['supervisor_name'];
            $a[14] = $v['how_long_your_working'];
            $a[15] = $v['address_of_business'];
            $a[16] = $v['military_involvement'];
            $a[17] = $v['previous_working_years'];
            $a[18] = $v['nearest_relative'];
            $a[19] = $v['relation_with_relative'];
            $a[20] = $v['relatives_live_address'];
            $a[21] = $v['laid_off_for_payment_waived'];
            $a[22] = $v['having_any_other_source_income'];
            $a[23] = $v['if_source_income_yes_what_isit'];
            $a[24] = $v['if_source_income_yes_monthly_income'];
            $a[25] = date('d-m-Y',strtotime($v['date_of_application']));
            $a[26] = $v['add_co_signers_onto_loan'];
            $a[27] = $v['cosigner_first_name'] . ' ' . $v['cosigner_last_name'];
            $a[28] = $v['cosigner_phone'];
            $a[29] = $v['cosigner_email'];
            $a[30] = $v['cosigner_marital_status'];
            $a[31] = $v['cosigner_address'];
            $a[32] = $v['cosigner_years_been_there'];
            $a[33] = $v['cosigner_monthly_pay'];
            $a[34] = $v['cosigner_nearest_relative'];
            $a[35] = $v['cosigner_relationship'];
            $a[36] = $v['domain'];
            $a[37] = $coverage;
            $arr[] = $a;
        }
        /*echo '<pre>';
        print_r($arr);
        exit;*/
        $filename = "recreational.csv";
        $fp = fopen('php://output', 'w');       
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        foreach ($arr as $file) {
            $result = [];
            array_walk_recursive($file, function($item) use (&$result) {
                $result[] = $item;
            });
            fputcsv($fp, $result);
        }
   
    }
    //
    public function delete_inactive($rc_id=0)
    {
        $this->Recreationalloanmccu_model->updateactiveStatus($rc_id);
    }
    //
    public function deleteall()
    {
        foreach($this->input->post('c') as $k=>$v)
        {
             $this->Recreationalloanmccu_model->updateactiveStatus($v);
        }
    }
    //
    public function updatestatus()
    {
        $this->Recreationalloanmccu_model->updateStatus($this->input->post('lendId'),$this->input->post('status'));
    }
    //
    public function get_header()
    {
         $arr = ["First Name", "Last Name", "Phone", "Email", "Type of Loan", "Requested Amount", "Current Employer", "Gross Monthly Income", "Job Title"
         ,"Address", "Personal Reference", "Personal Reference Address", "Personal Reference Phone", "Supervisor Name", "Working Years", "Address of Business",
         "Miltary Involvement", "Previous Employment Years",
         "Nearest Relative", "Relatives Relation", "Relative Address", "Payment Laid Off | Payment Waived", "Having Second Income", "Income Source Name",
         "Second Income Source Monthly", "Date Of Application", "Added Cosigner", "Cosigner's Full Name", "Cosigner's Phone", 
         "Cosigner's Email", "Cosigner's Marital Status", "Cosigner's Adress", "Cosigner's Living there", "Cosginer's Monthly Pay", "Cosigner's Nearest Relative",
         "Cosigner's Relationship with",
         "Domain","Coverage"
             ];
         return $arr;    
 
     }



    //========================================END OF FILE=====================================================
}