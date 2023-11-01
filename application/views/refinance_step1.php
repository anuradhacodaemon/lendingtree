<!-- Banner starts here -->


<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Beaumont Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Refinance Your Vehicle</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">How Much Do Currently Owe?</label>

                    <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex6SliderVal"><?php echo (!empty($this->session->userdata['currently_owe']))?$this->session->userdata['currently_owe']:10000;
?></label></span>
                    <div class="clearfix"></div>
                    <div class="slider-box">
                        <input id="ex6"  name="currently_owe" type="text" data-slider-min="10000" data-slider-max="80000" data-slider-step="50" data-slider-value="<?php echo (!empty($this->session->userdata['currently_owe']))?$this->session->userdata['currently_owe']:10000 ;
?>"/> 
                        <span class="min-value">$10,000  &nbsp;</span>
                        <span class="max-value">&nbsp; $80,000</span>
                    </div>




                </div>
                <div class="col-xs-12 col-sm-12 radio">
                    <button type="button" class="button" onclick="refinancestep1()">Continue<span class="continueIcon sprites"></span></button>
                                  <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                    -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->
<link href="<?php echo BASE_URL; ?>public/dist/css/bootstrap-slider.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>public/dist/bootstrap-slider.js"></script>
<script src="<?php echo BASE_URL; ?>public/dist/bootstrap-slider.min.js"></script>
<script>
                        var slider = new Slider("#ex6");
                        slider.on("slide", function (sliderValue) {
                            document.getElementById("ex6SliderVal").textContent = sliderValue;//numberWithCommas(parseInt(sliderValue));
                        });
                        function numberWithCommas(x) {
                            var formatter = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD',
                                minimumFractionDigits: 2,
                            });
// Use it.
//var amount = document.getElementById('input').innerHTML;
                            return parseInt(formatter.format(x).replace("$", "").replace(/\.00$/,''));
                        }
   $(document).ready(function(){
                 
                  var formatter = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD',
                                minimumFractionDigits: 2,
                            });
                 // alert($('#ex6SliderVal').html());
               //   var x=formatter.format( $('#ex6SliderVal').html()).replace("$", "").replace(/\.00$/,'');
               // $('#ex6SliderVal').html(x);  
               //alert( $('#ex6SliderVal').html());
 
 });                     
</script>




