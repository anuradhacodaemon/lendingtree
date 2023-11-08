
<div class="clearfix">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">When Were You Born?</label>
                    <label class="dob_class">Enter Date Of Birth </label>
                <div class="margbot_10 clearfix">

                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select  id="selectdobMonth" name="dobmonth" class="form-control form-control-small">
                                <option value="">Month</option>
                                <?php for ($i = 1; $i <= 12; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['dobmonth'])) {
                                        if ($this->session->userdata['dobmonth'] == $i)
                                            echo 'selected';
                                    }
                                    ?> ><?php echo date("F", mktime(0, 0, 0, $i, 10)); ?></option>
                                         <?php } ?>
                            </select>
                            <span id="err2" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="selectdobDate" name="dobday" class="form-control form-control-small">
                                <option value="">Day</option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option  value="<?php echo $i ?>"  <?php
                                    if (isset($this->session->userdata['dobday'])) {
                                        if ($this->session->userdata['dobday'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                            <span id="err4" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
                            <select id="selectdobYear" name="dobyear" class="form-control form-control-small">
                                <option value="">Year</option>
                                <?php for ($i = 1920; $i <= 2015; $i++) { ?>
                                    <option  value="<?php echo $i ?>" <?php
                                    if (isset($this->session->userdata['dobyears'])) {
                                        if ($this->session->userdata['dobyears'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                                         <?php } ?>
                            </select>
                            <span id="err5" style="color: red"></span>
                            </div>
                            
                     </div>
                      <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="ssn" placeholder="SSN ###-##-####" value="<?php if (isset($this->session->userdata['ssn'])) echo $this->session->userdata['ssn'] ?>" class="form-control width_100" id="ssn" >
                        <span id="err7" style="color: red"></span>
                    </div>
                   
                    
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="step7()">Continue<span class="continueIcon sprites"></span></button>
                                <!--   <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                        -->
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
    var minDate = new Date(1921, 0, 1);
      var minDateString = minDate.toISOString().split('T')[0];
      $("#dob").attr("min", minDateString);

      //not showing futur dates
      var currentDate = new Date().toISOString().split('T')[0];
      document.getElementById('dob').setAttribute('max', currentDate);

});
</script>
<script>
$(document).ready(function() {
  if($("#selectdobYear").val() == '')
  $("#selectdobYear").val("1950");
    });
</script>


