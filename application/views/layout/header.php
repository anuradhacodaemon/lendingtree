<?php $getPhone=$this->loan_model->get_phone();?>
<div class="header-main clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-6 col-xs-7">
            <div class="logo">
              <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/JCFTX_Logo_200x137pxTransp.png" alt="Logo" title="JCFCU credit union" style="max-width: 100%;">
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-6 col-xs-5">
            <div class="number">
                <?php if(!empty($getPhone[0]['phone'])) { ?>
                <a href="tel:<?php echo $getPhone[0]['phone']?>">Call Us <strong><?php echo $getPhone[0]['phone']?></strong></a> &nbsp; <span style="color: white;font">
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header ends here -->
