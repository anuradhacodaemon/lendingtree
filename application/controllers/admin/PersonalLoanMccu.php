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
            $config['base_url'] = BASE_URL . MASTERADMIN . '/personalloanmccu';
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

    public function isJson($string) {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
     }
    
    //
    public function export() {
        
        $arr = array();
        $arr = $this->get_header(); //this is the Header of CSV file
        $arr = array($arr);
        $data2 = $this->Personalloanmccu_model->get_userall();
       
        // die;
        $type = '';
        $years = '';
        $a = array();
        foreach ($data2 as $k => $v) {  
         
            $country = $street = $city = $state = $zipcode = "--";
            $resp = $this->isJson($v['p_address']);
         
            if($resp)
            {                                    
                $full_address = json_decode($v['p_address']);
                 $address = $full_address->street_line;
                $country = (!empty($full_address->country)) ? $full_address->country : '--';
                $city = $full_address->city;
                $state = $full_address->state;
                $zipcode = $full_address->zip_code;
            }

              
                $personal_country = $personal_street = $personal_city = $personal_state = $personal_zipcode = "--";
                $personal_resp = $this->isJson($v['personal_refrence_address']);
             
                if($personal_resp)
                {                                    
                    $personal_full_address = json_decode($v['personal_refrence_address']);
                    $personal_address = $personal_full_address->street_line;
                    $personal_country = (!empty($personal_full_address->country)) ? $personal_full_address->country : '--';
                    $personal_city = $personal_full_address->city;
                    $personal_state = $personal_full_address->state;
                    $personal_zipcode = $personal_full_address->zip_code;
                }

                  
                    $relatives_country = $relatives_street = $relatives_city = $relatives_state = $relatives_zipcode = "--";
                    $relatives_resp = $this->isJson($v['relatives_live_address']);
                 
                    if($relatives_resp)
                    {                                    
                        $relatives_full_address = json_decode($v['relatives_live_address']);
                        $relatives_address = $relatives_full_address->street_line;
                        $relatives_country = (!empty($relatives_full_address->country)) ? $relatives_full_address->country : '--';
                        $relatives_city = $relatives_full_address->city;
                        $relatives_state = $relatives_full_address->state;
                        $relatives_zipcode = $relatives_full_address->zip_code;
                    }
                   
                    $cosigner_country = $cosigner_street = $cosigner_city = $cosigner_state = $cosigner_zipcode = "--";
                    $cosigner_resp = $this->isJson($v['cosigner_address']);
                 
                    if($cosigner_resp)
                    {                                    
                        $cosigner_full_address = json_decode($v['cosigner_address']);
                        $cosigner_address = $cosigner_full_address->street_line;
                        $cosigner_country = (!empty($cosigner_full_address->country)) ? $cosigner_full_address->country : '--';
                        $cosigner_city = $cosigner_full_address->city;
                        $cosigner_state = $cosigner_full_address->state;
                        $cosigner_zipcode = $cosigner_full_address->zip_code;
                    }                    

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
            $a[9] = $address;
            $a[10] = $city;
            $a[11] = $state;
            $a[12] = $zipcode;
            $a[13] = $country;
            $a[14] = $v['personal_refrence'];
            $a[15] = $personal_address;
            $a[16] = $personal_city;
            $a[17] = $personal_state;
            $a[18] = $personal_zipcode;
            $a[19] = $personal_country;
            $a[20] = $v['personal_refrence_phone'];
            $a[21] = $v['supervisor_name'];
            $a[22] = $v['how_long_your_working'];
            $a[23] = $v['address_of_business'];
            $a[24] = $v['military_involvement'];
            $a[25] = $v['previous_working_years'];
            $a[26] = $v['nearest_relative'];
            $a[27] = $v['relation_with_relative'];
            $a[28] = $relatives_address;
            $a[29] = $relatives_city;
            $a[30] = $relatives_state;
            $a[31] = $relatives_zipcode;
            $a[32] = $relatives_country;
            $a[33] = $v['laid_off_for_payment_waived'];
            $a[34] = $v['having_any_other_source_income'];
            $a[35] = $v['if_source_income_yes_what_isit'];
            $a[36] = $v['if_source_income_yes_monthly_income'];
            $a[37] = date('d-m-Y',strtotime($v['date_of_application']));
            $a[38] = $v['add_co_signers_onto_loan'];
            $a[39] = $v['cosigner_first_name'] . ' ' . $v['cosigner_last_name'];
            $a[40] = $v['cosigner_phone'];
            $a[41] = $v['cosigner_email'];
            $a[42] = $v['cosigner_marital_status'];
            $a[43] = $cosigner_address;
            $a[44] = $cosigner_city;
            $a[45] = $cosigner_state;
            $a[46] = $cosigner_zipcode;
            $a[47] = $cosigner_country;
            $a[48] = $v['cosigner_years_been_there'];
            $a[49] = $v['cosigner_monthly_pay'];
            $a[50] = $v['cosigner_nearest_relative'];
            $a[51] = $v['cosigner_relationship'];
            $a[52] = $v['domain'];
            $arr[] = $a;
        }
     //   echo '<pre>';
     //   print_r($arr);
     //   exit;
        $filename = "personalloan.csv";
        $fp = fopen('php://output', 'w');       
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        fputcsv($fp, $arr[0]);
        unset($arr[0]);
        foreach ($arr as $user) {
            fputcsv($fp, $user);
        }
        fclose($fp);

   
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
    //
    public function get_header()
    {
        $arr = ["First Name", "Last Name", "Phone", "Email", "Type of Loan", "Requested Amount", "Current Employer", "Gross Monthly Income", "Job Title"
        ,"Address","City","State","Zip Code","Country", "Personal Reference", "Personal Reference Address","Personal Reference City","Personal Reference State","Personal Reference Zip Code","Personal Reference Country", "Personal Reference Phone", "Supervisor Name", "Working Years", "Address of Business",
        "Miltary Involvement", "Previous Employment Years",
        "Nearest Relative", "Relatives Relation", "Relative Address","Relative City","Relative State","Relative Zip Code","Relative Country","Payment Laid Off | Payment Waived", "Having Second Income", "Income Source Name",
        "Second Income Source Monthly", "Date Of Application", "Added Cosigner", "Cosigner's Full Name", "Cosigner's Phone", 
        "Cosigner's Email", "Cosigner's Marital Status", "Cosigner's Adress","Cosigner's City","Cosigner's State","Cosigner's Zip Code","Cosigner's Country","Cosigner's Living there", "Cosginer's Monthly Pay", "Cosigner's Nearest Relative",
        "Cosigner's Relationship with",
        "Domain"
            ];
        return $arr;    

    }


    //========================================END OF FILE=====================================================
}