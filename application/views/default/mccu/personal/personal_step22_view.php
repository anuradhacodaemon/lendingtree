<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
                <?php  /*  if(isset($this->session->userdata['type']))
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
                          echo 'Buying Refinance For Vehicle';
                        }
                        elseif($this->session->userdata['type']== 5)
                        {
                          echo 'Personal Loan';
                        }
                        elseif($this->session->userdata['type']== 6)
                        {
                          echo 'Recreational Vehical Loan';
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }*/
                          echo 'Co-signer Information';

                          $state = $this->loan_model->get_state();
              ?>
              </h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Primary Residence</label>
                    <div class="row">
                        <form id="p_details" method="post" onsubmit="return getFormId(this)">
                            <input type="hidden" name="auto_step" value="22" id="auto_step" >


                        <!--     <div class="input-text">
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                    <input type="text" name="cosigner_home_address" placeholder="Home Address" value="<?php if (isset($this->session->userdata['p_cosigner_address'])) echo $this->session->userdata['p_cosigner_address'] ?>" class="form-control width_100" id="cosigner_home_address" >
                                    <span id="err1" style="color: red"></span>
                                    <div class="co_resource-container"></div>
                                    <input type="hidden" name="co_p_auto_complete" id="co_p_auto_complete" >
                                </div>              
                            </div> -->
                            <div class="input-text">
                            <div class="col-xs-12 col-sm-12 margbot_10">
                            <input type="text" name="cosigner_home_address" placeholder="Home Address" value="<?php if (isset($this->session->userdata['p_cosigner_address'])) echo $this->session->userdata['p_cosigner_address'] ?>" class="form-control width_100" id="cosigner_home_address" >
                                <div class="resource-container"></div>
                            </div>                
                        </div>

                            <div class="input-text">
                        <div class="col-xs-12 col-sm-6 margbot_10">
                        <select class="form-control" style="max-width: 100%;" name="co_p_state" id="co_p_state" onchange="get_co_p_city($(this).val())">
                            <option value="">Select State</option>
                            <?php
                            foreach ($state as $k => $v) {
                                ?> 

                                <option value="<?php echo $v['id']; ?>" <?php if (isset($this->session->userdata['co_p_state'])) if($this->session->userdata['co_p_state']==$v['id']) echo 'selected'; ?>><?php echo $v['name']; ?></option> 
                            <?php } ?>
                        </select> 
                        <span id="err5" style="color: red"></span>
                            </div>                
                        </div>

                        <div class="input-text">
                        <div class="col-xs-12 col-sm-6 margbot_10">
                        <select class="form-control" name="co_p_city" id="co_p_city" style="max-width: 100%;">
                            <option value="">Select City</option> 
                            <?php
                            foreach ($city as $k => $v) {

                                ?> 

                                <option value="<?php echo $v['id']; ?>"<?php if (isset($this->session->userdata['co_p_city'])) if($this->session->userdata['co_p_city']==$v['id']) echo 'selected'; ?>><?php echo $v['name']; ?></option> 
                            <?php } ?>
                        </select>
                       <span id="err6" style="color: red"></span>
                            </div>                
                        </div>

                        <div class="input-text">
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="co_p_zip" placeholder="Enter Your Zip Code" value="<?php if (isset($this->session->userdata['co_p_zip'])) echo $this->session->userdata['co_p_zip'] ?>" class="form-control width_100" id="co_p_zip" >
                                <span id="err7" style="color: red"></span>
                                <div class="resource-container"></div>
                            </div>                
                        </div>


                        
                            <div class="input-text">
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                    <input type="text" name="cosigner_monthly_pay" placeholder="Monthly Payment" value="<?php if (isset($this->session->userdata['cosigner_monthly_pay'])) echo $this->session->userdata['cosigner_monthly_pay'] ?>" class="form-control width_100" id="cosigner_monthly_pay_auto" >
                                    <span id="err3" style="color: red"></span>
                                </div>
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" pattern="(?!0$)([1-9]\d?|0[1-9])" name="cosigner_living_there_years" placeholder="Years You Have Lived Here" value="<?php if (isset($this->session->userdata['cosigner_years_been_there'])) echo $this->session->userdata['cosigner_years_been_there'] ?>" class="form-control width_100" id="cosigner_living_there_years" >
                                    <span id="err2" style="color: red"></span>
                                </div>
                            </div>
                           
                           <!--    <div class="input-text">
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                    <label>Country</label>
                                    <input type="hidden" name="co_p_country" placeholder="Country" value="<?php // if (isset($this->session->userdata['co_p_country'])) echo $this->session->userdata['co_p_country'] ?>" class="form-control width_100" id="co_country_name" >
                                </div>
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                    <label>Street</label>
                                    <input type="hidden" name="co_p_street_line" placeholder="Street" value="<?php // if (isset($this->session->userdata['co_p_street_line'])) echo $this->session->userdata['co_p_street_line'] ?>" class="form-control width_100" id="co_street_name" >
                                </div>
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                    <label>City</label>
                                    <input type="hidden" name="co_p_city" placeholder="City" value="<?php // if (isset($this->session->userdata['co_p_city'])) echo $this->session->userdata['co_p_city'] ?>" class="form-control width_100" id="co_city_name" >
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                    <label>State</label>
                                    <input type="hidden" name="co_p_state" placeholder="State" value="<?php // if (isset($this->session->userdata['p_state'])) echo $this->session->userdata['co_p_state'] ?>" class="form-control width_100" id="co_state_name" >
                                </div>
                                <div class="col-xs-12 col-sm-12 margbot_10">
                                    <label>Zipcode</label>
                                    <input type="hidden" name="co_p_zip_code" placeholder="Zipcode" value="<?php // if (isset($this->session->userdata['co_p_zip_code'])) echo $this->session->userdata['co_p_zip_code'] ?>" class="form-control width_100" id="co_zipcode_name" >
                                </div>
                            </div> -->
                        
                            <div class="col-xs-12 col-sm-12 radio margtop_20">
                                <button type="submit" class="button" id="continue_button">Continue<span class="continueIcon sprites"></span></button>
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
<!-- Banner ends here -->
<script> //$('input[name=amount]').val()
 /*   $(document).ready(function () {
        $('#cosigner_home_address').autocomplete({
            source: function (request, response) {
                $("#err1").html("");
                if (request.term !== '') {

                    $.ajax({
                        type: "POST",
                        url: base_url + "SmartyApi/getUsAddresses/",
                        dataType: "json",
                        data: { search: request.term },
                        success: function (data) {
                            //console.log(data);
                            response(data);
                            if (data.length === 0) {
                                $('#co_p_auto_complete').val(0);
                                $("#err1").html("No Address Found");
                            }else{
                                $('#co_p_auto_complete').val(1);
                            }
                        }
                    });
                }
                if (request.term == '') {
                    $("#err1").html("Please Enter address");
                    return false;
                }
            },
            minLength: 1,
            select: function (event, ui) {
                $('.co_resource-container').empty();
             //   TODO future need to remove inline styles
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#co_country_name').val('United States');
                $('#co_street_name').val(ui.item.street_line);
                $('#co_city_name').val(ui.item.city);
                $('#co_state_name').val(ui.item.state);
                $('#co_zipcode_name').val(ui.item.zipcode);
                $('#cosigner_home_address').val(addr);
                event.preventDefault();
            },
            focus: function (event, ui) {
                $('.co_resource-container').empty();
                //TODO future need to remove inline styles
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#co_country_name').val('United States');
                $('#co_street_name').val(ui.item.street_line);
                $('#co_city_name').val(ui.item.city);
                $('#co_state_name').val(ui.item.state);
                $('#co_zipcode_name').val(ui.item.zipcode);
                $('#cosigner_home_address').val(addr);
                event.preventDefault();
            }
        }).data("ui-autocomplete")._renderItem = function (ul, item) {
            console.log("The values are>> " +item.city);
            let l = item.street_line + ' ' + item.city + ' ' +item.state + ' ' + item.zipcode;
            return $("<li></li>")
                .addClass('autocomplete-suggestion')
                .addClass('highlight')//item based custom class to li here
                .attr('style', item.entries)
                .append(l)
                .data("ui-autocomplete-item", item)
                .attr('data-street-line', item.street_line)
                .attr('data-city', item.city)
                .attr('data-state', item.state)
                .attr('data-zipcode', item.zipcode)
                .appendTo(ul);
        };

        //
    });  */
    $(document).ready(function() {
        $('#cosigner_monthly_pay_auto').on('blur', function() {
            $("#err3").html("");
            var cleanedValue = $(this).val().replace(/,/g, '');
            var value = parseFloat(cleanedValue);
            if (!isNaN(value)) 
            {
                value = value.toLocaleString('en-US', {  minimumFractionDigits: 2,maximumFractionDigits: 2 })
                $(this).val(value);
            }
            else{
                    $("#err3").html("Enter Number only");
                    return false;
                    $(this).focus();
                }
        });
        //
        $('#cosigner_living_there_years').on('input', function() {
        var input = $(this).val();
        input = input.replace(/[^0-9]/g, ''); // Remove any non-digit characters
        $(this).val(input);
        });
    });
    function validateZip(value) {
            var isValidZip = /^[0-9.,]+$/.test(value) && /^\d{5}(-\d{4})?$/.test(value);
            return isValidZip;
        }


        $('#continue_button').click(function() {



        var isDisabled = $("#co_p_city").prop("disabled");
                if (!isDisabled) {
                    var city_value = $('#co_p_city').val();
                    if (city_value=="")
                    {
                        $("#err6").html("Please Select City");
                        return false;
                    }
                } 

var value1 = $('#co_p_zip').val();
if (validateZip(value1)) {
    $("#err7").html("");
    } else {
        $("#err7").html("Invalid US zip code. Please enter a valid zip code");
        return false;
    }


    
});
    
</script>
