<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
                <?php  if(isset($this->session->userdata['type']))
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
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Primary Residence</label>
                    <div class="row">
                        <form id="p_details" method="post" onsubmit="return getFormId(this)">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="auto_step" value="6" id="auto_step" >
                        <div class="input-text">
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="address" placeholder="Enter Your Address" value="<?php if (isset($this->session->userdata['address_p'])) echo $this->session->userdata['address_p'] ?>" class="form-control width_100" id="auto_primary_address_id" >
                                <span id="err3" style="color: red"></span>
                                <div class="resource-container"></div>
                            </div>                
                        </div>
                        <div class="input-text">
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="monthly_pay" placeholder="Monthly Payment" value="<?php if (isset($this->session->userdata['monthly_pay'])) echo $this->session->userdata['monthly_pay'] ?>" class="form-control width_100" id="monthly_pay_auto" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="living_there_years" pattern= "[0-9]" placeholder="Years Been There" value="<?php if (isset($this->session->userdata['p_years_been_there_on_address'])) echo $this->session->userdata['p_years_been_there_on_address'] ?>" class="form-control width_100" id="living_there_years" >
                                <span id="err2" style="color: red"></span>
                            </div>
                        </div>
                       
                        <div class="input-text">
                        <div class="col-xs-12 col-sm-12 margbot_10">
                                <!--<label>Country</label>-->
                                <input type="hidden" name="p_country" placeholder="Country" value="<?php if (isset($this->session->userdata['p_country'])) echo $this->session->userdata['p_country'] ?>" class="form-control width_100" id="country_name" >
                            </div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <!--<label>Street</label>-->
                                <input type="hidden" name="p_street_line" placeholder="Street" value="<?php if (isset($this->session->userdata['p_street_line'])) echo $this->session->userdata['p_street_line'] ?>" class="form-control width_100" id="street_name" >
                            </div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <!--<label>City</label>-->
                                <input type="hidden" name="p_city" placeholder="City" value="<?php if (isset($this->session->userdata['p_city'])) echo $this->session->userdata['p_city'] ?>" class="form-control width_100" id="city_name" >
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <!--<label>State</label>-->
                                <input type="hidden" name="p_state" placeholder="State" value="<?php if (isset($this->session->userdata['p_state'])) echo $this->session->userdata['p_state'] ?>" class="form-control width_100" id="state_name" >
                            </div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <!--<label>Zipcode</label>-->
                                <input type="hidden" name="p_zip_code" placeholder="Zipcode" value="<?php if (isset($this->session->userdata['p_zip_code'])) echo $this->session->userdata['p_zip_code'] ?>" class="form-control width_100" id="zipcode_name" >
                            </div>
                        </div>
                        
                            <div class="col-xs-12 col-sm-12 radio margtop_20">
                                <button type="submit" class="button">Continue<span class="continueIcon sprites"></span></button>
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
<script> //$('input[name=amount]').val()
    $(document).ready(function () {
        $('#auto_primary_address_id').autocomplete({
            source: function (request, response) {
                $("#err3").html("");
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
                                $("#err3").html("No Address Found");
                            }
                        }
                    });
                }
                if (request.term == '') {
                    $("#err3").html("Please Enter address");
                    return false;
                }
            },
            minLength: 1,
            select: function (event, ui) {
                $('.resource-container').empty();
                /*TODO future need to remove inline styles*/
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#country_name').val('United States');
                $('#street_name').val(ui.item.street_line);
                $('#city_name').val(ui.item.city);
                $('#state_name').val(ui.item.state);
                $('#zipcode_name').val(ui.item.zipcode);
                $('#auto_primary_address_id').val(addr);
                event.preventDefault();
            },
            focus: function (event, ui) {
                $('.resource-container').empty();
                /*TODO future need to remove inline styles*/
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#country_name').val('United States');
                $('#street_name').val(ui.item.street_line);
                $('#city_name').val(ui.item.city);
                $('#state_name').val(ui.item.state);
                $('#zipcode_name').val(ui.item.zipcode);
                $('#auto_primary_address_id').val(addr);
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
    });
    $(document).ready(function() {
        $('#monthly_pay_auto').on('blur', function() {
            $("#err3").html("");
            var value = parseInt($(this).val().replace(/[^0-9.,]/g, ''));
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
        $('#living_there_years').on('input', function() {
        var input = $(this).val();
        input = input.replace(/[^0-9]/g, ''); // Remove any non-digit characters
        $(this).val(input);
        });
    });
    
</script>




