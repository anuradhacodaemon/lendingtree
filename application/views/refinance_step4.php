<div class="clearfix">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Refinance Your Vehicle</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <label class="control-label">Your Details</label>
                  <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                      <div class="col-xs-12 col-sm-6 margbot_10">
                        <input type="text" name="firstname" placeholder="First name" value="<?php if (isset($this->session->userdata['firstname'])) echo $this->session->userdata['firstname'] ?>" class="form-control width_100" id="firstname" >
                    <span id="err1" style="color: red"></span>
                      
                      </div>
                   

                    <div class="col-xs-12 col-sm-6 margbot_10">
                        <input type="text" name="lastname" placeholder="Last name" value="<?php if (isset($this->session->userdata['lastname'])) echo $this->session->userdata['lastname'] ?>" class="form-control width_100" id="lastname" >
                    <span id="err2" style="color: red"></span>
                    
                    </div>
                        
                   <div class="clearfix"></div>

                   
                    <div class="col-xs-12 col-sm-6 margbot_10">
                        <select class="form-control width_100" style="width:auto;" name="state" id="state" onchange="get_city($(this).val())">
                            <option value="">Select State</option>
                            <?php
                            foreach ($state as $k => $v) {
                                ?> 

                                <option value="<?php echo $v['id']; ?>" <?php if (isset($this->session->userdata['state'])) if($this->session->userdata['state']==$v['id']) echo 'selected'; ?>><?php echo $v['name']; ?></option> 
                            <?php } ?>
                        </select> 
                        <span id="err4" style="color: red"></span>
                    </div>
                   
                    <div class="col-xs-12 col-sm-6 margbot_10">
                        <select class="form-control width_100" name="city" id="city" style="width:auto;">
                            <option value="">Select City</option> 
                            <?php
                            foreach ($city as $k => $v) {
                                ?> 

                                <option value="<?php echo $v['id']; ?>"<?php if (isset($this->session->userdata['city'])) if($this->session->userdata['city']==$v['id']) echo 'selected'; ?>><?php echo $v['name']; ?></option> 
                            <?php } ?>
                        </select>
                       <span id="err5" style="color: red"></span>
                    </div>
                    <div class="clearfix"></div>
                 
                     <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="address" placeholder="Address" value="<?php if (isset($this->session->userdata['address'])) echo $this->session->userdata['address'] ?>" class="form-control width_100" id="address" >
                        <span id="err3" style="color: red"></span>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                   
                    
                    <div class="col-xs-12 col-sm-12 radio margtop_30">
                        <button type="button" class="button" onclick="refinancestep4()">Continue<span class="continueIcon sprites"></span></button>
                                      <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                        -->

                    </div>   
                    </div>
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
