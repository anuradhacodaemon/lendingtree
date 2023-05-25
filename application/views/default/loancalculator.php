<div class="main-section inner_height clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
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
                            <label class="control-label">Where are you Financing?</label>
                            <div class="clearfix"></div>
                            <div class="radio-main">
                                <div class="line_bg"></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container">Credit Union
                                        <input type="radio" id="C1" checked="checked" name="finance" onclick="calculateAll1(<?php echo $loandetails[0]['credit_union'] ?>)">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container">Bank
                                        <input type="radio" id="C2" name="finance" onclick="calculateAll2(<?php echo $loandetails[0]['bank'] ?>)">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container">Dealership
                                        <input type="radio" id="C3" name="finance" onclick="calculateAll3(<?php echo $loandetails[0]['dealership'] ?>)">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 marg_5 bg">
                            <label class="control-label">Interest Rate</label>

                            <div class="clearfix"></div>
                            <div class="radio-main">
                                <div class="line_bg"></div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container"><?php echo $loandetails[0]['credit_union'] ?>%
                                        <input type="radio" checked="checked" id="I1" name="rate" onclick="calculateAll1(<?php echo $loandetails[0]['credit_union'] ?>)">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container"><?php echo $loandetails[0]['dealership'] ?>%
                                        <input type="radio"  name="rate" id="I2" onclick="calculateAll2(<?php echo $loandetails[0]['bank'] ?>)">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <!--<input type="radio" name="type" /> -->
                                    <label class="radio-container"><?php echo $loandetails[0]['dealership'] ?>%
                                        <input type="radio" name="rate" id="I3" onclick="calculateAll3(<?php echo $loandetails[0]['dealership'] ?>)">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-12 marg_5 bg clearfix"> 
                            <label class="control-label margbot_10">Estimated Monthly Payment</label>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 radio">
                                <label id="button1" class="button_payment button font_14 button_payment_current">
                                    <div  class="label-text width_auto">$ <span id="monthly_pay1">0</span></div>
                                    <input type="radio" value="$483" class="ng-pristine ng-invalid ng-invalid-required">
                                </label><span class="text">at the Credit Union</span>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 radio">
                                <label  id="button2" class="button_payment button font_14">
                                    <div class="label-text width_auto">$ <span id="monthly_pay2">0</span></div>
                                    <input type="radio" value="$511" class="ng-pristine ng-invalid ng-invalid-required">
                                </label><span class="text">at the Bank</span>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4 radio">
                                <label id="button3" class="button_payment button font_14">
                                    <div class="label-text width_auto">$ <span id="monthly_pay3">0</span></div>
                                    <input type="radio" value="$527" class="ng-pristine ng-invalid ng-invalid-required">
                                </label><span class="text">at the Dealership</span>
                            </div>
                            <div class="clearfix"></div>
                            <label class="control-label margbot_10 margtop_30">Total Payment</label>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <div  class="label-text text text_current width_auto" id="total_loan1">$ <span id="year_pay1">0</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <div  class="label-text text width_auto" id="total_loan2">$ <span id="year_pay2">0</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <div  class="label-text text width_auto" id="total_loan3">$ <span id="year_pay3">0</span></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <label class="control-label margbot_10 margtop_30">Total interest</label>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <div  class="label-text text text_current width_auto" id="total_interest1">$ <span id="interest_pay1">0</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <div  class="label-text text width_auto" id="total_interest2">$ <span id="interest_pay2">0</span></div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 radio">
                                <div  class="label-text text width_auto" id="total_interest3">$ <span id="interest_pay3">0</span></div>
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

<input id="r1" value="<?php echo $loandetails[0]['credit_union'] ?>" type="hidden"/>
<input id="r2" value="<?php echo $loandetails[0]['bank'] ?>" type="hidden"/>
<input id="r3" value="<?php echo $loandetails[0]['dealership'] ?>" type="hidden"/>
<!-- Banner ends here -->

