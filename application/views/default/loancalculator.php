<div class="clearfix">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Loan Calculator</label>
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="radio" name="type" /> New Car

                            </div>


                            <div class="col-xs-12 col-sm-6 margbot_10">
                               <input type="radio" name="type" /> Used Car
                            </div>



                            <div class="col-xs-12 col-sm-12 margbot_10"> <label class="control-label">Price of Car</label>
                                <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex1SliderVal">5000 

                                    </label></span>
                                <div class="clearfix"></div>

                                <div class="slider-box">
                                    <input id="ex1"  name="currently_owe" type="text" data-slider-min="5000" data-slider-max="150000" data-slider-step="500" data-slider-value="5000"/> 

                                </div>

                                <div class="clearfix"></div>
                                <div class="col-xs-12 col-sm-12 margbot_10"><label class="control-label">Loan Period</label>
                                    <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex2SliderVal">5000</label></span>
                                    <div class="clearfix"></div>

                                    <div class="slider-box">
                                        <input id="ex2"  name="currently_owe" type="text" data-slider-min="5000" data-slider-max="150000" data-slider-step="500" data-slider-value="5000"/> 


                                    </div>


                                    <div class="clearfix"></div>

                                    <div class="col-xs-12 col-sm-12 margbot_10"><label class="control-label">Where are you Financing</label>
                                        <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex3SliderVal">5000</label></span>
                                        <div class="clearfix"></div>

                                        <div class="slider-box">
                                            <input id="ex3"  name="currently_owe" type="text" data-slider-min="5000" data-slider-max="150000" data-slider-step="500" data-slider-value="5000"/> 


                                        </div>


                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-12 margbot_10"> <label class="control-label">Interest Rate</label>
                                            <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex4SliderVal">5000</label></span>

                                            <div class="clearfix"></div>

                                            <div class="slider-box">
                                                <input id="ex4"  name="currently_owe" type="text" data-slider-min="5000" data-slider-max="150000" data-slider-step="500" data-slider-value="5000"/> 


                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-12 radio margtop_30">
                                            <button type="button" class="button" onclick="addloan()">Get Approved Now<span class="continueIcon sprites"></span></button>
                                                          <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                            -->

                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner ends here -->
            <link href="<?php echo BASE_URL; ?>public/dist/css/bootstrap-slider.css" rel="stylesheet">
            <script src="<?php echo BASE_URL; ?>/public/dist/bootstrap-slider.js"></script>
            <script src="<?php echo BASE_URL; ?>/public/dist/loan_bootstrap-slider.min.js"></script>
            <script>
                                                var slider = new Slider("#ex1");
                                                slider.on("slide", function (sliderValue) {

                                                    document.getElementById("ex1SliderVal").textContent = sliderValue;
                                                });

                                                var slider = new Slider("#ex2");
                                                slider.on("slide", function (sliderValue) {

                                                    document.getElementById("ex2SliderVal").textContent = sliderValue;
                                                });

                                                var slider = new Slider("#ex3");
                                                slider.on("slide", function (sliderValue) {

                                                    document.getElementById("ex3SliderVal").textContent = sliderValue;
                                                });
                                                var slider = new Slider("#ex4");
                                                slider.on("slide", function (sliderValue) {

                                                    document.getElementById("ex4SliderVal").textContent = sliderValue;
                                                });
                                                function numberWithCommas(x) {

                                                    var formatter = new Intl.NumberFormat('en-US', {
                                                        style: 'currency',
                                                        currency: 'USD',
                                                        minimumFractionDigits: 2,
                                                    });

                                                    // Use it.
                                                    //var amount = document.getElementById('input').innerHTML;
                                                    return formatter.format(x).replace("$", "");


                                                }
                                                $(document).ready(function () {

                                                    var formatter = new Intl.NumberFormat('en-US', {
                                                        style: 'currency',
                                                        currency: 'USD',
                                                        minimumFractionDigits: 2,
                                                    });
                                                    var x = formatter.format($('#ex6SliderVal').html()).replace("$", "");
                                                    $('#ex6SliderVal').html(x);
                                                    //alert( $('#ex6SliderVal').html());

                                                });
            </script>