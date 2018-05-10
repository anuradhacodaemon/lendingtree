<div class="main-section inner_height clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Loan Calculator</label>

                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                        <div class="radio-btn-sect">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 marg_20">
                                    <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container">New Car
                                        <input type="radio" checked="checked" name="type" value="1">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 marg_20">
                                   <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container">Used Car
                                        <input type="radio" name="type"  value="2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 marg_5 bg"> 
                            <label class="control-label">Price of Car</label>
                            <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex6SliderVal">5000 

                                </label></span>
                            <div class="clearfix"></div>

                            <div class="slider-box">
                                <input id="ex1"  name="ex1" type="text" data-slider-min="5000" data-slider-max="150000" data-slider-step="500" data-slider-value="5000"/> 

                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-xs-12 col-sm-12 marg_5 bg">
                            <label class="control-label">Loan Period</label>
                            <span id="ex6CurrentSliderValLabel" class="top-value"> <label id="ex2SliderVal">3</label> &nbsp;Months</span>
                            <div class="clearfix"></div>

                            <div class="slider-box">
                                <input id="ex2"  name="loan_period" type="text" data-slider-min="3" data-slider-max="216" data-slider-step="3" data-slider-value="3"/> 

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
                                       name="rate"
                                       data-slider-ticks="[0, 1,2]"
                                       data-slider-ticks-labels='["1.85%", "4.15%", "5.45%"]'
                                       data-slider-min="0"
                                       data-slider-max="2"
                                       data-slider-step="1"
                                       data-slider-value="0"
                                       data-slider-tooltip="hide"  />


                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-12 marg_5 bg clearfix"> 
                            <label class="control-label margbot_10">Estimated Monthly Payment</label>
                            <div class="clearfix"></div>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <label class="button">
                                    <div  class="label-text width_auto">$ <span id="monthly_pay1">0</span></div>
                                    <input type="radio" value="$483" class="ng-pristine ng-invalid ng-invalid-required">
                                </label>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <label class="button">
                                    <div class="label-text width_auto">$<span id="monthly_pay2">0</span></div>
                                    <input type="radio" value="$511" class="ng-pristine ng-invalid ng-invalid-required">
                                </label>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <label class="button">
                                    <div class="label-text width_auto">$<span id="monthly_pay3">0</span></div>
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

<input id="r1" value="1.85" type="hidden"/>
<input id="r2" value="4.14" type="hidden"/>
<input id="r3" value="5.45" type="hidden"/>
<!-- Banner ends here -->

<link href="<?php echo BASE_URL; ?>public/dist/css/bootstrap-slider.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>/public/dist/bootstrap-slider.js"></script>
<script src="<?php echo BASE_URL; ?>/public/dist/loan_bootstrap-slider.min.js"></script>


<script>

                                function calculate1()
                                {

                                    p = document.getElementById("ex1").value;
                                    n = document.getElementById("ex2").value; // no. of compoundings per year
                                    r = document.getElementById("r1").value;
                                    //alert(r);
                                    result = document.getElementById("monthly_pay1");
                                    //x = Math.pow((1 + r), n);
                                    x = (1 + r) * n;
                                    // The equation is A = p * [[1 + (r/n)] ^ nt]
                                    //A = (p* Math.pow((1 + (r/(n*100))), (n*t)));
                                    A = p * ((r * x) / (x - 1));
                                    // toFixed is used for rounding the amount with two decimal places.
                                    result.innerHTML = numberWithCommas(A);

                                    //result.innerHTML += "<br> The interest is " + (A.toFixed(2) - p).toFixed(2);
                                }
                                function calculate2()
                                {

                                    p = document.getElementById("ex1").value;
                                    n = document.getElementById("ex2").value; // no. of compoundings per year
                                    r = document.getElementById("r2").value;
                                    //alert(r);
                                    result = document.getElementById("monthly_pay2");
                                    x = (1 + r) * n;
                                    // The equation is A = p * [[1 + (r/n)] ^ nt]
                                    //A = (p* Math.pow((1 + (r/(n*100))), (n*t)));
                                    A = p * ((r * x) / (x - 1));
                                    // toFixed is used for rounding the amount with two decimal places.
                                    //result.innerHTML = A.toFixed(2);
                                    result.innerHTML = numberWithCommas(A);
                                    //result.innerHTML += "<br> The interest is " + (A.toFixed(2) - p).toFixed(2);
                                }
                                function calculate3()
                                {

                                    p = document.getElementById("ex1").value;
                                    n = document.getElementById("ex2").value; // no. of compoundings per year
                                    r = document.getElementById("r3").value;
                                    //alert(r);
                                    result = document.getElementById("monthly_pay3");
                                    x = (1 + r) * n;
                                    // The equation is A = p * [[1 + (r/n)] ^ nt]
                                    //A = (p* Math.pow((1 + (r/(n*100))), (n*t)));
                                    A = p * ((r * x) / (x - 1));
                                    // toFixed is used for rounding the amount with two decimal places.
                                    result.innerHTML = numberWithCommas(A);

                                    //result.innerHTML += "<br> The interest is " + (A.toFixed(2) - p).toFixed(2);
                                }
                                var slider = new Slider("#ex1");
                                slider.on("slide", function (sliderValue) {

                                    document.getElementById("ex6SliderVal").textContent = numberWithCommas(sliderValue);

                                });

                                var slider = new Slider("#ex2");
                                slider.on("slide", function (sliderValue) {

                                    document.getElementById("ex2SliderVal").textContent = sliderValue;

                                });

                                //$("#ex2").on("slidestop", "#ex2", function(event) {console.log("temp value stop at "+$(this).val());});
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


                                function addloan() {
                                    $.ajax({
                                        type: "GET",
                                        url: '<?php echo BASE_URL . "loancalculator/page_landing/" ?>' + $('input[name=type]').val() + '/' + $('input[name=ex1]').val(),
                                        success: function (data)
                                        {
                                            location.href = '<?php echo BASE_URL . 'auto?step=1' ?>';
                                        }
                                    });
                                }


</script>
