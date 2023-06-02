<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Cosigner Previous working Details</label>
                    <div class="row">
                        <form id="co_pre_emp_details" method="POST" onsubmit="return getFormId(this)">
                            <input type="hidden" name="auto_step" value="33" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_previous_employer_name" placeholder="Previous employer" value="<?php if (isset($this->session->userdata['cosigner_previous_employer'])) echo $this->session->userdata['cosigner_previous_employer'] ?>" class="form-control width_100" id="cosigner_previous_employer_name" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_previous_working_years" placeholder="How long you are working there" value="<?php if (isset($this->session->userdata['cosigner_how_longwork_years'])) echo $this->session->userdata['cosigner_how_longwork_years'] ?>" class="form-control width_100" id="cosigner_previous_working_years" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <input type="submit" value="Continue" class="button" >
                            </div>   
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

