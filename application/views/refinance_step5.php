
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
                    <h1>Refinance Your Vehicle</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">When Were You Born?</label>
                   
                <div class="margbot_10 clearfix">

                <div class="col-xs-12 col-sm-12 margbot_10">
                              <label class="dob_class">Enter Date Of Birth </label>
                                <input type="date" name="dob" placeholder="DOB" value="<?php if (isset($this->session->userdata['dob'])) echo $this->session->userdata['dob'] ?>" class="form-control width_100" id="dob">
                                <span id="err" style="color: red"></span>
                            </div>
                      <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="ssn" placeholder="SSN ###-##-####" value="<?php if (isset($this->session->userdata['ssn'])) echo $this->session->userdata['ssn'] ?>" class="form-control width_100" id="ssn" >
                        <span id="err7" style="color: red"></span>
                    </div>
                   
                    
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="refinancestep5()">Continue<span class="continueIcon sprites"></span></button>
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



