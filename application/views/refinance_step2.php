<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1></h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">What Is Your Current Monthly Payment?</label>
                    
                    <span id="ex6CurrentSliderValLabel" class="top-value"> <span id="ex8SliderVal"><?php if(isset($this->session->userdata['monthly_payment'])) echo $this->session->userdata['monthly_payment'] ; else echo '5000';?></span></span>
 <div class="clearfix"></div>
                <input id="ex8" name="monthly_payment" type="text" data-slider-min="5000" data-slider-max="50000" data-slider-step="5000" data-slider-value="<?php if(isset($this->session->userdata['monthly_payment'])) echo $this->session->userdata['monthly_payment'] ; else echo '5000';?>"/>
                <span class="min-value">5000 &nbsp;</span>
                <span class="max-value">&nbsp; 50000+</span>
               
              
                </div>
                  <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="refinancestep2()">Continue<span class="continueIcon sprites"></span></button>
                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
-->
              
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