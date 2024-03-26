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
        <td style="background-color:#f2f2f2; font-size:20px; color:#000; padding-bottom:40px; text-align:center; font-family:Arial;">Consumer Home Loan Application</td>
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
                     Loan Type:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                     
                                        <?php
                                            if ($userDetails[0]['loan_type'] == 1)
                                                echo 'Purchase';
                                            if ($userDetails[0]['loan_type'] == 2)
                                                echo 'Refinance';
                                            if ($userDetails[0]['loan_type'] == 3)
                                                echo 'Home Equity';
                                            if ($userDetails[0]['loan_type'] == 4)
                                                echo 'Reverse Mortgage';
                                            ?>
                    </td>
                </tr>
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                       Property Type:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php
                                    if ($userDetails[0]['property_type'] == 1)
                                        echo 'Single Family Home';
                                    if ($userDetails[0]['property_type'] == 2)
                                        echo 'Townhome';
                                    if ($userDetails[0]['property_type'] == 3)
                                        echo 'Condominium';
                                    if ($userDetails[0]['property_type'] == 4)
                                        echo 'Multi Family Home';
                                    if ($userDetails[0]['property_type'] == 5)
                                        echo 'Manufactured or Mobile Home';
                                            ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Home Type:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php 
                                        if($userDetails[0]['home_type']==1)
                                        echo 'Primary Home';
                                         if($userDetails[0]['home_type']==2)
                                        echo 'Secondary Home';
                                          if($userDetails[0]['home_type']==3)
                                        echo 'Rental Property';
                                          ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Plan Type:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php if($userDetails[0]['plan_type']==1) 
                                            echo 'Already under contract';
                                        if($userDetails[0]['plan_type']==2) 
                                            echo 'Immediately – I’m making an offer';
                                         if($userDetails[0]['plan_type']==3) 
                                            echo 'I’m shopping & am considering a few options';
                                          if($userDetails[0]['plan_type']==4) 
                                            echo 'Within next couple month';
                                          if($userDetails[0]['plan_type']==5) 
                                            echo 'Not sure – I want to know what I can afford';
                                        ?>
                    </td>
                </tr>
             <!--   <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        If refinance of vehicle, enter VIN :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       --
                    </td>
                </tr> -->
                
               
               
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
                       <?php echo date('d-m-Y',strtotime($userDetails[0]['dob'])) ?>
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
                
             <!--   <tr>
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
                </tr>  -->
               
                
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
                     Property Value :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                           <?php echo $userDetails[0]['property_value'] ?>
                    </td>
                </tr>
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Mortgage 2 :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                          <?php if($userDetails[0]['mortgage_2']==1) echo 'Yes';
                                    else echo 'No';?>
                    </td>
                </tr>
                
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                     What is the remaining balance on the 2nd mortgage? 
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                          <?php echo $userDetails[0]['remaining_mortgage_bal'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Would you like to borrow additional cash?
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                          <?php if($userDetails[0]['additional_cash']==1) echo 'Yes';
                                   else echo 'No';?>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Credit Score:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php if($userDetails[0]['credit_score']==1) echo 'Excellent (> 720)';
                                    if($userDetails[0]['credit_score']==2) echo 'Good (680-719)';
                                    if($userDetails[0]['credit_score']==3) echo 'Fair (640-679)';
                                    if($userDetails[0]['credit_score']==4) echo 'Poor (< 639)';?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Do you currently have a VA loan?
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php if($userDetails[0]['va_loan']==1) echo 'Yes';
                                    if($userDetails[0]['va_loan']==2) echo 'No';?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Have you or your spouse served in the military?
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php if($userDetails[0]['military_served']==1) echo 'Yes';
                                    if($userDetails[0]['military_served']==2) echo 'No';?>
                    </td>
                </tr>
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      Have you had a bankruptcy or foreclosure in the last 7 years?
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                      <?php if($userDetails[0]['bankruptcy_or_foreclosure']==1) echo 'No';
                                    if($userDetails[0]['bankruptcy_or_foreclosure']==2) echo 'bankruptcy';
                                    if($userDetails[0]['bankruptcy_or_foreclosure']==3) echo 'foreclosure';
                                    if($userDetails[0]['bankruptcy_or_foreclosure']==4) echo 'both';?>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      How long ago was the bankruptcy? 
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails[0]['bankruptcy_years'] ?> years
                    </td>
                </tr>
                  <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                      How long ago was the foreclosure?
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php echo $userDetails[0]['foreclosure_years'] ?> years
                    </td>
                </tr>
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                     Mortgage Balance:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                      <?php echo $userDetails[0]['mortgage_bal'] ?>
                    </td>
                </tr>
                 <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                     Close Mortgage:
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       <?php  if($userDetails[0]['close_mortgage']==1)
                       {
                        echo "Yes";
                       }else{
                        echo "NO";
                       } ?>
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
              <!--  <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Current Employer :
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
                </tr> -->
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Estimated monthly income  ($):
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                      <?php echo $userDetails[0]['pre_tax_income'] ?>
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