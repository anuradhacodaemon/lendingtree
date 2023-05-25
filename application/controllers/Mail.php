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
        
        /**$sent = $this->send_email(array(
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
echo '</pre>';  **/
        
        
        $apiKey = 'b3a36af907c09950600a33f4b9247871-us18';
 
$campaignId = "20857";

$memberId = md5(strtolower("membermail"));
$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
$url = 'https://'. $dataCenter . '.api.mailchimp.com/3.0/campaigns/' . $campaignId .'/actions/test';

$jsonEmail = '{"test_emails":["the mail you want to send thing sat"],"send_type":"html"}';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'apikey:'.$apiKey);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEmail);

$result = curl_exec($ch);
curl_close($ch);

var_dump($result);
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

 
public function isa_mailchimp_api_request( $endpoint, $type = 'POST', $body = '' ) {
 
    // Configure --------------------------------------
 
    $api_key = 'YOUR_API_KEY';
 
    // STOP Configuring -------------------------------
 
    $core_api_endpoint = 'https://<dc>.api.mailchimp.com/3.0/';
    list(, $datacenter) = explode( '-', $api_key );
    $core_api_endpoint = str_replace( '<dc>', $datacenter, $core_api_endpoint );
 
    $url = $core_api_endpoint . $endpoint;
 
    $request_args = array(
        'method'      => $type,
        'timeout'     => 20,
        'headers'     => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'apikey ' . $api_key
        )
    );
 
    if ( $body ) {
        $request_args['body'] = json_encode( $body );
    }
 
    $request = wp_remote_post( $url, $request_args );
    $response = is_wp_error( $request ) ? false : json_decode( wp_remote_retrieve_body( $request ) );
 
    return $response;
}
 
/**
 * Create a MailChimp campaign with MailChimp API v3
 *
 * @param $list_id string Your List ID for this campaign
 * @param $subject string The email subject line for this campaign
 * @return mixed The campaign ID if it was successfully created, otherwise false.
 */
 
public function isa_create_mailchimp_campaign( $list_id, $subject ) {
 
    // Configure --------------------------------------
 
    $reply_to   = 'Your Company Email Address';
    $from_name  = 'Your Company Name';
 
    // STOP Configuring -------------------------------
 
    $campaign_id = '';
 
    $body = array(
        'recipients'    => array('list_id' => $list_id),
        'type'          => 'regular',
        'settings'      => array('subject_line' => $subject,
                                'reply_to'      => $reply_to,
                                'from_name'     => $from_name
                                )
    );
 
    $create_campaign = isa_mailchimp_api_request( 'campaigns', 'POST', $body );
 
    if ( $create_campaign ) {
        if ( ! empty( $create_campaign->id ) && isset( $create_campaign->status ) && 'save' == $create_campaign->status ) {
            // The campaign id: 
            $campaign_id = $create_campaign->id;
        }
    }
 
    return $campaign_id ? $campaign_id : false;
 
}
 
/**
 * Set the HTML content for MailChimp campaign, given template sections, with MailChimp API v3
 *
 * @param $campaign_id string The Campaign ID
 * @param $template_content array Template Content including the Template ID and Sections
 * 
 * @return bool True if the content was set, otherwise false.
 */
 
public function isa_set_mail_campaign_content( $campaign_id, $template_content ) {
    $set_content = '';
    $set_campaign_content = isa_mailchimp_api_request( "campaigns/$campaign_id/content", 'PUT', $template_content );
 
    if ( $set_campaign_content ) {
        if ( ! empty( $set_campaign_content->html ) ) {
            $set_content = true;
        }
    }
    return $set_content ? true : false;
}
}