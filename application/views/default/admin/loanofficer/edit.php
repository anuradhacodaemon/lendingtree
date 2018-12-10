<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Edit Loan Officer</h2>

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
                <form action="<?php echo base_url()?>admin/loanofficer/edit" method="POST">
                    <div class="form-group">
                      <label for="city">Name:</label>
                      <input type="hidden" name="id" value="<?php echo ($userDetails[0]['id']) ? $userDetails[0]['id'] : '' ?>">
                      <input type="text" class="form-control" placeholder="John Doe" value="<?php echo ($userDetails[0]['name']) ? $userDetails[0]['name'] : '' ?>" name="name" required="required">
                    </div>
                    <div class="form-group">
                      <label for="officer_id">Officer Id:</label>
                      <input type="text" class="form-control" value="<?php echo ($userDetails[0]['officer_id']) ? $userDetails[0]['officer_id'] : '' ?>" name="officer_id">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" class="form-control" value="<?php echo ($userDetails[0]['email']) ? $userDetails[0]['email'] : '' ?>" name="email" required="required">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone:</label>
                      <input type="text" class="form-control" value="<?php echo ($userDetails[0]['phone']) ? $userDetails[0]['phone'] : '' ?>" placeholder="3000035824" name="phone">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form> 
            </div>

        </div>
    </div>
</div>
