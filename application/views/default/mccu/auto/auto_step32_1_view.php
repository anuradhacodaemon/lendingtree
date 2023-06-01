<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Cosigner Second Source of Income</label>
                    <div class="row">
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_second_income_source" placeholder="Income source" value="<?php if (isset($this->session->userdata['cosigner_second_income_source'])) echo $this->session->userdata['cosigner_second_income_source'] ?>" class="form-control width_100" id="cosigner_second_income_source" >
                                <span id="err1" style="color: red"></span>

                            </div>
                           
                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_second_monthly_income" placeholder="Monthly Income" value="<?php if (isset($this->session->userdata['cosigner_second_monthly_income'])) echo $this->session->userdata['cosigner_second_monthly_income'] ?>" class="form-control width_100" id="cosigner_second_monthly_income" >
                                <span id="err4" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                           
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <button type="button" class="button" onclick="step6()">Continue<span class="continueIcon sprites"></span></button>
                                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                -->

                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

