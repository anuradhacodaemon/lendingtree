<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php /*  if(isset($this->session->userdata['type']))
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
                          } */
                          echo 'Co-signer Information';
              ?>
              </h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Co-Signer Personal Details</label>
                    <div class="row">
                        <form id="co_p_details" method="post" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="20" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_firstname" placeholder="First name" value="<?php if (isset($this->session->userdata['cosigner_first_name'])) echo $this->session->userdata['cosigner_first_name'] ?>" class="form-control width_100" id="cosigner_firstname" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_lastname" placeholder="Last name" value="<?php if (isset($this->session->userdata['cosigner_last_name'])) echo $this->session->userdata['cosigner_last_name'] ?>" class="form-control width_100" id="cosigner_lastname" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_phone" placeholder="Phone Number" value="<?php if (isset($this->session->userdata['cosigner_phone'])) echo $this->session->userdata['cosigner_phone'] ?>" class="form-control width_100" id="cosigner_phone" maxlength="14" >
                                <span id="err3" style="color: red"></span>
                            </div>  
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_tdl" placeholder="Drivers License Number" value="<?php if (isset($this->session->userdata['cosigner_tdl'])) echo $this->session->userdata['cosigner_tdl'] ?>" class="form-control width_100" id="cosigner_tdl" minlength="8" maxlength="8" >
                                <span id="err5" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_ssn" placeholder="SSN" value="<?php if (isset($this->session->userdata['cosigner_ssn'])) echo $this->session->userdata['cosigner_ssn'] ?>" class="form-control width_100" id="cosigner_ssn" minlength="11" maxlength="11" >
                                <span id="err6" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select  id="month" name="month" class="form-control form-control-small">
                                <option value="">Month</option>
                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['month'])) {
                                        if ($this->session->userdata['month'] == $i)
                                            echo 'selected';
                                    }
                                    ?> ><?php echo date("F", mktime(0, 0, 0, $i, 10)); ?></option>
                                         <?php } ?>
                            </select>
                                <span id="err7" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="day" name="day" class="form-control form-control-small">
                                <option value="">Day</option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option  value="<?php echo $i ?>"  <?php
                                    if (isset($this->session->userdata['day'])) {
                                        if ($this->session->userdata['day'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                                <span id="err8" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="years" name="years" class="form-control form-control-small">
                                <option value="">Year</option>
                                <?php for ($i = 1920; $i <= 2015; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['years'])) {
                                        if ($this->session->userdata['years'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                                <span id="err9" style="color: red"></span>
                            </div>
                            </div>
                            <!--<div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_email" placeholder="Cosigner Email" value="<?php if (isset($this->session->userdata['cosigner_email'])) echo $this->session->userdata['cosigner_email'] ?>" class="form-control width_100" id="cosigner_email">
                                <span id="err4" style="color: red"></span>
                            </div>  -->
                            <div class="clearfix"></div>                         
                            
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
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
<script>
   $('#cosigner_phone').on('input', function() {
      var phoneNumber = $(this).val().replace(/\D/g, ''); // Remove all non-digit characters
      if (phoneNumber.length === 10) {
        var formattedNumber = '(' + phoneNumber.substring(0, 3) + ') ' + phoneNumber.substring(3, 6) + '-' + phoneNumber.substring(6, 10);
        $(this).val(formattedNumber);
      } else {
        console.log('invalid');
      }
    });
 
    $('#cosigner_ssn').on('input', function() {
      var input = $(this).val();
      input = input.replace(/[^0-9]/g, ''); // Remove any non-digit characters
      var formattedInput = input.replace(/^(\d{3})(\d{2})(\d{4})/, '$1-$2-$3');
      $(this).val(formattedInput);
    });
    //
    $('#cosigner_tdl').on('input', function() {
      var input = $(this).val();
      input = input.replace(/[^0-9]/g, ''); // Remove any non-digit characters
      $(this).val(input);
    });
    $(document).ready(function() {
      if($("#years").val() == '')
      $("#years").val("1950");
      //Year to start from calender
      var minDate = new Date(1921, 0, 1);
      var minDateString = minDate.toISOString().split('T')[0];
      $("#cosigner_dob").attr("min", minDateString);

      //not showing futur dates
      var currentDate = new Date().toISOString().split('T')[0];
      document.getElementById('cosigner_dob').setAttribute('max', currentDate);
    });   
</script>
