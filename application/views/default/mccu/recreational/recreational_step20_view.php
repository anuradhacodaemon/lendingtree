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
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Joint Owner/Co-Signer Personal Details</label>
                    <div class="row">
                        <form id="co_p_details" method="post" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="20" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_firstname" placeholder="Cosigner First name" value="<?php if (isset($this->session->userdata['cosigner_first_name'])) echo $this->session->userdata['cosigner_first_name'] ?>" class="form-control width_100" id="cosigner_firstname" >
                                <span id="err1" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_lastname" placeholder="Cosigner Last name" value="<?php if (isset($this->session->userdata['cosigner_last_name'])) echo $this->session->userdata['cosigner_last_name'] ?>" class="form-control width_100" id="cosigner_lastname" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="cosigner_phone" placeholder="Cosigner phone" value="<?php if (isset($this->session->userdata['cosigner_phone'])) echo $this->session->userdata['cosigner_phone'] ?>" class="form-control width_100" id="cosigner_phone" maxlength="14" >
                                <span id="err3" style="color: red"></span>
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
</script>