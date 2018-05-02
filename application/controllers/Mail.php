<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('POSTMARK_API_KEY', 'fa88e6fe-92a9-413b-9c72-857adc553d2f');

class Mail extends CI_Controller {


  /**
    * Get All Data from this method.
    *
    * @return Response
   */
    
    public function index(){
        
        $sent = $this->send_email(array(
    'to' => 'anuradha.chakraborti@codaemonsoftwares.com',
    'from' => 'Me <anuradha.chakraborti@codaemonsoftwares.com>',
    'subject' => 'That was easy',
    'headers' => 'From: webmaster@example.com' ,
    'attachments'  =>'',       
    'text_body' => 'This will be shown to plain-text mail clients',
    'html_body' => '<html><body>But <em>this</em> will be shown to HTML mail clients</body></html>'
), $response, $http_code);
// Did it send successfully?
if( $sent ) {
    echo 'The email was sent!';
} else {
    echo 'The email could not be sent!';
}
// Show the response and HTTP code
echo '<pre>';
echo 'The JSON response from Postmark:<br />';
print_r($response);
echo 'The HTTP code was: ' . $http_code;
echo '</pre>';
    }
    
    public function send_email($email, &$response = null, &$http_code = null) {
    $json = json_encode(array(
        'From' => $email['from'],
        'To' => $email['to'],
        'Subject' => $email['subject'],
        'HtmlBody' => $email['html_body'],
        'TextBody' => $email['text_body'],
        'Headers' => $email['headers'],
        'Attachments' => $email['attachments']
    ));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://api.postmarkapp.com/email');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Accept: application/json',
        'Content-Type: application/json',
        'X-Postmark-Server-Token: ' . POSTMARK_API_KEY
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $response = json_decode(curl_exec($ch), true);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $http_code === 200;
}
   public function index1()
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