<?php 

//echo '<pre>';
//print_r($this->session);

?>
  <div class="clearfix">
      <div class="container" id="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <h1>Buying New Vehicle</h1>
              <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Your Current Employer?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="cemployer" name="cemployer" value="<?php if(isset($this->session->userdata['current_employer'])) echo $this->session->userdata['current_employer']?>" class="form-control"  >
                <span id="err1" style="color: red"></span>
              </div>
              <label class="control-label">When did you start?</label>

              <div class="margbot_10 clearfix">
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                                           
                        
                        <select  id="s_selectMonth" name="start_month" class="form-control form-control-small">
                            <option value="">Month</option>
                            <?php for ($i = 1; $i <= 12; $i++) { ?>
                                <option  value="<?php echo $i ?>" <?php
                                if (isset($this->session->userdata['start_month'])) {
                                    if ($this->session->userdata['start_month'] == $i)
                                        echo 'selected';
                                }
                                ?> ><?php echo date("F", mktime(0, 0, 0, $i, 10)); ?></option>
                                <?php } ?>
                        </select>
                        <span id="err2" style="color: red"></span>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                        <select id="s_selectDate" name="start_day" class="form-control form-control-small">
                            <option value="">Day</option>
                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option  value="<?php echo $i ?>"  <?php
                                    if (isset($this->session->userdata['start_day'])) {
                                        if ($this->session->userdata['start_day'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        <span id="err4" style="color: red"></span>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                        <select id="s_selectYear" name="start_years" class="form-control form-control-small">
                                                        <option value="">Year</option>
                            <?php for ($i = 2023; $i >= 1950; $i--) { ?>
                                                            <option  value="<?php echo $i ?>" <?php
                                if (isset($this->session->userdata['start_years'])) {
                                    if ($this->session->userdata['start_years'] == $i)
                                        echo 'selected';
                                }
                                ?>><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        
                    </div>
                    <span id="err5" style="color: red"></span>
                     </div>
  
              <div class="col-xs-12 col-sm-12 margbot_10">
              <!--  <p class="subtext">
                  Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                </p>  -->
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="step4()">Continue<span class="continueIcon sprites"></span></button>
                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
-->
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
