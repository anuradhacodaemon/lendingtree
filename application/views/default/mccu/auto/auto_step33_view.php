<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php /*   if(isset($this->session->userdata['type']))
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
                          }*/
                          echo 'Co-signer Information';
              ?>
              </h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Are You A Citizen or Permenant Resident of the United States of America?</label>
                    <div class="row">
                    <form id="co_other_than_us_citizen" method="POST">
                            <input type="hidden" name="auto_step" value="33" id="auto_step" >
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['co_other_than_us_citizen'])) { if($this->session->userdata['co_other_than_us_citizen']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                                    <div class="label-text">Yes</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="yes" name="co_other_than_us_citizen"  onclick="CitizenOtherThanUS(33, 'yes')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['co_other_than_us_citizen'])) { if($this->session->userdata['co_other_than_us_citizen']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                    <div class="label-text">No</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="no" name="co_other_than_us_citizen" onclick="CitizenOtherThanUS(33, 'no')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <span id="err1" style="color: red"></span>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
