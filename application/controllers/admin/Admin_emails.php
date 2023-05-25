<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_emails extends CI_Controller {

    /**
      @Name Category Controller
      Description:  Class represents controller for dispatcher login
      Operations : login,logout ,dashboard
      @Author : Anuradha Chakraborti
      For Codaemon Softwares Pvt. Ltd.
      For project - Technician Search
      @params
      @return
      @since    6-3-2017
      @createdDate 6-3-2017
      @link : http:xyz.com/dispatcher/
     *
     */
	     public function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model('admin/emails');
        $this->load->library('pagination');
	
    }

    /**
     * This method used to login for dispatcher depends username and password entere.
     * @param username and password in form.
     * @return login id for dispatcher if true.
     * @url /dispatcher/
     * @exception 
     * @see 
     */
    public function index() {
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array(); $this->load->view('admin/index', $data);
        } else {
            $filterData['page_name'] = 'emails';
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

            $config['base_url'] = base_url() . MASTERADMIN . '/emails';

            $config['total_rows'] = $this->emails->get_count_emails($filterData);
            //$config['per_page'] = RECORD_LIMIT;
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
            $data["emails"] = $this->emails->get_emails('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/emails/index', array_merge($data, $filterData));
        }
    }

    public function add() {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) { $this->load->view('admin/index', $data);
        } else {
         $data['domain'] = $this->emails->get_domains('');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if ($this->form_validation->run('emails/insert') == true) {
                  
                    foreach ($this->input->post() as $k => $v) {
                        $emails[$k] = $v;
                    }
                    $emails['created_date'] = date("Y-m-d H:i:s");
                   
                    $result = $this->emails->add_emails($emails);
                    if (!$result) {
                        $this->session->set_flashdata('item', array('message' => '<font color=red>Invalid Data.</font>', 'class' => 'success'));
                        redirect('admin/emails/add', $data);
                    } else {
                        /* template the view using template */
                        $this->session->set_flashdata('item', array('message' => '<font color=red>Updated successfully</font>', 'class' => 'success'));

                        redirect('admin/emails', 'refresh');
                    }
                } else {

                    $this->session->set_flashdata('item', array('message' => '<font color=red>' . validation_errors() . '</font>', 'class' => 'success'));
                    redirect('admin/emails/add', $data);
                }
              
            } else {
 
                $this->template->view('admin/emails/add', $data);
            }
        }
    }

    public function edit($id = 0) {

        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) { $this->load->view('admin/index', $data);
        } else {

            //$data["state_id"] = $id;
 $data['domain'] = $this->emails->get_domains('');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $emailsData = array();

                if ($this->form_validation->run('emails/insert') == true) {

                    foreach ($this->input->post() as $k => $v) {
                        $emailsData[$k] = $v;
                    }
                    $emailsData["emails_id"] = $id;
                    $result = $this->emails->edit_emails($emailsData);

                    if ($result == 0) {
                        $this->session->set_flashdata('item', array('message' => '<font color=red>You havenot change anything</font>', 'class' => 'success'));
                        redirect('admin/emails/edit/' . $id, 'refresh');
                    } else {
                        /* template the view using template */
                        redirect('admin/emails', $data);
                    }
                } else {
                   
                     $this->session->set_flashdata('item', array('message' => '<font color=red>' . validation_errors() . '</font>', 'class' => 'success'));
                    redirect('admin/emails/edit/' . $id, $data);
                }
              
            } else {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data["emails"] = $this->emails->get_emails($id, '', '', '', '');
                //print_r($id);exit;
                $this->template->view('admin/emails/edit', $data);
            }
        }
    }

    public function view() {

        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array(); $this->load->view('admin/index', $data);
        } else {
            $last = $this->uri->total_segments();
            $id = $this->uri->segment($last);
            $data["emails"] = $this->emails->get_emails($id, '', '', '', '');
            $this->template->view('admin/emails/view', $data);
        }
    }

    public function delete_inactive($Id=0) {

        $data["contractor"] = $this->emails->inactive_emails($Id);

        redirect('admin/emails', 'refresh');
    }

    public function delete_active($Id=0) {
        $data["contractor"] = $this->emails->active_emails($Id);
        redirect('admin/emails', 'refresh');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */