<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_user extends CI_Controller {

    /**
      @Name User Controller
      Description:  Class represents controller for dispatcher login
      Operations : login,logout ,dashboard
      @Author : Anuradha Chakraborti
      For Codaemon Softwares Pvt. Ltd.
      For project - Contact Management Search
      @params
      @return
      @since    6-11-2017
      @createdDate 6-11-2017
      @link : http:xyz.com/admin/user
     *
     */
    public function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model('admin/users');
        $this->load->library('pagination');
    }

    /* This method used view contact detail after login else redirect to login page.

     */

    public function index() {

        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
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

            if (isset($_GET['personal_phone'])) {
                $filterData['personal_phone'] = $_GET['personal_phone'];
                //$this->session->set_userdata('client_id', $_POST['client_id']);
            } else {
                $filterData['personal_phone'] = '';
            }
            if (isset($_GET['business_phone'])) {
                $filterData['business_phone'] = $_GET['business_phone'];
            } else {
                $filterData['business_phone'] = '';
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
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);

            $config['base_url'] = BASE_URL . MASTERADMIN . '/user';

            $config['total_rows'] = $this->users->get_count_user($filterData);
            $page = ($record_num) ? $record_num : 0;
            $config['reuse_query_string'] = TRUE;
            $config['use_page_numbers'] = TRUE;
            if ($page > 0)
                $page = ($page - 1) * $config['per_page'];
            $this->pagination->initialize($config);
            $data['pagination'] = $this->pagination->create_links();
            $data["page_no"] = $page;
            $data["total_rows"] = $config['total_rows'];
            $data["record_limit"] = $config['per_page'];
            $data["userlisting"] = $this->users->get_user('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/user/index', array_merge($data, $filterData));
        }
    }

    /* This function is used from showing details in admin panel */

    public function details($userId = 0) {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
            $data['userDetails'] = $this->users->get_userdetails($userId);
            /* Load the view using template */
            $this->template->view('admin/user/userdetails', $data);
        }
    }

    /* retrieve data from user model and sending this to mail function  */

    public function mailsent() {

        $post = $this->input->post();
        foreach ($post as $k => $v) {
            $record = $this->users->mail_sent_to($v);
        }
        /** prepare mail format* */
        foreach ($record as $k => $v) {

            $email = $v[0]['email'] . '-' . $v[0]['business_email'];
            $this->mailformat($v[0]['id'], $v[0]['firstname'], $v[0]['lastname'], $email, $v[0]['business_phone'], $v[0]['personal_phone'], $v[0]['address']);
        }
        // redirect('admin/user');
        $url = BASE_URL . 'admin/user';
        echo "<script type='text/javascript'>window.location='$url';</script>";
    }

    /** Please dont change the mailformat because template is coming from database * */
    public function mailformat($id, $firstname, $lastname, $email, $business_phone, $personal_phone, $address) {
        $email1 = str_replace('-', ',', $email);
        //$this->load->library('email');
        //$this->email->set_mailtype("html");
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
        $this->email->from($this->session->userdata['userdata']['adminemail'], $this->session->userdata['userdata']['ud']);
        //$this->email->from('anuradha.chakraborti@gmail.com', $this->session->userdata['userdata']['ud']);
        $this->email->to('' . $email1 . '');
        $this->email->subject("Update your contact information");

        $Link = $id . '&rand=' . rand(1, 10);
        $url1 = encode_url($Link);
        $url = base_url() . "updateinformation/" . $url1;
        $emailtemplate = $this->users->get_emailtemplate();
        $token = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'personal_phone' => $personal_phone,
            'business_phone' => $business_phone,
            'address' => $address,
            'url' => $url
        );  // forming array to send in template
        $pattern = '[%s]';
        foreach ($token as $key => $val) {
            $varMap[sprintf($pattern, $key)] = $val;
        }

        $emailContent = strtr($emailtemplate[0]['content'], $varMap);
        $this->email->message($emailContent);
        $emailSend = $this->email->send();
        $this->users->update_user_email($id);
        if ($emailSend) {
            //echo $this->email->print_debugger();
            return 1;
        }
        return 0;
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */