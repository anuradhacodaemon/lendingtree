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

        $this->template->view('step_autoaddress_view');
    }

    // public function step1() {

    //     $this->load->view('step1_view');
    // }
    public function step1($live_work = 0) {
        if ($live_work) {
            $data = array(
                'live_work' => $live_work
            );
            $this->session->set_userdata($data);
        }
        $this->load->view('step1_view');
    }
    public function stepautoaddress() {

        $this->load->view('step_autoaddress_view');
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

    public function step3($requested_amount = 0) {
        if ($requested_amount) {
            $data = array(
                'requested_amount' => $requested_amount
            );

            $this->session->set_userdata($data);
        }
        // echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step3_view');
    }

    public function step4($id = 0, $month = 0, $day = 0, $year = 0) {
        if ($id) {
          
            $data = array(
                'current_employer' => urldecode($id),
                'month' => $month,
                'day' => $day,
                'years' => $year,
                'start_date' => $year . '-' . $month . '-' . $day,
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step4_view');
    }
    public function step6($pay_month = 0,$home_status) {

        if ($pay_month) {

            //$num = explode('$', $pre_tax_income);
            // $number = $num[1];
            //$real_integer = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
            $data = array(
                'pay_month' => $pay_month,
                'home_status' => $home_status
            );

            $this->session->set_userdata($data);
        }


//echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('step6_view', $data);
    }
    public function step5($pre_tax_income = 0,$total_dependent = 0) {

        if ($pre_tax_income) {

            //$num = explode('$', $pre_tax_income);
            // $number = $num[1];
            //$real_integer = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
            $data = array(
                'pre_tax_income' => $pre_tax_income,
                'total_dependent' => $total_dependent
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

    public function stepresidence($firstname = '', $lastname = '', $address = '', $city = '', $state = '', $zip = '') {
    
        $firstname = $this->input->get('firstname');
        $lastname = $this->input->get('lastname');
        $address = $this->input->get('address');
        $city = $this->input->get('city_name');
        $state = $this->input->get('state_name');
        $zip = $this->input->get('p_zip_code');

        if ($firstname) {
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'address' => $address,
                'address_p' => $address,
                'city' => $city,
                'state' => $state,
                'zip' => $zip
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('stepresidence_view');
    }

    public function step7($month = 0, $day = 0, $year = 0 ,$ssn = '') {

        
        if ($ssn) {
            $data = array(
                'dobmonth' => $month,
                'dobday' => $day,
                'dobyears' => $year,
                'dob' => $year . '-' . $month . '-' . $day,
                'ssn' => $ssn
            );
        
            $this->session->set_userdata($data);
        }
      //  echo '<pre>';
      //   print_r($this->session->userdata());
        
        $this->load->view('step7_view');
        }

    public function step8($email = '', $phone = '') {
        if ($email) {
            $data = array(
                'email' => $email,
                'phone' => $phone,
                'add_date' => date('Y-m-d H:i:s'),
                'domain' => $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'] . '/',
                'status' => "2",
                'active_status' => 1
            );

            $this->session->set_userdata($data);
        }
        $this->load->view('step8_view');
    }

    public function step9($val = 'N') {
        if ($val) {
            $data = array(
                'laid_off_for_payment_waived' => $val
            );
            $this->session->set_userdata($data);
        }
        $this->load->view('step9_view');
    }

    public function step10($i_represent_stated = '', $date_of_application = '') {
    
        if($this->input->get('i_represent_stated')) {

            $value = $this->input->get('i_represent_stated');
            $value2 = $this->input->get('date_of_application');

            $newDate = date("Y-m-d", strtotime($value2));
            $selected = ($value == 'consent') ? 'Y' : 'N';
            $data = array(
                'i_represent_stated' => $selected,
                'date_of_application' => $newDate
            );

            $this->session->set_userdata($data);
        }

        $this->load->view('step10_view');
    }

    public function step11($val = 'N') {
        if ($val) {
            $data = array(
                'die_or_ill_cancel_the_loan' => $val
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
        unset($this->session->userdata['dobmonth']);
        unset($this->session->userdata['dobday']);
        unset($this->session->userdata['dobyears']);
        unset($this->session->userdata['address_p']);
        
        $result = $this->loan_model->add_loan($this->session->userdata());
     //   echo"<pre>"; print_r($result); die();		
        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0) {
            $getPhone = $this->loan_model->get_phone();
            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
            
            $this->mailformat($this->session->userdata['firstname'], $this->session->userdata['lastname'], $this->session->userdata['email']);
            $this->sent_mail($result, $this->session->userdata['firstname'], $this->session->userdata['lastname']);
            
            $this->session->userdata['userdata'] = '';
            $this->session->userdata['type'] = '';
            $this->session->userdata['requested_amount'] = '';
            $this->session->userdata['current_employer'] = '';
            $this->session->userdata['job_title'] = '';
            $this->session->userdata['pre_tax_income'] = '';
            $this->session->userdata['total_dependent'] = '';
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
            $this->session->userdata['laid_off_for_payment_waived'] = '';
            $this->session->userdata['die_or_ill_cancel_the_loan'] = '';
            $this->session->userdata['i_represent_stated'] = '';
            $this->session->userdata['date_of_application'] = '';
            $this->session->userdata['pay_month'] = '';
            $this->session->userdata['home_status'] = '';
            
            //redirect('/');
            echo 1;
        } /*         * else {

          $error = 'Your email already exist';
          $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));

          $this->load->view('step6_view');
          }* */
    }

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
        //$this->email->bcc('amit.jadhav@codaemonsoftwares.com,nisar.shaikh@codaemonsoftwares.com');
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

        //send data to zapier
        $this->loan_model->send_to_zapier($this->session->userdata(),'auto',$id);

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
        //$this->email->bcc('amit.jadhav@codaemonsoftwares.com');
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
     
        $data['userDetails'] = $this->loan_model->get_userdetailsforpdf($id,LOANS,'lend_id');
        //print_r($data['userDetails']);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['lend_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }

}
