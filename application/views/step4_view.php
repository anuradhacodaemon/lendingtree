<div class="clearfix">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Gross [Pre-Tax] Monthly Income?</label>
                    <div class="col-xs-12 col-sm-12 margbot_40">
                        <input  type="text" id="pre_tax_income" name="pre_tax_income" value="<?php if (isset($this->session->userdata['userdata']['pre_tax_income'])) echo $this->session->userdata['userdata']['pre_tax_income'] ?>" class="form-control"  maxlength="8">
                    </div>
                    <span id="err1" style="color: red"></span>
                    
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <p class="subtext">
                            Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="step5()">Continue<span class="continueIcon sprites"></span></button>
                                            <!--     <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                        -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


