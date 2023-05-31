<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Details</label>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_firstname" placeholder="Cosigner First name" value="<?php if (isset($this->session->userdata['cosigner_firstname'])) echo $this->session->userdata['cosigner_firstname'] ?>" class="form-control width_100" id="cosigner_firstname" >
                                <span id="err1" style="color: red"></span>

                            </div>

                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_lastname" placeholder="Cosigner Last name" value="<?php if (isset($this->session->userdata['cosigner_lastname'])) echo $this->session->userdata['cosigner_lastname'] ?>" class="form-control width_100" id="cosigner_lastname" >
                                <span id="err2" style="color: red"></span>

                            </div>

                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_phone" placeholder="Cosigner phone" value="<?php if (isset($this->session->userdata['cosigner_phone'])) echo $this->session->userdata['cosigner_phone'] ?>" class="form-control width_100" id="cosigner_phone" maxlength="10">
                                <span id="err3" style="color: red"></span>
                            </div>

                    
                           
                            <div class="col-xs-12 col-sm-6 radio margbot_10">
                                <button type="button" class="button" onclick="step4()">Continue<span class="continueIcon sprites"></span></button>
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

