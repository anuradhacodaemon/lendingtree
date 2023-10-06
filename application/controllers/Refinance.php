<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Refinance extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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

    public function refinancestep4($id = 0, $current_milage = 0) {
        if ($id) {
            $data = array(
                'vin' => $id,
                'current_milage' => $current_milage
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


    public function sha(){

         $dir = PHYSICAL_PATH . 'download_pdf/';
        $dh = scandir($dir);
        echo '<pre>';
        echo PHYSICAL_PATH;
        echo '<br>';
        print_r($dh);
    }



    public function refinancestep5($firstname = '', $lastname = '', $address = '', $city = '', $state = '', $zip = '') {

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
                'city' => $city,
                'state' => $state,
                'zip' => $zip
            );
//echo '<pre>';
        // print_r($this->session->userdata());
            $this->session->set_userdata($data);
        }

        $this->load->view('refinance_step5_new');
    }


    public function refinancestep6($cemployer = '',$job_title = '') {

        if ($cemployer) {

            //$num = explode('$', $pre_tax_income);
            // $number = $num[1];
            //$real_integer = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
            $data = array(
                'current_employer' => urldecode($cemployer),
                'job_title' => $job_title
            );

            $this->session->set_userdata($data);
        }

      
        $this->load->view('refinance_step5', $data);
    }


    public function getcity($state_id = 0) {

        $city = $this->loan_model->get_city($state_id);
        echo json_encode($city);
    }

    public function refinancestep7($dob, $ssn = '') {

        $timestamp = strtotime($dob);
        $day = date('d', $timestamp);
        $month = date('m', $timestamp);
        $year = date('Y', $timestamp);
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

    public function refinancestep8($email = '', $phone = '') {
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
        $this->load->view('refinance_step8');
    }

    public function refinancestep9($val = 'N') {
        if ($val) {
            $data = array(
                'laid_off_for_payment_waived' => $val
            );
            $this->session->set_userdata($data);
        }
        $this->load->view('refinance_step9');
    }

    public function refinancestep10($i_represent_stated = '', $date_of_application = '') {
    
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

        $this->load->view('refinance_step10');
    }

    public function refinancestep11($val = 'N') {
        if ($val) {
            $data = array(
                'die_or_ill_cancel_the_loan' => $val
            );
            $this->session->set_userdata($data);
        }


        unset($this->session->userdata['panel']);
        unset($this->session->userdata['__ci_last_regenerate']);
        unset($this->session->userdata['userdata']);
        unset($this->session->userdata['type']);
        unset($this->session->userdata['requested_amount']);
        unset($this->session->userdata['current_employer']);
        //unset($this->session->userdata['job_title']);
        unset($this->session->userdata['pre_tax_income']);
        unset($this->session->userdata['zip']);
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
        unset($this->session->userdata['total_dependent']);

        
      //  echo"<pre>"; print_r($this->session->userdata()); die();		
        $result = $this->loan_model->add_refinance($this->session->userdata());
      //  echo"<pre>"; print_r($result); die();	

        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0) {
            $getPhone = $this->loan_model->get_phone();
            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
            $this->mailformat($this->session->userdata['firstname'], $this->session->userdata['lastname'], $this->session->userdata['email']);
            $this->sent_mail($result, $this->session->userdata['firstname'], $this->session->userdata['lastname']);
            
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
            $this->session->userdata['laid_off_for_payment_waived'] = '';
            $this->session->userdata['die_or_ill_cancel_the_loan'] = '';
            $this->session->userdata['i_represent_stated'] = '';
            $this->session->userdata['date_of_application'] = '';
            //redirect('/');
            echo 1;
        } /** else {

          $error = 'Your email already exist';
          $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));

          $this->load->view('refinancestep6_view');
          }* */
    }

    /** Please dont change the mailformat because template is coming from database * */
    public function mailformat($firstname, $lastname, $email) {

        //$this->load->library('email');
        //$this->email->set_mailtype("html");
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
        $this->email->to('' . $email . '');
        $this->email->subject("Space City New Digital Application");
        $this->email->bcc('nisar.shaikh@codaemonsoftwares.com,amit.jadhav@codaemonsoftwares.com');
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
        $data['userDetails'] = $this->loan_model->get_userdetailsrefinancepdf($link[0]);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['ref_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_file', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    public function mail_format_pdfdownload($id = 0) {
        $link = explode('&', urldecode($id));
        $this->load->model('details');
        $data['userDetails'] = $this->loan_model->get_userdetailsrefinancepdf($link[0]);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['ref_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_file', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $path = PHYSICAL_PATH . 'download_pdf/';
        $filename = '' . $name . '.pdf';
        $pdf->Output($path . $filename, 'F');
    }

    public function sent_mail($id = 0, $firstname, $lastname) {
        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = urlencode($Link);
        $url = base_url() . "refinance/mail_format_pdf/" . $url1;
        $this->mail_format_pdfdownload($url1);
        $dir = PHYSICAL_PATH . 'download_pdf/';
        $data['userDetails'] = $this->loan_model->get_userdetailsrefinancepdf($id);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['ref_id'];
        // $dh = scandir($dir);
        $dh ='' . $name . '.pdf';
        $emails = $this->loan_model->get_phone();

        //send data to zapier
        $this->loan_model->send_to_zapier($this->session->userdata(),'refinance',$id);

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
        $this->email->subject("Space City New Digital Application");
         $this->email->attach($dir . $dh);
        $this->email->bcc('shashank.c@codaemonsoftwares.com');
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
            unlink($dir . $dh);
            //echo $this->email->print_debugger();
            return 1;
        }
        return 0;
    }

    public function pdfLoan($id = 0) {
     
        $data['userDetails'] = $this->loan_model->get_userdetailsforpdf($id,REFINANCE,'ref_id');
        //print_r($data['userDetails']);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['ref_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        //$pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);
        //$pdf->SetAutoPageBreak(true, 20);
        // $pdf->setFontSubsetting(false);
        // $pdf->SetFont('helvetica', '', 10);
        // add a page
        $pdf->AddPage();
        $tbl = $this->load->view('view_fileloan', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }

}
