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
                    <label class="control-label">Joint Owner/Co-Signer's Employement Details</label>
                    <div class="row">
                    <form id="co_work_details" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="24" id="auto_step" >
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_employer_name" placeholder="Employer Name" value="<?php if (isset($this->session->userdata['cosigner_employer'])) echo $this->session->userdata['cosigner_employer'] ?>" class="form-control width_100" id="cosigners_employer_name" >
                                <span id="err1" style="color: red"></span>
                            </div>                           
                            <!--<div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_employer_job_title" placeholder="Job Title" value="<?php if (isset($this->session->userdata['cosigner_job_title'])) echo $this->session->userdata['cosigner_job_title'] ?>" class="form-control width_100" id="cosigners_employer_job_title" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="co_supervisor_name" placeholder="Supervisor Name" value="<?php if (isset($this->session->userdata['cosigner_supervisor_name'])) echo $this->session->userdata['cosigner_supervisor_name'] ?>" class="form-control width_100" id="supervisor_name" >
                                <span id="err3" style="color: red"></span>
                            </div>-->                      
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_working_years" pattern="(?!0$)([1-9]\d?|0[1-9])" placeholder="Years Employed?" value="<?php if (isset($this->session->userdata['cosigner_how_long_working_years'])) echo $this->session->userdata['cosigner_how_long_working_years'] ?>" class="form-control width_100" id="cosigners_working_years" >
                                <span id="err4" style="color: red"></span>
                            </div>
                            <!--<div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="cosigners_business_address" placeholder="Business Address" value="<?php if (isset($this->session->userdata['co_cosigner_business_address'])) echo $this->session->userdata['co_cosigner_business_address'] ?>" class="form-control width_100" id="cosigners_business_address" >
                                <span id="err5" style="color: red"></span>
                                <div class="co_b_r_resource-container"></div>
                            </div>-->

                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <!--<label>Street</label>-->
                                <input type="hidden" name="co_b_r_street_line" placeholder="Street" value="<?php if (isset($this->session->userdata['co_b_r_street_line'])) echo $this->session->userdata['co_b_r_street_line'] ?>" class="form-control width_100" id="co_b_r_street_line" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>Country</label>-->
                                <input type="hidden" name="co_b_r_country" placeholder="Country" value="<?php if (isset($this->session->userdata['co_b_r_country'])) echo $this->session->userdata['co_b_r_country'] ?>" class="form-control width_100" id="co_b_r_country" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>State</label>-->
                                <input type="hidden" name="co_b_r_state" placeholder="State" value="<?php if (isset($this->session->userdata['co_b_r_state'])) echo $this->session->userdata['co_b_r_state'] ?>" class="form-control width_100" id="co_b_r_state" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>City</label>-->
                                <input type="hidden" name="co_b_r_city" placeholder="City" value="<?php if (isset($this->session->userdata['co_b_r_city'])) echo $this->session->userdata['co_b_r_city'] ?>" class="form-control width_100" id="co_b_r_city" >
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <!--<label>Zipcode</label>-->
                                <input type="hidden" name="co_b_r_zip_code" placeholder="Zipcode" value="<?php if (isset($this->session->userdata['co_b_r_zip_code'])) echo $this->session->userdata['co_b_r_zip_code'] ?>" class="form-control width_100" id="co_b_r_zip_code" >
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
        $('#cosigners_business_address').autocomplete({
            source: function (request, response) {
                $("#err5").html("");
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
                                $("#err5").html("No Address Found");
                            }
                        }
                    });
                }
                if (request.term == '') {
                    $("#err5").html("Please Enter address");
                    return false;
                }
            },
            minLength: 1,
            select: function (event, ui) {
                $('.b_r_resource-container').empty();
                /*TODO future need to remove inline styles*/
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#co_b_r_country').val('United States');
                $('#co_b_r_street_line').val(ui.item.street_line);
                $('#co_b_r_city').val(ui.item.city);
                $('#co_b_r_state').val(ui.item.state);
                $('#co_b_r_zip_code').val(ui.item.zipcode);
                $('#cosigners_business_address').val(addr);
                event.preventDefault();
            },
            focus: function (event, ui) {
                $('.b_r_resource-container').empty();
                /*TODO future need to remove inline styles*/
                let addr = ui.item.street_line + ' ' + ui.item.city + ' ' + ui.item.state + ' ' + ui.item.zipcode;    
                $('#co_b_r_country').val('United States');
                $('#co_b_r_street_line').val(ui.item.street_line);
                $('#co_b_r_city').val(ui.item.city);
                $('#co_b_r_state').val(ui.item.state);
                $('#co_b_r_zip_code').val(ui.item.zipcode);
                $('#cosigners_business_address').val(addr);
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




