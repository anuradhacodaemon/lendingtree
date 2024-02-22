<?php if($userDetails[0]['type']==1)
{
    $vehicle_type='Vehicle';
}elseif($userDetails[0]['type']==2)
{
    $vehicle_type='Motorcyle';
}
elseif($userDetails[0]['type']==3)
{
    $vehicle_type='Motorhome';
}

if($userDetails[0]['is_purchased']==1)
{
    $purchased='Yes';
}else
{
    $purchased='No';
}

if($userDetails[0]['basic_warranty']==1)
{
    $warranty='Yes';
}else
{
    $warranty='No';
}

if (!empty($userDetails[0]['vehicle_year'])) {
$vehicle_year=$userDetails[0]['vehicle_year'];
}else{
    $vehicle_year='--';
}


if (!empty($userDetails[0]['vehicle_model'])) {
    $vehicle_model=$userDetails[0]['vehicle_model'];
    }else{
        $vehicle_model='--';
    }



if (!empty($userDetails[0]['vehicle_make_brand'])) {
    $vehicle_make_brand=$userDetails[0]['vehicle_make_brand'];
    }else{
        $vehicle_make_brand='--';
    }

?>
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
                       <?php echo date('d-m-Y' ,strtotime($userDetails[0]['date_of_application']))?>
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
                        Type Of Vehicle :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $vehicle_type ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    If VIN Number of the Vehicle :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails[0]['vin']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Vehicle Year :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $vehicle_year; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Vehicle Brand :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $vehicle_make_brand; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Vehicle Model :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $vehicle_model; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        Current Milage :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                        <?php echo $userDetails[0]['current_milage']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Vehicle purchased from a dealership or individual in the last 30 days :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $purchased; ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                    Is the vehicle under the basic manufacturer warranty?  :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                    <?php echo $warranty; ?>
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
                        Applicant E-mail :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['email'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        If you are laid off and lose this income source, would you like to have your loan payments waived?  :
                    </td>
                    <td style="padding:0; font-size:11px; font-weight:400; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0 0 10px;">
                         <?php echo $userDetails[0]['laid_off_for_payment_waived'] ?>
                    </td>
                </tr>
                <tr style='margin-bottom: 5px;'>
                    <td style="padding:0; font-size:11px; font-weight:600; color:#000; text-align:left; font-family:Arial; line-height:20px; letter-spacing:0.3px; margin:0px;">
                        I represent that everything I have stated in this application is correct and complete to the best of my knowledge. you are authorized to check my (our) credit history, and to answer questions about your credit history with me. (us). :
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
                        <?php echo date('d-m-Y' ,strtotime($userDetails[0]['date_of_application']))?>
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