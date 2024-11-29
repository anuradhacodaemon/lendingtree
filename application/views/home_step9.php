<!-- Banner starts here -->


<div class="main-section inner_height clearfix" id="container1">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1></h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Would you like to borrow additional cash?</label>

                    <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex6SliderVal"><?php
                            if (isset($this->session->userdata['additional_cash']))
                                echo $this->session->userdata['additional_cash'];
                            else
                                echo '0';
                            ?></label> to  $ <label id="ex6SliderVal2"><?php
                            if (isset($this->session->userdata['additional_cash']))
                                echo $this->session->userdata['additional_cash'] + 500;
                            else
                                echo '0';
                            ?></label></span>
                    <div class="clearfix"></div>
                    <div class="slider-box">
                        <input id="ex6"  name="additional_cash" type="text" data-slider-min="0" data-slider-max="125000" data-slider-step="500" data-slider-value="<?php
                        if (isset($this->session->userdata['additional_cash']))
                            echo $this->session->userdata['additional_cash'];
                        else
                            echo '0';
                        ?>"/> 
                        <span class="min-value">$0(No Cash)  &nbsp;</span>
                        <span class="max-value">&nbsp; $130,000</span>
                    </div>




                </div>
                <div class="col-xs-12 col-sm-12 radio">
                    <button type="button" class="button" onclick="home_step11(1)">Continue<span class="continueIcon sprites"></span></button>
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
<script src="<?php echo BASE_URL; ?>public/dist/home_bootstrap-slider.min.js"></script>
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




