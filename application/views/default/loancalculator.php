<div class="main-section inner_height clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Loan Calculator</label>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="radio-btn-sect">
                          <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 marg_20">
                                <!--<input type="radio" name="type" /> -->
                                <label class="radio-container">New Car
                                  <input type="radio" checked="checked" name="type">
                                  <span class="checkmark"></span>
                                </label>

                            </div>


                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 marg_20">
                               <!--<input type="radio" name="type" /> -->
                               <label class="radio-container">Used Car
                                  <input type="radio" name="type">
                                  <span class="checkmark"></span>
                                </label>
                            </div>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 marg_5 bg"> 
                            <label class="control-label">Price of Car</label>
                                <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex1SliderVal">5000 

                                    </label></span>
                                <div class="clearfix"></div>

                                <div class="slider-box">
                                    <input id="ex1"  name="currently_owe" type="text" data-slider-min="5000" data-slider-max="150000" data-slider-step="500" data-slider-value="5000"/> 

                                </div>
                        </div>
                                <div class="clearfix"></div>
                                
                                <div class="col-xs-12 col-sm-12 marg_5 bg">
                                <label class="control-label">Loan Period</label>
                                    <span id="ex6CurrentSliderValLabel" class="top-value"> <label id="ex2SliderVal">12</label></span>
                                    <div class="clearfix"></div>

                                    <div class="slider-box">
  <input id="ex2"  name="loan_period" type="text" data-slider-min="12" data-slider-max="216" data-slider-step="12" data-slider-value="12"/> 

                                    </div>

</div>
                                    <div class="clearfix"></div>

                                    <div class="col-xs-12 col-sm-12 marg_5 bg">
                                    <label class="control-label">Where are you Financing</label>
                                        <div class="clearfix"></div>

                                        <div class="slider-box">
 <input id="ex21" type="text"
                                                   data-provide="slider"
                                                   data-slider-ticks="[1.85, 4.15, 5.45]"
                                                   data-slider-ticks-labels='["Credit Union", "Bank", "Dealership"]'
                                                   data-slider-min="1"
                                                   data-slider-max="3"
                                                   data-slider-step="1"
                                                   data-slider-value="1"
                                                   data-slider-tooltip="hide" />                        

                                        </div>

</div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-12 marg_5 bg"> <label class="control-label">Interest Rate</label>

                                            <div class="clearfix"></div>

                                            <div class="slider-box">
                                                <input id="ex22" type="text"
                                                       data-provide="slider"
                                                       data-slider-ticks="[1.85, 4.15, 5.45]"
                                                       data-slider-ticks-labels='["1.85%", "4.15%", "5.45%"]'
                                                       data-slider-min="1"
                                                       data-slider-max="3"
                                                       data-slider-step="1"
                                                       data-slider-value="1"
                                                       data-slider-tooltip="hide" onclick="getAmount(this.value)" />

                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-12 marg_5 bg clearfix"> 
                                            <label class="control-label margbot_10">Estimated Monthly Payment</label>
                                            <div class="clearfix"></div>
                                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 radio">
                                                <label class="button_payment button font_14">
                                                    <div  class="label-text width_auto">$ <span id="monthly_pay1">0</span></div>
                                                    <span class="continueIcon sprites"></span>
                                                    <input type="radio" value="$483" class="ng-pristine ng-invalid ng-invalid-required">
                                                </label>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 radio">
                                                <label class="button_payment button font_14">
                                                    <div class="label-text width_auto">$<span id="monthly_pay2">0</span></div>
                                                    <span class="continueIcon sprites"></span>
                                                    <input type="radio" value="$511" class="ng-pristine ng-invalid ng-invalid-required">
                                                </label>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 radio">
                                                <label class="button_payment button font_14">
                                                    <div class="label-text width_auto">$<span id="monthly_pay3">0</span></div>
                                                    <span class="continueIcon sprites"></span>
                                                    <input type="radio" value="$527" class="ng-pristine ng-invalid ng-invalid-required">
                                                </label>
                                            </div>
                                            <div class="clearfix"></div>
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
        </div>
    </div>
</div>
    
    
            <!-- Banner ends here -->
            <link href="<?php echo BASE_URL; ?>public/dist/css/bootstrap-slider.css" rel="stylesheet">
            <script src="<?php echo BASE_URL; ?>/public/dist/bootstrap-slider.js"></script>
            <script src="<?php echo BASE_URL; ?>/public/dist/loan_bootstrap-slider.min.js"></script>
            <script>

                                                function calculate()
                                                {

                                                    p = document.getElementById("ex1").value;
                                                    n = document.getElementById("ex2").value; // no. of compoundings per year
                                                    r = document.getElementById("ex22").value;
                                                    //alert(r);
                                                    result = document.getElementById("result");
                                                    x = Math.pow((1 + r), n);
                                                    // The equation is A = p * [[1 + (r/n)] ^ nt]
                                                    //A = (p* Math.pow((1 + (r/(n*100))), (n*t)));
                                                    A = (p * ((r * x)) / (x - 1));
                                                    // toFixed is used for rounding the amount with two decimal places.
                                                    result.innerHTML = "The total amount is " + A.toFixed(2);

                                                    //result.innerHTML += "<br> The interest is " + (A.toFixed(2) - p).toFixed(2);
                                                }
                                                var slider = new Slider("#ex1");
                                                slider.on("slide", function (sliderValue) {

                                                    document.getElementById("ex1SliderVal").textContent = sliderValue;
                                                });

                                                var slider = new Slider("#ex2");
                                                slider.on("slide", function (sliderValue) {

                                                    document.getElementById("ex2SliderVal").textContent = sliderValue;
                                                });




                                                var slider = new Slider("#ex21", {
                                                    ticks: [1, 2, 3],
                                                    ticks_positions: [0, 50, 100],
                                                    ticks_snap_bounds: 100,
                                                    formatter: function (value) {
                                                        return 'Current value: ' + value;
                                                    },
                                                    ticks_tooltip: true,
                                                    step: 0.01
                                                });

                                                var slider = new Slider("#ex22", {
                                                    ticks: [1, 2, 3],
                                                    ticks_positions: [0, 50, 100],
                                                    ticks_snap_bounds: 100,
                                                    formatter: function (value) {
                                                       
                                                        return 'Current value: ' + value;
                                                    },
                                                   
                                                    ticks_tooltip: true,
                                                    step: 0.01,
                                                   
                                                });
                                                
                          function getAmount(x)
                          {
                              alert(x);
                          }


            </script>
