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
                    <h1>Personal Loan</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Requested Amount</label>
                     <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="job_title" placeholder="" value="<?php if(isset($this->session->userdata['requested_amount'])) echo $this->session->userdata['requested_amount']?>" class="form-control" id="requested_amount" >
                        <span id="err2" style="color: red"></span>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                     <button type="button" class="button" onclick="personal_step3()">Continue<span class="continueIcon sprites"></span></button>
                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>-->
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




