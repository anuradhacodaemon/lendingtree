<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php   if(isset($this->session->userdata['type']))
                      { 
                        if($this->session->userdata['type']== 1)
                        {
                          echo 'Buying New Vehicle';
                        }
                        elseif($this->session->userdata['type']== 2)
                        {
                          echo 'Buying Used Vehicle';
                        }
                        elseif($this->session->userdata['type']== 3)
                        {
                          echo 'Refinance For Vehicle';
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Details</label>
                    <div class="row">
                        <form id="p_details" method="post" onsubmit="return getFormId(this)">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="auto_step" value="5" id="auto_step" >
                        <div class="input-text">
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="address" placeholder="Enter Address" value="<?php if (isset($this->session->userdata['p_address'])) echo $this->session->userdata['p_address'] ?>" class="form-control width_100" id="address" >
                                <span id="err1" style="color: red"></span>

                            </div>

                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="living_there_years" placeholder="Years Been There" value="<?php if (isset($this->session->userdata['p_years_been_there_on_address'])) echo $this->session->userdata['p_years_been_there_on_address'] ?>" class="form-control width_100" id="living_there_years" >
                                <span id="err2" style="color: red"></span>
                            </div>
                        </div>

                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <div class="form-main clearfix">   
                                    <label class="control-label">Monthly Payment</label>               
                                    <span id="ex6CurrentSliderValLabel" class="top-value">$ <label id="ex6SliderVal">
                                        <?php echo (!empty($this->session->userdata['monthly_pay']))?$this->session->userdata['monthly_pay']:5000;?></label>
                                    </span>
                                    <div class="slider-box">
                                        <input id="ex6" name="monthly_pay" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="25" data-slider-value="<?php echo (!empty($this->session->userdata['monthly_pay']))?$this->session->userdata['monthly_pay']:5000 ;
                ?>"/> 
                                        <span class="min-value">$0  &nbsp;</span>
                                        <span class="max-value">&nbsp; $5,000</span>
                                    </div>
                                    <span id="err3" style="color: red"></span>
                                </div>
                            </div>
                        </div>

                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <button type="submit" class="button">Continue<span class="continueIcon sprites"></span></button>
                                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                -->

                            </div>   
                        </form>
                        </div>
                    </div>
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
                        //my added code 
                        slider.on("change", function (sliderValue) {
                            //console.log(sliderValue.newValue);
                            document.getElementById("ex6SliderVal").textContent = sliderValue.newValue;//numberWithCommas(parseInt(sliderValue));
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





