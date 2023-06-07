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
                          echo 'Buying Refinance For Vehicle';
                        }
                        elseif($this->session->userdata['type']== 5)
                        {
                          echo 'Personal Loan';
                        }
                        elseif($this->session->userdata['type']== 6)
                        {
                          echo 'Recreational Vehical Loan';
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Relative's Details</label>
                    <div class="row">
                        <form id="work_details" method="POST" onsubmit="return getFormId(this)">
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                        <input type="hidden" name="auto_step" value="9" id="auto_step" >
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="employer_name" placeholder="Employer Name" value="<?php if (isset($this->session->userdata['current_employer'])) echo $this->session->userdata['current_employer'] ?>" class="form-control width_100" id="employer_name" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="employer_job_title" placeholder="Job Title" value="<?php if (isset($this->session->userdata['job_title'])) echo $this->session->userdata['job_title'] ?>" class="form-control width_100" id="employer_job_title" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="supervisor_name" placeholder="Supervisor Name" value="<?php if (isset($this->session->userdata['supervisor_name'])) echo $this->session->userdata['supervisor_name'] ?>" class="form-control width_100" id="supervisor_name" >
                                <span id="err3" style="color: red"></span>
                            </div>                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="working_years" placeholder="How long you are working there" value="<?php if (isset($this->session->userdata['how_long_your_working'])) echo $this->session->userdata['how_long_your_working'] ?>" class="form-control width_100" id="working_years" >
                                <span id="err4" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="business_address" placeholder="Business Address" value="<?php if (isset($this->session->userdata['address_of_business'])) echo $this->session->userdata['address_of_business'] ?>" class="form-control width_100" id="business_address" >
                                <span id="err5" style="color: red"></span>
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

