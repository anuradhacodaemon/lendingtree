<?php 

//echo '<pre>';
//print_r($this->session);

?>
  <div class="clearfix">
      <div class="" id="containerrefinance">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <!-- <h1>Compare live auto rates</h1> -->
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Vehicle VIN Number?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="vin" name="vin" value="<?php if(isset($this->session->userdata['vin'])) echo $this->session->userdata['vin']?>" class="form-control text-uppercase"  >
              </div>
               <span id="err1" style="color: red"></span>
              <div class="clearfix"></div>
                    <label class="control-label">Current Milage?</label>
                    
                    <span id="ex6CurrentSliderValLabel" class="top-value"> <span id="ex8SliderVal"><?php if(isset($this->session->userdata['current_milage'])) echo $this->session->userdata['current_milage'] ; else echo '100';?></span></span>
 <div class="clearfix"></div> <div class="slider-box">
                <input id="ex8" name="current_milage" type="text" data-slider-min="100" data-slider-max="5000" data-slider-step="100" data-slider-value="<?php if(isset($this->session->userdata['current_milage'])) echo $this->session->userdata['current_milage'] ; else echo '100';?>"/>
                <span class="min-value">100 &nbsp;</span>
                <span class="max-value">&nbsp; 5000</span>
               
              </div>
 <div class="clearfix"></div>
                               <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
-->
              
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="refinancestep3()">Continue<span class="continueIcon sprites"></span></button>
            
            </div>
          </div>
        </div>
      </div>
    </div>
<link href="<?php echo BASE_URL; ?>public/dist/css/bootstrap-slider.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>/public/dist/bootstrap-slider.js"></script>
<script src="<?php echo BASE_URL; ?>/public/dist/bootstrap-slider.min.js"></script>
<script>
 var slider = new Slider("#ex8");
slider.on("slide", function(sliderValue) {
	document.getElementById("ex8SliderVal").textContent = sliderValue;
});

</script>