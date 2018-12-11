<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Assign Loan Officer</h2>

                <div class="clearfix"></div>
            </div>


            <div class="x_content">
                <?php

                if($this->session->flashdata('item')) {
                    $message = $this->session->flashdata('item');
                ?>
                <div class="<?php echo $message['class'] ?>"><?php echo $message['message']; ?>

                </div>
                <?php
                }

                ?>
                <form action="<?php echo base_url()?>admin/admin_user/assign_officer" method="POST">
                    <div class="form-group">
                      <label for="city">User Name:</label>
                      <input type="hidden" name="id" value="<?php echo ($userDetails[0]['id']) ? $userDetails[0]['id'] : '' ?>">
                      <input type="text" class="form-control" placeholder="John Doe" value="<?php echo ($userDetails[0]['name']) ? $userDetails[0]['name'] : '' ?>" name="name" required="required">
                    </div>
                    <div class="form-group">
                      <label for="officer_id">Assign Loan Officer:</label>
                      <select name="officer_id" class="form-control">
                            <option value="">Select Loan Officer</option>
                            <?php foreach ($userDetails as $officer) { ?>
                            <option value="<?php echo $officer['id'] ?>"><?php echo $officer['name'] ?></option>
                            <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="email">Have We Initiated Contact?</label>
                      <label class="radio-inline"><input type="radio" value="yes" name="optradio" checked>Yes</label>
                      <label class="radio-inline"><input type="radio" value="no" name="optradio">No</label>
                    </div>
                    <div class="form-group">
                      <label for="notes">Notes:</label>
                      <textarea class="form-control" name="notes" rows="5" id="notes"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form> 
            </div>

        </div>
    </div>
</div>
