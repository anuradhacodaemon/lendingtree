<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_domain extends CI_Controller {

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
        $this->load->model('admin/domain');
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
            $filterData['page_name'] = 'domain';
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

            $config['base_url'] = base_url() . MASTERADMIN . '/domain';

            $config['total_rows'] = $this->domain->get_count_domain($filterData);
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
            $data["domain"] = $this->domain->get_domain('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/domain/index', array_merge($data, $filterData));
        }
    }

    public function add() {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) { $this->load->view('admin/index', $data);
        } else {
         
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if ($this->form_validation->run('domain/insert') == true) {
                  
                    foreach ($this->input->post() as $k => $v) {
                        $domain[$k] = $v;
                    }
                    $domain['created_date'] = date("Y-m-d H:i:s");
                   
                    $result = $this->domain->add_domain($domain);
                    if (!$result) {
                        $this->session->set_flashdata('item', array('message' => '<font color=red>Invalid Data.</font>', 'class' => 'success'));
                        redirect('admin/domain/add', $data);
                    } else {
                        /* template the view using template */
                        $this->session->set_flashdata('item', array('message' => '<font color=red>Updated successfully</font>', 'class' => 'success'));

                        redirect('admin/domain', 'refresh');
                    }
                } else {

                    $this->session->set_flashdata('item', array('message' => '<font color=red>' . validation_errors() . '</font>', 'class' => 'success'));
                    redirect('admin/domain/add', $data);
                }
              
            } else {
 
                $this->template->view('admin/domain/add', $data);
            }
        }
    }

    public function edit($id = 0) {

        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) { $this->load->view('admin/index', $data);
        } else {

            $data["domain_id"] = $id;

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $domainData = array();

                if ($this->form_validation->run('domain/insert') == true) {

                    foreach ($this->input->post() as $k => $v) {
                        $domainData[$k] = $v;
                    }
                    $domainData["domain_id"] = $id;
                    $result = $this->domain->edit_domain($domainData);

                    if ($result == 0) {
                        $this->session->set_flashdata('item', array('message' => '<font color=red>You havenot change anything</font>', 'class' => 'success'));
                        redirect('admin/domain/edit/' . $id, 'refresh');
                    } else {
                        /* template the view using template */
                        redirect('admin/domain', $data);
                    }
                } else {
                   
                     $this->session->set_flashdata('item', array('message' => '<font color=red>' . validation_errors() . '</font>', 'class' => 'success'));
                    redirect('admin/domain/edit/' . $id, $data);
                }
              
            } else {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data["domain"] = $this->domain->get_domain($id, '', '', '', '');
                //print_r($id);exit;
                $this->template->view('admin/domain/edit', $data);
            }
        }
    }

    public function view() {

        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array(); $this->load->view('admin/index', $data);
        } else {
            $last = $this->uri->total_segments();
            $id = $this->uri->segment($last);
            $data["domain"] = $this->domain->get_domain($id, '', '', '', '');
            $this->template->view('admin/domain/view', $data);
        }
    }

    public function delete_inactive($Id=0) {

        $data["contractor"] = $this->domain->inactive_domain($Id);

        redirect('admin/domain', 'refresh');
    }

    public function delete_active($Id=0) {
        $data["contractor"] = $this->domain->active_domain($Id);
        redirect('admin/domain', 'refresh');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */