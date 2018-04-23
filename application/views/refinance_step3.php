<?php 

//echo '<pre>';
//print_r($this->session);

?>
  <div class="clearfix">
      <div class="" id="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <!-- <h1>Compare live auto rates</h1> -->
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Vehicle VIN Number?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="cemployer" name="cemployer" value="<?php if(isset($this->session->userdata['current_employer'])) echo $this->session->userdata['current_employer']?>" class="form-control"  >
              </div>
               <span id="err1" style="color: red"></span>
              
              <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="refinancestep3()">Continue<span class="continueIcon sprites"></span></button>
                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
-->
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
