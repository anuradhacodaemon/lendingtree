<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">From Whom Are You Buying?</label>

                    <div class="col-xs-12 col-sm-12 radio">
                        <label class="button">
                            <div class="label-text">Dealer</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase"  onclick="step5(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label class="button">
                            <div class="label-text">Private Seller</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase"  onclick="step5(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label class="button">
                            <div class="label-text">Don't know</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase"  onclick="step3(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<script>

                      function step5(id) {

                          $.ajax({
                              type: "GET",
                              url: "<?php echo BASE_URL . 'auto/step44/' ?>" + id,
                              success: function (data)
                              {

                                  $('#container').html(data).effect("slide", 'slow');
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
