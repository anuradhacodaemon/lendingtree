<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_vsc extends CI_Controller {

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
        $this->load->model('admin/vsc');
        $this->load->library('pagination');
        $this->load->helper('csv');
    }

    /* This method used view contact detail after login else redirect to login page.

     */

    public function index() {
    
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {

         
            if (isset($_GET))
                $this->session->set_userdata('export', $_GET);
            else
                $this->session->unset_userdata('export');

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
            if (isset($_GET['vin'])) {
                $filterData['vin'] = $_GET['vin'];
            } else {
                $filterData['vin'] = '';
            }
            if (isset($_GET['current_milage'])) {
                $filterData['current_milage'] = $_GET['current_milage'];
            } else {
                $filterData['current_milage'] = '';
            }

            if (isset($_GET['email'])) {
                $filterData['email'] = $_GET['email'];
            } else {
                $filterData['email'] = '';
            }
        
            if (isset($_GET['type'])) {
                $filterData['type'] = $_GET['type'];
                //$this->session->set_userdata('client_id', $_POST['client_id']);
            } else {
                $filterData['type'] = '';
            }


            if (isset($_GET['domain'])) {
                $filterData['domain'] = $_GET['domain'];
            } else {
                $filterData['domain'] = '';
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
         
            $config['base_url'] = BASE_URL . MASTERADMIN . '/vsc';
       
            $config['total_rows'] = $this->vsc->get_count_user($filterData);
              
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
            $data["userlisting"] = $this->vsc->get_user('', $config["per_page"], $page, $filterData, $sortData);

            $this->template->view('admin/vsc/index', array_merge($data, $filterData));
        }
    }

    public function pdfLoan($id = 0) 
    {
        $data['userDetails'] = $this->vsc->get_userdetails($id);
        $name = $data['userDetails']['email'] . '_' . $data['userDetails']['vsc_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_vsc_file', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    public function vscpdf($id = 0) {
        $data['userDetails'] = $this->vsc->get_userdetails($id);
        $name = $data['userDetails'][0]['email'] . '_' . $data['userDetails'][0]['vsc_id'];
        $pdf = new PDF();
        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
        $pdf->AddPage();
        $tbl = $this->load->view('view_vsc_file', $data, TRUE);
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }
    
    /* This function is used from showing details in admin panel */

    public function details($userId = 0) {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
            $data['userDetails'] = $this->vsc->get_userdetails($userId);
            /* Load the view using template */
            $this->template->view('admin/vsc/userdetails', $data);
        }
    }

    public function export() {
        $arr = array();
        $arr[] = "Email";
        $arr[] = "Vehicle";
        $arr[] = "VIN Number";
        $arr[] = "Current Milage";
        $arr[] = "Vehicle Year";
        $arr[] = "Vehicle Brand";
        $arr[] = "Vehicle Model";
        $arr[] = "Purchased last 30 days";
        $arr[] = "Vehicle Warranty";
        $arr[] = "Domain";
        $arr = array($arr);
     
        $data2 = $this->vsc->get_userall();
        $a = array();
        foreach ($data2 as $k => $v) {
            $a = array($v['email']);

            if ($v['type'] == 1)
                $type = 'Vehicle';
            elseif ($v['type'] == 2)
                $type = 'Motorcyclee';
            elseif ($v['type'] == 3)
                $type = 'Motorhome';
            else
                $type = '';

            array_push($a, $type);
            array_push($a, $v['vin']);
            array_push($a, $v['current_milage']);
            array_push($a, $v['vehicle_year']);
            array_push($a, $v['vehicle_make_brand']);
            array_push($a, $v['vehicle_model']);

            if ($v['is_purchased'] == 1)
                $is_purchased = 'Yes';
            elseif ($v['type'] == 2)
                $is_purchased = 'No';
            else
                $is_purchased = '';

            array_push($a, $is_purchased);

            if ($v['basic_warranty'] == 1)
                $basic_warranty = 'Yes';
            elseif ($v['type'] == 2)
                $basic_warranty = 'No';
            else
                $basic_warranty = '';
            array_push($a, $basic_warranty);

            array_push($a, $v['domain']);
        
            $arr[] = $a;
        }
        //echo '<pre>';
        //print_r($arr);
        //die;
        $filename = "Vehicle_Service_Contract.csv";
        $fp = fopen('php://output', 'w');
        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename=' . $filename);
        foreach ($arr as $file) {
            $result = [];
            array_walk_recursive($file, function($item) use (&$result) {
                $result[] = $item;
            });
            fputcsv($fp, $result);
        }
    }

    public function updatestatus()
    {
        $this->vsc->updateStatus($this->input->post('vsc_id'),$this->input->post('status'));
    }
    
    public function delete_inactive($lend_id=0)
    {
               $this->vsc->updateactiveStatus($lend_id);
 
    }
     public function deleteall()
    {
       
        foreach($this->input->post('c') as $k=>$v)
        {

             $this->vsc->updateactiveStatus($v);
        }
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */