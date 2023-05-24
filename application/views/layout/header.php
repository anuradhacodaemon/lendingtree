  <?php $getPhone=$this->loan_model->get_phone();?>
    <div class="header-main clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="number">Please call us at 
                <?php if(!empty($getPhone[0]['phone'])) { ?>
                    <a href="tel:<?php echo $getPhone[0]['phone']?>"><strong><?php echo $getPhone[0]['phone']?></strong></a> 
                <?php } ?> if you have any questions. 
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="tagline">Serving Matagorda County since 1909</div>
    <!-- Header ends here -->
    
    
    