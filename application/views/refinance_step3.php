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
                <input  type="text" id="vin" name="vin" value="<?php if(isset($this->session->userdata['vin'])) echo $this->session->userdata['vin']?>" class="form-control text-uppercase"  maxlength="17">
                <span id="err1" style="color: red"></span>
              </div>
              <div class="clearfix"></div>
                    <label class="control-label">Current Mileage?</label>
                    
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
<script src="<?php echo BASE_URL; ?>public/dist/bootstrap-slider.js"></script>
<script src="<?php echo BASE_URL; ?>public/dist/bootstrap-slider.min.js"></script>
<script>
 var slider = new Slider("#ex8");
slider.on("slide", function(sliderValue) {
	document.getElementById("ex6SliderVal").textContent = numberWithCommas(sliderValue);
});

function numberWithCommas(x) {
  var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'USD',
  minimumFractionDigits: 2,
});

// Use it.
//var amount = document.getElementById('input').innerHTML;
return formatter.format(x).replace("$", "").replace(/\.00$/,'');  
}
 $(document).ready(function(){
                 if( $('#ex6SliderVal').html()>0)
                 {
                  var formatter = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD',
                                minimumFractionDigits: 2,
                            });
                 var x=formatter.format( $('#ex6SliderVal').html()).replace("$", "").replace(/\.00$/,'');
               $('#ex6SliderVal').html(x);  
                 }
               //alert( $('#ex6SliderVal').html());
 
 });        
</script>