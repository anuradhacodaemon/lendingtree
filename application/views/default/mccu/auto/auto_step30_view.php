<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php   if(isset($this->session->userdata['type']))
                      { 
                        if($this->session->userdata['type']== 1)
                        {
                          echo 'Buying New Vehicle';
                        }
                        elseif($this->session->userdata['type']== 2)
                        {
                          echo 'Buying Used Vehicle';
                        }
                        elseif($this->session->userdata['type']== 3)
                        {
                          echo 'Refinance For Vehicle';
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Cosigners Employement Details</label>
                    <div class="row">
                    <form id="co_work_details" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="30" id="auto_step" >
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_employer_name" placeholder="Employer Name" value="<?php if (isset($this->session->userdata['cosigner_employer'])) echo $this->session->userdata['cosigner_employer'] ?>" class="form-control width_100" id="cosigners_employer_name" >
                                <span id="err1" style="color: red"></span>
                            </div>                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_employer_job_title" placeholder="Job Title" value="<?php if (isset($this->session->userdata['cosigner_job_title'])) echo $this->session->userdata['cosigner_job_title'] ?>" class="form-control width_100" id="cosigners_employer_job_title" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="co_supervisor_name" placeholder="Supervisor Name" value="<?php if (isset($this->session->userdata['cosigner_supervisor_name'])) echo $this->session->userdata['cosigner_supervisor_name'] ?>" class="form-control width_100" id="supervisor_name" >
                                <span id="err3" style="color: red"></span>
                            </div>                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_working_years" placeholder="How long you are working there" value="<?php if (isset($this->session->userdata['cosigner_how_long_working_years'])) echo $this->session->userdata['cosigner_how_long_working_years'] ?>" class="form-control width_100" id="cosigners_working_years" >
                                <span id="err4" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="cosigners_business_address" placeholder="Business Address" value="<?php if (isset($this->session->userdata['cosigner_business_address'])) echo $this->session->userdata['cosigner_business_address'] ?>" class="form-control width_100" id="cosigners_business_address" >
                                <span id="err5" style="color: red"></span>
                            </div>
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
