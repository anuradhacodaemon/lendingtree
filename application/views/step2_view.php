
       
    <div class="main-section inner_container clearfix">
      <div class="container" id="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <h1></h1>
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Desired Loan Term</label>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 7) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">7 years(84 Months)</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase"  onclick="step3(7)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 6) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">6 years(72 Months)</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(6)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 5) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">5 years (60 Months)</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(5)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 4) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">4 years ((48 Months)</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 3) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">3 years(36 Months) </div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 2) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">2 years(24 Months)</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 1) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">1 year (12 Months)</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              
<div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner ends here -->
    
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
-->
<script>

                        function step3(id) {

                            $.ajax({
                                type: "GET",
                                url: "<?php echo BASE_URL . 'auto/step3/' ?>" + id,
                                success: function (data)
                                {
                                    
                                    $('#container').html(data).effect("slide", 'slow');
                                    //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
                                }
                            });

                        }
                         function back() {

                            $.ajax({
                                type: "GET",
                                url: "<?php echo BASE_URL . 'auto/step1' ?>",
                                success: function (data)
                                {
                                    
                                    $('#container').html(data).effect("slide", 'slow');
                                    //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
                                }
                            });

                        }
</script>

<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>

<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">

<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">

<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet"><script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">
