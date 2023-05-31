<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Personal Reference</label>
                    <div class="row">
                        <form id="personal_ref" method="POST" onsubmit="return getFormId(this)"> 
                        <input type="hidden" name="auto_step" value="8" id="auto_step" >
                            <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                                <div class="col-xs-12 col-sm-6 margbot_10">
                                    <input type="text" name="personal_refrence" placeholder="Personal Reference" value="<?php if (isset($this->session->userdata['personal_refrence'])) echo $this->session->userdata['personal_refrence'] ?>" class="form-control width_100" id="personal_refrence" >
                                    <span id="err1" style="color: red"></span>
                                </div>                           
                                <div class="col-xs-12 col-sm-6 margbot_10">
                                    <input type="text" name="personal_refrence_phone" minlength="10" maxlength="10" placeholder="Reference Phone" value="<?php if (isset($this->session->userdata['personal_refrence_phone'])) echo $this->session->userdata['personal_refrence_phone'] ?>" class="form-control width_100" id="personal_refrence_phone" >
                                    <span id="err2" style="color: red"></span>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                    <input type="text" name="personal_refrence_address" placeholder="Reference Address" value="<?php if (isset($this->session->userdata['personal_refrence_address'])) echo $this->session->userdata['personal_refrence_address'] ?>" class="form-control width_100" id="personal_refrence_address" >
                                    <span id="err3" style="color: red"></span>
                                </div>

                                <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <input type="submit" value="Continue" class="button" >
                                                <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                    -->

                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