<link href="<?php echo BASE_URL; ?>public/dist/css/bootstrap-slider.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>public/dist/bootstrap-slider.js"></script>
<script src="<?php echo BASE_URL; ?>public/dist/loan_bootstrap-slider.min.js"></script>


<script>
calculate1();
calculate2();
calculate3();
                                
                                function calculate1()
                                {
                                    p = document.getElementById("ex1").value;
                                    n = document.getElementById("ex2").value; // no. of compoundings per year
                                    r = document.getElementById("r1").value;
                                    //alert(r);
                                    result = document.getElementById("monthly_pay1");
                                    result1 = document.getElementById("year_pay1");
                                    result2 = document.getElementById("interest_pay1");
                                    //x = Math.pow((1 + r), n);
                                    //x = (1 + r) * n;
                                    // The equation is A = p * [[1 + (r/n)] ^ nt]
                                    //A = (p* Math.pow((1 + (r/(n*100))), (n*t)));
                                    //A = (p * ((r * x) / (x - 1))) / 12;
                                    //B = A * n;
                                    var principal = parseFloat(p);
                                    var interest = parseFloat(r) / 100 / 12;
                                    var payments = parseFloat(n);
// compute the monthly payment figure
                                    var x = Math.pow(1 + interest, payments); //Math.pow computes powers
                                    var A = (principal * x * interest) / (x - 1);
                                    var B = (A * payments).toFixed(2);
                                    var C = ((A * payments) - principal).toFixed(2);
                                    // toFixed is used for rounding the amount with two decimal places.
                                    A = isNaN(A) ? 0 : A;
                                    B = isNaN(B) ? 0 : B;
                                    C = isNaN(C) ? 0 : C;
                                    result.innerHTML = numberWithCommas(A);
                                    result1.innerHTML = numberWithCommas(B);
                                    result2.innerHTML = numberWithCommas(C);
                                    //result.innerHTML += "<br> The interest is " + (A.toFixed(2) - p).toFixed(2);
                                }
                                function calculate2()
                                {
                                    p = document.getElementById("ex1").value;
                                    n = document.getElementById("ex2").value; // no. of compoundings per year
                                    r = document.getElementById("r2").value;
                                    //alert(r);
                                    result = document.getElementById("monthly_pay2");
                                    result1 = document.getElementById("year_pay2");
                                    result2 = document.getElementById("interest_pay2");
                                    //x = (1 + r) * n;
                                    // The equation is A = p * [[1 + (r/n)] ^ nt]
                                    //A = (p* Math.pow((1 + (r/(n*100))), (n*t)));
                                    //A = (p * ((r * x) / (x - 1))) / 12;
                                    //B = A * n;
                                    var principal = parseFloat(p);
                                    var interest = parseFloat(r) / 100 / 12;
                                    var payments = parseFloat(n);
// compute the monthly payment figure
                                    var x = Math.pow(1 + interest, payments); //Math.pow computes powers
                                    var A = (principal * x * interest) / (x - 1);
                                    var B = (A * payments).toFixed(2);
                                    var C = ((A * payments) - principal).toFixed(2);
                                    // toFixed is used for rounding the amount with two decimal places.
                                    //result.innerHTML = A.toFixed(2);
                                    A = isNaN(A) ? 0 : A;
                                    B = isNaN(B) ? 0 : B;
                                    C = isNaN(C) ? 0 : C;
                                    result.innerHTML = numberWithCommas(A);
                                    result1.innerHTML = numberWithCommas(B);
                                    result2.innerHTML = numberWithCommas(C);
                                    //result.innerHTML += "<br> The interest is " + (A.toFixed(2) - p).toFixed(2);
                                }
                                function calculate3()
                                {
                                    p = document.getElementById("ex1").value;
                                    n = document.getElementById("ex2").value; // no. of compoundings per year
                                    r = document.getElementById("r3").value;
                                    //alert(r);
                                    result = document.getElementById("monthly_pay3");
                                    result1 = document.getElementById("year_pay3");
                                    result2 = document.getElementById("interest_pay3");
                                    //x = (1 + r) * n;
                                    // The equation is A = p * [[1 + (r/n)] ^ nt]
                                    //A = (p* Math.pow((1 + (r/(n*100))), (n*t)));
                                    //A = (p * ((r * x) / (x - 1))) / 12;
                                    //B = A * n;
                                    var principal = parseFloat(p);
                                    var interest = parseFloat(r) / 100 / 12;
                                    var payments = parseFloat(n);
// compute the monthly payment figure
                                    var x = Math.pow(1 + interest, payments); //Math.pow computes powers
                                    var A = (principal * x * interest) / (x - 1);
                                    var B = (A * payments).toFixed(2);
                                    var C = ((A * payments) - principal).toFixed(2);
                                    // toFixed is used for rounding the amount with two decimal places.
                                    A = isNaN(A) ? 0 : A;
                                    B = isNaN(B) ? 0 : B;
                                    C = isNaN(C) ? 0 : C;
                                    result.innerHTML = numberWithCommas(A);
                                    result1.innerHTML = numberWithCommas(B);
                                    result2.innerHTML = numberWithCommas(C);
                                    //result.innerHTML += "<br> The interest is " + (A.toFixed(2) - p).toFixed(2);
                                }
                                function calculateAll1(rate)
                            {
                                p = document.getElementById("ex1").value;
                                n = document.getElementById("ex2").value; // no. of compoundings per year
                                r = rate;
                                //alert(r);
                                result1 = $("#monthly_pay1");
                                result2 = $("#year_pay1");
                                result3 = $("#interest_pay1");
                                $("#button1").addClass("button_payment_current");
                                $("#button2").removeClass("button_payment_current");
                                $("#button3").removeClass("button_payment_current");
                                
                                $("#total_loan1").addClass("text_current");
                                $("#total_loan2").removeClass("text_current");
                                $("#total_loan3").removeClass("text_current");
                                $("#total_interest1").addClass("text_current");
                                $("#total_interest2").removeClass("text_current");
                                $("#total_interest3").removeClass("text_current");
                                if ($("#C1").prop("checked", true))
                                {
                                    $("#I1").attr("checked", "checked");
                                }
                                if ($("#I1").prop("checked", true))
                                {
                                    $("#C1").attr("checked", "checked");
                                }
                                var principal = parseFloat(p);
                                var interest = parseFloat(r) / 100 / 12;
                                var payments = parseFloat(n);
                                // compute the monthly payment figure
                                var x = Math.pow(1 + interest, payments); //Math.pow computes powers
                                var A = (principal * x * interest) / (x - 1);
                                var B = (A * payments).toFixed(2);
                                var C = ((A * payments) - principal).toFixed(2);
                                // toFixed is used for rounding the amount with two decimal places.
                                result1.innerHTML = numberWithCommas(A);
                                result2.innerHTML = numberWithCommas(B);
                                result3.innerHTML = numberWithCommas(C);
                            }
                            function calculateAll2(rate)
                            {
                                p = document.getElementById("ex1").value;
                                n = document.getElementById("ex2").value; // no. of compoundings per year
                                r = rate;
                                //alert(r);
                                result1 = $("#monthly_pay2");
                                result2 = $("#year_pay2");
                                result3 = $("#interest_pay2");
                                $("#button2").addClass("button_payment_current");
                                $("#button1").removeClass("button_payment_current");
                                $("#button3").removeClass("button_payment_current");
                                $("#total_loan2").addClass("text_current");
                                $("#total_loan1").removeClass("text_current");
                                $("#total_loan3").removeClass("text_current");
                                $("#total_interest2").addClass("text_current");
                                $("#total_interest1").removeClass("text_current");
                                $("#total_interest3").removeClass("text_current");
                                if ($("#C2").prop("checked", true))
                                {
                                    $("#I2").attr("checked", "checked");
                                }
                                if ($("#I2").prop("checked", true))
                                {
                                    $("#C2").attr("checked", "checked");
                                }
                                var principal = parseFloat(p);
                                var interest = parseFloat(r) / 100 / 12;
                                var payments = parseFloat(n);
                                // compute the monthly payment figure
                                var x = Math.pow(1 + interest, payments); //Math.pow computes powers
                                var A = (principal * x * interest) / (x - 1);
                                var B = (A * payments).toFixed(2);
                                var C = ((A * payments) - principal).toFixed(2);
                                // toFixed is used for rounding the amount with two decimal places.
                                result1.innerHTML = numberWithCommas(A);
                                result2.innerHTML = numberWithCommas(B);
                                result3.innerHTML = numberWithCommas(C);
                            }
                            function calculateAll3(rate)
                            {
                                p = document.getElementById("ex1").value;
                                n = document.getElementById("ex2").value; // no. of compoundings per year
                                r = rate;
                                //alert(r);
                                result1 = $("#monthly_pay3");
                                result2 = $("#year_pay3");
                                result3 = $("#interest_pay3");
                                $("#button3").addClass("button_payment_current");
                                $("#button2").removeClass("button_payment_current");
                                $("#button1").removeClass("button_payment_current");
                                $("#total_loan3").addClass("text_current");
                                $("#total_loan2").removeClass("text_current");
                                $("#total_loan1").removeClass("text_current");
                                $("#total_interest3").addClass("text_current");
                                $("#total_interest2").removeClass("text_current");
                                $("#total_interest1").removeClass("text_current");
                                if ($("#C3").prop("checked", true))
                                {
                                    $("#I3").attr("checked", "checked");
                                }
                                if ($("#I3").prop("checked", true))
                                {
                                    $("#C3").attr("checked", "checked");
                                }
                                var principal = parseFloat(p);
                                var interest = parseFloat(r) / 100 / 12;
                                var payments = parseFloat(n);
                                // compute the monthly payment figure
                                var x = Math.pow(1 + interest, payments); //Math.pow computes powers
                                var A = (principal * x * interest) / (x - 1);
                                var B = (A * payments).toFixed(2);
                                var C = ((A * payments) - principal).toFixed(2);
                                // toFixed is used for rounding the amount with two decimal places.
                                result1.innerHTML = numberWithCommas(A);
                                result2.innerHTML = numberWithCommas(B);
                                result3.innerHTML = numberWithCommas(C);
                            }

                                var slider = new Slider("#ex1");
                                slider.on("slide", function (sliderValue) {

                                    document.getElementById("ex6SliderVal").textContent = numberWithCommas(sliderValue);

                                });

                                slider.on("change", function (sliderValue) {
                                    // alert(JSON.stringify(sliderValue));
                                    var obj = jQuery.parseJSON(JSON.stringify(sliderValue));
//alert( obj.newValue );
                                    document.getElementById("ex6SliderVal").textContent = numberWithCommas(obj.newValue);

                                });
                                var slider2 = new Slider("#ex2");
                                slider2.on("slide", function (sliderValue) {

                                    document.getElementById("ex2SliderVal").textContent = sliderValue;

                                });

                                slider2.on("change", function (sliderValue) {
                                    // alert(JSON.stringify(sliderValue));
                                    var obj = jQuery.parseJSON(JSON.stringify(sliderValue));
//alert( obj.newValue );
                                    document.getElementById("ex2SliderVal").textContent = obj.newValue;

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

                                    location.href = '<?php echo BASE_URL . "loancalculator/page_landing/" ?>' + $("input:radio[name=type]:checked").val() + '/' + $('input[name=ex1]').val();
                                }


</script>
