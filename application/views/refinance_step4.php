<div class="clearfix">
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
                    <label class="control-label">Your Details</label>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="col-xs-12 col-sm-6 margbot_10">
                        <input type="text" name="firstname" placeholder="First name" value="<?php if (isset($this->session->userdata['firstname'])) echo $this->session->userdata['firstname'] ?>" class="form-control width_100" id="firstname" >
                    <span id="err1" style="color: red"></span>
                      
                      </div>
                   

                    <div class="col-xs-12 col-sm-6 margbot_10">
                        <input type="text" name="lastname" placeholder="Last name" value="<?php if (isset($this->session->userdata['lastname'])) echo $this->session->userdata['lastname'] ?>" class="form-control width_100" id="lastname" >
                    <span id="err2" style="color: red"></span>
                    
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="address" placeholder="Enter Your Address" value="<?php if (isset($this->session->userdata['address_p'])) echo $this->session->userdata['address_p'] ?>" class="form-control width_100" id="auto_primary_address_id" >
                                <span id="err3" style="color: red"></span>
                                <div class="resource-container"></div>
                            </div>
                            <div class="clearfix"></div>
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
                    
                   
                    
                    <div class="col-xs-12 col-sm-12 radio margtop_30">
                        <button type="button" class="button" onclick="refinancestep4()">Continue<span class="continueIcon sprites"></span></button>
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

<script type="text/javascript">
$(document).ready(function() {
    $('#ssn').keyup(function() {        
        var val = this.value.replace(/\D/g, '');
          var newVal = '';
          if(val.length > 4) {
             this.value = val;
          }
          if((val.length > 3) && (val.length < 6)) {
             newVal += val.substr(0, 3) + '-';
             val = val.substr(3);
          }
          if (val.length > 5) {
             newVal += val.substr(0, 3) + '-';
             newVal += val.substr(3, 2) + '-';
             val = val.substr(5);
           }
           newVal += val;
           this.value = newVal.substring(0, 11);
    });
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
</script>
