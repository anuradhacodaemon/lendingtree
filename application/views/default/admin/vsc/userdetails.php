
  
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Vehicle Service Contract Details</h2>

                <div class="clearfix"></div>
            </div><?php //$takenby = $this->jobs->get_dispatcher($userDetails[0]['dispatcherid']); ?>
<div class="">
    <div class="page-title">
        <div class="title_left">

            <a href="<?php echo BASE_URL.'admin/dashboard' ?>" class="dark_grey">Home</a> >  <a href="<?php echo BASE_URL. 'admin/vsc' ?>" class="dark_grey"> Vehicle Service Contract Listing</a> >Details
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
                            </li>
                            <li>
                                <span class="name"> Email</span>
                                <span class="value text-success1"><?php 
                                
                                
                                
                                echo $userDetails[0]['email']; ?> </span>
                            </li>
                            <li>
                               
                            </li>
                        </ul>
                        <br />

                        <div id="mainb" style="height:0px;"></div>
                      


                        <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col padding_0">
                                <div class="col-sm-12"><span> <b>Vechile Type:</b>&nbsp;
                                        <?php  
                                        $type = '';
                                        if ($userDetails[0]['type'] == 1)
                                            $type = 'Vehicle';
                                        if ($userDetails[0]['type'] == 2)
                                            $type = 'Motorcycle';
                                        if ($userDetails[0]['type'] == 3)
                                            $type = 'Motorhome';
                                        echo $type;
                                         ?></span>
                                </div>
                                
                               
                                <div class="col-sm-12"><b>VIN Number: &nbsp</b>
                                        <?php echo $userDetails[0]['vin'] ?>
                                    </div>
                                <div class="col-sm-12"><b>Current Milage: &nbsp</b>
                                        <?php echo $userDetails[0]['current_milage'] ?>
                                    </div>
                                    <div class="col-sm-12"><b>VIN Number: &nbsp</b>
                                        <?php echo $userDetails[0]['vin'] ?>
                                    </div>
                                <div class="col-sm-12"><b>Vechile Year: &nbsp</b>
                                        <?php echo $userDetails[0]['vehicle_year'] ?>
                                    </div>
                                    <div class="col-sm-12"><b>Vechile Brand: &nbsp</b>
                                        <?php echo $userDetails[0]['vehicle_make_brand'] ?>
                                    </div>
                                <div class="col-sm-12"><b>Vechile Model: &nbsp</b>
                                        <?php echo $userDetails[0]['vehicle_model'] ?>
                                    </div>

                                    <div class="col-sm-12"><span> <b>Was the vehicle purchased from a dealership or individual in the last 30 days: &nbsp:</b>&nbsp;
                                        <?php  
                                        $is_purchased = '';
                                        if ($userDetails[0]['is_purchased'] == 1)
                                            $is_purchased = 'Yes';
                                        if ($userDetails[0]['is_purchased'] == 2)
                                            $is_purchased = 'No';
                                        echo $is_purchased;
                                         ?></span>
                                </div>


                                <div class="col-sm-12"><span> <b>Is the vehicle under the basic manufacturer warranty? : &nbsp:</b>&nbsp;
                                        <?php  
                                        $basic_warranty = '';
                                        if ($userDetails[0]['basic_warranty'] == 1)
                                            $basic_warranty = 'Yes';
                                        if ($userDetails[0]['basic_warranty'] == 2)
                                            $basic_warranty = 'NO';

                                        echo $basic_warranty;
                                         ?></span>
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

     