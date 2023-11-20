
  
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Loan User Details</h2>

                <div class="clearfix"></div>
            </div><?php //$takenby = $this->jobs->get_dispatcher($userDetails[0]['dispatcherid']); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">

            <a href="<?php echo BASE_URL.'admin/dashboard' ?>" class="dark_grey">Home</a> >  <a href="<?php echo BASE_URL. 'admin/user' ?>" class="dark_grey">User Listing</a> >Details
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
                    <h2><b><?php echo $userDetails[0]['firstname'] ?></b></h2>


                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <ul class="stats-overview">
                            <li>
                                <span class="name" > Name</span>
                                <span class="value text-success1" id="fprice"> 
                                <?php echo $userDetails[0]['firstname']." ".$userDetails[0]['lastname'] ?>
                                    </span>
                            </li>
                            <li>
                                <span class="name"> Email</span>
                                <span class="value text-success1"><?php 
                                
                                
                                
                                echo $userDetails[0]['email']; ?> </span>
                            </li>
                            <li>
                                <span class="name">Phone </span>
                                <span class="value text-success1" id="jobStatus"> <?php echo $userDetails[0]['phone'] ?></span>
                            </li>
                        </ul>
                        <br />

                        <div id="mainb" style="height:0px;"></div>
                      


                        <div class="row invoice-info">
                            <div class="col-sm-6 invoice-col padding_0">
                                <div class="col-sm-12"><span> <b>Request Amount ($):</b>&nbsp;
                                        <?php  
                                        if($userDetails[0]['requested_amount']>0){
                                            $years='';
                                        if($userDetails[0]['requested_amount']==7)
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
                                    $years='$50,000+';
                                      
                                        
                                        echo $userDetails[0]['requested_amount'];
                                        }
                                         ?></span>
                                </div>
                                
                                
                               <div class="col-sm-12"> <b>Type: &nbsp;</b>
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
                                </div>
                               
                                <div class="col-sm-12"><b>Your Current Employer: &nbsp</b>
                                        <?php echo $userDetails[0]['current_employer'] ?>
                                    </div>
                                    <div class="col-sm-12"><b>Your Job Title: &nbsp</b>
                                        <?php echo $userDetails[0]['job_title'] ?>
                                    </div>
                       
                                <div class="col-sm-12"> <b>Your Pre-tax Gross Monthly Income: &nbsp;</b>
                                    <?php echo '$'.number_format($userDetails[0]['pre_tax_income']); ?>
                                </div>
                                <div class="col-sm-12"> <b>Birth Date: &nbsp;</b>
                                    <?php echo date('F j, Y',strtotime($userDetails[0]['dob'])); ?>
                                </div>
                               <div class="col-sm-12"> <b>Address: &nbsp;</b>
                                    <?php echo str_replace("%20"," ",$userDetails[0]['address']);?>
                                </div>
                               
                                <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php
                                     echo $userDetails[0]['city']; ?>
                                </div>
                               <div class="col-sm-12"> <b>State: &nbsp;</b>
                                    <?php  echo $userDetails[0]['state']; 
                                     ?>
                                </div>
                               <div class="col-sm-12"> <b>Zip: &nbsp;</b>
                                    <?php echo $userDetails[0]['zip'] ?>
                                </div>
                               <div class="col-sm-12"> <b>SSN: &nbsp;</b>
                                    <?php echo $userDetails[0]['ssn'] ?>
                                </div>
                               <div class="col-sm-12"> <b>Domain: &nbsp;</b>
                                    <?php echo $userDetails[0]['domain'] ?>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6 invoice-col padding_0">
                                <div class="col-sm-12"><span> <b>Home Phone:</b>&nbsp;
                                        <?php  
                                        echo $userDetails[0]['phone'] 
                                         ?></span>
                                </div>
                                
                                
                               <div class="col-sm-12"> <b>Start Date: &nbsp;</b>
                                    <?php 
                                    echo date('F j, Y',strtotime($userDetails[0]['start_date'])); ?>
                                </div>
                               
                                <div class="col-sm-12"><b>Dependents : &nbsp</b>
                                        <?php echo $userDetails[0]['total_dependent'] ?>
                                    </div>
                                    <div class="col-sm-12"><b>Home Residence: &nbsp</b>
                                        <?php echo $userDetails[0]['home_status'] ?>
                                    </div>
                       
                                <div class="col-sm-12"> <b>How Much Pay a Month ($): &nbsp;</b>
                                    <?php echo '$'.number_format($userDetails[0]['pay_month']); ?>
                                </div>
                              
                            </div>
                         
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

     