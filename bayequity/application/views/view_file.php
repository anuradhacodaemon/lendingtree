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
        <td style="background-color:#f2f2f2; font-size:20px; color:#000; padding-bottom:40px; text-align:center; font-family:Arial;">Consumer Refinance Application</td>
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
                        <?php echo $userDetails[0]['vin'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Amount Owe ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo number_format($userDetails[0]['currently_owe']); ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Montly payment ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo number_format($userDetails[0]['monthly_payment']); ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Current Milage ($) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo number_format($userDetails[0]['current_milage']); ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Term (months) :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        --
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Type of Application :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        --
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
                          <?php 
                          if($userDetails[0]['city'] >0)
                          {
                          $city=$this->details->get_city($userDetails[0]['city']);
                          if($city[0]['name'])
                          echo $city[0]['name']; 
                          }?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        State :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php  
                        if($userDetails[0]['state']>0)
                          {
                        $state=$this->details->get_state($userDetails[0]['state']);
                        if($state[0]['name'])
                          echo $state[0]['name']; 
                          
                          }?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Zip Code :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        --
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
                        Monthly Gross Income :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                       --
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