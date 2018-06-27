<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_template2 extends CI_Controller {

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
        $this->load->model('admin/Emailtemplate2');
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
 

  

    public function edit($id = 0) {

        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) { $this->load->view('admin/index', $data);
        } else {

            $data["id"] = 0;

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $domainData = array();

//                if ($this->form_validation->run('template/insert') == true) {

                    foreach ($this->input->post() as $k => $v) {
                        $domainData[$k] = $v;
                    }
                    $domainData["id"] = 0;
                    $result = $this->Emailtemplate2->edit_domain($domainData);

                    if ($result == 0) {
                        $this->session->set_flashdata('item', array('message' => '<font color=red>You havenot change anything</font>', 'class' => 'success'));
                        redirect('admin/template2/edit/' . $id, 'refresh');
                    } else {
                        /* template the view using template */
                        redirect('admin/template2/edit/0', $data);
                    }
//                } else {
//                   
//                     $this->session->set_flashdata('item', array('message' => '<font color=red>' . validation_errors() . '</font>', 'class' => 'success'));
//                    redirect('admin/template2/edit/' . $id, $data);
//                }
              
            } else {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data["domain"] = $this->Emailtemplate2->get_domain($id, '', '', '', '');
               
//print_r($id);exit;
                $this->template->view('admin/template2/edit', $data);
            }
        }
    }



 

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */