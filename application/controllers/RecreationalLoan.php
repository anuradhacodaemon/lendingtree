<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class RecreationalLoan extends CI_Controller 
{

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
        $this->load->model('mccu/RecreationalLoan_model');
    }

    public function index() {


        if (empty($this->session->userdata['userdata'])) {
            $data = array();
        }

        $this->session->set_userdata('panel', 'frontend');
        $this->session->set_userdata('type', 6); //Recreational Loan
        //SHOW STEP 2
        $this->template->view('mccu/recreational/recreational_step2_view');
        //$this->template->view('mccu/recreational/demo');
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
                        'type' => $this->input->post('type_loan'),
                        'loan_type' => 5
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=2';
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
                array('field'=>'p_req_amt','label'=>'Requested Amount','rules'=>'required|numeric')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('p_req_amt')) 
                {
                    $data = array(
                        'requested_amount' => $this->input->post('p_req_amt'),
                        'loan_type' => 6,
                        'domain' => $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME']
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=3';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                'p_req_amt' => form_error('p_req_amt')
                );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 3)
        {
            $rules = array(
                array('field'=>'firstname','label'=>'First Name','rules'=>'required'),
                array('field'=>'lastname','label'=>'Last Name','rules'=>'required'),
                array('field'=>'phone','label'=>'Phone Number','rules'=>'required|exact_length[14]|regex_match[/^\(\d{3}\) \d{3}-\d{4}$/]'),
                array('field'=>'p_email','label'=>'Email','rules'=>'required|valid_email'),
                array('field'=>'tex_driv_lic','label'=>'Drivers License Number','rules'=>'required'),
                array('field'=>'soc_sec','label'=>'Social Security','rules'=>'required'),
                array('field'=>'c_month','label'=>'Month','rules'=>'required'),
                array('field'=>'c_day','label'=>'Date','rules'=>'required'),
                array('field'=>'c_years','label'=>'Year','rules'=>'required')
              //  array('field'=>'my_dob','label'=>'Date Of Birth','rules'=>'required')
                );
                $this->form_validation->set_message('exact_length', 'The {field} number field must be 10 digits.');    
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('firstname')) 
                {
                    $dob=$this->input->post('c_years') . '-' . $this->input->post('c_month') . '-' . $this->input->post('c_day');
                    $customer_dob = date("Y-m-d", strtotime($dob));

                    $data = array(
                        'first_name' => $this->input->post('firstname'),
                        'last_name' => $this->input->post('lastname'),
                        'p_phone' => $this->input->post('phone'),
                        'p_email' => $this->input->post('p_email'),
                        'tex_driv_lic' => $this->input->post('tex_driv_lic'),
                        'soc_sec' => $this->input->post('soc_sec'),
                        'c_month' => $this->input->post('c_month'),
                        'c_years' => $this->input->post('c_years'),
                        'c_day' => $this->input->post('c_day'),
                        'p_dob' => $customer_dob,
                     //   'p_dob' => $this->input->post('my_dob')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=4';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                    'firstname' => form_error('firstname'),
                    'lastname' => form_error('lastname'),
                    'phone' => form_error('phone'),
                    'p_email' => form_error('p_email'),
                    'tex_driv_lic' => form_error('tex_driv_lic'),
                    'soc_sec' => form_error('soc_sec'),
                  //  'my_dob' => form_error('my_dob')
                    'c_month' => form_error('c_month'),
                    'c_day' => form_error('c_day'),
                    'c_years' => form_error('c_years')
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
                        'marital_status' => ucfirst($this->input->post('marital_status'))
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=5';
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
                array('field'=>'address','label'=>'Home Address','rules'=>'required'),
                array('field'=>'living_there_years','label'=>'How long years you are living here','rules'=>'required|numeric'),
                array('field'=>'monthly_pay','label'=>'Monthly Payment Amount','rules'=>'required')
                );
                $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('address')) 
                {
                    $p_new_address = ['country' => $this->input->post('p_country'),
                                    'street_line' => $this->input->post('p_street_line'),
                                    'city' => $this->input->post('p_city'),
                                    'state' => $this->input->post('p_state'),
                                    'zip_code' => $this->input->post('p_zip_code')

                                    ];
                    $json = json_encode($p_new_address); 
                    $data = array(
                        'address_p' => $this->input->post('address'),
                        'monthly_pay' => str_replace(',', '', $this->input->post('monthly_pay')),
                        'p_years_been_there_on_address' => $this->input->post('living_there_years'),
                        'p_country' => $this->input->post('p_country'),
                        'p_street_line' => $this->input->post('p_street_line'),
                        'p_city' => $this->input->post('p_city'),
                        'p_state' => $this->input->post('p_state'),
                        'p_zip_code' => $this->input->post('p_zip_code'),
                        'p_address'=> $json
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=7';
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
                $data['url'] = 'recreationalLoan?step=7';
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
                array('field'=>'relative_firstname','label'=>'Reference Name','rules'=>'required'),
                array('field'=>'relative_relation','label'=>'Reference Relation','rules'=>'required'),
                array('field'=>'relative_address','label'=>'Reference Address','rules'=>'required'),
                array('field'=>'relatives_phone','label'=>'Reference Phone','rules'=>'required|exact_length[14]|regex_match[/^\(\d{3}\) \d{3}-\d{4}$/]')
                );

            $this->form_validation->set_message('exact_length', 'The {field} number field must be 10 digits.');    
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('relative_firstname')) 
                {
                    $r_new_address = ['country' => $this->input->post('r_country'),
                                    'street_line' => $this->input->post('r_street_line'),
                                    'city' => $this->input->post('r_city'),
                                    'state' => $this->input->post('r_state'),
                                    'zip_code' => $this->input->post('r_zip_code')

                                    ];
                    $json = json_encode($r_new_address);
                    $data = array(
                        'nearest_relative' => $this->input->post('relative_firstname'),
                        'relation_with_relative' => ucfirst($this->input->post('relative_relation')),
                        'r_relatives_live_address' => $this->input->post('relative_address'),
                        'relatives_phone' => $this->input->post('relatives_phone'),
                        'relatives_live_address' => $json,
                        'r_country' => $this->input->post('r_country'),
                        'r_street_line' => $this->input->post('r_street_line'),
                        'r_city' => $this->input->post('r_city'),
                        'r_state' => $this->input->post('r_state'),
                        'r_zip_code' => $this->input->post('r_zip_code')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=8';
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
                array('field'=>'employer_name','label'=>'Employer Name','rules'=>'required'),
                array('field'=>'working_years','label'=>'Working years','rules'=>'required|numeric')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('employer_name')) 
                {
                    $data = array(
                        'current_employer' => $this->input->post('employer_name'),
                        'how_long_your_working' => $this->input->post('working_years')

                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=9';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'employer_name' => form_error('employer_name'),
                            'working_years' => form_error('working_years'),
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }

        if($step == 9)
        {
            $rules = array(
                array('field'=>'monthly_income_pre_tax','label'=>'Gross Monthly Earnings','rules'=>'required|numeric'),array('field'=>'total_dependent','label'=>'Total Dependent','rules'=>'required')
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
                        'employment_total_dependent' => $this->input->post('total_dependent')
                    );
                    $this->session->set_userdata($data);
                }
              
                if(!empty($Cfile))
                {
                    $data = array(
                        'upload_document_proof' => $new_name
                    );
                    $this->session->set_userdata($data);
                    if(!$this->upload->do_upload('upload_user_doc')) 
                    {
                        $error = $this->upload->display_errors();
                        $this->session->unset_userdata('upload_document_proof');
                        $str_replace = ['<p>', '</p>'];
                        $errors = array(
                            'upload_user_doc' => str_replace($str_replace, '', $error)
                            );
                        $data['error'] = 1;
                        $data['error_messages'] = $errors;
                        echo json_encode($data);exit;
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
                $data['url'] = 'recreationalLoan?step=9.1';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'monthly_income_pre_tax' => form_error('monthly_income_pre_tax'),
                            'upload_user_doc' => form_error('upload_user_doc'),
                            'total_dependent' => form_error('total_dependent')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }    
        }

        

        if($step == 9.1)
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
                $data['url'] = 'recreationalLoan?step=10';
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
        if($step == 10)
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
                $data['url'] = 'auto?step=10_1';
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

        if($step == 10.1)
        {
            $rules = array(
                array('field'=>'second_income_source','label'=>'List Income Source','rules'=>'required'),
                array('field'=>'second_monthly_income','label'=>'Monthly Income Amount','rules'=>'required|numeric')
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
                $data['url'] = 'auto?step=11';
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
 
        if($step == 11)
        {
             //echo $this->input->post('waiver_payment_value');
             $rules = array(
                array('field'=>'comaker_loan_value','label'=>'Co-Maker or Cosignor','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('comaker_loan_value')) 
                {
                    $value = $this->input->post('comaker_loan_value');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'comaker_loan_value' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=11';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'comaker_loan_value' => form_error('comaker_loan_value')
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
                $data['url'] = 'recreationalLoan?step=12';
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
             //echo $this->input->post('waiver_payment_value');
             $rules = array(
                array('field'=>'outstanding_judgment_value','label'=>'Co-Maker or Cosignor','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('outstanding_judgment_value')) 
                {
                    $value = $this->input->post('outstanding_judgment_value');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'outstanding_judgment_value' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=13';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'outstanding_judgment_value' => form_error('outstanding_judgment_value')
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
                    $data['url'] = 'auto?step=14';
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
        if($step == 14)
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
                $data['url'] = 'auto?step=15';
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
        if($step == 15)
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
                $data['url'] = 'auto?step=16';
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
        if($step == 16)
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
                $data['url'] = 'auto?step=18';
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
        if($step == 17)
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
                    $selected = ($value == 'consent') ? 'Y' : 'N';
                    $data = array(
                        'i_represent_stated' => $selected,
                        'date_of_application' => $value2
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=19';
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
        if($step == 18)
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
                $data['url'] = 'auto?step=18_1';
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
        if($step == 18.1)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'on_hurt_cancel_loan','label'=>'Select One of them','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('on_hurt_cancel_loan')) 
                {
                    $value = $this->input->post('on_hurt_cancel_loan');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'hurt_or_unable_cancel_the_loan' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=17';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'on_hurt_cancel_loan' => form_error('on_hurt_cancel_loan')
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
                        'add_co_signers_onto_loan' => $selected,
                        'final_step' => $step
                    );
                    $this->session->set_userdata($data);
                    if($value == 'no')
                    {

                        $ret_values = $this->final_step($this->session->userdata());
                        if($ret_values['message'] !== false)
                        {
                            $this->session->sess_destroy();
                            session_destroy();
                            $data['success'] = 1;
                            $data['message'] = $ret_values['message'];
                            $data['url'] = 'https://jacksoncountyfcu.com/';
                            echo json_encode($data);
                        }
                        else{
                                $data['error'] = 1;
                                $data['error_messages'] = 'something went wrong';
                                echo json_encode($data);
                            }   
                    }
                    else{
                            $data['success'] = 1;
                            $data['url'] = 'auto?step=20';
                            echo json_encode($data);
                        }
                }
                
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
        if($step == 20)
        {
            $rules = array(
                array('field'=>'cosigner_firstname','label'=>'First Name','rules'=>'required'),
                array('field'=>'cosigner_lastname','label'=>'Last Name','rules'=>'required'),
                array('field'=>'cosigner_phone','label'=>'Phone Number','rules'=>'required|exact_length[14]|regex_match[/^\(\d{3}\) \d{3}-\d{4}$/]'),
                array('field'=>'cosigner_tdl','label'=>'Driving License Number','rules'=>'required'),
                array('field'=>'cosigner_ssn','label'=>'Social Security Number','rules'=>'required'),
                array('field'=>'month','label'=>'Month','rules'=>'required'),
                array('field'=>'day','label'=>'Date','rules'=>'required'),
                array('field'=>'years','label'=>'Year','rules'=>'required')
                /*array('field'=>'cosigner_email','label'=>'cosigner email','rules'=>'required|valid_email')*/
            );
            $this->form_validation->set_message('exact_length', 'The {field} number field must be 10 digits.');
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('cosigner_firstname')) 
                {
                    $dob=$this->input->post('years') . '-' . $this->input->post('month') . '-' . $this->input->post('day');
                    $cosigner_dob = date("Y-m-d", strtotime($dob));
                    
                    $data = array(
                        'cosigner_first_name' => $this->input->post('cosigner_firstname'),
                        'cosigner_last_name' => $this->input->post('cosigner_lastname'),
                        'cosigner_phone' => $this->input->post('cosigner_phone'),
                        'cosigner_tdl' => $this->input->post('cosigner_tdl'),
                        'cosigner_ssn' => $this->input->post('cosigner_ssn'),
                        'month' => $this->input->post('month'),
                        'years' => $this->input->post('years'),
                        'day' => $this->input->post('day'),
                        'cosigner_dob' => $cosigner_dob
                        /*'cosigner_email' => $this->input->post('cosigner_email')*/
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=21';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                'cosigner_firstname' => form_error('cosigner_firstname'),
                'cosigner_lastname' => form_error('cosigner_lastname'),
                'cosigner_phone' => form_error('cosigner_phone'),
                'cosigner_tdl' => form_error('cosigner_tdl'),
                'cosigner_ssn' => form_error('cosigner_ssn'),
                'month' => form_error('month'),
                'day' => form_error('day'),
                'years' => form_error('years')
                /*'cosigner_email' => form_error('cosigner_email'),*/
                );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 21)
        {
            //echo $this->input->post('marital_status');
            $this->form_validation->set_rules('co_marital_status', 'Radio Button', 'required');
            //$this->form_validation->set_rules('marital_status', 'Radio Button', 'required');
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('co_marital_status')) 
                {
                    $data = array(
                        'cosigner_marital_status' => ucfirst($this->input->post('co_marital_status'))
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=22';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_marital_status' => form_error('co_marital_status')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 22)
        {
            $rules = array(
                array('field'=>'cosigner_home_address','label'=>'Home Address','rules'=>'required'),
                array('field'=>'cosigner_living_there_years','label'=>'Years You Have Lived Here','rules'=>'required|numeric'),
                array('field'=>'cosigner_monthly_pay','label'=>'Monthly Payment','rules'=>'required')
                );
                $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('cosigner_home_address')) 
                {
                    $p_new_address = ['country' => $this->input->post('co_p_country'),
                                    'street_line' => $this->input->post('co_p_street_line'),
                                    'city' => $this->input->post('co_p_city'),
                                    'state' => $this->input->post('p_state'),
                                    'zip_code' => $this->input->post('co_p_zip_code')
                                ];
                    $json = json_encode($p_new_address);
                    $data = array(
                        'p_cosigner_address' => $this->input->post('cosigner_home_address'),
                        'cosigner_monthly_pay' => str_replace(',', '', $this->input->post('cosigner_monthly_pay')),
                        'cosigner_years_been_there' => $this->input->post('cosigner_living_there_years'),
                        'co_p_country' => $this->input->post('co_p_country'),
                        'co_p_street_line' => $this->input->post('co_p_street_line'),
                        'co_p_city' => $this->input->post('co_p_city'),
                        'co_p_state' => $this->input->post('co_p_state'),
                        'co_p_zip_code' => $this->input->post('co_p_zip_code'),
                        'cosigner_address'=> $json
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=23';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'cosigner_home_address' => form_error('cosigner_home_address'),
                            'cosigner_monthly_pay' => form_error('cosigner_monthly_pay'),
                            'cosigner_living_there_years' => form_error('cosigner_living_there_years'),
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 23)
        {
            //echo $this->input->post('home_status');
            $this->form_validation->set_rules('co_home_status', 'Radio Button', 'required');
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('co_home_status')) 
                {
                    $data = array(
                        'cosigner_own_rent' => $this->input->post('co_home_status')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=23_1';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_home_status' => form_error('co_home_status')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 23.1)
        {
            $rules = array(
                array('field'=>'cosigner_nearest_relative','label'=>'Reference Name','rules'=>'required'),
                array('field'=>'cosigner_relationship','label'=>'Reference Relation','rules'=>'required'),
                array('field'=>'cosigner_relatives_address','label'=>'Reference Address','rules'=>'required'),
                array('field'=>'cosigner_relatives_phone','label'=>'Reference Phone','rules'=>'required|exact_length[14]|regex_match[/^\(\d{3}\) \d{3}-\d{4}$/]')
                );

            $this->form_validation->set_message('exact_length', 'The {field} number field must be 10 digits.');    
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('cosigner_nearest_relative')) 
                {
                    $r_new_address = ['country' => $this->input->post('cosigner_r_country'),
                                    'street_line' => $this->input->post('cosigner_r_street_line'),
                                    'city' => $this->input->post('cosigner_r_city'),
                                    'state' => $this->input->post('cosigner_r_state'),
                                    'zip_code' => $this->input->post('cosigner_r_zip_code')

                                    ];
                    $json = json_encode($r_new_address);       
                    $data = array(
                        'cosigner_nearest_relative' => $this->input->post('cosigner_nearest_relative'),
                        'cosigner_relationship' => ucfirst($this->input->post('cosigner_relationship')),
                        'cosigner_relatives_address' => $this->input->post('cosigner_relatives_address'),
                        'cosigner_relatives_phone' => $this->input->post('cosigner_relatives_phone'),
                      //  'cosigner_relatives_address' => $json,
                        'cosigner_r_country' => $this->input->post('cosigner_r_country'),
                        'cosigner_r_street_line' => $this->input->post('cosigner_r_street_line'),
                        'cosigner_r_city' => $this->input->post('cosigner_r_city'),
                        'cosigner_r_state' => $this->input->post('cosigner_r_state'),
                        'cosigner_r_zip_code' => $this->input->post('cosigner_r_zip_code')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=24';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'cosigner_nearest_relative' => form_error('cosigner_nearest_relative'),
                            'cosigner_relationship' => form_error('cosigner_relationship'),
                            'cosigner_relatives_address' => form_error('cosigner_relatives_address'),
                            'cosigner_relatives_phone' => form_error('cosigner_relatives_phone')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 24)
        {
            $rules = array(
                array('field'=>'cosigners_employer_name','label'=>'Employer Name','rules'=>'required'),
                /*array('field'=>'cosigners_employer_job_title','label'=>'Cosigner Employer Job title','rules'=>'required'),
                array('field'=>'co_supervisor_name','label'=>'Cosigner Supervisor name','rules'=>'required'),*/
                array('field'=>'cosigners_working_years','label'=>'Working years','rules'=>'required|numeric')
                /*array('field'=>'cosigners_business_address','label'=>'Cosigner Business address','rules'=>'required')*/
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('cosigners_employer_name')) 
                {
                    $r_new_address = ['country' => $this->input->post('co_b_r_country'),
                                    'street_line' => $this->input->post('co_b_r_street_line'),
                                    'city' => $this->input->post('co_b_r_city'),
                                    'state' => $this->input->post('co_b_r_state'),
                                    'zip_code' => $this->input->post('co_b_r_zip_code')

                                    ];
                    $json = json_encode($r_new_address);
                    $data = array(
                        'cosigner_employer' => $this->input->post('cosigners_employer_name'),
                        /*'cosigner_job_title' => $this->input->post('cosigners_employer_job_title'),*/
                        /*'cosigner_supervisor_name' => $this->input->post('co_supervisor_name'),*/
                        'cosigner_how_long_working_years' => $this->input->post('cosigners_working_years'),
                        /*'co_cosigner_business_address' => $this->input->post('cosigners_business_address'),
                        'cosigner_business_address' => $json,
                        'co_b_r_country' => $this->input->post('co_b_r_country'),
                        'co_b_r_street_line' => $this->input->post('co_b_r_street_line'),
                        'co_b_r_city' => $this->input->post('co_b_r_city'),
                        'co_b_r_state' => $this->input->post('co_b_r_state'),
                        'co_b_r_zip_code' => $this->input->post('co_b_r_zip_code')*/
                    );
                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=25';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                           'cosigners_employer_name' => form_error('cosigners_employer_name'),
                            /* 'cosigners_employer_job_title' => form_error('cosigners_employer_job_title'),
                            'co_supervisor_name' => form_error('co_supervisor_name'),*/
                            'cosigners_working_years' => form_error('cosigners_working_years')
                             /*'cosigners_business_address' => form_error('cosigners_business_address')*/
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 25)
        {
            $rules = array(
                array('field'=>'cosigner_monthly_income_pre_tax','label'=>'Gross Monthly Earnings','rules'=>'required|numeric'),array('field'=>'co_total_dependent','label'=>'Cosigner Total Dependent','rules'=>'required')
                );

            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                $config['upload_path'] = './cosignerDocuments/'; // Specify the directory to save the uploaded files
                $config['allowed_types'] = 'pdf|png|txt'; // Specify the allowed file types
                $this->load->library('upload', $config);
                $Cfile = $_FILES['cosigner_upload_user_doc']['name'];
                $name = explode(".", $_FILES['cosigner_upload_user_doc']['name']);
                $file_ext = strtolower(end($name));
                $time = time();
                $new_name = $time . '.' . $file_ext;
                //success
                if ($this->input->post('cosigner_monthly_income_pre_tax')) 
                {
                    $data = array(
                        'cosigner_monthly_income_pre_tax' => $this->input->post('cosigner_monthly_income_pre_tax'),'co_total_dependent' => $this->input->post('co_total_dependent')
                    );

                    $this->session->set_userdata($data);
                }
              
                if(!empty($Cfile))
                {
                    $data = array(
                        'cosigner_documant' => $new_name
                    );
                    $this->session->set_userdata($data);
                    if(!$this->upload->do_upload('cosigner_upload_user_doc')) 
                    {
                        $error = $this->upload->display_errors();
                        $this->session->unset_userdata('cosigner_documant');
                        $str_replace = ['<p>', '</p>'];
                        $errors = array(
                            'cosigner_upload_user_doc' => str_replace($str_replace, '', $error)
                            );
                        $data['error'] = 1;
                        $data['error_messages'] = $errors;
                        echo json_encode($data);exit;
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
                $data['url'] = 'auto?step=26';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'cosigner_monthly_income_pre_tax' => form_error('cosigner_monthly_income_pre_tax'),
                            'cosigner_upload_user_doc' => form_error('cosigner_upload_user_doc'),
                            'co_total_dependent' => form_error('co_total_dependent')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }  
        }
        if($step == 27)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_p_another_source','label'=>'Cosigner Another Income Source','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_p_another_source')) 
                {
                    $value = $this->input->post('co_p_another_source');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_other_source_of_income' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=28';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_p_another_source' => form_error('co_p_another_source')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 26)
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
                $data['url'] = 'auto?step=27';
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

        if($step == 27.1)
        {
            $rules = array(
                array('field'=>'cosigner_second_income_source','label'=>'List Income Source','rules'=>'required'),
                array('field'=>'cosigner_second_monthly_income','label'=>'Monthly Income Amount','rules'=>'required|numeric')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('cosigner_second_income_source')) 
                {
                    $data = array(
                        'cosigner_what_income_source' => $this->input->post('cosigner_second_income_source'),
                        'cosigner_other_source_monthly_income' => $this->input->post('cosigner_second_monthly_income')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=33';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'cosigner_second_income_source' => form_error('cosigner_second_income_source'),
                            'cosigner_second_monthly_income' => form_error('cosigner_second_monthly_income')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }

        }

        if($step == 28)
        {
             //echo $this->input->post('p_another_source');
             $rules = array(
                array('field'=>'co_co_maker','label'=>'Cosigner CO-MAKER/ENDORSER','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_co_maker')) 
                {
                    $value = $this->input->post('co_co_maker');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_co_maker_endorser' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=29';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_co_maker' => form_error('co_co_maker')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 29)
        {
             //echo $this->input->post('waiver_payment_value');
             $rules = array(
                array('field'=>'outstanding_judgment_value','label'=>'Co-Maker or Cosignor','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('outstanding_judgment_value')) 
                {
                    $value = $this->input->post('outstanding_judgment_value');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'outstanding_judgment_value' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=30';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'outstanding_judgment_value' => form_error('outstanding_judgment_value')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 30)
        {
              //echo $this->input->post('p_another_source');
              $rules = array(
                array('field'=>'co_bankruptcy_adjustmnt','label'=>'Any Bankcruptcy Judgments','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_bankruptcy_adjustmnt')) 
                {
                    $value = $this->input->post('co_bankruptcy_adjustmnt');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'bankruptcy_debt_adjusutment' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=31';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_bankruptcy_adjustmnt' => form_error('co_bankruptcy_adjustmnt')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 31)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_force_closure','label'=>'Cosigner Force Closure','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_force_closure')) 
                {
                    $value = $this->input->post('co_force_closure');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_force_closure_title_deed' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=32';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_force_closure' => form_error('co_force_closure')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 32)
        {
             //echo $this->input->post('p_another_source');
             $rules = array(
                array('field'=>'co_any_law_suit','label'=>'Party to any lawsuit','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_any_law_suit')) 
                {
                    $value = $this->input->post('co_any_law_suit');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_lawsuit_party' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=33';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_any_law_suit' => form_error('co_any_law_suit')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 32.1)
        {
            $rules = array(
                array('field'=>'cosigner_second_income_source','label'=>'Cosigner Second Income Source','rules'=>'required'),
                array('field'=>'cosigner_second_monthly_income','label'=>'Cosigner Monthly Income From Second Source','rules'=>'required|numeric')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if ($this->input->post('cosigner_second_income_source')) 
                {
                    $data = array(
                        'cosigner_what_income_source' => $this->input->post('cosigner_second_income_source'),
                        'cosigner_other_source_monthly_income' => $this->input->post('cosigner_second_monthly_income')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=33';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'cosigner_second_income_source' => form_error('cosigner_second_income_source'),
                            'cosigner_second_monthly_income' => form_error('cosigner_second_monthly_income')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 33)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
            array('field'=>'co_other_than_us_citizen','label'=>'Cosigner Citizen Other Than US','rules'=>'required')
            );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_other_than_us_citizen')) 
                {
                    $value = $this->input->post('co_other_than_us_citizen');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_citizen' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'auto?step=42';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_other_than_us_citizen' => form_error('co_other_than_us_citizen')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 34)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_i_represnt_accurate','label'=>'Consent','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_i_represnt_accurate')) 
                {
                    $value = $this->input->post('co_i_represnt_accurate');
                    $value2 = $this->input->post('co_date_of_application');
                    $selected = ($value == 'consent') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_i_represent_everything_correct' => $selected,
                        'date_of_application' => $value2,
                        'final_step' => $step
                    );

                    $this->session->set_userdata($data);
                   /* echo "<pre>";
                    print_r($this->session->userdata());exit;*/
                    $ret_values = $this->final_step($this->session->userdata());
                    if($ret_values['message'] !== false)
                    {
                        $this->session->sess_destroy();
                        session_destroy();
                        $data['success'] = 1;
                        $data['message'] = $ret_values['message'];
                        $data['url'] = 'https://jacksoncountyfcu.com/';
                        echo json_encode($data);
                    }
                    else{
                            $data['error'] = 1;
                            $data['error_messages'] = 'something went wrong';
                            echo json_encode($data);
                        }   
                }
               
            }else{
                //fail
                $errors = array(
                    'co_i_represnt_accurate' => form_error('co_i_represnt_accurate')
                    );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 35)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_miltary_involve','label'=>'Cosigner Miltary Involvement','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_miltary_involve')) 
                {
                    $data = array(
                        'cosigner_military_involvement' => $this->input->post('co_miltary_involve')
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=36';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_miltary_involve' => form_error('co_miltary_involve')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 36)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_member_credit','label'=>'Credit Member','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_member_credit')) 
                {
                    $value = $this->input->post('co_member_credit');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_member_other_credit_unioin' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=37';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_member_credit' => form_error('co_member_credit')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 37)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_outstanding_judgement','label'=>'Cosigner Any Outstanding Judgments','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_outstanding_judgement')) 
                {
                    $value = $this->input->post('co_outstanding_judgement');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_outstanding_juggements' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=38';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_outstanding_judgement' => form_error('co_outstanding_judgement')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 38)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_bankruptcy_adjustmnt','label'=>'Cosigner Any Bankcruptcy Judgments','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_bankruptcy_adjustmnt')) 
                {
                    $value = $this->input->post('co_bankruptcy_adjustmnt');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_bankruptcy_debt_adjustment' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=39';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_bankruptcy_adjustmnt' => form_error('co_bankruptcy_adjustmnt')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 39)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_force_closure','label'=>'Cosigner Force Closure','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_force_closure')) 
                {
                    $value = $this->input->post('co_force_closure');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_force_closure_title_deed' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=40';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_force_closure' => form_error('co_force_closure')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 40)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_any_law_suit','label'=>'Party to any lawsuit','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_any_law_suit')) 
                {
                    $value = $this->input->post('co_any_law_suit');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_lawsuit_party' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=41';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_any_law_suit' => form_error('co_any_law_suit')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 41)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_other_than_us_citizen','label'=>'Cosigner Citizen Other Than US','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_other_than_us_citizen')) 
                {
                    $value = $this->input->post('co_other_than_us_citizen');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_citizen' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=42';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_other_than_us_citizen' => form_error('co_other_than_us_citizen')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 42)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_income_get_reduce_nxt_2y','label'=>'Is Income Reduced In Next 2 Year','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_income_get_reduce_nxt_2y')) 
                {
                    $value = $this->input->post('co_income_get_reduce_nxt_2y');
                    $selected = ($value == 'yes') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_any_income_tobe_reduced_n2_year' => $selected
                    );

                    $this->session->set_userdata($data);
                }
                $data['success'] = 1;
                $data['url'] = 'recreationalLoan?step=43';
                echo json_encode($data);
            }else{
                //fail
                $errors = array(
                            'co_income_get_reduce_nxt_2y' => form_error('co_income_get_reduce_nxt_2y')
                            );
                $data['error'] = 1;
                $data['error_messages'] = $errors;
                echo json_encode($data);
            }
        }
        if($step == 43)
        {
            //echo $this->input->post('p_another_source');
            $rules = array(
                array('field'=>'co_i_represnt_accurate','label'=>'Consent','rules'=>'required')
                );
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == true) 
            {
                //success
                if($this->input->post('co_i_represnt_accurate')) 
                {
                    $value = $this->input->post('co_i_represnt_accurate');
                    $value2 = $this->input->post('co_date_of_application');
                    $selected = ($value == 'consent') ? 'Y' : 'N';
                    $data = array(
                        'cosigner_i_represent_everything_correct' => $selected,
                        'date_of_application' => $value2,
                        'final_step' => $step
                    );

                    $this->session->set_userdata($data);
                    /*echo "<pre>";
                    print_r($this->session->userdata());exit;*/
                    $ret_values = $this->final_step($this->session->userdata());
                    if($ret_values['message'] !== false)
                    {
                        $this->session->sess_destroy();
                        session_destroy();
                        $data['success'] = 1;
                        $data['message'] = $ret_values['message'];
                        $data['url'] = 'recreationalLoan?step=1';
                        echo json_encode($data);
                    }
                    else{
                            $data['error'] = 1;
                            $data['error_messages'] = 'something went wrong';
                            echo json_encode($data);
                        }   
                }
               
            }else{
                //fail
                $errors = array(
                    'co_i_represnt_accurate' => form_error('co_i_represnt_accurate')
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
        $this->session->set_userdata('type', 6); //Personal Loan
        $this->load->view('default/mccu/recreational/recreational_step2_view');
    }
    //
    public function step3() 
    {
        $this->load->view('default/mccu/recreational/recreational_step3_view');
    }
    //
    public function step4()
    {
        $this->load->view('default/mccu/recreational/recreational_step4_view');
    }
    //
    public function step5()
    {
        $this->load->view('default/mccu/recreational/recreational_step5_view');
    }
    public function step6()
    {
        $this->load->view('default/mccu/recreational/recreational_step6_view');
    }
    public function step7()
    {
        $this->load->view('default/mccu/recreational/recreational_step7_view');
    }
    public function step8()
    {
        $this->load->view('default/mccu/recreational/recreational_step8_view');
    }
    public function step9()
    {
        $this->load->view('default/mccu/recreational/recreational_step9_view');
    }
    public function step9_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step9_1_view');
    }
    public function step10()
    {
        $this->load->view('default/mccu/recreational/recreational_step10_view');
    }
    public function step10_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step10_1_view');
    }
    public function step11()
    {
        $this->load->view('default/mccu/recreational/recreational_step11_view');
    }
    public function step11_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step11_1_view');
    }
    public function step12()
    {
        $this->load->view('default/mccu/recreational/recreational_step12_view');
    }
    public function step13()
    {
        $this->load->view('default/mccu/recreational/recreational_step13_view');
    }
    public function step14()
    {
        $this->load->view('default/mccu/recreational/recreational_step14_view');
    }
    public function step15()
    {
        $this->load->view('default/mccu/recreational/recreational_step15_view');
    }
    public function step16()
    {
        $this->load->view('default/mccu/recreational/recreational_step16_view');
    }
    public function step17()
    {
        $this->load->view('default/mccu/recreational/recreational_step17_view');
    }
    public function step18()
    {
        $this->load->view('default/mccu/recreational/recreational_step18_view');
    }
    public function step18_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step18_1_view');
    }
    public function step19()
    {
        $this->load->view('default/mccu/recreational/recreational_step19_view');
    }
    public function step20()
    {
        $this->load->view('default/mccu/recreational/recreational_step20_view');
    }
    public function step21()
    {
        $this->load->view('default/mccu/recreational/recreational_step21_view');
    }
    public function step22()
    {
        $this->load->view('default/mccu/recreational/recreational_step22_view');
    }
    public function step22_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step22_1_view');
    }
    public function step23()
    {
        $this->load->view('default/mccu/recreational/recreational_step23_view');
    }
    public function step23_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step23_1_view');
    }
    public function step24()
    {
        $this->load->view('default/mccu/recreational/recreational_step24_view');
    }
    public function step25()
    {
        $this->load->view('default/mccu/recreational/recreational_step25_view');
    }
    public function step26()
    {
        $this->load->view('default/mccu/recreational/recreational_step26_view');
    }
    public function step27()
    {
        $this->load->view('default/mccu/recreational/recreational_step27_view');
    }
    public function step27_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step27_1_view');
    }
    public function step28()
    {
        $this->load->view('default/mccu/recreational/recreational_step28_view');
    }
    public function step29()
    {
        $this->load->view('default/mccu/recreational/recreational_step29_view');
    }
    public function step30()
    {
        $this->load->view('default/mccu/recreational/recreational_step30_view');
    }
    public function step31()
    {
        $this->load->view('default/mccu/recreational/recreational_step31_view');
    }
    public function step32()
    {
        $this->load->view('default/mccu/recreational/recreational_step32_view');
    }
    public function step32_1()
    {
        $this->load->view('default/mccu/recreational/recreational_step32_1_view');
    }
    public function step33()
    {
        $this->load->view('default/mccu/recreational/recreational_step33_view');
    }
    public function step34()
    {
        $this->load->view('default/mccu/recreational/recreational_step34_view');
    }
    public function step35()
    {
        $this->load->view('default/mccu/recreational/recreational_step35_view');
    }
    public function step36()
    {
        $this->load->view('default/mccu/recreational/recreational_step36_view');
    }
    public function step37()
    {
        $this->load->view('default/mccu/recreational/recreational_step37_view');
    }
    public function step38()
    {
        $this->load->view('default/mccu/recreational/recreational_step38_view');
    }
    public function step39()
    {
        $this->load->view('default/mccu/recreational/recreational_step39_view');
    }
    public function step40()
    {
        $this->load->view('default/mccu/recreational/recreational_step40_view');
    }
    public function step41()
    {
        $this->load->view('default/mccu/recreational/recreational_step41_view');
    }
    public function step42()
    {
        $this->load->view('default/mccu/recreational/recreational_step42_view');
    }
    public function step43()
    {
        $this->load->view('default/mccu/recreational/recreational_step43_view');
    }
    /**
     * My code ends here
     * 
     * 
    */
    //This function is used to send mail and save the data in DB Table
    public function final_step($array)
    {
        
        if(!empty($array))
        {
            /*echo "<pre>";
            print_r($array);exit;*/
            $coverage_response = $this->check_coverage($array);
            $array['coverage'] = $coverage_response;

            $array = $this->unsetArrays($array);
            //
            $result = $this->RecreationalLoan_model->add_recreational_loan($array);
            if($result > 0)
            {
                $getPhone = $this->loan_model->get_phone();
                $sucess_msg = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
                //Use Existing EMail functions
                $this->mailformat($array['first_name'], $array['last_name'], $array['p_email']);
                $this->sent_mail($result, $array['first_name'], $array['last_name']);
                return ['message' => $sucess_msg];
            }
            else{
                    return ['message' => false];
                }
                
        }
    }

    //
    public function unsetArrays($arr)
    {
        $unset_array = ['panel', '__ci_last_regenerate', 'type', 'address_p', 'p_country', 'p_street_line', 'p_city', 'p_state', 'p_zip_code',
                    'r_relatives_live_address', 'r_country', 'r_street_line', 'r_city', 'r_state', 'r_zip_code',
                    'p_personal_refrence_address', 'p_r_country', 'p_r_street_line', 'p_r_city', 'p_r_state', 'p_r_zip_code',
                    'b_address_of_business', 'b_r_country', 'b_r_street_line', 'b_r_city', 'b_r_state', 'b_r_zip_code',
                    'p_cosigner_address', 'co_p_country', 'co_p_street_line', 'co_p_city', 'co_p_state', 'co_p_zip_code',
                    'p_cosigner_relatives_address', 'co_r_country', 'co_r_street_line', 'co_r_city', 'co_r_state', 'co_r_zip_code',
                    'p_cosigner_personal_refrence_address', 'co_p_r_country', 'co_p_r_street_line', 'co_p_r_city', 'co_p_r_state', 'co_p_r_zip_code',
                    'co_cosigner_business_address', 'co_b_r_country', 'co_b_r_street_line', 'co_b_r_city', 'co_b_r_state', 'co_b_r_zip_code',
                    'cosigner_r_country', 'cosigner_r_street_line', 'cosigner_r_city', 'cosigner_r_state', 'cosigner_r_zip_code',
                    'month', 'day', 'years','c_month', 'c_day', 'c_years',

            ];
        if(!empty($arr))
        {
            foreach($arr as $k => $val)
            {
                if(in_array($k, $unset_array))
                {
                    unset($arr[$k]);
                }
            }
            return $arr;
        }
    }

    public function check_coverage($array)
    {
        if(!empty($array))
        {
            $laid_off_for_payment_waived=$array['laid_off_for_payment_waived'];
            $die_or_ill_cancel_the_loan=$array['die_or_ill_cancel_the_loan'];
            $hurt_or_unable_cancel_the_loan=$array['hurt_or_unable_cancel_the_loan'];
		

            if($laid_off_for_payment_waived=="N" && $die_or_ill_cancel_the_loan=="Y" & $hurt_or_unable_cancel_the_loan=="N")
            {
                $coverage='A';
            }elseif($laid_off_for_payment_waived=="N" && $die_or_ill_cancel_the_loan=="Y" & $hurt_or_unable_cancel_the_loan=="Y")
            {
                $coverage='B';
            }elseif($laid_off_for_payment_waived=="N" && $die_or_ill_cancel_the_loan=="N" & $on_hurt_cahurt_or_unable_cancel_the_loanncel_loan=="Y")
            {
                $coverage='B';
            }elseif($laid_off_for_payment_waived=="Y" && $die_or_ill_cancel_the_loan=="N" & $hurt_or_unable_cancel_the_loan=="N")
            {
                $coverage='C';
            }elseif($laid_off_for_payment_waived=="Y" && $die_or_ill_cancel_the_loan=="Y" & $hurt_or_unable_cancel_the_loan=="N")
            {
                $coverage='C';
            }elseif($laid_off_for_payment_waived=="N" && $die_or_ill_cancel_the_loan=="Y" & $hurt_or_unable_cancel_the_loan=="N")
            {
                $coverage='C';
            }elseif($laid_off_for_payment_waived=="Y" && $die_or_ill_cancel_the_loan=="Y" & $hurt_or_unable_cancel_the_loan=="Y")
            {
                $coverage='D';
            }elseif($laid_off_for_payment_waived=="Y" && $die_or_ill_cancel_the_loan=="N" & $hurt_or_unable_cancel_the_loan=="Y")
            {
                $coverage='D';
            }else
            {
                $coverage='-';
            }

            return $coverage;
        }
    }
    /** Please dont change the mailformat because template is coming from database * */
    public function mailformat($firstname, $lastname, $email) {

        //$this->email->set_mailtype("html");
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $this->email->from(ADMINEMAIL, ADMINNAME);
        $this->email->to('' . $email . '');
        $this->email->subject("JCFCU New Digital Application");
        //$this->email->bcc('haroon.m@codaemonsoftwares.com,suraj.k@codaemonsoftwares.com');
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
            //echo $this->email->print_debugger();exit;
            return 1;
        }
        return 0;
    }
    //
    public function mail_format_pdf($id = 0) {
        $link = explode('&', urldecode($id));
        $this->load->model('details');
        //$data['userDetails'] = $this->loan_model->get_userdetailsloanpdf($link[0]);
        $data['userDetails'] = $this->RecreationalLoan_model->get_userdetailsloanpdf($link[0]);
        $name = $data['userDetails']['first_name'] . '_' . $data['userDetails']['rc_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('mccu_auto_view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    //
    public function mail_format_pdfdownload($id = 0) {
        $link = explode('&', urldecode($id));
        $this->load->model('details');
        //$data['userDetails'] = $this->loan_model->get_userdetailsloanpdf($link[0]);
        $data['userDetails'] = $this->RecreationalLoan_model->get_userdetailsloanpdf($link[0]);
        $name = $data['userDetails']['first_name'] . '_' . $data['userDetails']['rc_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('mccu_auto_view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $path = PHYSICAL_PATH . 'download_pdf/';
        $filename = '' . $name . '.pdf';
        $pdf->Output($path . $filename, 'F');
    }
    //
    public function sent_mail($id = 0, $firstname, $lastname) {
        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = urlencode($Link);
        $url = base_url() . "recreationalLoan/mail_format_pdf/" . $url1;
        $this->mail_format_pdfdownload($url1);
        $dir = PHYSICAL_PATH . 'download_pdf/';
        //$data['userDetails'] = $this->loan_model->get_userdetailsloanpdf($id);
        $data['userDetails'] = $this->RecreationalLoan_model->get_userdetailsloanpdf($id);
        $name = $data['userDetails']['first_name'] . '_' . $data['userDetails']['rc_id'];
        // $dh = scandir($dir);
        $dh ='' . $name . '.pdf';
        $emails = $this->loan_model->get_phone();

        //send data to zapier
        $this->loan_model->send_to_zapier($this->session->userdata(),'recreationalLoan',$id);

        $this->load->library('email');

        $this->email->set_newline("\r\n");
        $this->email->from(ADMINEMAIL, ADMINNAME);
        $this->email->to('' . $emails[0]['emails'] . '');
        $this->email->subject("JCFCU New Digital Application");
        $this->email->attach($dir . $dh);
        //$this->email->bcc('haroon.m@codaemonsoftwares.com,suraj.k@codaemonsoftwares.com');
        //this is user
        if(!empty($data['userDetails']['upload_document_proof']))
        {
            $usrDoc = PHYSICAL_PATH. 'userDocuments/'.$data['userDetails']['upload_document_proof'];
            $this->email->attach($usrDoc);
        }
        //this is cosigner
        if(!empty($data['userDetails']['cosigner_documant']))
        {
            $csrDoc = PHYSICAL_PATH. 'cosignerDocuments/'.$data['userDetails']['cosigner_documant'];
            $this->email->attach($csrDoc);
        }
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
   

    public function pdfLoan($id = 0) {
     
        $data['userDetails'] = $this->loan_model->get_userdetailsforpdf($id,RECREATIONAL_MMCU_LOAN,'rc_id');
        $name = $data['userDetails']['first_name'] . '_' . $data['userDetails']['rc_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('mccu_auto_view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }














    //======================================END OF FILE=========================================================
}
