<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Relative's Details</label>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="firstname" placeholder="Nearest Relative (Not living with you)" value="<?php if (isset($this->session->userdata['firstname'])) echo $this->session->userdata['firstname'] ?>" class="form-control width_100" id="firstname" >
                                <span id="err1" style="color: red"></span>

                            </div>


                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <select class="form-control width_100" style="width:auto;" name="state" id="state" onchange="get_city($(this).val())">
                                    <option value="">Select Relationship</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Sibling">Sibling</option>
                                    <option value="Child">Child</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="GrandParent">GrandParent</option>
                                    <option value="Cousin">Cousin</option>
                                </select> 
                                <span id="err4" style="color: red"></span>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relative_address" placeholder="Relatives Address" value="<?php if (isset($this->session->userdata['relative_address'])) echo $this->session->userdata['relative_address'] ?>" class="form-control width_100" id="relative_address" >
                                <span id="err3" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relatives_phone" placeholder="Relatives Phone" value="<?php if (isset($this->session->userdata['relatives_phone'])) echo $this->session->userdata['relatives_phone'] ?>" class="form-control width_100" id="relatives_phone" >
                                <span id="err4" style="color: red"></span>
                            </div>

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

