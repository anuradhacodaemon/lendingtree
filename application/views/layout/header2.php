<?php
 $getPhone = $this->loan_model->get_phone();
 ?>
    <nav class="navbar navbar-default">
        <div class="container nav-cont">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>/public/images/logo.png" class="nav-logo" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <?php if(!empty($getPhone[0]['phone'])) { ?>
                        <li>Call Us <a href="tel:<?php echo $getPhone[0]['phone']?>" class="call"><b><?php echo $getPhone[0]['phone']?></b></a></li>
                <?php } ?>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>   
    