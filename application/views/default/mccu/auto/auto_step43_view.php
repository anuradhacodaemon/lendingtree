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
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="checkbox" name="i_represnt_accurate" value="<?php if (isset($this->session->userdata['i_represnt_accurate'])) echo $this->session->userdata['i_represnt_accurate'] ?>" class="form-control width_100" id="i_represnt_accurate" >
                                <span id="err1" style="color: red"></span>

                            </div>
                           
                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="date_of_application" readonly="readonly" value="<?php echo date('m-d-Y') ?>" class="form-control width_100" id="date_of_application" >
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

