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
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Family Reference</label>
                    <div class="row">
                        <form id="relative" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="7" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relative_firstname" placeholder="Nearest Relative (Not living with you)" value="<?php if (isset($this->session->userdata['nearest_relative'])) echo $this->session->userdata['nearest_relative'] ?>" class="form-control width_100" id="firstname" >
                                <span id="err1" style="color: red"></span>

                            </div>

                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <select class="form-control width_100" style="width:auto;" name="relative_relation">
                                    <option value="">Select Relationship</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Parent') ? 'selected' : '' ?> value="Parent">Parent</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Sibling') ? 'selected' : '' ?> value="Sibling">Sibling</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Child') ? 'selected' : '' ?> value="Child">Child</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Uncle') ? 'selected' : '' ?> value="Uncle">Uncle</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Aunt') ? 'selected' : '' ?> value="Aunt">Aunt</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'GrandParent') ? 'selected' : '' ?> value="GrandParent">GrandParent</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Cousin') ? 'selected' : '' ?> value="Cousin">Cousin</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Other') ? 'selected' : '' ?> value="Other">Other</option>
                                </select> 
                                <span id="err2" style="color: red"></span>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relative_address" placeholder="Relatives Address" value="<?php if (isset($this->session->userdata['r_relatives_live_address'])) echo $this->session->userdata['r_relatives_live_address'] ?>" class="form-control width_100" id="relative_address" maxlength="14" pattern="[\d(),\- ]*">
                                <span id="err3" style="color: red"></span>
                                <div class="r_resource-container"></div>
                            </div>

                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relatives_phone"  maxlength="14" placeholder="Relatives Phone" value="<?php if (isset($this->session->userdata['relatives_phone'])) echo $this->session->userdata['relatives_phone'] ?>" class="form-control width_100" id="relatives_phone" >
                                <span id="err4" style="color: red"></span>
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <!--<label>Street</label>-->
                                <input type="hidden" name="r_street_line" placeholder="Street" value="<?php if (isset($this->session->userdata['r_street_line'])) echo $this->session->userdata['r_street_line'] ?>" class="form-control width_100" id="r_street_line" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>Country</label>-->
                                <input type="hidden" name="r_country" placeholder="Country" value="<?php if (isset($this->session->userdata['r_country'])) echo $this->session->userdata['r_country'] ?>" class="form-control width_100" id="r_country" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>State</label>-->
                                <input type="hidden" name="r_state" placeholder="State" value="<?php if (isset($this->session->userdata['r_state'])) echo $this->session->userdata['r_state'] ?>" class="form-control width_100" id="r_state" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>City</label>-->
                                <input type="hidden" name="r_city" placeholder="City" value="<?php if (isset($this->session->userdata['r_city'])) echo $this->session->userdata['r_city'] ?>" class="form-control width_100" id="r_city" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>Zipcode</label>-->
                                <input type="hidden" name="r_zip_code" placeholder="Zipcode" value="<?php if (isset($this->session->userdata['r_zip_code'])) echo $this->session->userdata['r_zip_code'] ?>" class="form-control width_100" id="r_zip_code" >
                            </div>

                            <div class="col-xs-12 col-sm-12 radio margtop_20">
                                <input type="submit" value="Continue" class="button" >
                                            
                            </div>   
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->
<script> //$('input[name=amount]').val()
    $(document).ready(function () {
        $('#relative_address').autocomplete({
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
                $('.r_resource-container').empty();
                /*TODO future need to remove inline styles*/
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#r_country').val('United States');
                $('#r_street_line').val(ui.item.street_line);
                $('#r_city').val(ui.item.city);
                $('#r_state').val(ui.item.state);
                $('#r_zip_code').val(ui.item.zipcode);
                $('#relative_address').val(addr);
                event.preventDefault();
            },
            focus: function (event, ui) {
                $('.r_resource-container').empty();
                /*TODO future need to remove inline styles*/
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#r_country').val('United States');
                $('#r_street_line').val(ui.item.street_line);
                $('#r_city').val(ui.item.city);
                $('#r_state').val(ui.item.state);
                $('#r_zip_code').val(ui.item.zipcode);
                $('#relative_address').val(addr);
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

    $('#relatives_phone').on('input', function() {
      var phoneNumber = $(this).val().replace(/\D/g, ''); // Remove all non-digit characters
      if (phoneNumber.length === 10) {
        var formattedNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3, 6) + '-' + phoneNumber.substring(6, 10);
        $(this).val(formattedNumber);
      } else {
        console.log('invalid');
      }
    });

</script>

