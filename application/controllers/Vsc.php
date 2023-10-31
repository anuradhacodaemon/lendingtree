<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vsc extends CI_Controller {

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

        $this->template->view('vscstep1');
    }

    public function vscstep1() {

        $this->load->view('vsc/vscstep1');
    }

    public function vscstep2($id = 0) {
        if ($id) {
            $data = array(
                'type' => $id
            );
            $this->session->set_userdata($data);
        }
        //echo '<pre>';
        //print_r($this->session->userdata());
        $this->load->view('vsc/vscstep2');
    }

    public function vscstep3($id = 0) {
        if ($id) {
            $data = array(
                'is_vin' => $id
            );

            $this->session->set_userdata($data);
        }
        // echo '<pre>';
        // print_r($this->session->userdata());
       // $this->load->view('vsc/vscstep3');
        if($id==1)
        {
            $this->load->view('vsc/vscstep3');
        }else{
            $this->load->view('vsc/vscstep4');
        }
       
    }
    
    public function vscstep4($year=0,$make=0,$model=0) {
   //     if ($year) {
            $data = array(
                'year' => $year,
                'make' => $make,
                'model' => $model,
            );

            $this->session->set_userdata($data);
     //   }


      //  echo '<pre>';
     //    print_r($this->session->userdata());
        $this->load->view('vsc/vscstep4', $data);
    }


    public function vscstep5($id = 0) {

        if($_POST['year'])
        {
            $year=$_POST['year'];
            $make=$_POST['make'];
            $model=$_POST['model'];

            $data = array(
                'vehicle_year' => $year,
                'vehicle_make_brand' => $make,
                'vehicle_model' => $model,
            );
        }
        if($_POST['vin_value'])
        {
            $vin=$_POST['vin_value'];
            $data = array(
                'vin' => $vin,
            );
        }

        $this->session->set_userdata($data);

        $this->load->view('vsc/vscstep5', $data);
    }

    public function vscstep6($current_milage = 0) {
        if ($current_milage) {
            $data = array(
                'current_milage' => $current_milage
            );

            $this->session->set_userdata($data);
        }

        $this->load->view('vsc/vscstep6', $data);
    }

    public function vscstep7($is_purchased = 0) {
        if ($is_purchased) {
            $data = array(
                'is_purchased' => $is_purchased
            );

            $this->session->set_userdata($data);
        }
        $this->load->view('vsc/vscstep7');
    }

     public function vscstep8($basic_warranty = 0) {
        if ($basic_warranty) {
             $data = array(
                 'basic_warranty' => $basic_warranty
             );

             $this->session->set_userdata($data);
         }
              $this->load->view('vsc/vscstep8');
     }

     public function vscstep9($email = 0) {
        if ($email) {
             $data = array(
                 'email' => $email
             );

             $this->session->set_userdata($data);
         }
              $this->load->view('vsc/vscstep9');
     }

    public function vscstep10() {

        unset($this->session->userdata['laid_off_for_payment_waived']);
        unset($this->session->userdata['__ci_last_regenerate']);
        unset($this->session->userdata['panel']);
        unset($this->session->userdata['i_represent_stated']);
        unset($this->session->userdata['userdata']);
        unset($this->session->userdata['die_or_ill_cancel_the_loan']);
        $is_vin=$this->session->userdata['is_vin'];
        if( $is_vin==1){
         unset($this->session->userdata['vehicle_year']);
         unset($this->session->userdata['vehicle_make_brand']);
         unset($this->session->userdata['vehicle_model']);
        }else{
         unset($this->session->userdata['vin']);
        }

        $this->session->userdata['date_of_application']=date('Y-m-d H:i:s');
        $this->session->userdata['domain']=$_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'];
        $this->session->userdata['status']=1;

       // echo"<pre>"; print_r($this->session->userdata()); die();		
     
        $result = $this->loan_model->add_vsc($this->session->userdata());

        if ($result > 0) {
            $getPhone = $this->loan_model->get_phone();
            $error = 'Your application has been submitted! Someone will be in touch with you shortly. If you have any questions, please call ' . $getPhone[0]['phone'];
            $this->session->set_flashdata('item', array('message' => '<font color=red>' . $error . '</font>', 'class' => 'success'));
        //    $this->mailformat('first name', 'last name', 'saurab.c@codaemonsoftwares.com');
            $this->sent_mail($result);
            
            $this->session->userdata['userdata'] = '';
            $this->session->userdata['type'] = '';
            $this->session->userdata['is_vin'] = '';
            $this->session->userdata['vin'] = '';
            $this->session->userdata['current_milage'] = '';
            $this->session->userdata['is_purchased'] = '';
            $this->session->userdata['basic_warranty'] = '';
            $this->session->userdata['email'] = '';
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
        $this->email->subject("Demo Credit Union New Digital Application");
        $this->email->bcc('nisar.shaikh@codaemonsoftwares.com,haroon.m@codaemonsoftwares.com');
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
        $data['userDetails'] = $this->loan_model->get_userdetailsvscpdf($link[0]);
        $name = $data['userDetails'][0]['email'] . '_' . $data['userDetails'][0]['vsc_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_vsc_file', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        ob_end_clean();
        $path = PHYSICAL_PATH . 'download_pdf/';
        $filename = '' . $name . '.pdf';
        $pdf->Output($path . $filename, 'F');
    }

    public function sent_mail($id = 0) {
        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = urlencode($Link);
        $url = base_url() . "vsc/mail_format_pdf/" . $url1;
        $this->mail_format_pdfdownload($url1);
        $dir = PHYSICAL_PATH . 'download_pdf/';
        $data['userDetails'] = $this->loan_model->get_userdetailsvscpdf($id);
        $name = $data['userDetails'][0]['email'] . '_' . $data['userDetails'][0]['vsc_id'];
        // $dh = scandir($dir);
        $dh ='' . $name . '.pdf';
        $emails = $this->loan_model->get_phone();
         //send data to zapier
     //   $this->loan_model->send_to_zapier($this->session->userdata(),'refinance',$id);

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
        $this->email->to(VSCMAIL);
        $this->email->subject("Demo Credit Union New Digital Application");
        $this->email->attach($dir . $dh);
     //   $this->email->bcc('haroon.m@codaemonsoftwares.com');
        $emailtemplate = $this->loan_model->get_emailtemplatepdf();
        if($_SERVER['HTTP_HOST']=='localhost' || $_SERVER['HTTP_HOST']=='localhost:82' )
	    {
            $url_name = 'http://'.$_SERVER['HTTP_HOST'].'/lendingtree';
        }   
        else{
            $url_name = $_SERVER['REQUEST_SCHEME'].'://' . str_replace('www.', '', $_SERVER['SERVER_NAME']);
            }
        $token = array(
            'firstname' => VSCMAIL,
           // 'lastname' => $lastname,
            'url' => $url_name,
            'domain'=>$_SERVER['SERVER_NAME'],
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
        $data['userDetails'] = $this->loan_model->get_userdetailsrefinancepdf($id);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['lend_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        //$pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);
        //$pdf->SetAutoPageBreak(true, 20);
        // $pdf->setFontSubsetting(false);
        // $pdf->SetFont('helvetica', '', 10);
        // add a page
        $pdf->AddPage();
        $tbl = $this->load->view('view_vsc_file', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }

}
