<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homeloan extends CI_Controller {

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

        $this->template->view('home_step1');
    }

    public function homestep1($id = 0) {

        $this->load->view('home_step1');
    }

    public function homestep2($id = 0) {
        if ($id) {
            $data = array(
                'loan_type' => $id
            );
            $this->session->set_userdata($data);
        }
        $this->load->view('home_step2');
    }

    public function homestep3($id = 0) {
        if ($id) {
            $data = array(
                'property_type' => $id
            );

            $this->session->set_userdata($data);
        }
        // echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('home_step3');
    }

    public function homestep4($id = 0) {
        if ($id) {
            $data = array(
                'home_type' => $id,
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('home_step4');
    }

    public function homestep41($id = 0) {
        if ($id) {
            $data = array(
                'plan_type' => $id,
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('home_step25');
    }
    
    public function homestep25($pre_tax_income = 0) {
        if ($pre_tax_income) {

            //$num = explode('$', $pre_tax_income);
            // $number = $num[1];
            //$real_integer = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
            $data = array(
                'pre_tax_income' => $pre_tax_income
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        $this->load->view('home_step5');
    }

    public function homestep5($zip = 0) {

        if ($zip) {

            //$num = explode('$', $pre_tax_income);
            // $number = $num[1];
            //$real_integer = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
            $data = array(
                'zip' => $zip
            );

            $this->session->set_userdata($data);
        }


        $this->load->view('home_step6');
    }

    public function homestep6($id = '') {
        if ($id) {
            $data = array(
                'property_value' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step7');
    }

    public function homestep7($id = 0) {
        if ($id) {
            $data = array(
                'mortgage_bal' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step8');
    }

    public function homestep8($id = '') {
        if ($id) {
            $data = array(
                'mortgage_2' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step10');
    }

    public function homestep9($id = '') {
        if ($id) {
            $data = array(
                'mortgage_2' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step9');
    }

    public function homestep10($id = '') {
        if ($id) {
            $data = array(
                'remaining_mortgage_bal' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step11');
    }

    public function homestep11($id = '') {
        if ($id) {
            $data = array(
                'additional_cash' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step12');
    }

    public function homestep111($id = '') {
        if ($id) {
            $data = array(
                'close_mortgage' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());
        if ($id == 1)
            $this->load->view('home_step12');
        if ($id == 2)
            $this->load->view('home_step9');
    }

    public function homestep12($id = '') {
        if ($id) {
            $data = array(
                'credit_score' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step13');
    }

    public function homestep13($month = 0, $day = 0, $year = 0, $ssn = '') {
        if ($month) {
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

        $this->load->view('home_step14');
    }

    public function homestep14($id = '') {
        if ($id) {
            $data = array(
                'military_served' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step15');
    }

    public function homestep15($id = '') {
        if ($id) {
            $data = array(
                'military_served' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step16');
    }

    public function homestep16($id = '') {
        if ($id) {
            $data = array(
                'va_loan' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step16');
    }

    public function homestep17($id = '') {
        if ($id) {
            $data = array(
                'bankruptcy_or_foreclosure' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step17');
    }

    public function homestep171($id = '') {
        if ($id) {
            $data = array(
                'bankruptcy_years' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step17');
    }

    public function homestep172($id = '') {
        if ($id) {
            $data = array(
                'foreclosure_years' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step17');
    }

    public function homestep18($id = '') {
        if ($id) {
            $data = array(
                'bankruptcy_or_foreclosure' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step18');
    }

    public function homestep19($id = '') {
        if ($id) {
            $data = array(
                'bankruptcy_or_foreclosure' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step19');
    }

    public function homestep20($id = '') {
        if ($id) {
            $data = array(
                'bankruptcy_or_foreclosure' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step20');
    }

    public function homestep21($id = '') {
        if ($id) {
            $data = array(
                'bankruptcy_years' => $id
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step21');
    }

    public function homestep22($zip = '', $city = '', $address = '') {
        if ($zip) {
            $data = array(
                'zip' => $zip,
                'city' => $city,
                'address' => $address
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step22');
    }

    public function homestep23($firstname = '', $lastname = '') {
        if ($firstname) {
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname
            );

            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        // print_r($this->session->userdata());

        $this->load->view('home_step23');
    }

    public function homestep24($email = '', $phone = '') {
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
        unset($this->session->userdata['type']);
        unset($this->session->userdata['requested_amount']);
        unset($this->session->userdata['current_employer']);
        unset($this->session->userdata['job_title']);
//        unset($this->session->userdata['pre_tax_income']);
        unset($this->session->userdata['state']);
        $result = $this->loan_model->add_homeloan($this->session->userdata());

        //$this->loan_model->add_loan($this->session->userdata['userdata']);

        if ($result > 0) {
            $getPhone = $this->loan_model->get_phone();

            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
            
            $this->mailformat($this->session->userdata['firstname'], $this->session->userdata['lastname'], $this->session->userdata['email']);
            $this->sent_mail($result, $this->session->userdata['firstname'], $this->session->userdata['lastname']);
            
            $this->session->userdata['userdata'] = '';
            $this->session->userdata['loan_type'] = '';
            $this->session->userdata['property_type'] = '';
            $this->session->userdata['home_type'] = '';
            $this->session->userdata['plan_type'] = '';
            $this->session->userdata['zip'] = '';
            $this->session->userdata['property_value'] = '';
            $this->session->userdata['mortgage_2'] = '';
            $this->session->userdata['remaining_mortgage_bal'] = '';
            $this->session->userdata['additional_cash'] = '';
            $this->session->userdata['close_mortgage_bal'] = '';
            $this->session->userdata['credit_score'] = '';
            $this->session->userdata['month'] = '';
            $this->session->userdata['day'] = '';
            $this->session->userdata['years'] = '';
            $this->session->userdata['dob'] = '';
            $this->session->userdata['military_served'] = '';
            $this->session->userdata['va_loan'] = '';
            $this->session->userdata['bankruptcy_or_foreclosure'] = '';

            $this->session->userdata['city'] = '';
            $this->session->userdata['address'] = '';
            $this->session->userdata['bankruptcy_years'] = '';
            $this->session->userdata['foreclosure_years'] = '';
            $this->session->userdata['firstname'] = '';
            $this->session->userdata['lastname'] = '';
            $this->session->userdata['email'] = '';
            $this->session->userdata['phone'] = '';
            $this->session->userdata['mortgage_bal'] = '';
            $this->session->userdata['close_mortgage'] = '';
            $this->session->userdata['ssn'] = '';
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
        $this->email->subject("Coastal Community FCU New Digital Application");
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
        $data['userDetails'] = $this->loan_model->get_userdetailshomeloanpdf($link[0]);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['loan_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_homeloanfile', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    
    public function mail_format_pdfdownload($id = 0) {
        $link = explode('&', urldecode($id));
        $this->load->model('details');
        $data['userDetails'] = $this->loan_model->get_userdetailshomeloanpdf($link[0]);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['loan_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_homeloanfile', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
         $path = PHYSICAL_PATH . 'download_pdf/';
        $filename = '' . $name . '.pdf';
        $pdf->Output($path . $filename, 'F');
    }

    public function sent_mail($id = 0, $firstname, $lastname) {
        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = urlencode($Link);
        $url = base_url() . "homeloan/mail_format_pdf/" . $url1;
        $this->mail_format_pdfdownload($url1);
        $dir = PHYSICAL_PATH . 'download_pdf/';
        $data['userDetails'] = $this->loan_model->get_userdetailshomeloanpdf($id);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['loan_id'];
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
        $this->email->subject("Coastal Community FCU New Digital Application");
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

    public function ajaxZipcode($zipcode = 0) {
        $result = $this->loan_model->get_zip($zipcode);
        if (!empty($result)) {
            echo $result[0]['city'] . " " . $result[0]['state'];
            $this->session->userdata['city'] = $result[0]['city'];
        } else {
            echo 'Please enter a valid property zip code.';
        }
    }
     public function ajaxZipcode1($zipcode = 0) {
        $result = $this->loan_model->get_zip($zipcode);
        if (!empty($result)) {
            echo $result[0]['city'] ;
            $this->session->userdata['city'] = $result[0]['city'];
        } 
    }

}
