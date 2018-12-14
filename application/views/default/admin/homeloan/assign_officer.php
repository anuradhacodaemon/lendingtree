<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Assign Loan Officer</h2>

                <div class="clearfix"></div>
            </div>


            <div class="x_content">
                <?php
                if ($this->session->flashdata('item')) {
                    $message = $this->session->flashdata('item');
                    ?>
                    <div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

                    </div>
                    <?php
                }
                ?>
                <form action="<?php echo base_url() ?>admin/admin_homeloan/assign_officer" method="POST">
                        <input type="hidden" name="id" value="<?php echo ($userDetails[3]) ? $userDetails[3] : '' ?>">
                    <div class="form-group">
                        <label for="officer_id">Assign Loan Officer:</label>
                        <select name="officer_id" class="form-control">
                            <option value="">Select Loan Officer</option>
                            <?php foreach ($userDetails[1] as $officer) { ?>
                                <option value="<?php echo $officer['id'] ?>" <?php echo ($userDetails[2][0]['officer_id'] == $officer['id']) ? ' selected="selected"' : '' ?>><?php echo $officer['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Have We Initiated Contact?</label>
                        <label class="radio-inline"><input type="radio" value="yes" name="optradio" <?php echo ($userDetails[2][0]['initiated_contact'] == 'yes') ? ' checked' : '' ?>>Yes</label>
                        <label class="radio-inline"><input type="radio" value="no" name="optradio" <?php echo ($userDetails[2][0]['initiated_contact'] == 'no') ? ' checked' : '' ?>>No</label>
                    </div>
                    <div class="form-group">
                        <label for="notes">Notes:</label>
                        <textarea class="form-control" name="notes" rows="5" id="notes"><?php echo $userDetails[2][0]['notes'] ?></textarea>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-sm-12"><span> <b>User Name:</b>&nbsp;
                                    <?php echo $userDetails[0][0]['firstname']." ".$userDetails[0][0]['lastname']; ?>
                                </span>
                            </div>
                            <div class="col-sm-12 invoice-col padding_0">
                                <div class="col-sm-12"> <b>Loan Type:</b>&nbsp;
                                        <?php
                                            if ($userDetails[0][0]['loan_type'] == 1)
                                                echo 'Purchase';
                                            if ($userDetails[0][0]['loan_type'] == 2)
                                                echo 'Refinance';
                                            if ($userDetails[0][0]['loan_type'] == 3)
                                                echo 'Home Equity';
                                            if ($userDetails[0][0]['loan_type'] == 4)
                                                echo 'Reverse Mortgage';
                                            ?>
                                </div>
                                
                                
                               <div class="col-sm-12"> <b>Property Type: &nbsp;</b>
                                    <?php
                                    if ($userDetails[0][0]['property_type'] == 1)
                                        echo 'Single Family Home';
                                    if ($userDetails[0][0]['property_type'] == 2)
                                        echo 'Townhome';
                                    if ($userDetails[0][0]['property_type'] == 3)
                                        echo 'Condominium';
                                    if ($userDetails[0][0]['property_type'] == 4)
                                        echo 'Multi Family Home';
                                    if ($userDetails[0][0]['property_type'] == 5)
                                        echo 'Manufactured or Mobile Home';
                                            ?>
                                </div>
                               
                                <div class="col-sm-12"><b>Home Type: &nbsp</b>
                                        <?php 
                                        if($userDetails[0][0]['home_type']==1)
                                        echo 'Primary Home';
                                         if($userDetails[0][0]['home_type']==2)
                                        echo 'Secondary Home';
                                          if($userDetails[0][0]['home_type']==3)
                                        echo 'Rental Property';
                                          ?>
                                    </div>
                                    <div class="col-sm-12"><b>Plan Type: &nbsp</b>
                                        <<?php if($userDetails[0][0]['plan_type']==1) 
                                            echo 'Already under contract';
                                        if($userDetails[0][0]['plan_type']==2) 
                                            echo 'Immediately – I’m making an offer';
                                         if($userDetails[0][0]['plan_type']==3) 
                                            echo 'I’m shopping & am considering a few options';
                                          if($userDetails[0][0]['plan_type']==4) 
                                            echo 'Within next couple month';
                                          if($userDetails[0][0]['plan_type']==5) 
                                            echo 'Not sure – I want to know what I can afford';
                                        ?>
                                    </div>
                       
                               <div class="col-sm-12"> <b>Birth Date: &nbsp;</b>
                                    <?php echo date('d-m-Y',strtotime($userDetails[0][0]['dob'])); ?>
                                </div>
                               <div class="col-sm-12"> <b>Address: &nbsp;</b>
                                    <?php echo str_replace("%20"," ",$userDetails[0][0]['address']) ?>
                                </div>
                               
 <div class="col-sm-12"> <b>City: &nbsp;</b>
                                    <?php
                                    if($userDetails[0][0]['city']>0){
                                    $city=$this->refinance->get_city($userDetails[0][0]['city']);
                                    
                                    echo $city[0]['name'];} ?>
                                </div>
                              
                               
                               <div class="col-sm-12"> <b>Zip: &nbsp;</b>
                                    <?php
                                     
                                    echo $userDetails[0][0]['zip']; ?>
                                </div>
                               <div class="col-sm-12"> <b>Property Value: &nbsp;</b>
                                    <?php echo $userDetails[0][0]['property_value'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Mortgage 2: &nbsp;</b>
                                    <?php if($userDetails[0][0]['mortgage_2']==1) echo 'Yes';
                                    if($userDetails[0][0]['mortgage_2']==2) echo 'No';?>
                                </div>
                                 <div class="col-sm-12"> <b>What is the remaining balance on the 2nd mortgage?&nbsp;</b>
                                    <?php echo $userDetails[0][0]['remaining_mortgage_bal'] ?>
                                </div>
                                 <div class="col-sm-12"> <b>Would you like to borrow additional cash?
: &nbsp;</b>
                                    <?php if($userDetails[0][0]['additional_cash']==1) echo 'Yes';
                                    if($userDetails[0][0]['additional_cash']==2) echo 'No';?>
                                </div>
                                
                                 <div class="col-sm-12"> <b>Credit Score: &nbsp;</b>
                                    <?php if($userDetails[0][0]['credit_score']==1) echo 'Excellent ≥720';
                                    if($userDetails[0][0]['credit_score']==2) echo 'Good 680-719';
                                    if($userDetails[0][0]['credit_score']==3) echo 'Fair 640-679';
                                    if($userDetails[0][0]['credit_score']==4) echo 'Poor ≤639';?>
                                </div>
                                
                                <div class="col-sm-12"> <b>Do you currently have a VA loan?
: &nbsp;</b>
                                    <?php if($userDetails[0][0]['va_loan']==1) echo 'Yes';
                                    if($userDetails[0][0]['va_loan']==2) echo 'No';?>
                                </div>
                                
                                 <div class="col-sm-12"> <b>Have you or your spouse served in the military?
: &nbsp;</b>
                                    <?php if($userDetails[0][0]['military_served']==1) echo 'Yes';
                                    if($userDetails[0][0]['military_served']==2) echo 'No';?>
                                </div>
                                
                                <div class="col-sm-12"> <b>Have you had a bankruptcy or foreclosure in the last 7 years?&nbsp;</b>
                                    <?php if($userDetails[0][0]['bankruptcy_or_foreclosure']==1) echo 'No';
                                    if($userDetails[0][0]['bankruptcy_or_foreclosure']==2) echo 'bankruptcy';
                                    if($userDetails[0][0]['bankruptcy_or_foreclosure']==3) echo 'foreclosure';
                                    if($userDetails[0][0]['bankruptcy_or_foreclosure']==4) echo 'both';?>
                                </div>
                                <div class="col-sm-12"> <b> How long ago was the bankruptcy? &nbsp;</b>
                                    <?php echo $userDetails[0][0]['bankruptcy_years'] ?> years
                                </div>
                                 <div class="col-sm-12"> <b> How long ago was the foreclosure? &nbsp;</b>
                                    <?php echo $userDetails[0][0]['foreclosure_years'] ?> years
                                </div>
                                <div class="col-sm-12"> <b> Mortgage Balance: &nbsp;</b>
                                    <?php echo $userDetails[0][0]['mortgage_bal'] ?>
                                </div>
                                <div class="col-sm-12"> <b>Close Mortgage : &nbsp;</b>
                                    <?php echo $userDetails[0][0]['close_mortgage'] ?>
                                </div>
                               <div class="col-sm-12"> <b>Domain: &nbsp;</b>
                                    <?php echo $userDetails[0][0]['domain'] ?>
                                </div>
                            </div>
                            <!-- /.col -->

                         
                        </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form> 
            </div>

        </div>
    </div>
</div>
