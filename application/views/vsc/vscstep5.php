<?php 

//echo '<pre>';
//print_r($this->session);

?>
  <div class="clearfix">
      <div class="container" id="containerrefinance">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <h1> </h1>
              <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Current Mileage?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="current_milage" name="current_milage" value="<?php if(isset($this->session->userdata['current_milage'])) echo $this->session->userdata['current_milage']?>" class="form-control text-uppercase"  >
                <span id="err1" style="color: red"></span>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="vscstep6()">Continue<span class="continueIcon sprites"></span></button>
            
            </div>
          </div>
        </div>
      </div>
    </div>
