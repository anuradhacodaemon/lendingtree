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
                <form action="<?php echo base_url() ?>admin/admin_user/assign_officer" method="POST">
                    
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
                        <div class="col-sm-12 invoice-col padding_0">
                            <div class="col-sm-12"><span> <b>User Name:</b>&nbsp;
                                    <?php echo $userDetails[0][0]['firstname']." ".$userDetails[0][0]['lastname']; ?>
                                </span>
                            </div>
                            <div class="col-sm-12"><span> <b>Request Amount:</b>&nbsp;
                                <?php
                                if ($userDetails[0][0]['requested_amount'] > 0) {
                                    $years = '';
                                    if ($userDetails[0][0]['requested_amount'] == 7)
                                        $years = '$5,000-$10,000';
                                    if ($userDetails[0][0]['requested_amount'] == 6)
                                        $years = '$10,000-$15,000';
                                    if ($userDetails[0][0]['requested_amount'] == 5)
                                        $years = '$15,000-$20,000';
                                    if ($userDetails[0]['requested_amount'] == 4)
                                        $years = '$20,000-$30,000';
                                    if ($userDetails[0][0]['requested_amount'] == 3)
                                        $years = '$30,000- $40,000';
                                    if ($userDetails[0][0]['requested_amount'] == 2)
                                        $years = '$40,000 - $50,000';
                                    if ($userDetails[0][0]['requested_amount'] == 1)
                                        $years = '$50,000+';


                                    echo $years;
                                }
                                ?></span>
                            </div>


                            <div class="col-sm-12"> <b>Type: &nbsp;</b>
                                <?php
                                if ($userDetails[0][0]['type'] > 0) {
                                    $type = '';
                                    if ($userDetails[0][0]['type'] == 1)
                                        $type = 'New Car Purchase';
                                    if ($userDetails[0][0]['type'] == 2)
                                        $type = 'Used Car Purchase';
                                    if ($userDetails[0][0]['type'] == 3)
                                        $type = 'Refinance';
                                    if ($userDetails[0][0]['type'] == 4)
                                        $type = 'Lease Buy Out';


                                    echo $type;
                                }
                                ?>
                            </div>

                            <div class="col-sm-12"><b>Your Current Employer: &nbsp</b>
                                <?php echo $userDetails[0][0]['current_employer'] ?>
                            </div>
                            <div class="col-sm-12"><b>Your Job Title: &nbsp</b>
                                <?php echo $userDetails[0][0]['job_title'] ?>
                            </div>

                            <div class="col-sm-12"> <b>Your Pre-tax Gross Monthly Income: &nbsp;</b>
                                <?php echo '$' . number_format($userDetails[0][0]['pre_tax_income']); ?>
                            </div>
                            <div class="col-sm-12"> <b>Birth Date: &nbsp;</b>
                                <?php echo date('d-m-Y', strtotime($userDetails[0][0]['dob'])); ?>
                            </div>
                            <div class="col-sm-12"> <b>Address: &nbsp;</b>
                                <?php echo str_replace("%20", " ", $userDetails[0][0]['address']); ?>
                            </div>

                            <div class="col-sm-12"> <b>City: &nbsp;</b>
                                <?php
                                if ($userDetails[0][0]['city'] > 0) {
                                    $city = $this->users->get_city($userDetails[0][0]['city']);

                                    echo $city[0]['name'];
                                }
                                ?>
                            </div>
                            <div class="col-sm-12"> <b>State: &nbsp;</b>
                                <?php
                                if ($userDetails[0][0]['state'] > 0) {
                                    $state = $this->users->get_city($userDetails[0][0]['state']);

                                    echo $state[0]['name'];
                                }
                                ?>
                            </div>
                            <div class="col-sm-12"> <b>Zip: &nbsp;</b>
                                <?php echo $userDetails[0][0]['zip'] ?>
                            </div>
                            <div class="col-sm-12"> <b>SSN: &nbsp;</b>
                                <?php echo $userDetails[0][0]['ssn'] ?>
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
