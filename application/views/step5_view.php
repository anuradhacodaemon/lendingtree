<div class="clearfix">
  <div class="container" id="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-main clearfix">
          <h1>Buying New Vehicle</h1>
          <a href="" class="disclosure-sec">Disclosures</a>
          <div class="clearfix"></div>
          <label class="control-label">Your Details</label>
          <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
              <div class="col-xs-12 col-sm-6 margbot_10">
                <input type="text" name="firstname" placeholder="First name"
                  value="<?php if (isset($this->session->userdata['firstname'])) echo $this->session->userdata['firstname'] ?>"
                  class="form-control" id="firstname">
                <span id="err1" style="color: red"></span>
              </div>
              <div class="col-xs-12 col-sm-6 margbot_10">
                <input type="text" name="lastname" placeholder="Last name"
                  value="<?php if (isset($this->session->userdata['lastname'])) echo $this->session->userdata['lastname'] ?>"
                  class="form-control" id="lastname">
                <span id="err2" style="color: red"></span>
              </div>
              <div class="col-xs-12 col-sm-12 margbot_10">
                <input type="text" name="address" placeholder="Address"
                  value="<?php if (isset($this->session->userdata['address'])) echo $this->session->userdata['address'] ?>"
                  class="form-control" id="auto_primary_address_id">
                  <span id="err3" style="color: red"></span>
                  <div class="resource-container"></div>
              </div>
              
              <div class="input-text">
                <div class="col-xs-12 col-sm-12 margbot_10">
                        <!--<label>Country</label>-->
                        <input type="hidden" name="p_country" placeholder="Country" value="<?php if (isset($this->session->userdata['country'])) echo $this->session->userdata['country'] ?>" class="form-control width_100" id="country_name" >
                    </div>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <!--<label>Street</label>-->
                        <input type="hidden" name="p_street_line" placeholder="Street" value="<?php if (isset($this->session->userdata['street_line'])) echo $this->session->userdata['street_line'] ?>" class="form-control width_100" id="street_name" >
                    </div>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <!--<label>City</label>-->
                        <input type="hidden" name="p_city" placeholder="City" value="<?php if (isset($this->session->userdata['city'])) echo $this->session->userdata['city'] ?>" class="form-control width_100" id="city_name" >
                    </div>
                </div>
                <div class="input-text">
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <!--<label>State</label>-->
                        <input type="hidden" name="p_state" placeholder="State" value="<?php if (isset($this->session->userdata['state'])) echo $this->session->userdata['state'] ?>" class="form-control width_100" id="state_name" >
                    </div>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <!--<label>Zipcode</label>-->
                        <input type="hidden" name="p_zip_code" placeholder="Zipcode" value="<?php if (isset($this->session->userdata['zip'])) echo $this->session->userdata['zip'] ?>" class="form-control width_100" id="zipcode_name" >
                    </div>
                </div> 
              <div class="col-xs-12 col-sm-12 radio margtop_30">
                <button type="button" class="button" onclick="step6()">Continue<span
                    class="continueIcon sprites"></span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<script>
    jQuery.noConflict();
    jQuery(document).ready(function($) {
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
