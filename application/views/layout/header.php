<?php $getPhone=$this->loan_model->get_phone();

?>
<div class="header-main clearfix">
  <div class="container">
    <a href="<?php echo BASE_URL; ?>">
      <img src="<?php echo BASE_URL; ?>public/html/img/mccu_logo.png" alt="Logo"
        title="Coastal Community community federal credit union">
    </a>
    <div class="number">Please call us at
      <?php if(!empty($getPhone[0]['phone'])) { ?>
      <a href="tel:<?php echo $getPhone[0]['phone']?>"><strong><?php echo $getPhone[0]['phone']?></strong></a>
      <?php } ?> if you have any questions
    </div>
  </div>
</div>
<div class="tagline">Serving Matagorda County since 1909</div>