
  
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Home Loan User Details</h2>

                <div class="clearfix"></div>
            </div><?php //$takenby = $this->jobs->get_dispatcher($userDetails[0]['dispatcherid']); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">

            <a href="<?php echo BASE_URL.'admin/dashboard' ?>" class="dark_grey">Home</a> >  <a href="<?php echo BASE_URL. 'admin/homeloan' ?>" class="dark_grey">Home loan Listing</a> >Details
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
                            <div class="col-sm-12 invoice-col padding_0">
                                <div class="col-sm-12"> <b>Loan Type:</b>&nbsp;
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
                                </div>
                                
                                
                               <div class="col-sm-12"> <b>Property Type: &nbsp;</b>
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
                                </div>
                               
                                <div class="col-sm-12"><b>Home Type: &nbsp</b>
                                        <?php 
                                        if($userDetails[0]['home_type']==1)
                                        echo 'Primary Home';
                                         if($userDetails[0]['home_type']==2)
                                        echo 'Secondary Home';
                                          if($userDetails[0]['home_type']==3)
                                        echo 'Rental Property';
                                          ?>
                                    </div>
                                <div class="col-sm-12"><span> <b>Estimated monthly income:</b>&nbsp;
                                        <?php  
                                        
                                      
                                        
                                        echo $userDetails[0]['pre_tax_income'];
                                      
                                         ?></span>
                                </div>
                                    <div class="col-sm-12"><b>Plan Type: &nbsp</b>
                                        <<?php if($userDetails[0]['plan_type']==1) 
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
                                    </div>
                       
                               <div class="col-sm-12"> <b>Birth Date: &nbsp;</b>
                                    <?php echo date('d-m-Y',strtotime($userDetails[0]['dob'])); ?>
                                </div>
                               <div class="col-sm-12"> <b>Address: &nbsp;</b>
                                    <?php echo str_replace("%20"," ",$userDetails[0]['address']) ?>
                                </div>
                               
 <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php
                                    if($userDetails[0]['city']>0){
                                    $city=$this->refinance->get_city($userDetails[0]['city']);
                                    
                                    echo $city[0]['name'];} ?>
                                </div>
                              
                               
                               <div class="col-sm-12"> <b>Zip: &nbsp;</b>
                                    <?php
                                     
                                    echo $userDetails[0]['zip']; ?>
                                </div>
                               <div class="col-sm-12"> <b>Property Value: &nbsp;</b>
                                    <?php echo $userDetails[0]['property_value'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Mortgage 2: &nbsp;</b>
                                    <?php if($userDetails[0]['mortgage_2']==1) echo 'Yes';
                                    if($userDetails[0]['mortgage_2']==2) echo 'No';?>
                                </div>
                                 <div class="col-sm-12"> <b>What is the remaining balance on the 2nd mortgage?&nbsp;</b>
                                    <?php echo $userDetails[0]['remaining_mortgage_bal'] ?>
                                </div>
                                 <div class="col-sm-12"> <b>Would you like to borrow additional cash?
: &nbsp;</b>
                                    <?php if($userDetails[0]['additional_cash']==1) echo 'Yes';
                                    if($userDetails[0]['additional_cash']==2) echo 'No';?>
                                </div>
                                
                                 <div class="col-sm-12"> <b>Credit Score: &nbsp;</b>
                                    <?php if($userDetails[0]['credit_score']==1) echo 'Excellent ≥720';
                                    if($userDetails[0]['credit_score']==2) echo 'Good 680-719';
                                    if($userDetails[0]['credit_score']==3) echo 'Fair 640-679';
                                    if($userDetails[0]['credit_score']==4) echo 'Poor ≤639';?>
                                </div>
                                
                                <div class="col-sm-12"> <b>Do you currently have a VA loan?
: &nbsp;</b>
                                    <?php if($userDetails[0]['va_loan']==1) echo 'Yes';
                                    if($userDetails[0]['va_loan']==2) echo 'No';?>
                                </div>
                                
                                 <div class="col-sm-12"> <b>Have you or your spouse served in the military?
: &nbsp;</b>
                                    <?php if($userDetails[0]['military_served']==1) echo 'Yes';
                                    if($userDetails[0]['military_served']==2) echo 'No';?>
                                </div>
                                
                                <div class="col-sm-12"> <b>Have you had a bankruptcy or foreclosure in the last 7 years?&nbsp;</b>
                                    <?php if($userDetails[0]['bankruptcy_or_foreclosure']==1) echo 'No';
                                    if($userDetails[0]['bankruptcy_or_foreclosure']==2) echo 'bankruptcy';
                                    if($userDetails[0]['bankruptcy_or_foreclosure']==3) echo 'foreclosure';
                                    if($userDetails[0]['bankruptcy_or_foreclosure']==4) echo 'both';?>
                                </div>
                                <div class="col-sm-12"> <b> How long ago was the bankruptcy? &nbsp;</b>
                                    <?php echo $userDetails[0]['bankruptcy_years'] ?> years
                                </div>
                                 <div class="col-sm-12"> <b> How long ago was the foreclosure? &nbsp;</b>
                                    <?php echo $userDetails[0]['foreclosure_years'] ?> years
                                </div>
                                <div class="col-sm-12"> <b> Mortgage Balance: &nbsp;</b>
                                    <?php echo $userDetails[0]['mortgage_bal'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Close Mortgage : &nbsp;</b>
                                    <?php echo $userDetails[0]['close_mortgage'] ?>
                                </div>
                               <div class="col-sm-12"> <b>Domain: &nbsp;</b>
                                    <?php echo $userDetails[0]['domain'] ?>
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

     