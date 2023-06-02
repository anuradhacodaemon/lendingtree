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
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Cosigner's Personal Reference Details</label>
                    <div class="row">
                    <form id="co_personal_ref" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="29" id="auto_step" >
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_personal_refrence" placeholder="Personal Reference" value="<?php if (isset($this->session->userdata['cosigner_personal_refrence'])) echo $this->session->userdata['cosigner_personal_refrence'] ?>" class="form-control width_100" id="cosigners_personal_refrence" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigners_personal_refrence_phone" placeholder="Reference Phone" minlength="10" maxlength="10" value="<?php if (isset($this->session->userdata['cosigner_personal_refrence_phone'])) echo $this->session->userdata['cosigner_personal_refrence_phone'] ?>" class="form-control width_100" id="cosigners_personal_refrence_phone" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="cosigners_personal_refrence_address" placeholder="Reference Address" value="<?php if (isset($this->session->userdata['cosigner_personal_refrence_address'])) echo $this->session->userdata['cosigner_personal_refrence_address'] ?>" class="form-control width_100" id="cosigners_personal_refrence_address" >
                                <span id="err3" style="color: red"></span>
                            </div>

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

