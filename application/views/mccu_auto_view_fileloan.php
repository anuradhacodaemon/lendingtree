<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Document</title>
  </head>
  <table>
    <tr>
        <td style="background-color:#f2f2f2; font-size:20px; color:#000; padding-bottom:40px; text-align:center; font-family:Arial;">Consumer Loan Application</td>
    </tr> 
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td style="font-size:11px; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; padding:0 0 10px;">All information sent to us is stored on a secure server for your safety.</td>
    </tr> 
    <tr>
        <td style="padding:0 10px; font-size:11px; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px;">Submit this application today via our secured server, or stop by the credit union for more information. You may also print out this application and mail it or fax it in for processing.</td>
    </tr> 
    <!--<tr>
        <td style="padding:0 0 5px; font-weight:bold; font-size:11px; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; ">Notice: Married Applicants may apply for a separate account.</td>
    </tr>--> 
    <tr>
        <td style="border-bottom:1px dashed #ddd;">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Applicant Account Number :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php   if(isset($userDetails['lend_id']))
                            {
                                echo $userDetails['lend_id'];
                            } 
                            elseif(isset($userDetails['p_id']))
                            {
                                echo $userDetails['p_id'];
                            }
                            elseif(isset($userDetails['rc_id']))
                            {
                                echo $userDetails['rc_id'];
                            }
                            
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Date :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo date('d-m-Y' ,strtotime($userDetails['date_of_application']))?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Consumer Loan Type</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Purpose of Loan :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php 
                                if($userDetails['loan_type']>0)
                                {
                                    $type='';
                                if($userDetails['loan_type']==1)
                                    $type='New Car Purchase';
                                if($userDetails['loan_type']==2)
                                    $type='Used Car Purchase';
                                if($userDetails['loan_type']==3)
                                    $type='Refinance';
                                if($userDetails['loan_type']==4)
                                    $type='Lease Buy Out';
                                if($userDetails['loan_type']==5)
                                    $type='Personal Loan';    
                                if($userDetails['loan_type']==6)
                                    $type='Recreational Vehicle Loan';
                                
                                    echo $type;} ?>
                    </td>
                </tr>                
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                       Request Amount ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                      <?php  
                            if(!empty($userDetails['requested_amount']))
                            {
                                echo $userDetails['requested_amount'];                    
                            }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Type of Application :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php 
                                if($userDetails['loan_type']>0)
                                {
                                    $type='';
                                if($userDetails['loan_type']==1)
                                    $type='New Car Purchase';
                                if($userDetails['loan_type']==2)
                                    $type='Used Car Purchase';
                                if($userDetails['loan_type']==3)
                                    $type='Refinance';
                                if($userDetails['loan_type']==4)
                                    $type='Lease Buy Out';
                                if($userDetails['loan_type']==5)
                                    $type='Personal Loan';    
                                if($userDetails['loan_type']==6)
                                    $type='Recreational Vehicle Loan';
                                
                                    echo $type;} ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">APPLICANT</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Name :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails['first_name'].' '.$userDetails['last_name']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Home Phone :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['p_phone'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Email :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo $userDetails['p_email'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Marital Status :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['marital_status'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Primary Residence :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo $userDetails['buying_own_rent']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Current Street Address :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo str_replace("%20"," ",$userDetails['p_address']); ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Military Involvement :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['military_involvement']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Years There :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['p_years_been_there_on_address']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        City :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                          <?php 
                          /*if($userDetails[0]['city']>0){
                          $city=$this->details->get_city($userDetails[0]['city']);
                          echo $city[0]['name'];} */
                          ?>
                          --
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        State :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php  
                        /*if($userDetails[0]['state']>0){
                        $state=$this->details->get_state($userDetails[0]['state']);
                        echo $state[0]['name']; }*/?>
                        --
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Zip Code :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php //echo $userDetails[0]['zip'] ?>
                         --
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code family reference details-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Family Reference Details</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Nearest Relative :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['nearest_relative'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Relation with Relative :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['relation_with_relative'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Relative Address :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['relatives_live_address'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Relative Contact :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['relatives_phone'] ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Personal Refrence-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Personal Reference Details</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Personal Reference Name :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['personal_refrence'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Personal Reference Address :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['personal_refrence_address'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Personal Reference Contact :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['personal_refrence_phone'] ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Current Employment-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Current Employment Details</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Employment Name :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['current_employer'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Job Title :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['job_title'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Supervisor Name :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['supervisor_name'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Working Years :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['how_long_your_working'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Business Address :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['address_of_business'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Monthly Income ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['monthly_pay'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Current Income monthly [pre-tax] ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['employment_monthly_income'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Attached Document :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo (!empty($userDetails['upload_document_proof'])) ? "Yes" : "No"; ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Involuntary Unemployment Protection -->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Involuntary Unemployment Protection</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    If you are laid off and lose this income source, would you like to have your loan payments waived? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['laid_off_for_payment_waived'] == 'Y') ? 'Yes' : 'No'; ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Other Income -->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Applicant Other Income</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Other Income :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['having_any_other_source_income'] == 'Y') ? 'Yes' : 'No'; ?>
                    </td>
                </tr>
                <?php if($userDetails['having_any_other_source_income'] == 'Y') {?>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Income source Name :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['if_source_income_yes_what_isit']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Monthly Income ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['if_source_income_yes_monthly_income']; ?>
                    </td>
                </tr>
                <?php }?>

            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Applicant Previous Employment-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Applicant Previous Employment</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Previous Employer :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['previous_employer'];  ?>
                    </td>
                </tr>
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Working Years :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['previous_working_years']; ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code CO-MAKER/ENDORSER -->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">ARE YOU A CO-MAKER/ENDORSER ON ANY NOTE?</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU A CO-MAKER/ENDORSER ON ANY NOTE? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['are_you_co_maker_endoser']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU A MEMBER AT ANY OTHER CREDIT UNION? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['member_of_other_credit_unioin']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE THERE CURRENTLY ANY OUTSTANDING JUDGEMENTS AGAINST YOU? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['outstanding_judgements_against_you']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ANY BANKRUPTCY FILING OR DEBT ADJUSTMENT CONFIRMED UNDER CH. 13 AGAINST YOU? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['bankruptcy_debt_adjusutment']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ANY FORECLOSURES OR LOST TITLE/DEED ON PROPERTY IN PAST 7 YEARS? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['forceclosure_lost_title_deed_in_past_7_year']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU A PARTY TO ANY LAWSUIT? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['party_to_any_lawsuit']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:7px; font-weight:550; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU OTHER THAN A U.S. CITIZEN/PERMANENT RESIDENT ALIEN? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['a_u_s_citizen_permanant_alien']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:7px; font-weight:550; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    IS ANY INCOME LISTED LIKELY TO BE REDUCED WITHIN THE NEXT TWO YEARS? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo ($userDetails['any_income_listed_tobe_reduced_in_next_2_year']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Loan Protection-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Loan Protection</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    If you die or become critically ill during your loan, would you like the credit union to cancel the remaining balance of the loan? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['die_or_ill_cancel_the_loan']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Add Cosigner details-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Are you wanting to add any co-signors onto this loan? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['add_co_signers_onto_loan']=='Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Cosigner's Details-->
    <?php if($userDetails['add_co_signers_onto_loan']=='Y') {?>
        <!--my code cosigner personal details-->
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner Personal Details</td>
                    </tr> 
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Name :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['cosigner_first_name'].' ' .$userDetails['cosigner_last_name'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Phone :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                            <?php echo $userDetails['cosigner_phone'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Email :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                            <?php echo $userDetails['cosigner_email'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Marital Status :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                            <?php echo $userDetails['cosigner_marital_status'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Address :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                            <?php echo $userDetails['cosigner_address'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Living on Address since Years :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                            <?php echo $userDetails['cosigner_years_been_there'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Monthly Pay ($) :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                            <?php echo $userDetails['cosigner_monthly_pay'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Home :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                            <?php echo $userDetails['cosigner_own_rent'];  ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <!--my code end here-->    
        <!--my code Add Cosigner Nearest Relative Details-->
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner Relative Details</td>
                    </tr> 
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Nearest Relative Name :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['cosigner_nearest_relative'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                         Relative Relationship :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['cosigner_relationship'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                         Relative Address :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['cosigner_relatives_address'];  ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                         Relative Phone :
                        </td>
                        <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails['cosigner_relatives_phone'];  ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    <!--my code end here-->
    <!--my code Add Cosigner Personal Refrence details-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner Personal Reference</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Personal Reference :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_personal_refrence'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                     Reference Phone:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_personal_refrence_phone'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Reference Address:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_personal_refrence_address'];  ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Add Cosigner Employment details-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner Employment Details</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Employer Name :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_employer'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Job Title :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_job_title'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Supervisor Name :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_supervisor_name'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Living On addrees since Years :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_how_long_working_years'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Business Address :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_business_address'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Military Involvement :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_military_involvement'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Monthly Income ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_monthly_income_pre_tax'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Cosigner Document :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo (!empty($userDetails['cosigner_documant'])) ? "Yes" : "No";  ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Add Cosigner Second Source of income-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner Second source Of Income</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Cosigner Do You have any other sources of income? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_other_source_of_income'] == 'Y') ? 'Yes' : 'No';  ?>
                    </td>
                </tr>
                <?php if($userDetails['cosigner_other_source_of_income'] == 'Y') {?>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Source Name:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_what_income_source'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Monthly Income ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_other_source_monthly_income'];  ?>
                    </td>
                </tr>
                <?php }?>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Add Cosigner Previous Employment Details-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner Previous Employment Details</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Previous Employer :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_previous_employer'];  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    How long you have there years:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails['cosigner_how_longwork_years'];  ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->
    <!--my code Add Cosigner Previous Employment Details-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Cosigner ARE YOU A CO-MAKER/ENDORSER ON ANY NOTE</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU A CO-MAKER/ENDORSER ON ANY NOTE? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_co_maker_endorser'] == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU A MEMBER AT ANY OTHER CREDIT UNION? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_member_other_credit_unioin']  == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE THERE CURRENTLY ANY OUTSTANDING JUDGEMENTS AGAINST YOU? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_outstanding_juggements']  == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ANY BANKRUPTCY FILING OR DEBT ADJUSTMENT CONFIRMED UNDER CH. 13 AGAINST YOU? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_bankruptcy_debt_adjustment']  == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ANY FORECLOSURES OR LOST TITLE/DEED ON PROPERTY IN PAST 7 YEARS? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_force_closure_title_deed']  == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:8px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU A PARTY TO ANY LAWSUIT? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_lawsuit_party']  == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:7px; font-weight:550; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    ARE YOU OTHER THAN A U.S. CITIZEN/PERMANENT RESIDENT ALIEN? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_citizen']  == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:7px; font-weight:550; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    IS ANY INCOME LISTED LIKELY TO BE REDUCED WITHIN THE NEXT TWO YEARS? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_any_income_tobe_reduced_n2_year']  == 'Y') ? "Yes" : "No";  ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Cosigner Signature :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo ($userDetails['cosigner_i_represent_everything_correct']  == 'Y') ? "Yes" : "--";  ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <!--my code end here-->

    <?php }?>
    <!--my code end here-->
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Applicant Signature</td>
                </tr> 
            </table>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Applicant E-mail :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails['p_email'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Applicant Signature :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                     <?php echo ($userDetails['i_represent_stated'] == 'Y') ? 'Yes' : '--'; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Date :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo date('d-m-Y' ,strtotime($userDetails['date_of_application']))?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; background-color:#000; font-weight:bold; font-size:8px; color:#fff; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px;">Copyright <?php echo date('Y'); ?> <?php echo $_SERVER['HTTP_HOST'] ?></td>
                </tr> 
            </table>
        </td>
    </tr>
  </table>
  </html>