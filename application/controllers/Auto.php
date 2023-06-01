<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
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

        $this->template->view('mccu/auto/auto_step1_view');
    }

    public function step1() {

        //$this->load->view('step1_view');
        $this->load->view('default/mccu/auto/auto_step1_view');
        //$this->load->view('default/mccu/auto/auto_step8_view');
        //$this->load->view('default/mccu/auto/auto_step9_view');
        //$this->load->view('default/mccu/auto/auto_step10_view');
        //$this->load->view('default/mccu/auto/auto_step10_1_view');
        //$this->load->view('default/mccu/auto/auto_step11_view');
        //$this->load->view('default/mccu/auto/auto_step11_1_view');
        //$this->load->view('default/mccu/auto/auto_step12_view');
        //$this->load->view('default/mccu/auto/auto_step13_view');
        //$this->load->view('default/mccu/auto/auto_step14_view');
        //$this->load->view('default/mccu/auto/auto_step15_view');
        //$this->load->view('default/mccu/auto/auto_step16_view');
        //$this->load->view('default/mccu/auto/auto_step17_view');
        //$this->load->view('default/mccu/auto/auto_step18_view');
        //$this->load->view('default/mccu/auto/auto_step19_view');
        //$this->load->view('default/mccu/auto/auto_step20_view');
        //$this->load->view('default/mccu/auto/auto_step21_view');
        //$this->load->view('default/mccu/auto/auto_step22_view');
        //$this->load->view('default/mccu/auto/auto_step22_1_view');
        //$this->load->view('default/mccu/auto/auto_step23_view');
        //$this->load->view('default/mccu/auto/auto_step24_view');
        //$this->load->view('default/mccu/auto/auto_step25_view');
        //$this->load->view('default/mccu/auto/auto_step26_view');
        //$this->load->view('default/mccu/auto/auto_step27_view');
        //$this->load->view('default/mccu/auto/auto_step28_view');
        //$this->load->view('default/mccu/auto/auto_step29_view');
        //$this->load->view('default/mccu/auto/auto_step30_view');
        //$this->load->view('default/mccu/auto/auto_step31_view');
        //$this->load->view('default/mccu/auto/auto_step32_view');
        //$this->load->view('default/mccu/auto/auto_step32_1_view');
        //$this->load->view('default/mccu/auto/auto_step33_view');
        //$this->load->view('default/mccu/auto/auto_step34_view');
        //$this->load->view('default/mccu/auto/auto_step35_view');
        //$this->load->view('default/mccu/auto/auto_step36_view');
        //$this->load->view('default/mccu/auto/auto_step37_view');
        //$this->load->view('default/mccu/auto/auto_step38_view');
        //$this->load->view('default/mccu/auto/auto_step39_view');
        //$this->load->view('default/mccu/auto/auto_step40_view');
        //$this->load->view('default/mccu/auto/auto_step41_view');
        //$this->load->view('default/mccu/auto/auto_step42_view');
        //$this->load->view('default/mccu/auto/auto_step43_view');
    }
    /**
     * My code starts from here
     * 
     * 
    */
    public function auto_step()
    {
        $step = $this->input->post('auto_step');
        if($step == 1)
        {
            $rules = array(
                array('field'=>'type_loan','label'=>'Loan Type','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('type_loan')) 
                {
                    $data = array(
                        'type' => $this->input->post('type_loan')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=2';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                'type_loan' => form_error('type_loan')
                );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 2)
        {
            $rules = array(
                array('field'=>'req_amt','label'=>'Required Amount','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('req_amt')) 
                {
                    $data = array(
                        'requested_amount ' => $this->input->post('req_amt')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=3';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                'req_amt' => form_error('req_amt')
                );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 3)
        {
            $rules = array(
                    array('field'=>'firstname','label'=>'firstname','rules'=>'required'),
                    array('field'=>'lastname','label'=>'lastname','rules'=>'required'),
                    array('field'=>'phone','label'=>'phone','rules'=>'required|numeric')
                    );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('firstname')) 
                {
                    $data = array(
                        'first_name' => $this->input->post('firstname'),
                        'last_name' => $this->input->post('lastname'),
                        'p_phone' => $this->input->post('phone')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=4';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                'firstname' => form_error('firstname'),
                'lastname' => form_error('lastname'),
                'phone' => form_error('phone'),
                );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 4)
        {
            //echo $this->input->post('marital_status');
            $this->form_validation->set_rules('marital_status', 'Radio Button', 'required');
            //$this->form_validation->set_rules('marital_status', 'Radio Button', 'required');
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('marital_status')) 
                {
                    $data = array(
                        'marital_status' => $this->input->post('marital_status')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=5';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'marital_status' => form_error('marital_status')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 5)
        {
            $rules = array(
                array('field'=>'address','label'=>'Address','rules'=>'required'),
                array('field'=>'living_there_years','label'=>'How long you are living there','rules'=>'required|numeric'),
                array('field'=>'monthly_pay','label'=>'Monthly pay','rules'=>'required|numeric')
                );
                $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('address')) 
                {
                    $data = array(
                        'p_address' => $this->input->post('address'),
                        'monthly_pay ' => $this->input->post('monthly_pay'),
                        'p_years_been_there_on_address' => $this->input->post('living_there_years')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=6';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'address' => form_error('address'),
                            'living_there_years' => form_error('living_there_years'),
                            'monthly_pay' => form_error('monthly_pay'),
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 6)
        {
            //echo $this->input->post('home_status');
            $this->form_validation->set_rules('home_status', 'Radio Button', 'required');
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('home_status')) 
                {
                    $data = array(
                        'buying_own_rent' => $this->input->post('home_status')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=7';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'home_status' => form_error('home_status')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 7)
        {
            $rules = array(
                array('field'=>'relative_firstname','label'=>'Relative Name','rules'=>'required'),
                array('field'=>'relative_relation','label'=>'Relative Relation','rules'=>'required'),
                array('field'=>'relative_address','label'=>'Relative Address','rules'=>'required'),
                array('field'=>'relatives_phone','label'=>'Relative Phone','rules'=>'required|numeric')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('relative_firstname')) 
                {
                    $data = array(
                        'nearest_relative' => $this->input->post('relative_firstname'),
                        'relation_with_relative' => $this->input->post('relative_relation'),
                        'relatives_live_address' => $this->input->post('relative_address'),
                        'relatives_phone' => $this->input->post('relatives_phone')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=8';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'relative_firstname' => form_error('relative_firstname'),
                            'relative_relation' => form_error('relative_relation'),
                            'relative_address' => form_error('relative_address'),
                            'relatives_phone' => form_error('relatives_phone')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 8)
        {
            $rules = array(
                array('field'=>'personal_refrence','label'=>'Personal Refrence','rules'=>'required'),
                array('field'=>'personal_refrence_phone','label'=>'Personal Refrence Phone','rules'=>'required|numeric'),
                array('field'=>'personal_refrence_address','label'=>'Personal Refrence Address','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('personal_refrence')) 
                {
                    $data = array(
                        'personal_refrence' => $this->input->post('personal_refrence'),
                        'personal_refrence_phone' => $this->input->post('personal_refrence_phone'),
                        'personal_refrence_address' => $this->input->post('personal_refrence_address')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=9';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'personal_refrence' => form_error('personal_refrence'),
                            'personal_refrence_phone' => form_error('personal_refrence_phone'),
                            'personal_refrence_address' => form_error('personal_refrence_address')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 9)
        {
            $rules = array(
                array('field'=>'employer_name','label'=>'Employer Name','rules'=>'required'),
                array('field'=>'employer_job_title','label'=>'Employer Job title','rules'=>'required'),
                array('field'=>'supervisor_name','label'=>'Supervisor name','rules'=>'required'),
                array('field'=>'working_years','label'=>'Working years','rules'=>'required|numeric'),
                array('field'=>'business_address','label'=>'Business address','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('employer_name')) 
                {
                    $data = array(
                        'current_employer' => $this->input->post('employer_name'),
                        'job_title' => $this->input->post('employer_job_title'),
                        'supervisor_name' => $this->input->post('supervisor_name'),
                        'how_long_your_working' => $this->input->post('working_years'),
                        'address_of_business' => $this->input->post('business_address')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=10';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'employer_name' => form_error('employer_name'),
                            'employer_job_title' => form_error('employer_job_title'),
                            'supervisor_name' => form_error('supervisor_name'),
                            'working_years' => form_error('working_years'),
                            'business_address' => form_error('business_address')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 10)
        {
            $rules = array(
                array('field'=>'monthly_income_pre_tax','label'=>'Monthly Income','rules'=>'required|numeric')
                );

            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                $config['upload_path'] = './userDocuments/'; // Specify the directory to save the uploaded files
                $config['allowed_types'] = 'pdf|png|txt'; // Specify the allowed file types
                $this->load->library('upload', $config);
                $Cfile = $_FILES['upload_user_doc']['name'];
                $name = explode(".", $_FILES['upload_user_doc']['name']);
                $file_ext = strtolower(end($name));
                $time = time();
                $new_name = $time . '.' . $file_ext;
                //success
                if ($this->input->post('monthly_income_pre_tax')) 
                {
                    $data = array(
                        'employment_monthly_income' => $this->input->post('monthly_income_pre_tax'),
                        'upload_document_proof' => $new_name
                    );

                    $this->session->set_userdata($data);
                }
              
                if(!empty($Cfile))
                {
                    if(!$this->upload->do_upload('upload_user_doc')) 
                    {
                        $error = $this->upload->display_errors();
                        $errors = array(
                            'monthly_income_pre_tax' => $error
                            );
                        $data['error'] = 1;
                        $data['error_messages'] = $errors;
                        echo json_encode($data);
                    }
                    else{
                            $upload_data = $this->upload->data();
                            $file_name = $upload_data['file_name'];
                            $file_path = $upload_data['full_path'];
                            $new_file_path = $upload_data['file_path'] . $new_name;
                            rename($file_path, $new_file_path);
                        }
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=10_1';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'monthly_income_pre_tax' => form_error('monthly_income_pre_tax')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }    
        }
        if($step == 10.1)
        {
            //echo $this->input->post('waiver_payment_value');
            $rules = array(
                array('field'=>'waiver_payment_value','label'=>'Waiver laid off','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('waiver_payment_value')) 
                {
                    $value = $this->input->post('waiver_payment_value');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'laid_off_for_payment_waived' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=11';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'waiver_payment_value' => form_error('waiver_payment_value')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 11)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'p_another_source','label'=>'Waiver laid off','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('p_another_source')) 
                {
                    $value = $this->input->post('p_another_source');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'having_any_other_source_income' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=11';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'p_another_source' => form_error('p_another_source')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 11.1)
        {
            $rules = array(
                array('field'=>'second_income_source','label'=>'Second Income Source','rules'=>'required'),
                array('field'=>'second_monthly_income','label'=>'Monthly Income From Second Source','rules'=>'required|numeric')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('second_income_source')) 
                {
                    $data = array(
                        'if_source_income_yes_what_isit' => $this->input->post('second_income_source'),
                        'if_source_income_yes_monthly_income' => $this->input->post('second_monthly_income')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=12';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'second_income_source' => form_error('second_income_source'),
                            'second_monthly_income' => form_error('second_monthly_income')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 12)
        {
            $rules = array(
                array('field'=>'previous_employer_name','label'=>'Previous Employer Name','rules'=>'required'),
                array('field'=>'previous_working_years','label'=>'How long you worked','rules'=>'required|numeric')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('previous_employer_name')) 
                {
                    $data = array(
                        'previous_employer' => $this->input->post('previous_employer_name'),
                        'previous_working_years' => $this->input->post('previous_working_years')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=13';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'previous_employer_name' => form_error('previous_employer_name'),
                            'previous_working_years' => form_error('previous_working_years')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 13)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_maker','label'=>'CO-MAKER/ENDORSER','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_maker')) 
                {
                    $value = $this->input->post('co_maker');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'are_you_co_maker_endoser' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=14';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_maker' => form_error('co_maker')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 14)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'miltary_involve','label'=>'Miltary Involvement','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('miltary_involve')) 
                {
                    $data = array(
                        'military_involvement' => $this->input->post('miltary_involve')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=15';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'miltary_involve' => form_error('miltary_involve')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 15)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'member_credit','label'=>'Credit Member','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('member_credit')) 
                {
                    $value = $this->input->post('member_credit');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'member_of_other_credit_unioin' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=16';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'member_credit' => form_error('member_credit')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 16)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'outstanding_judgement','label'=>'Any Outstanding Judgments','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('outstanding_judgement')) 
                {
                    $value = $this->input->post('outstanding_judgement');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'outstanding_judgements_against_you' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=17';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'outstanding_judgement' => form_error('outstanding_judgement')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 17)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'bankruptcy_adjustmnt','label'=>'Any Bankcruptcy Judgments','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('bankruptcy_adjustmnt')) 
                {
                    $value = $this->input->post('bankruptcy_adjustmnt');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'bankruptcy_debt_adjusutment' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=18';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'bankruptcy_adjustmnt' => form_error('bankruptcy_adjustmnt')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 18)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'force_closure','label'=>'Force Closure','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('force_closure')) 
                {
                    $value = $this->input->post('force_closure');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'forceclosure_lost_title_deed_in_past_7_year' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=19';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'force_closure' => form_error('force_closure')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 19)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'any_law_suit','label'=>'Party to any lawsuit','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('any_law_suit')) 
                {
                    $value = $this->input->post('any_law_suit');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'party_to_any_lawsuit' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=20';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'any_law_suit' => form_error('any_law_suit')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 20)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'other_than_us_citizen','label'=>'Citizen Other Than US','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('other_than_us_citizen')) 
                {
                    $value = $this->input->post('other_than_us_citizen');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'a_u_s_citizen_permanant_alien' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=21';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'other_than_us_citizen' => form_error('other_than_us_citizen')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 21)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'income_get_reduce_nxt_2y','label'=>'Is Income Reduced In Next 2 Year','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('income_get_reduce_nxt_2y')) 
                {
                    $value = $this->input->post('income_get_reduce_nxt_2y');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'any_income_listed_tobe_reduced_in_next_2_year' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=22';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'income_get_reduce_nxt_2y' => form_error('income_get_reduce_nxt_2y')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 22)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'i_represnt_accurate','label'=>'Consent','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('i_represnt_accurate')) 
                {
                    $value = $this->input->post('i_represnt_accurate');
                    $value2 = $this->input->post('date_of_application');
                    //$selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'i_represent_stated' => $value,
                        'date_of_application' => $value2
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=22.1';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                    'i_represnt_accurate' => form_error('i_represnt_accurate')
                    );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 22.1)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'on_die_cancel_loan','label'=>'Select One of them','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('on_die_cancel_loan')) 
                {
                    $value = $this->input->post('on_die_cancel_loan');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'die_or_ill_cancel_the_loan' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=23';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'on_die_cancel_loan' => form_error('on_die_cancel_loan')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 23)
        {
            echo "i am yet to do next step>>>".exit;
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'add_cosigner','label'=>'Select One of them','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('add_cosigner')) 
                {
                    $value = $this->input->post('add_cosigner');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'add_co_signers_onto_loan' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=24';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'add_cosigner' => form_error('add_cosigner')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        //END OF FUnction
    }

    /**
     * These functions only shows the view to the users
     * 
     * 
     */
    public function step2()
    {
        $this->load->view('default/mccu/auto/auto_step2_view');
    }
    //
    public function step3() 
    {
        $this->load->view('default/mccu/auto/auto_step3_view');
    }
    //
    public function step4()
    {
        $this->load->view('default/mccu/auto/auto_step4_view');
    }
    //
    public function step5()
    {
        $this->load->view('default/mccu/auto/auto_step5_view');
    }
    public function step6()
    {
        $this->load->view('default/mccu/auto/auto_step6_view');
    }
    public function step7()
    {
        $this->load->view('default/mccu/auto/auto_step7_view');
    }
    public function step8()
    {
        $this->load->view('default/mccu/auto/auto_step8_view');
    }
    public function step9()
    {
        $this->load->view('default/mccu/auto/auto_step9_view');
    }
    public function step10()
    {
        $this->load->view('default/mccu/auto/auto_step10_view');
    }
    public function step10_1()
    {
        $this->load->view('default/mccu/auto/auto_step10_1_view');
    }
    public function step11()
    {
        $this->load->view('default/mccu/auto/auto_step11_view');
    }
    public function step11_1()
    {
        $this->load->view('default/mccu/auto/auto_step11_1_view');
    }
    public function step12()
    {
        $this->load->view('default/mccu/auto/auto_step12_view');
    }
    public function step13()
    {
        $this->load->view('default/mccu/auto/auto_step13_view');
    }
    public function step14()
    {
        $this->load->view('default/mccu/auto/auto_step14_view');
    }
    public function step15()
    {
        $this->load->view('default/mccu/auto/auto_step15_view');
    }
    public function step16()
    {
        $this->load->view('default/mccu/auto/auto_step16_view');
    }
    public function step17()
    {
        $this->load->view('default/mccu/auto/auto_step17_view');
    }
    public function step18()
    {
        $this->load->view('default/mccu/auto/auto_step18_view');
    }
    public function step19()
    {
        $this->load->view('default/mccu/auto/auto_step19_view');
    }
    public function step20()
    {
        $this->load->view('default/mccu/auto/auto_step20_view');
    }
    public function step21()
    {
        $this->load->view('default/mccu/auto/auto_step21_view');
    }
    public function step22()
    {
        $this->load->view('default/mccu/auto/auto_step22_view');
    }
    public function step22_1()
    {
        $this->load->view('default/mccu/auto/auto_step22_1_view');
    }
    public function step23()
    {
        $this->load->view('default/mccu/auto/auto_step23_view');
    }
    public function step24()
    {
        $this->load->view('default/mccu/auto/auto_step24_view');
    }
    public function step25()
    {
        $this->load->view('default/mccu/auto/auto_step25_view');
    }
    public function step26()
    {
        $this->load->view('default/mccu/auto/auto_step26_view');
    }
    public function step27()
    {
        $this->load->view('default/mccu/auto/auto_step27_view');
    }
    public function step28()
    {
        $this->load->view('default/mccu/auto/auto_step28_view');
    }
    public function step29()
    {
        $this->load->view('default/mccu/auto/auto_step29_view');
    }
    public function step30()
    {
        $this->load->view('default/mccu/auto/auto_step30_view');
    }
    public function step31()
    {
        $this->load->view('default/mccu/auto/auto_step31_view');
    }
    public function step32()
    {
        $this->load->view('default/mccu/auto/auto_step32_view');
    }
    public function step32_1()
    {
        $this->load->view('default/mccu/auto/auto_step32_1_view');
    }
    public function step33()
    {
        $this->load->view('default/mccu/auto/auto_step33_view');
    }
    public function step34()
    {
        $this->load->view('default/mccu/auto/auto_step34_view');
    }
    public function step35()
    {
        $this->load->view('default/mccu/auto/auto_step35_view');
    }
    public function step36()
    {
        $this->load->view('default/mccu/auto/auto_step36_view');
    }
    public function step37()
    {
        $this->load->view('default/mccu/auto/auto_step37_view');
    }
    public function step38()
    {
        $this->load->view('default/mccu/auto/auto_step38_view');
    }
    public function step39()
    {
        $this->load->view('default/mccu/auto/auto_step39_view');
    }
    public function step40()
    {
        $this->load->view('default/mccu/auto/auto_step40_view');
    }
    public function step41()
    {
        $this->load->view('default/mccu/auto/auto_step41_view');
    }
    public function step42()
    {
        $this->load->view('default/mccu/auto/auto_step42_view');
    }
    public function step43()
    {
        $this->load->view('default/mccu/auto/auto_step43_view');
    }
    /**
     * My code ends here
     * 
     * 
    */
   

    /*public function step2($id = 0) {
        if ($id) {
            $data = array(
                'type' => $id
            );
            $this->session->set_userdata($data);
        }
        $this->load->view('step2_view');
    }*/

   

    /*public function step4($id = 0, $pre_approved = 0) {
        if ($id) {
            $data = array(
                'current_employer' => $id,
                'job_title' => $pre_approved
            );

            $this->session->set_userdata($data);
        }
        //$this->load->view('step4_view');
        $this->load->view('default/mccu/auto/auto_step4_view');
    }*/

    /*public function step5($pre_tax_income = 0) 
    {

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
        //$this->load->view('step5_view', $data);
        $this->load->view('default/mccu/auto/auto_step5_view');
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
        //$this->load->view('step6_view');
        $this->load->view('default/mccu/auto/auto_step6_view');
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
        
        //$this->load->view('step7_view');
        //$this->load->view('default/mccu/auto/auto_step7_view');
        $this->load->view('default/mccu/auto/auto_step8_view');
    }

    public function step8($email = '', $phone = '') {
        $this->load->view('default/mccu/auto/auto_step8_view');
        if ($email) {
            $data = array(
                'email' => $email,
                'phone' => $phone,
                'add_date' => date('Y-m-d H:i:s'),
                'domain' => $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'] . '/',
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

        unset($this->session->userdata['currently_owe']);
        unset($this->session->userdata['monthly_payment']);
        unset($this->session->userdata['vin']);
        unset($this->session->userdata['current_milage']);
        unset($this->session->userdata['property_type']);
        unset($this->session->userdata['userdata']);
        unset($this->session->userdata['loan_type']);
        unset($this->session->userdata['property_type']);
        unset($this->session->userdata['home_type']);
        unset($this->session->userdata['plan_type']);
        unset($this->session->userdata['property_value']);
        unset($this->session->userdata['mortgage_2']);
        unset($this->session->userdata['remaining_mortgage_bal']);
        unset($this->session->userdata['additional_cash']);
        unset($this->session->userdata['close_mortgage_bal']);
        unset($this->session->userdata['credit_score']);
        unset($this->session->userdata['military_served']);
        unset($this->session->userdata['va_loan']);
        unset($this->session->userdata['bankruptcy_or_foreclosure']);
        unset($this->session->userdata['bankruptcy_years']);
        unset($this->session->userdata['foreclosure_years']);
        unset($this->session->userdata['mortgage_bal']);
        unset($this->session->userdata['close_mortgage']);
        
        

        $result = $this->loan_model->add_loan($this->session->userdata());

        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0) {
            $getPhone = $this->loan_model->get_phone();
            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
            $this->session->set_flashdata('item', array('message' => '<font>' . $error . '</font>', 'class' => 'success'));
            
            $this->mailformat($this->session->userdata['firstname'], $this->session->userdata['lastname'], $this->session->userdata['email']);
            $this->sent_mail($result, $this->session->userdata['firstname'], $this->session->userdata['lastname']);
            
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
        } /*         * else {

          $error = 'Your email already exist';
          $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));

          $this->load->view('step6_view');
          }* */
   /* }*/

    /** Please dont change the mailformat because template is coming from database * */
    public function mailformat($firstname, $lastname, $email) {

        //$this->load->library('email');
        //$this->email->set_mailtype("html");
        /** $config = Array(
          'protocol' => 'sendmail',
          'smtp_host' => 'Smtp.gmail.com',
          'smtp_port' => 25,
          'smtp_user' => 'codaemon123',
          'smtp_pass' => 'codaemon1234',
          'smtp_timeout' => '4',
          'mailtype' => 'html',
          'charset' => 'iso-8859-1'
          );  * */
        $this->load->library('email');

        $this->email->set_newline("\r\n");
        $this->email->from(ADMINEMAIL, ADMINNAME);
        $this->email->to('' . $email . '');
        $this->email->subject("Beaumont Community Credit Union New Digital Application");
        $this->email->bcc('amit.jadhav@codaemonsoftwares.com,nisar.shaikh@codaemonsoftwares.com');
        $emailtemplate = $this->loan_model->get_emailtemplate();
        if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='localhost:82' )
	    {
            $url = 'http://'.$_SERVER['HTTP_HOST'].'/lendingtree';
        }   
        else{
                $url = $_SERVER['REQUEST_SCHEME'].'://' . str_replace('www.', '', $_SERVER['SERVER_NAME']);
            }

        $token = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'url' => $url,
            'domain' => BASE_URL,
            'copyright' => date('Y')
        );  // forming array to send in template
        $pattern = '[%s]';
        foreach ($token as $key => $val) {
            $varMap[sprintf($pattern, $key)] = $val;
        }

        $emailContent = strtr($emailtemplate[0]['message'], $varMap);
        $this->email->message($emailContent);
        $emailSend = $this->email->send();
        if ($emailSend) {
            //echo $this->email->print_debugger();
            return 1;
        }
        return 0;
    }

    public function mail_format_pdf($id = 0) {
        $link = explode('&', urldecode($id));
        $this->load->model('details');
        $data['userDetails'] = $this->loan_model->get_userdetailsloanpdf($link[0]);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['lend_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    public function mail_format_pdfdownload($id = 0) {
        $link = explode('&', urldecode($id));
        $this->load->model('details');
        $data['userDetails'] = $this->loan_model->get_userdetailsloanpdf($link[0]);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['lend_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $path = PHYSICAL_PATH . 'download_pdf/';
        $filename = '' . $name . '.pdf';
        $pdf->Output($path . $filename, 'F');
    }

    public function sent_mail($id = 0, $firstname, $lastname) {
        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = urlencode($Link);
        $url = base_url() . "auto/mail_format_pdf/" . $url1;
        $this->mail_format_pdfdownload($url1);
        $dir = PHYSICAL_PATH . 'download_pdf/';
        $data['userDetails'] = $this->loan_model->get_userdetailsloanpdf($id);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['lend_id'];
        // $dh = scandir($dir);
        $dh ='' . $name . '.pdf';
        $emails = $this->loan_model->get_phone();

        /*         * $config = Array(
          'protocol' => 'sendmail',
          'smtp_host' => 'Smtp.gmail.com',
          'smtp_port' => 25,
          'smtp_user' => 'codaemon123',
          'smtp_pass' => 'codaemon1234',
          'smtp_timeout' => '4',
          'mailtype' => 'html',
          'charset' => 'iso-8859-1'
          );
         * */
        $this->load->library('email');

        $this->email->set_newline("\r\n");
        $this->email->from(ADMINEMAIL, ADMINNAME);
        $this->email->to('' . $emails[0]['emails'] . '');
        $this->email->subject("Beaumont Community Credit Union New Digital Application");
        $this->email->attach($dir . $dh);
        $this->email->bcc('amit.jadhav@codaemonsoftwares.com');
        $emailtemplate = $this->loan_model->get_emailtemplatepdf();
        if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='localhost:82' )
	    {
            $url_name = 'http://'.$_SERVER['HTTP_HOST'].'/lendingtree';
        }   
        else{
            $url_name = $_SERVER['REQUEST_SCHEME'].'://' . str_replace('www.', '', $_SERVER['SERVER_NAME']);
            }
        $token = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'url' => $url_name,
            'domain' => $_SERVER['SERVER_NAME'],
            'copyright' => date('Y')
        );  // forming array to send in template
        $pattern = '[%s]';
        foreach ($token as $key => $val) {
            $varMap[sprintf($pattern, $key)] = $val;
        }

        $emailContent = strtr($emailtemplate[0]['content'], $varMap);
        $this->email->message($emailContent);
        $emailSend = $this->email->send();

        if ($emailSend) {
            // echo 'yes';
              unlink($dir . $dh);
            return 1;
        }

        return 0;
    }

}
