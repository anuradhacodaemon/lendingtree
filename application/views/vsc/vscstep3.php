<?php 

//echo '<pre>';
//print_r($this->session);

?>
  <div class="clearfix">
      <div class="container" id="containerrefinance">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <h1>Refinance Your Vehicle</h1>
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Vehicle VIN Number?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="vin" name="vin" value="<?php if(isset($this->session->userdata['vin'])) echo $this->session->userdata['vin']?>" class="form-control text-uppercase"  >
                <span id="err1" style="color: red"></span>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="vscstep4()">Continue<span class="continueIcon sprites"></span></button>
            
            </div>
          </div>
        </div>
      </div>
    </div>
