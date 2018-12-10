<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loanofficer extends CI_Controller {

    /**
      @Name Loanofficer Controller
      Description:  Class represents controller for add edit loan officer
      Operations : login,logout ,dashboard
      @Author : Amit Jadhav
      For Codaemon Softwares Pvt. Ltd.
      @params
      @return
      @since    6-3-2017
      @createdDate 10-12-2018
     *
     */
    public function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->load->model('admin/loanofficer_model');
    }

    /**
     * Function to show Loan Officer Listing
     */
    public function index() {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $this->load->view('admin', $data);
        } else {
            $data['loan_officerArray'] = $this->loanofficer_model->get_all_loanofficer();
            $this->template->view('admin/loanofficer/index', $data);
        }
    }
    
    /**
     * Function to add Loan Officer
     */
    public function add() {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $this->load->view('admin', $data);
        } else {
            if($this->input->post()) {
                $insert_data = array(
                    'name' => $this->input->post('name'),
                    'officer_id' => $this->input->post('officer_id'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'status' => 1,
                );
                if ($this->form_validation->run('admin/loanofficer') == true) {
                    $result = $this->loanofficer_model->add_loanofficer($insert_data);
                    if($result) {
                        $messge = array('message' => 'Loan Officer added successfully','class' => 'alert alert-success fade in');
                        $this->session->set_flashdata('item', $messge);
                    }
                    else {
                        $messge = array('message' => 'Loan Officer not added','class' => 'alert alert-danger fade in');
                        $this->session->set_flashdata('item',$messge );
                    }
                    redirect('admin/loanofficer','refresh');
                }
                else
                {
                    $messge = array('message' => 'Loan Officer already exist','class' => 'alert alert-danger fade in');
                    $this->session->set_flashdata('item',$messge );
                }
            }
            $this->template->view('admin/loanofficer/add', $data);
        }
    }
    
    /**
     * Function to edit Loan Officer
     */
    public function edit($id = 0) {

        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) { $this->load->view('admin/index', $data);
        } else {

            $data["id"] = $id;

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $officerData = array();

                if ($this->form_validation->run('admin/loanofficer') == true) {
                    $id = $this->input->post('id');
                    foreach ($this->input->post() as $k => $v) {
                        $officerData[$k] = $v;
                    }
                    $result = $this->loanofficer_model->edit_domain($officerData);

                    if ($result == 0) {
                        $this->session->set_flashdata('item', array('message' => '<font color=red>You havenot change anything</font>', 'class' => 'success'));
                        redirect('admin/loanofficer/edit/' . $id);
                    } else {
                        /* template the view using template */
                        redirect('admin/loanofficer', $data);
                    }
                } else {
                     $this->session->set_flashdata('item', array('message' => '<font color=red>' . validation_errors() . '</font>', 'class' => 'success'));
                    redirect('admin/loanofficer/edit/' . $id, $data);
                }
              
            } else {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data["userDetails"] = $this->loanofficer_model->get_officerdata($id);
                //print_r($data["userDetails"]);exit;
                $this->template->view('admin/loanofficer/edit', $data);
            }
        }
    }
    
    /**
     * Function to de-activate Loan Officer
     */
    public function delete_inactive($id = 0) {
        $this->loanofficer_model->updateactiveStatus($id);
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */