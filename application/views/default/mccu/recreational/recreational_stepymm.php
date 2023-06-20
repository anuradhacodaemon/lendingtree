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
                    <label class="control-label">Vehicle Details</label>
                    <div class="row">
                        <form id="vehicle_details" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="44.1" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-2 margbot_10">
                                <select class="form-control width_100" style="width:auto;" name="year" id="year">
                                    <option value="">Select Year</option>
                                    <?php 
                                        $starting_year = '2000';
                                        $ending_year = date('Y');
                                        for($starting_year; $starting_year <= $ending_year; $starting_year++) 
                                        {
                                            if(isset($this->session->userdata['vehicle_year']) &&  $this->session->userdata['vehicle_year'] == $starting_year){
                                                echo '<option value="'.$starting_year.'" selected="selected">'.$starting_year.'</option>'; 
                                            }
                                            else{
                                                    echo '<option value="'.$starting_year.'">'.$starting_year.'</option>'; 
                                                }
                                              
                                        } 
                                    ?>
                                </select> 
                                <span id="err1" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-5 margbot_10">
                                <select class="form-control width_100" style="width:auto;" name="make" id="make">
                                    <option value="">Select Make/Brand</option>
                                    <option <?php echo (isset($this->session->userdata['vehicle_make_brand']) && $this->session->userdata['vehicle_make_brand']) ? 'selected' : '' ?> value="<?php echo (isset($this->session->userdata['vehicle_make_brand']) && $this->session->userdata['vehicle_make_brand']) ?  $this->session->userdata['vehicle_make_brand'] : "" ?>"><?php echo (isset($this->session->userdata['vehicle_make_brand']) && $this->session->userdata['vehicle_make_brand']) ?  $this->session->userdata['vehicle_make_brand'] : "" ?></option>
                                </select> 
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-5 margbot_10">
                                <select class="form-control width_100" style="width:auto;" name="model" id="model">
                                    <option value="">Select Model</option>
                                    <option <?php echo (isset($this->session->userdata['vehicle_model']) && $this->session->userdata['vehicle_model']) ? 'selected' : '' ?> value="<?php echo (isset($this->session->userdata['vehicle_model']) && $this->session->userdata['vehicle_model']) ?  $this->session->userdata['vehicle_model'] : "" ?>"><?php echo (isset($this->session->userdata['vehicle_model']) && $this->session->userdata['vehicle_model']) ?  $this->session->userdata['vehicle_model'] : "" ?></option>
                                </select> 
                                <span id="err3" style="color: red"></span>

                            </div>
                            <div class="clearfix"></div>

                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <input type="submit" value="Continue" class="button">
                                            
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
        $('#year').on('change', function() {
            var yearValue = $(this).val();
            if(yearValue != '')
            {
                 // Make an AJAX request to a PHP script
                $.ajax({
                        type: "POST",
                        url: base_url + "YearMakeModel/getYear/",
                        data: { year: yearValue, from:'recreational'},
                        success: function (data) {
                            //console.log(data);
                            let parseData = JSON.parse(data);
                            if(parseData.message !== undefined || parseData.description !== undefined )
                            {
                                let msg = "failure to get a peer from the ring-balancer"
                                
                                if(parseData.message == "failure to get a peer from the ring-balancer")
                                {
                                    alert('Service is not available try after some time');
                                }
                                if(parseData.description != "" && parseData.description !== undefined)
                                {
                                    alert('Select Correct Values Please you are entering wrong ' + parseData.description);
                                }
                            }
                            else{
                                    $("#make").html(parseData);
                                }
                            
                        }
                    });
            }
            else{
                    $("#err1").html("Please Select Year");
                    return false;
                }
           
        });//year dropdown
        $('#make').on('change', function() {
            var brandValue = $(this).val();
            var yearValue = $("#year").val();
            if(yearValue == '')
            {
                $("#err1").html("Please Select Year");
                return false;
            }
            if(brandValue != '')
            {
                 // Make an AJAX request to a PHP script
                $.ajax({
                        type: "POST",
                        url: base_url + "YearMakeModel/getYear/",
                        data: { make: brandValue, year: yearValue, from:'recreational'},
                        success: function (data) {
                            //console.log(data);
                            
                            let parseData = JSON.parse(data);
                            if(parseData.message !== undefined || parseData.description !== undefined)
                            {
                                let msg = "failure to get a peer from the ring-balancer"
                                
                                if(parseData.message == "failure to get a peer from the ring-balancer")
                                {
                                    alert('Service is not available try after some time');
                                }
                                if(parseData.description != "" && parseData.description !== undefined)
                                {
                                    alert('Select Correct Values Please you are entering wrong ' + parseData.description);
                                }
                            }
                            else{
                                    $("#model").html(parseData);
                                }
                            
                        }
                    });
            }
            else{
                    $("#err2").html("Please Select Year");
                    return false;
                }
        });
       
        $('#make').select2({
            selectOnClose: true
            
        });
        $('#model').select2({
            selectOnClose: true
        });

    });//end of document

</script>
