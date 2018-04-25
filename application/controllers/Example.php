<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Example extends CI_Controller {


  /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function index()
   {
	


	
$this->load->library('pdf');
			$pdf = new PDF();
			$pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
			$pdf->SetAutoPageBreak(true, 40);
			$pdf->setFontSubsetting(false);
			$pdf->SetFont('helvetica', 'B', 20);
			// add a page
			$pdf->AddPage();
                        $tbl='<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1></h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">How Much Do You Amount Owed?</label>
                
               
              
              
                </div>
                  <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="refinancestep1()">Continue<span class="continueIcon sprites"></span></button>
                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
-->
              
              </div>
            </div>
        </div>
    </div>
</div>';
			$pdf->writeHTML($tbl, true, false, false, false, '');
			$pdf->SetFont('helvetica', '', 8);

$pdf->AddPage();

$pdf->Write(5, 'Some sample text');
$pdf->Output('My-File-Name.pdf', 'I');   }
}