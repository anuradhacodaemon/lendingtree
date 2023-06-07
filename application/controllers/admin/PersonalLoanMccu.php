<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PersonalLoanMccu extends CI_Controller {

    /**
      *@Name User Controller
      *Description:  Class represents controller for dispatcher login
      *Operations : login,logout ,dashboard
      *@Author : Haroon
      *For Codaemon Softwares Pvt. Ltd.
      *For project - Contact Management Search
      *@params
      *@return
      *@since    6-11-2017
      *@createdDate 6-11-2017
      *@link : http:xyz.com/admin/user
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

    public function index() 
    {
        echo "I am in the PersonalLoanMCCU>>>";exit;
    }



    //========================================END OF FILE=====================================================
}