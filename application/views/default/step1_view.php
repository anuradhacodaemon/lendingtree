<!-- Banner starts here -->


<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Type Of Loan</label>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type']))
                            { if($this->session->userdata['type']== 1)
                                echo 'class="button status"'; else echo 'class="button"';} else  echo 'class="button"';
                                ?>>
                            <div class="label-text">New Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase"  onclick="step2(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 2) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Used Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <!--
                    <div class="col-xs-12 col-sm-12 radio">
                        <label class="button">
                            <div class="label-text">Refinance</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label class="button">
                            <div class="label-text">Lease Buy Out</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
               -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->





