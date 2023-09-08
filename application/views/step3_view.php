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
                <input  type="text" id="cemployer" name="cemployer" value="<?php if(isset($this->session->userdata['current_employer'])) echo $this->session->userdata['current_employer']?>" class="form-control"  >
                <span id="err1" style="color: red"></span>
              </div>
              <label class="control-label">How many years have you worked there?</label>
              <div class="col-xs-12 col-sm-12 margbot_10">
                <input type="text" name="job_title" placeholder="" value="<?php if(isset($this->session->userdata['job_title'])) echo $this->session->userdata['job_title']?>" class="form-control" id="job_title" >
                <span id="err2" style="color: red"></span>
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
