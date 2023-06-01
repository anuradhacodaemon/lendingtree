<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Cosigners Employement Details</label>
                    <div class="row">
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_employer_name" placeholder="Employer Name" value="<?php if (isset($this->session->userdata['cosigners_employer_name'])) echo $this->session->userdata['cosigners_employer_name'] ?>" class="form-control width_100" id="cosigners_employer_name" >
                                <span id="err1" style="color: red"></span>

                            </div>
                           
                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_employer_job_title" placeholder="Job Title" value="<?php if (isset($this->session->userdata['cosigners_employer_job_title'])) echo $this->session->userdata['cosigners_employer_job_title'] ?>" class="form-control width_100" id="cosigners_employer_job_title" >
                                <span id="err4" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="supervisor_name" placeholder="Supervisor Name" value="<?php if (isset($this->session->userdata['supervisor_name'])) echo $this->session->userdata['supervisor_name'] ?>" class="form-control width_100" id="supervisor_name" >
                                <span id="err1" style="color: red"></span>

                            </div>
                           
                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_working_years" placeholder="How long you are working there" value="<?php if (isset($this->session->userdata['cosigners_working_years'])) echo $this->session->userdata['cosigners_working_years'] ?>" class="form-control width_100" id="cosigners_working_years" >
                                <span id="err4" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="cosigners_business_address" placeholder="Business Address" value="<?php if (isset($this->session->userdata['cosigners_business_address'])) echo $this->session->userdata['cosigners_business_address'] ?>" class="form-control width_100" id="cosigners_business_address" >
                                <span id="err3" style="color: red"></span>
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

