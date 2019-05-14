<!-- Banner starts here -->


<div class="clearfix" id="container1">
    <div class="" id="containerrefinance">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1 class="text-head">What is the remaining 1st mortgage balance?</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <!--<label class="control-label"></label>-->

                    <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex6SliderVal"><?php
                            if (isset($this->session->userdata['mortgage_bal']))
                                echo $this->session->userdata['mortgage_bal'];
                            else
                                echo '5000';
                            ?></label> to  $ <label id="ex6SliderVal2"><?php
                            if (isset($this->session->userdata['mortgage_bal']))
                                echo $this->session->userdata['mortgage_bal'] + 500;
                            else
                                echo '5500';
                            ?></label></span>
                    <div class="clearfix"></div>
                    <div class="slider-box">
                        <input id="ex6"  name="mortgage_bal" type="text" data-slider-min="5000" data-slider-max="2000000" data-slider-step="500" data-slider-value="<?php
                        if (isset($this->session->userdata['mortgage_bal']))
                            echo $this->session->userdata['mortgage_bal'];
                        else
                            echo '5000';
                        ?>"/> 
                        <span class="min-value">$5,000  &nbsp;</span>
                        <span class="max-value">&nbsp; $2,000,000</span>
                    </div>




                </div>
                <div class="col-xs-12 col-sm-12 radio">
                    <button type="button" class="button" onclick="home_step7()">Continue<span class="continueIcon sprites"></span></button>
                                  <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                    -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->
<link href="<?php echo BASE_URL; ?>public/dist/css/bootstrap-slider.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>/public/dist/bootstrap-slider.js"></script>
<script src="<?php echo BASE_URL; ?>/public/dist/home_bootstrap-slider.min.js"></script>
<script>
                        var slider = new Slider("#ex6");
                        slider.on("slide", function (sliderValue) {

                            document.getElementById("ex6SliderVal").textContent = numberWithCommas(sliderValue);
                            document.getElementById("ex6SliderVal2").textContent = numberWithCommas(sliderValue + 500);


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
                        $(document).ready(function () {

                            var formatter = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD',
                                minimumFractionDigits: 2,
                            });
                            var x = formatter.format($('#ex6SliderVal').html()).replace("$", "").replace(/\.00$/,'');
                            $('#ex6SliderVal').html(x);
                            $('#ex6SliderVal2').html(x)
                            //alert( $('#ex6SliderVal').html());

                        });
</script>




