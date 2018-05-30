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
        if ($id) {
            $data = array(
                'loan_type' => $id
            );
            $this->session->set_userdata($data);
        }
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
                'property_type' => $id,
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

    
        $this->load->view('home_step6', $data);
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

        $this->load->view('home_step7', $data);
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

        $this->load->view('home_step8',$data);
    }

    public function homestep8($email = '', $phone = '') {
        
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
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'in.mailjet.com';
        $config['smtp_port'] = '25';
        $config['smtp_user'] = '0cfe4bcb34b75be431f70ec4a8e2d7c0';
        $config['smtp_pass'] = '4477c06d14710371d226cbe4d93fb993';
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['newline'] = "\r\n";
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");
        //$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        //$this->email->set_header('Content-type', 'text/html');
        $this->email->from(ADMINEMAIL, ADMINNAME);
        //$this->email->from('anuradha.chakraborti@gmail.com', $this->session->userdata['userdata']['ud']);
        $this->email->to('' . $email . '');
        $this->email->subject("Thank you for applying");
        $this->email->bcc('anuradha.chakraborti@codaemonsoftwares.com,nisar.shaikh@codaemonsoftwares.com');
        $emailtemplate = $this->loan_model->get_emailtemplate();
        $token = array(
            'firstname' => $firstname,
            'lastname' => $lastname
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
        $link = explode('&', decode_url($id));
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

    public function sent_mail($id = 0, $firstname, $lastname) {
        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = encode_url($Link);
        $url = base_url() . "auto/mail_format_pdf/" . $url1;
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
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'in.mailjet.com';
        $config['smtp_port'] = '25';
        $config['smtp_user'] = '0cfe4bcb34b75be431f70ec4a8e2d7c0';
        $config['smtp_pass'] = '4477c06d14710371d226cbe4d93fb993';
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['newline'] = "\r\n";
        $this->load->library('email', $config);

        $this->email->set_newline("\r\n");
        //$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        //$this->email->set_header('Content-type', 'text/html');
        $this->email->from(ADMINEMAIL, ADMINNAME);
//$this->email->from('anuradha.chakraborti@gmail.com', $this->session->userdata['userdata']['ud']);
        $this->email->to('' . $emails[0]['emails'] . '');
        $this->email->subject("Thank you for applying");
        $this->email->bcc('anuradha.chakraborti@codaemonsoftwares.com,nisar.shaikh@codaemonsoftwares.com');
        $emailtemplate = $this->loan_model->get_emailtemplatepdf();
        $token = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'url' => $url
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
            return 1;
        }

        return 0;
    }

}
