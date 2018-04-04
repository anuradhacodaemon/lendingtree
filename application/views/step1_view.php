<!-- Banner starts here -->


<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1></h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Type Of Loan</label>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['userdata']['type'])) { if($this->session->userdata['userdata']['type']== 1) echo 'class="button status"'; else echo 'class=button';} ?>
                            
                            >
                            <div class="label-text">New Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase"  onclick="step2(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['userdata']['type'])) { if($this->session->userdata['userdata']['type']== 2) echo 'class="button status"'; else echo 'class=button';} ?>>
                            <div class="label-text">Used Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['userdata']['type'])) { if($this->session->userdata['userdata']['type']== 3) echo 'class="button status"'; else echo 'class=button';} ?>>
                            <div class="label-text">Refinance</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['userdata']['type'])) { if($this->session->userdata['userdata']['type']== 4) echo 'class="button status"'; else echo 'class=button';} ?>>
                            <div class="label-text">Lease Buy Out</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
-->




<script>

                      function step2(id) {

                          var url = "<?php echo BASE_URL . 'auto/step2/' ?>" + id;

                          $.ajax({
                              type: "GET",
                              url: url,
                              
                              
                              success: function (data)
                              {



                                  $('#container').html(data).effect( "slide",{distance: 5});


                                  //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
                              }
                          });

                      }
</script>


<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">

