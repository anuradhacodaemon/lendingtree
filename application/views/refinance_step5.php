
<div class="clearfix">
    <div class="" id="containerrefinance">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">When Were You Born?</label>
                   
 
                    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
                                           
                        
                        <select  id="selectMonth" name="month" class="form-control">
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
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
                        <select id="selectDate" name="day" class="form-control">
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
                    </div>
                    
                    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
                        <select id="selectYear" name="year" class="form-control">
                            <option value="">Year</option>
<?php for ($i = 1900; $i <= 2015; $i++) { ?>
                                <option  value="<?php echo $i ?>" <?php
    if (isset($this->session->userdata['years'])) {
        if ($this->session->userdata['years'] == $i)
            echo 'selected';
    }
    ?>><?php echo $i ?></option>
<?php } ?>
                        </select>
                        
                    </div>
                     <span id="err" style="color: red"></span>
                      <div class="col-xs-12 col-sm-6 margbot_10">
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
});
</script>


