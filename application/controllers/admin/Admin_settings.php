<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_settings extends CI_Controller {

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
        $this->load->model('admin/settings');
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
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $this->load->view('admin/index', $data);
        } else {

            //$data["state_id"] = $id;
            $data['settings'] = $this->settings->get_settings('');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $settingsData = array();

                if ($this->form_validation->run('settings/insert') == true) {

                    foreach ($this->input->post() as $k => $v) {
                        $settingsData[$k] = $v;
                    }
                    $settingsData["id"] = $id;
                    $result = $this->settings->edit_settings($settingsData);
                    if ($result == 0) {
                        $this->session->set_flashdata('item', array('message' => '<font color=red>You havenot change anything</font>', 'class' => 'success'));
                        redirect('admin/settings/' . $id, 'refresh');
                    } else {
                        /* template the view using template */
                        redirect('admin/settings/1', $data);
                    }
                } else {

                    $this->session->set_flashdata('item', array('message' => '<font color=red>' . validation_errors() . '</font>', 'class' => 'success'));
                    redirect('admin/settings/edit/' . $id, $data);
                }
            } else {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data["settings"] = $this->settings->get_settings($id);
                //print_r($id);exit;
                $this->template->view('admin/settings/edit', $data);
            }
        }
    }

   

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */