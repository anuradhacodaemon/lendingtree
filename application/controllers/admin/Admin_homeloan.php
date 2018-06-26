<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_homeloan extends CI_Controller {

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
        $this->load->model('admin/homeloan');
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


            if (isset($_GET['property_value1'])) {
                $filterData['property_value1'] = $_GET['property_value1'];
            } else {
                $filterData['property_value1'] = '';
            }
            if (isset($_GET['property_value2'])) {
                $filterData['property_value2'] = $_GET['property_value2'];
            } else {
                $filterData['property_value2'] = '';
            }

            if (isset($_GET['domain'])) {
                $filterData['domain'] = $_GET['domain'];
            } else {
                $filterData['domain'] = '';
            }
            if (isset($_GET['loan_type'])) {
                $filterData['loan_type'] = $_GET['loan_type'];
            } else {
                $filterData['loan_type'] = '';
            }

            if (isset($_GET['property_type'])) {
                $filterData['property_type'] = $_GET['property_type'];
            } else {
                $filterData['property_type'] = '';
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

            $config['base_url'] = BASE_URL . MASTERADMIN . '/homeloan';

            $config['total_rows'] = $this->homeloan->get_count_user($filterData);
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
            $data["userlisting"] = $this->homeloan->get_user('', $config["per_page"], $page, $filterData, $sortData);
            $this->template->view('admin/homeloan/index', array_merge($data, $filterData));
        }
    }

    /* This function is used from showing details in admin panel */

    public function details($userId = 0) {
        $data = array();
        if (!isset($this->session->userdata['userdata']['ud'])) {
            $data = array();
            $this->load->view('admin', $data);
        } else {
            $data['userDetails'] = $this->homeloan->get_userdetails($userId);
            /* Load the view using template */
            $this->template->view('admin/homeloan/userdetails', $data);
        }
    }

    public function pdfhomeloan($id = 0) {
        // $this->load->library('pdf');
        $this->load->model('details');
        $data['userDetails'] = $this->homeloan->get_userdetails($id);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['loan_id'];
        $pdf = new PDF();

        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');

        // $pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);
        //$pdf->SetAutoPageBreak(true, 20);
        // $pdf->setFontSubsetting(false);
        // $pdf->SetFont('helvetica', '', 10);
        // add a page
        $pdf->AddPage();

        //echo ' '.APPPATH . 'views/view_files.php';
        $tbl = $this->load->view('view_homeloanfile', $data, TRUE);
        //echo $tbl;
        //die;
        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }

    public function pdfLoan($id = 0) {
        // $this->load->library('pdf');
        $this->load->model('admin/users');
        $this->load->model('details');
        $data['userDetails'] = $this->users->get_userdetails($id);
        $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['lend_id'];

        $pdf = new PDF();

        $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');

        //$pdf->SetMargins(PDF_MARGIN_LEFT, 20, PDF_MARGIN_RIGHT);
        //$pdf->SetAutoPageBreak(true, 20);
        // $pdf->setFontSubsetting(false);
        // $pdf->SetFont('helvetica', '', 10);
        // add a page
        $pdf->AddPage();
        $tbl = $this->load->view('view_fileloan', $data, TRUE);

        $pdf->writeHTML($tbl, true, false, false, false, '');
        //$pdf->SetFont('helvetica', '', 6);
        ob_end_clean();
        $pdf->Output('' . $name . '.pdf', 'D');
    }

    public function export() {
        $arr = array();
        $arr[] = "First Name";
        $arr[] = "Last Name";
        $arr[] = "Phone";
        $arr[] = "Email";
        /* if (!empty($this->session->userdata['export'])) {
          if (!empty($this->session->userdata['export']['type']))
          $arr[] = "Type of Loan";
          if (!empty($this->session->userdata['export']['requested_amount']))
          $arr[] = "Requested Amount";

          if (!empty($this->session->userdata['export']['pre_tax_income1']) || !empty($this->session->userdata['export']['pre_tax_income2']))
          $arr[] = "Yearly Income";
          if (!empty($this->session->userdata['export']['job_tile']))
          $arr[] = "Work Experience";
          if (!empty($this->session->userdata['export']['domain']))
          $arr[] = "Domain";
          }
          else { */

        $arr[] = "Home Type";
        $arr[] = "Property Type";
        $arr[] = "Home Type";
        $arr[] = "Plan Type";
        $arr[] = "DOB";
        $arr[] = "Domain";
        $arr[] = "Address";
        $arr[] = "City";
        $arr[] = "Zip";
        //}
        $arr = array($arr);
        $data2 = $this->homeloan->get_userall();
        // die;
        $type = '';
        $years = '';
        $buying_from = '';
        $pre_approved = '';
        $a = array();
        foreach ($data2 as $k => $v) {
            $a = array($v['firstname'], $v['lastname'], $v['phone'], $v['email']);
            if ($v['loan_type'] == 1)
                $loan_type = 'Purchase';
            if ($v['loan_type'] == 2)
                $loan_type = 'Refinance';
            if ($v['loan_type'] == 3)
                $loan_type = 'Home Equity';
            if ($v['loan_type'] == 4)
                $loan_type = 'Reverse Mortgage';
            else
                $loan_type = '';
            array_push($a, $loan_type);
            if ($v['property_type'] == 1)
                $property_type = 'Single Family Home';
            elseif ($v['property_type'] == 2)
                $property_type = 'Townhome';
            elseif ($v['property_type'] == 3)
                $property_type = 'Condominium';
            elseif ($v['property_type'] == 4)
                $property_type = 'Multi Family Home';
            elseif ($v['property_type'] == 5)
                $property_type = 'Manufactured or Mobile Home';
            else
                $property_type = '';

            array_push($a, $property_type);
            if ($v['home_type'] == 1)
                $home_type = 'Primary Home';
            elseif ($v['home_type'] == 2)
                $home_type = 'Secondary Home';
            elseif ($v['home_type'] == 3)
                $home_type = 'Rental Property';
            else
                $home_type = '';
            array_push($a, $home_type);
            if ($v['plan_type'] == 1)
                $plan_type = 'Already under contract';
            elseif ($v['plan_type'] == 2)
                $plan_type = 'Immediately – I’m making an offer';
            elseif ($v['plan_type'] == 3)
                $plan_type = 'I’m shopping & am considering a few options';
            elseif ($v['plan_type'] == 4)
                $plan_type = 'Within next couple month';
            elseif ($v['plan_type'] == 5)
                $plan_type = 'Not sure – I want to know what I can afford';
            else
                $plan_type = '';
            array_push($a, $plan_type);

            array_push($a, $v['dob']);
            array_push($a, $v['domain']);
            array_push($a, $v['address']);
            array_push($a, $v['city']);
            array_push($a, $v['zip']);

            //}
            //$a= array_merge($a1,$a);
            //$arr[]=array($v['firstname'],$v['lastname'],$v['email'],$type,$years,$buying_from,$pre_approved,$v['amount'],$v['pre_tax_income'],$v['dob']);


            $arr[] = $a;
        }
        //echo '<pre>';
        //print_r($arr);
        //die;
        $filename = "homeloan.csv";
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
        /*  foreach ($arr as $file) {
          $result = [];
          array_walk_recursive($file, function($item) use (&$result) {
          $result[] = $item;
          });
          fputcsv($fp, $result);
          } */
        //fputcsv($fp, $arr);
        /* $filename = "loans.csv";
          $fp = fopen('php://output', 'w');
          header('Content-type: application/csv');
          header('Content-Disposition: attachment; filename=' . $filename);
          $num_column = count($arr);
          $data2 = $this->homeloan->get_userall();
          foreach ($data2 as $k => $v) {
          fputcsv($fp, $v);
          }
         * 
         */
    }

    public function updatestatus() {
        $this->homeloan->updateStatus($this->input->post('lendId'), $this->input->post('status'));
    }

    public function delete_inactive($lend_id = 0) {
        $this->homeloan->updateactiveStatus($lend_id);
    }

    public function deleteall() {

        foreach ($this->input->post('c') as $k => $v) {
            $this->homeloan->updateactiveStatus($v);
        }
    }

    public function sentemail() {
        foreach ($this->input->post('c') as $k => $v) {
            $data['userDetails'] = $this->homeloan->get_userdetails($v);
            $name = $data['userDetails'][0]['firstname'] . '_' . $data['userDetails'][0]['ref_id'];
            $pdf = new PDF();
            $pdf->SetTitle('' . $_SERVER['HTTP_HOST'] . '');
            $pdf->AddPage();
            $tbl = $this->load->view('view_file', $data, TRUE);
            $pdf->writeHTML($tbl, true, false, false, false, '');
            $path = PHYSICAL_PATH . 'download_pdf/';
            $filename = '' . $name . '.pdf';
            //ob_end_clean();
            $pdf->Output($path . $filename, 'F');
        }
    }

    public function getpdf() {

        $dir = PHYSICAL_PATH . 'download_pdf/';

// Open a directory, and read its contents
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    echo "filename:" . $file . "<br>";
                }
                closedir($dh);
            }
        }
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */