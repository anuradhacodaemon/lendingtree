<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> Add New Loan Officer</h2>

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
                <form action="<?php echo base_url()?>admin/loanofficer/add" method="POST">
                    <div class="form-group">
                      <label for="city">Name:</label>
                      <input type="text" class="form-control" placeholder="John Doe" name="name" required="required">
                    </div>
                    <div class="form-group">
                      <label for="officer_id">Officer Id:</label>
                      <input type="text" class="form-control" name="officer_id">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" class="form-control" name="email" required="required">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone:</label>
                      <input type="text" class="form-control" placeholder="3000035824" name="phone">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form> 
            </div>

        </div>
    </div>
</div>
