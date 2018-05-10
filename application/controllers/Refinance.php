<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Refinance extends CI_Controller {

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

    public function refinancestep5($firstname = '', $lastname = '', $address = '', $city = '', $state = '') {
        if ($firstname) {
            $data = array(
                'firstname' => $firstname,
                'lastname' => $lastname,
                'address' => $address,
                'city' => $city,
                'state' => $state
            );
            $this->session->set_userdata($data);
        }
        $this->load->view('refinance_step5');
    }

    public function getcity($state_id = 0) {
        $city = $this->loan_model->get_city($state_id);
        echo json_encode($city);
    }

    public function refinancestep6($month = 0, $day = 0, $year = 0, $ssn = '') {
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

    public function refinancestep7($email = '', $phone = '') {
        if ($email) {
            $data = array(
                'email' => $email,
                'phone' => $phone,
                'add_date' => date('Y-m-d H:i:s'),
                'domain' => 'http://' . $_SERVER['SERVER_NAME'] . '/',
                'status' => "2"
            );
            $this->session->set_userdata($data);
        }

        unset($this->session->userdata['panel']);
        unset($this->session->userdata['__ci_last_regenerate']);
        unset($this->session->userdata['userdata']);
        $result = $this->loan_model->add_refinance($this->session->userdata());


        //$this->loan_model->add_loan($this->session->userdata['userdata']);
        if ($result > 0) {
            $getPhone = $this->loan_model->get_phone();
            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
            $this->mailformat($this->session->userdata['firstname'], $this->session->userdata['lastname'], $this->session->userdata['email']);
            $this->sent_mail($result, $this->session->userdata['firstname'], $this->session->userdata['lastname']);
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
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
            //redirect('/');
            echo 1;
        } else {
            $error = 'Your email already exist';
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
            $this->load->view('refinancestep6_view');
        }
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
        $config['smtp_port'] = '588';
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
        $this->email->subject("thank you for applying");
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

    public function sent_mail($id = 0, $firstname, $lastname) {
        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = encode_url($Link);
        $url = base_url() . "refinance/mail_format_pdf/" . $url1;

        $emails = $this->loan_model->get_phone();

        $config = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'Smtp.gmail.com',
            'smtp_port' => 25,
            'smtp_user' => 'codaemon123',
            'smtp_pass' => 'codaemon1234',
            'smtp_timeout' => '4',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        //$this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        //$this->email->set_header('Content-type', 'text/html');
        $this->email->from(ADMINEMAIL, ADMINNAME);
        //$this->email->from('anuradha.chakraborti@gmail.com', $this->session->userdata['userdata']['ud']);
        $this->email->to('' . $emails[0]['emails'] . '');
        $this->email->subject("Thank you for applying");

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
            //echo $this->email->print_debugger();
            return 1;
        }
        return 0;
    }

}
