<!-- Banner starts here -->


<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>What type of vehicle do you want a warranty quote for</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Type Of Vehicle</label>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type']))
                            { if($this->session->userdata['type']== 1)
                                echo 'class="button status"'; else echo 'class="button"';} else  echo 'class="button"';
                                ?>>
                            <div class="label-text">Vehicle</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase"  onclick="vscstep2(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 2) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Motorcycle</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="vscstep2(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 3) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Motorhome</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="vscstep2(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->
<!-- Popular calculator section starts here -->
<div class="calculator-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Other Popular Calculators</h1>
            </div>
            <div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-12">
                <div class="offer-cont">
                    <a href="<?php echo BASE_URL . 'loancalculator' ?>" onClick="ga('send', 'event', 'MCT', 'click', 'loan calculator');" >
                        <button class="offer-circ">
                            <div class="outer-circ">
                                <div class="inner-bevel">
                                    <div class="second-bevel">
                                        <div class="offer-img offer-loan-calc"></div>
                                        <p class="title">LOAN CALCULATOR</p>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
			<div class="col-md-3 col-sm-4 col-xs-12">
                <div class="offer-cont">
                    <a href="<?php echo BASE_URL . 'mortgagecalculator' ?>" onClick="ga('send', 'event', 'MCT', 'click', 'mortgage calculator');" >
                        <button class="offer-circ">
                            <div class="outer-circ">
                                <div class="inner-bevel">
                                    <div class="second-bevel">
                                        <div class="offer-img offer-mortgage-calc"></div>
                                        <p class="title">MORTGAGE CALCULATOR</p>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular calculator section ends here -->




