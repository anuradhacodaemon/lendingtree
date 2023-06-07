
  
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Recreational Loan Details</h2>

                <div class="clearfix"></div>
            </div><?php //$takenby = $this->jobs->get_dispatcher($userDetails[0]['dispatcherid']); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">

            <a href="<?php echo BASE_URL.'admin/dashboard' ?>" class="dark_grey">Home</a> >  <a href="<?php echo BASE_URL. 'admin/autoloanmccu' ?>" class="dark_grey">Auto-Loan Listing</a> >Details
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
                                <span class="value text-success1"><?php 
                                
                                
                                
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
                            <div class="col-sm-12 invoice-col padding_0">
                                <div class="col-sm-12"><span> <b>Request Amount:</b>&nbsp;
                                        <?php  echo $userDetails['requested_amount'];?></span>
                                </div>
                               <div class="col-sm-12"> <b>Type: &nbsp;</b>
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
                       
                                <div class="col-sm-12"> <b>Your Pre-tax Gross Monthly Income: &nbsp;</b>
                                    <?php echo '$'.number_format($userDetails['employment_monthly_income']); ?>
                                </div>
                                <div class="col-sm-12"> <b>Birth Date: &nbsp;</b>
                                    <?php echo date('d-m-Y',strtotime($userDetails['dob'])); ?>
                                </div>
                               <div class="col-sm-12"> <b>Address: &nbsp;</b>
                                    <?php echo str_replace("%20"," ",$userDetails['p_address']);?>
                                </div>
                               <div class="col-sm-12"> <b>Domain: &nbsp;</b>
                                    <?php echo $userDetails['domain'] ?>
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

     