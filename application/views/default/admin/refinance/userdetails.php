
  
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Refinance User Details</h2>

                <div class="clearfix"></div>
            </div><?php //$takenby = $this->jobs->get_dispatcher($userDetails[0]['dispatcherid']); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">

            <a href="<?php echo BASE_URL.'admin/dashboard' ?>" class="dark_grey">Home</a> >  <a href="<?php echo BASE_URL. 'admin/refinance' ?>" class="dark_grey"> Refinance User Listing</a> >Details
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
                                <div class="col-sm-12"><span> <b>Monthly Payment:</b>&nbsp;
                                        <?php  
                                        
                                      
                                        
                                        echo $userDetails[0]['monthly_payment'];
                                      
                                         ?></span>
                                </div>
                                
                                
                               <div class="col-sm-12"> <b>Amount Owe: &nbsp;</b>
                                    <?php 
                                   
                                
                                
                                    echo $userDetails[0]['currently_owe']; ?>
                                </div>
                               
                                <div class="col-sm-12"><b>VIN: &nbsp</b>
                                        <?php echo $userDetails[0]['vin'] ?>
                                    </div>
                                    <div class="col-sm-12"><b>Current Milage: &nbsp</b>
                                        <?php echo $userDetails[0]['current_milage'] ?>
                                    </div>
                       
                               
                               <div class="col-sm-12"> <b>Address: &nbsp;</b>
                                    <?php echo $userDetails[0]['address'] ?>
                                </div>
                               
 <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php
                                    if($userDetails[0]['city']>0){
                                    $city=$this->refinance->get_city($userDetails[0]['city']);
                                    
                                    echo $city[0]['name'];} ?>
                                </div>
                               <div class="col-sm-12"> <b>State: &nbsp;</b>
                                    <?php
                                    
                                    if($userDetails[0]['state']>0)
                                    {
                                  $state=$this->refinance->get_city($userDetails[0]['state']);

                                    echo $state[0]['name'];
                                    }?>
                                </div>
                               
                               <div class="col-sm-12"> <b>SSN: &nbsp;</b>
                                    <?php echo $userDetails[0]['ssn'] ?>
                                </div>
                                <div class="col-sm-12"> <b>DOB: &nbsp;</b>
                                    <?php echo date('d-m-Y', strtotime($userDetails[0]['dob'])) ?>
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

     