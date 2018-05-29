<div class="clearfix" id="container1">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main home-loan clearfix">
                    <h1 class="text-head">When do you plan to buy a home?</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 4) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Already under contract</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 4) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Immediately – I’m making an offer</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 4) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">I’m shopping & am considering a few options</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 4) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Within next couple months</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 4) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Not sure – I want to know what I can afford</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                </div>
            </div>
            <div class="disclosure">
                <i class="fa fa-lock"></i>&nbsp;&nbsp;Privacy secured&nbsp;&nbsp;|&nbsp;&nbsp;
                <a id="promodisclosure" rel="nofollow" class="disclosures-link" href="">Advertising Disclosures</a>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->

