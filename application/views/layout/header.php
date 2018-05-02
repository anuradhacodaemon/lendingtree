  <?php $getPhone=$this->loan_model->get_phone();?>
<div class="header-main clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-6 col-xs-7">
            <div class="logo">
              <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-6 col-xs-5">
            <div class="number">
                <?php if(!empty($getPhone[0]['phone'])) { ?>
              <a href="tel:<?php echo $getPhone[0]['phone']?>">Call us <strong><?php echo $getPhone[0]['phone']?></strong></a>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header ends here -->
    
    
    