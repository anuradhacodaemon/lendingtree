
  
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
                                <span class="name"> Type of Loan</span>
                                <span class="value text-success1"><?php 
                                if($userDetails[0]['type']==1)
                                    $type='New Car Purchase';
                                 if($userDetails[0]['type']==2)
                                    $type='Used Car Purchase';
                                  if($userDetails[0]['type']==3)
                                    $type='Refinance';
                                   if($userDetails[0]['type']==4)
                                    $type='Lease Buy Out';
                                
                                
                                echo $type; ?> </span>
                            </li>
                            <li>
                                <span class="name">Amount </span>
                                <span class="value text-success1" id="jobStatus"> <?php echo $userDetails[0]['amount'] ?></span>
                            </li>
                        </ul>
                        <br />

                        <div id="mainb" style="height:0px;"></div>
                      


                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col padding_0">
                                <div class="col-sm-12"><span> <b>Desired Loan Term:</b>&nbsp;
                                        <?php  if($userDetails[0]['years_emt']==7)
                                    $years='7 Years (84 Months)';
                                        if($userDetails[0]['years_emt']==6)
                                    $years='6 Years (72 Months)';
                                        if($userDetails[0]['years_emt']==5)
                                    $years='5 Years (60 Months)';
                                        if($userDetails[0]['years_emt']==4)
                                    $years='4 Years (48 Months)';
                                        if($userDetails[0]['years_emt']==3)
                                    $years='3 Years (36 Months)';
                                        if($userDetails[0]['years_emt']==2)
                                    $years='2 Years (24 Months)';
                                        if($userDetails[0]['years_emt']==1)
                                    $years='1 Years (12 Months)';
                                        
                                        echo $years;
                                        
                                         ?></span>
                                </div>
                                 <div class="col-sm-12"><span> <b>From whom you are buying:</b>&nbsp;
                                        <?php 
                                        if($userDetails[0]['buying_from']==3)
                                    $buying_from='Dealer';
                                         if($userDetails[0]['buying_from']==2)
                                    $buying_from='Private Seller';
                                          if($userDetails[0]['buying_from']==1)
                                    $buying_from='Don\'t Know';
                                        echo $buying_from ?></span>
                                </div>
                                <div class="col-sm-12"><span> <b>When your are Born:</b>&nbsp;
                                        <?php echo $userDetails[0]['day'].'-'.$userDetails[0]['month'].'-'.$userDetails[0]['years'] ?></span>
                                </div>
                               
                                <div class="col-sm-12"><b>Your Current Employer: &nbsp</b>
                                        <?php echo $userDetails[0]['cemployee'] ?>
                                    </div>
                                    <div class="col-sm-12"><b>Your Job Title: &nbsp</b>
                                        <?php echo $userDetails[0]['job_title'] ?>
                                    </div>
                       
                                <div class="col-sm-12"> <b>Your Pre-tax Yearly income: &nbsp;</b>
                                    <?php echo $userDetails[0]['pre_tax_income'] ?>
                                </div>
                               
 <div class="col-sm-12"> <b>Any other Yearly income: &nbsp;</b>
                                    <?php echo $userDetails[0]['other_income'] ?>
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

     
