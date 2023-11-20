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
    <tr>
        <td style="padding:0 0 5px; font-weight:bold; font-size:11px; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; ">Notice: Married Applicants may apply for a separate account.</td>
    </tr> 
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
                       --
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Date :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo date('d-m-Y' ,strtotime($userDetails[0]['add_date']))?>
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
                       
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        If refinance of vehicle, enter VIN :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       --
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                       Request Amount ($):
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                      <?php  
                                        if($userDetails[0]['requested_amount']>0){
                                            $years='';
                                        /*if($userDetails[0]['requested_amount']==7)
                                    $years='$5,000-$10,000';
                                        if($userDetails[0]['requested_amount']==6)
                                    $years='$10,000-$15,000';
                                        if($userDetails[0]['requested_amount']==5)
                                    $years='$15,000-$20,000';
                                        if($userDetails[0]['requested_amount']==4)
                                    $years='$20,000-$30,000';
                                        if($userDetails[0]['requested_amount']==3)
                                    $years='$30,000- $40,000';
                                        if($userDetails[0]['requested_amount']==2)
                                    $years='$40,000 - $50,000';
                                        if($userDetails[0]['requested_amount']==1)
                                    $years='$50,000+';*/

                                        echo $userDetails[0]['requested_amount'];
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
                                    if($userDetails[0]['type']>0)
                                    {
                                        $type='';
                                if($userDetails[0]['type']==1)
                                    $type='New Car Purchase';
                                 if($userDetails[0]['type']==2)
                                    $type='Used Car Purchase';
                                  if($userDetails[0]['type']==3)
                                    $type='Refinance';
                                   if($userDetails[0]['type']==4)
                                    $type='Lease Buy Out';
                                
                                
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
                         <?php echo $userDetails[0]['firstname'].' '.$userDetails[0]['lastname']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Home Phone :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails[0]['phone'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Social Security No. :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo $userDetails[0]['ssn'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Driver’s License No. & State :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        --
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Birth Date :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo date('F j, Y',strtotime($userDetails[0]['dob'])) ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Current Street Address :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo str_replace("%20"," ",$userDetails[0]['address']); ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Apt. No. :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       --
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Years There :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        --
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        City :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails[0]['city'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        State :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $userDetails[0]['state'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Zip Code :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['zip'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Home Residence :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['home_status'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    How Much Pay a Month ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['pay_month'] ?>
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
                    <td style="padding:0 0 5px; font-weight:bold; font-size:12px; color:#000; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px; border-bottom:1px dashed #ddd;">Employment And Income</td>
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
                        Current Employer :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails[0]['current_employer'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Start Date :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                      <?php echo date('F j, Y',strtotime($userDetails[0]['start_date'])) ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Monthly Gross Income  ($):
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo number_format($userDetails[0]['pre_tax_income']) ?>
                    </td>
                </tr>
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        How Many Dependents They Have? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo number_format($userDetails[0]['total_dependent']) ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Applicant E-mail :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['email'] ?>
                    </td>
                </tr>
                <tr style='margin-bottom: 5px;'>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        If you are laid off and lose this income source, would you like to have your loan payments waived?  :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['laid_off_for_payment_waived'] ?>
                    </td>
                </tr>
                <tr style='margin-bottom: 5px;'>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        I represent that everything i have stated in this application is correct and complete to the best of my knowledge. you are authorized to check my (our) credit history, and to answer questions about your credit history with me. (us). :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['i_represent_stated'] ?>
                    </td>
                </tr>
                <tr style='margin-bottom: 5px;'>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        If you die or become critically ill during your loan, would you like the credit union to cancel the remaining balance of the loan? :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['die_or_ill_cancel_the_loan'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Applicant Signature :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                     <?php echo $userDetails[0]['firstname'].' '.$userDetails[0]['lastname']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Date :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo date('d-m-Y' ,strtotime($userDetails[0]['add_date']))?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td style="padding:0 0 5px; background-color:#000; font-weight:bold; font-size:8px; color:#fff; text-align:center; font-family:Arial; line-height:20px; letter-spacing:0.3px;">Copyright 2018 <?php echo $_SERVER['HTTP_HOST'] ?></td>
                </tr> 
            </table>
        </td>
    </tr>
  </table>
  </html>