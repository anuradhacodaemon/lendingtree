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
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Previous working Details</label>
                    <div class="row">
                    <form id="pre_emp_details" method="POST" onsubmit="return getFormId(this)">
                    <input type="hidden" name="auto_step" value="12" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="previous_employer_name" placeholder="Previous Employer" value="<?php if (isset($this->session->userdata['previous_employer'])) echo $this->session->userdata['previous_employer'] ?>" class="form-control width_100" id="previous_employer_name" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="previous_working_years" placeholder="How long you are working there" value="<?php if (isset($this->session->userdata['previous_working_years'])) echo $this->session->userdata['previous_working_years'] ?>" class="form-control width_100" id="previous_working_years" >
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

