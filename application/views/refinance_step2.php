<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/mccu_logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Refinance Your Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">What Is Your Current Monthly Payment?</label>
                    
                    <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex6SliderVal"><?php if(isset($this->session->userdata['monthly_payment'])) echo $this->session->userdata['monthly_payment'] ; else echo '50';?></label></span>
 <div class="clearfix"></div> <div class="slider-box">
                <input id="ex8" name="monthly_payment" type="text" data-slider-min="50" data-slider-max="2000" data-slider-step="5" data-slider-value="<?php if(isset($this->session->userdata['monthly_payment'])) echo $this->session->userdata['monthly_payment'] ; else echo '50';?>"/>
                <span class="min-value">$50 &nbsp;</span>
                <span class="max-value">&nbsp; $2,000</span>
               
              </div>
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
                 
                  var formatter = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD',
                                minimumFractionDigits: 2,
                            });
                 var x=formatter.format( $('#ex6SliderVal').html()).replace("$", "").replace(/\.00$/,'');
               $('#ex6SliderVal').html(x);  
               //alert( $('#ex6SliderVal').html());
 
 });        
</script>