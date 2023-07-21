<?php $getPhone=$this->loan_model->get_phone();?>
<div class="header-main clearfix">
      <div class="container">
            <div class="logo">
            <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/JCTTX_Logo_150x150px_Transp.png" alt="Logo" title="JCFCU credit union">
            </div>
            <div class="number">
            <a href="tel:<?php echo $getPhone[0]['phone']?>">Call Us <strong><?php echo $getPhone[0]['phone']?></strong></a>
        </div>
      </div>
    </div>
    <!-- Header ends here -->

  
