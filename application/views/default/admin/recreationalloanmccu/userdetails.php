<?php 
function isJson($string) {
    json_decode($string);
    return json_last_error() === JSON_ERROR_NONE;
 }

?>
  
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Recreational Loan User Details</h2>

                <div class="clearfix"></div>
            </div><?php //$takenby = $this->jobs->get_dispatcher($userDetails[0]['dispatcherid']); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">

            <a href="<?php echo BASE_URL.'admin/dashboard' ?>" class="dark_grey">Home</a> >  <a href="<?php echo BASE_URL. 'admin/recreationalloanmccu' ?>" class="dark_grey">Auto-Loan Listing</a> >Details
            <h3> <small> </small></h3>
        </div>

    </div>
    <div class="title_center">
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><b><?php echo $userDetails['first_name'] ?></b></h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <ul class="stats-overview">
                            <li>
                                <span class="name" > Name</span>
                                <span class="value text-success1" id="fprice"> 
                                <?php echo $userDetails['first_name']." ".$userDetails['last_name'] ?>
                                    </span>
                            </li>
                            <li>
                                <span class="name"> Email</span>
                                <span class="value text-success1">
                                <?php 
                                echo $userDetails['p_email']; ?> </span>
                            </li>
                            <li>
                                <span class="name">Phone </span>
                                <span class="value text-success1" id="jobStatus"> <?php echo $userDetails['p_phone'] ?></span>
                            </li>
                        </ul>
                        <br />

                        <div id="mainb" style="height:0px;"></div>
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col padding_0">
                                <!-- 8 Fields break -->
                                <div class="col-sm-12"><span> <b>Request Amount:</b>&nbsp;
                                        <?php  echo $userDetails['requested_amount'];?></span>
                                </div>
                                <div class="col-sm-12"> <b>Type of loan : &nbsp;</b>
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
                                    echo $type;} ?>
                                </div>
                               
                                <div class="col-sm-12"><b>Your Current Employer: &nbsp</b>
                                        <?php echo $userDetails['current_employer'] ?>
                                </div>
                                <div class="col-sm-12"><b>Your Job Title: &nbsp</b>
                                        <?php echo $userDetails['job_title'] ?>
                                </div>
                                <div class="col-sm-12"><b>Marital Status: &nbsp</b>
                                        <?php echo $userDetails['marital_status'] ?>
                                </div>
                                <div class="col-sm-12"><b>Nearest Relative: &nbsp</b>
                                        <?php echo $userDetails['nearest_relative'] ?>
                                </div>
                                <div class="col-sm-12"><b>Relation with Relative: &nbsp</b>
                                        <?php echo $userDetails['relation_with_relative'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Your Pre-tax Gross Monthly Income: &nbsp;</b>
                                    <?php echo '$'.number_format($userDetails['employment_monthly_income']); ?>
                                </div>
                                <div class="col-sm-12"> <b>Birth Date: &nbsp;</b>
                                    <?php echo date('d-m-Y',strtotime($userDetails['p_dob'])); ?>
                                </div>
                                <div class="col-sm-12"> <b>Address: &nbsp;</b>
                                    <?php 
                                                $country = $street = $city = $state = $zipcode = "--";
                                                $resp = isJson($userDetails['p_address']);
                                                if($resp)
                                                {                                    
                                                    $full_address = json_decode($userDetails['p_address']);
                                                    echo $street = $full_address->street_line;
                                                    $country = (!empty($full_address->country)) ? $full_address->country : '--';
                                                    $city = $full_address->city;
                                                    $state = $full_address->state;
                                                    $zipcode = $full_address->zip_code;
                                                }
                                                else{
                                                    echo str_replace("%20"," ",$userDetails['p_address']);
                                                    }
                                    
                                    ?>
                                </div>
                                <div class="col-sm-12"> <b>Country: &nbsp;</b>
                                    <?php echo $country; ?>
                                </div>
                                <div class="col-sm-12"> <b>State: &nbsp;</b>
                                    <?php echo $state; ?>
                                </div>
                                <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php echo $city; ?>
                                </div>
                                <div class="col-sm-12"> <b>Zipcode: &nbsp;</b>
                                    <?php echo $zipcode; ?>
                                </div>
                                <div class="col-sm-12"> <b>Domain: &nbsp;</b>
                                    <?php echo $userDetails['domain'] ?>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- 8 Fields break -->
                            <div class="col-sm-4 invoice-col padding_0">
                                <div class="col-sm-12"><span> <b>Personal Reference:</b>&nbsp;
                                        <?php  echo $userDetails['personal_refrence'];?></span>
                                </div>
                                <div class="col-sm-12"> <b>Personal Reference Address: &nbsp;</b>
                                      <?php 
                                                $country = $street = $city = $state = $zipcode = "--";
                                                $resp = isJson($userDetails['personal_refrence_address']);
                                                if($resp)
                                                {                                    
                                                    $full_address = json_decode($userDetails['personal_refrence_address']);
                                                    echo $street = $full_address->street_line;
                                                    $country = (!empty($full_address->country)) ? $full_address->country : '--';
                                                    $city = $full_address->city;
                                                    $state = $full_address->state;
                                                    $zipcode = $full_address->zip_code;
                                                }
                                                else{
                                                    echo str_replace("%20"," ",$userDetails['personal_refrence_address']);
                                                    }
                                    
                                    ?>
                                </div>
                                <div class="col-sm-12"> <b>Country: &nbsp;</b>
                                    <?php echo $country; ?>
                                </div>
                                <div class="col-sm-12"> <b>State: &nbsp;</b>
                                    <?php echo $state; ?>
                                </div>
                                <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php echo $city; ?>
                                </div>
                                <div class="col-sm-12"> <b>Zipcode: &nbsp;</b>
                                    <?php echo $zipcode; ?>
                                </div>
                                <div class="col-sm-12"><b>Personal Reference Phone: &nbsp</b>
                                        <?php echo $userDetails['personal_refrence_phone'] ?>
                                </div>
                                <div class="col-sm-12"><b>Supervisor Name: &nbsp</b>
                                        <?php echo $userDetails['supervisor_name'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Working there since: &nbsp;</b>
                                    <?php echo $userDetails['how_long_your_working']; ?>
                                </div>
                                
                                <div class="col-sm-12"> <b>Laid off OR payment Waived: &nbsp;</b>
                                    <?php echo $userDetails['laid_off_for_payment_waived'];?>
                                </div>
                                <div class="col-sm-12"> <b>Second Income Source: &nbsp;</b>
                                    <?php echo $userDetails['having_any_other_source_income'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Previous Employer: &nbsp;</b>
                                    <?php echo $userDetails['previous_employer'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Previous Emplyment Years: &nbsp;</b>
                                    <?php echo $userDetails['previous_working_years'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Miltary Involvement: &nbsp;</b>
                                    <?php echo $userDetails['military_involvement'] ?>
                                </div>

                                <div class="col-sm-12"> <b>Business Address: &nbsp;</b>
                                    <?php 
                                                $country = $street = $city = $state = $zipcode = "--";
                                                $resp = isJson($userDetails['address_of_business']);
                                                if($resp)
                                                {                                    
                                                    $full_address = json_decode($userDetails['address_of_business']);
                                                    echo $street = $full_address->street_line;
                                                    $country = (!empty($full_address->country)) ? $full_address->country : '--';
                                                    $city = $full_address->city;
                                                    $state = $full_address->state;
                                                    $zipcode = $full_address->zip_code;
                                                }
                                                else{
                                                    echo str_replace("%20"," ",$userDetails['address_of_business']);
                                                    }
                                    
                                    ?>
                                </div>
                                <div class="col-sm-12"> <b>Country: &nbsp;</b>
                                    <?php echo $country; ?>
                                </div>
                                <div class="col-sm-12"> <b>State: &nbsp;</b>
                                    <?php echo $state; ?>
                                </div>
                                <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php echo $city; ?>
                                </div>
                                <div class="col-sm-12"> <b>Zipcode: &nbsp;</b>
                                    <?php echo $zipcode; ?>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- 8 Fields break -->
                            <div class="col-sm-4 invoice-col padding_0">
                                <div class="col-sm-12"><span> <b>Date Of Application:</b>&nbsp;
                                    <?php  echo date('d-m-Y',strtotime($userDetails['date_of_application']));?></span>
                                </div>
                                <div class="col-sm-12"> <b>Added Cosigner: &nbsp;</b>
                                    <?php echo $userDetails['add_co_signers_onto_loan']; ?>
                                </div>
                                <div class="col-sm-12"><b>Cosigner's Full Name: &nbsp</b>
                                        <?php echo $userDetails['cosigner_first_name'] . ' ' . $userDetails['cosigner_last_name']; ?>
                                </div>
                                <div class="col-sm-12"><b>Cosigner's Phone: &nbsp</b>
                                        <?php echo $userDetails['cosigner_phone'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Cosigner's Email: &nbsp;</b>
                                    <?php echo $userDetails['cosigner_email']; ?>
                                </div>
                                <div class="col-sm-12"> <b>Cosigner's Marital Status: &nbsp;</b>
                                    <?php echo $userDetails['cosigner_marital_status']; ?>
                                </div>
                               
                                <div class="col-sm-12"> <b>Being on the Address since long: &nbsp;</b>
                                    <?php echo $userDetails['cosigner_years_been_there'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Cosigner's Monthly Pay: &nbsp;</b>
                                    <?php echo $userDetails['cosigner_monthly_pay'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Cosigner's Nearest Relative : &nbsp;</b>
                                    <?php echo $userDetails['cosigner_nearest_relative'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Cosigner's Relationship: &nbsp;</b>
                                    <?php echo $userDetails['cosigner_relationship'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Cosigner's Address: &nbsp;</b>
                                    <?php 
                                                $country = $street = $city = $state = $zipcode = "--";
                                                $resp = isJson($userDetails['cosigner_address']);
                                                if($resp)
                                                {                                    
                                                    $full_address = json_decode($userDetails['cosigner_address']);
                                                    echo $street = $full_address->street_line;
                                                    $country = (!empty($full_address->country)) ? $full_address->country : '--';
                                                    $city = $full_address->city;
                                                    $state = $full_address->state;
                                                    $zipcode = $full_address->zip_code;
                                                }
                                                else{
                                                    echo str_replace("%20"," ",$userDetails['cosigner_address']);
                                                    }
                                    
                                    ?>
                                </div>
                                <div class="col-sm-12"> <b>Country: &nbsp;</b>
                                    <?php echo $country; ?>
                                </div>
                                <div class="col-sm-12"> <b>State: &nbsp;</b>
                                    <?php echo $state; ?>
                                </div>
                                <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php echo $city; ?>
                                </div>
                                <div class="col-sm-12"> <b>Zipcode: &nbsp;</b>
                                    <?php echo $zipcode; ?>
                                </div>
                            </div>
                            <!-- /.col -->
                         
                        </div>
                        
                        <div>
                        </div>
                    </div>
                    <!-- start project-detail sidebar -->
                </div>
                <!-- end project-detail sidebar -->
            </div>
        </div>
    </div>
</div>

</div>

     