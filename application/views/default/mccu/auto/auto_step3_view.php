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
                          echo 'Refinance For Vehicle';
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
                    
                            <div class="col-xs-12 col-sm-6 radio margbot_10">
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

