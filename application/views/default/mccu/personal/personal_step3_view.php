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
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Contact Information</label>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form id="p_details" method="post" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="3" id="auto_step" >
                        <input type="hidden" name="formID" value="p_details" id="formID" >
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="firstname" placeholder="First name" value="<?php if (isset($this->session->userdata['first_name'])) echo $this->session->userdata['first_name'] ?>" class="form-control width_100" id="firstname" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="lastname" placeholder="Last name" value="<?php if (isset($this->session->userdata['last_name'])) echo $this->session->userdata['last_name'] ?>" class="form-control width_100" id="lastname" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="phone" placeholder="phone" value="<?php if (isset($this->session->userdata['p_phone'])) echo $this->session->userdata['p_phone'] ?>" class="form-control width_100" id="phone" maxlength="10">
                                <span id="err3" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="p_email" placeholder="email@example.com" value="<?php if (isset($this->session->userdata['p_email'])) echo $this->session->userdata['p_email'] ?>" class="form-control width_100" id="p_email">
                                <span id="err4" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="tex_driv_lic" placeholder="TDL" value="<?php if (isset($this->session->userdata['tex_driv_lic'])) echo $this->session->userdata['tex_driv_lic'] ?>" class="form-control width_100" id="tex_driv_lic" minlength="8" maxlength="8">
                                <span id="err5" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="soc_sec" placeholder="SSN ###-##-####" value="<?php if (isset($this->session->userdata['soc_sec'])) echo $this->session->userdata['soc_sec'] ?>" class="form-control width_100" id="soc_sec" minlength="11" maxlength="11">
                                <span id="err6" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="date" name="my_dob" placeholder="DOB" value="<?php if (isset($this->session->userdata['p_dob'])) echo $this->session->userdata['p_dob'] ?>" class="form-control" id="my_dob">
                                <span id="err7" style="color: red"></span>
                            </div>
                           
                    
                            <div class="col-xs-12 col-sm-12 radio margtop_20">
                                <input type="submit" value="Continue" class="button" >
                                            
                            </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  $(document).ready(function() {
    $('#soc_sec').on('input', function() {
      var input = $(this).val();
      input = input.replace(/[^0-9]/g, ''); // Remove any non-digit characters
      var formattedInput = input.replace(/^(\d{3})(\d{2})(\d{4})/, '$1-$2-$3');
      $(this).val(formattedInput);
    });
    //
    $('#tex_driv_lic').on('input', function() {
      var input = $(this).val();
      input = input.replace(/[^0-9]/g, ''); // Remove any non-digit characters
      $(this).val(input);
    });
  });
//
$(document).ready(function() {
      /*$("#my_dob").datepicker({
        dateFormat: "mm/dd/yy", // Specify the desired date format
        onSelect: function(dateText) {
          // Perform validation when a date is selected
          var isValidDate = isValidDateFormat(dateText);
          if (!isValidDate) {
            alert("Invalid date format. Please enter a valid date.");
            $(this).val(""); // Clear the input field
          }
        }
      }); */
      //Year to start from calender
      var minDate = new Date(1921, 0, 1);
      var minDateString = minDate.toISOString().split('T')[0];
      $("#my_dob").attr("min", minDateString);

      //not showing futur dates
      var currentDate = new Date().toISOString().split('T')[0];
      document.getElementById('my_dob').setAttribute('max', currentDate);
    });
    /*function isValidDateFormat(dateText) {
        // Parse the date using JavaScript Date object
        var parsedDate = new Date(dateText);
        // Check if the parsed date is valid
        return !isNaN(parsedDate.getTime());
    }*/


</script>


