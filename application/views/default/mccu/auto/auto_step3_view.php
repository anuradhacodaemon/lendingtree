<title>aaaaa</title>
<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php  /* if(isset($this->session->userdata['type']))
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
                          */
                          echo 'Auto Loan Application';
              ?>
              </h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
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
                                <input type="text" name="phone" placeholder="Phone Number" value="<?php if (isset($this->session->userdata['p_phone'])) echo $this->session->userdata['p_phone'] ?>" class="form-control width_100" id="phone" maxlength="14" >
                                <span id="err3" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="p_email" placeholder="email@example.com" value="<?php if (isset($this->session->userdata['p_email'])) echo $this->session->userdata['p_email'] ?>" class="form-control width_100" id="p_email">
                                <span id="err4" style="color: red"></span>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="tex_driv_lic" placeholder="Drivers License Number" value="<?php if (isset($this->session->userdata['tex_driv_lic'])) echo $this->session->userdata['tex_driv_lic'] ?>" class="form-control width_100" id="tex_driv_lic" minlength="8" maxlength="8">
                                <span id="err5" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="soc_sec" placeholder="SSN ###-##-####" value="<?php if (isset($this->session->userdata['soc_sec'])) echo $this->session->userdata['soc_sec'] ?>" class="form-control width_100" id="soc_sec" minlength="11" maxlength="11">
                                <span id="err6" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-12 margbot_10">
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select  id="c_month" name="c_month" class="form-control form-control-small">
                                <option value="">Month</option>
                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['c_month'])) {
                                        if ($this->session->userdata['c_month'] == $i)
                                            echo 'selected';
                                    }
                                    ?> ><?php echo date("F", mktime(0, 0, 0, $i, 10)); ?></option>
                                         <?php } ?>
                            </select>
                                <span id="err7" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="c_day" name="c_day" class="form-control form-control-small">
                                <option value="">Day</option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option  value="<?php echo $i ?>"  <?php
                                    if (isset($this->session->userdata['c_day'])) {
                                        if ($this->session->userdata['c_day'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                                <span id="err8" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="c_years" name="c_years" class="form-control form-control-small">
                                <option value="">Year</option>
                                <?php for ($i = 1920; $i <= 2015; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['c_years'])) {
                                        if ($this->session->userdata['c_years'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                                <span id="err9" style="color: red"></span>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
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

    $('#phone').on('input', function() {
      var phoneNumber = $(this).val().replace(/\D/g, ''); // Remove all non-digit characters
      if (phoneNumber.length === 10) {
        var formattedNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3, 6) + '-' + phoneNumber.substring(6, 10);
        $(this).val(formattedNumber);
      } else {
        console.log('invalid');
      }
    });

  });
//
$(document).ready(function() {
  if($("#c_years").val() == '')
      $("#c_years").val("1950");
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


