<?php 

//echo '<pre>';
//print_r($this->session);

?>
  <div class="clearfix">
      <div class="container" id="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="form-main clearfix">
              <h1>Buying New Vehicle</h1>
              <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Your Current Employer?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="cemployer" name="cemployer" value="<?php if(isset($this->session->userdata['current_employer'])) echo urldecode($this->session->userdata['current_employer']);?>" class="form-control"  >
                <span id="err1" style="color: red"></span>
              </div>
              <label class="control-label">When did you start?</label>
             <!--  <div class="col-xs-12 col-sm-12 margbot_10">
                <input type="text" name="job_title" placeholder="" value="<?php if(isset($this->session->userdata['job_title'])) echo $this->session->userdata['job_title']?>" class="form-control" id="job_title" >
                <span id="err2" style="color: red"></span>
              </div> -->
              <div class="col-xs-12 col-sm-12 margbot_10">
                <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                              <!-- <label class="dob_class">Enter Date Of Birth </label> -->
                              <select  id="selectMonth" name="month" class="form-control form-control-small">
                                <option value="">Month</option>
                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['month'])) {
                                        if ($this->session->userdata['month'] == $i)
                                            echo 'selected';
                                    }
                                    ?> ><?php echo date("F", mktime(0, 0, 0, $i, 10)); ?></option>
                                         <?php } ?>
                            </select>
                            <span id="err2" style="color: red"></span>
                            </div>
                        <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="selectDate" name="day" class="form-control form-control-small">
                                <option value="">Day</option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option  value="<?php echo $i ?>"  <?php
                                    if (isset($this->session->userdata['day'])) {
                                        if ($this->session->userdata['day'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                            <span id="err4" style="color: red"></span>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="selectYear" name="year" class="form-control form-control-small">
                                <option value="">Year</option>
                                <?php for ($i = 1920; $i <= 2015; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['years'])) {
                                        if ($this->session->userdata['years'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                            <span id="err5" style="color: red"></span>
                        </div>
                               
                            </div>
              <div class="col-xs-12 col-sm-12 margbot_10">
                <p class="subtext">
                  Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                </p>
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
<script>
$(document).ready(function() {
  if($("#selectYear").val() == '')
  $("#selectYear").val("1950");
    });
</script>