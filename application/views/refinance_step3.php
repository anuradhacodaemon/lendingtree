<?php 

//echo '<pre>';
//print_r($this->session);

?>
  <div class="clearfix">
      <div class="" id="containerrefinance">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="form-main clearfix">
              <!-- <h1>Compare live auto rates</h1> -->
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Vehicle VIN Number?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="vin" name="vin" value="<?php if(isset($this->session->userdata['vin'])) echo $this->session->userdata['vin']?>" class="form-control text-uppercase"  >
                <span id="err1" style="color: red"></span>
              </div>
              <div class="clearfix"></div>
                    <label class="control-label">Current Milage?</label>
                    
                    <span id="ex6CurrentSliderValLabel" class="top-value"> <label id="ex6SliderVal"><?php if(isset($this->session->userdata['current_milage'])) echo $this->session->userdata['current_milage'] ; else echo '0';?></label></span>
 <div class="clearfix"></div> <div class="slider-box">
                <input id="ex8" name="current_milage" type="text" data-slider-min="0" data-slider-max="200000" data-slider-step="100" data-slider-value="<?php if(isset($this->session->userdata['current_milage'])) echo $this->session->userdata['current_milage'] ; else echo '0';?>"/>
                <span class="min-value">0 &nbsp;</span>
                <span class="max-value">&nbsp; 200,000</span>
               
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
	document.getElementById("ex6SliderVal").textContent = numberWithCommas(sliderValue);
});
function numberWithCommas(x) {
  x=String(x).toString();
  var afterPoint = '';
  if(x.indexOf('.') > 0)
     afterPoint = x.substring(x.indexOf('.'),x.length);
  x = Math.floor(x);
  x=x.toString();
  var lastThree = x.substring(x.length-3);
  var otherNumbers = x.substring(0,x.length-3);
  if(otherNumbers != '')
      lastThree = ',' + lastThree;
  return otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree + afterPoint;
}
</script>