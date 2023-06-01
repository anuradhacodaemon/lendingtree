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
                    <label class="control-label">ARE YOU OTHER THAN A U.S. CITIZEN/PERMANENT RESIDENT ALIEN?</label>
                    <div class="row">
                    <form id="other_than_us_citizen" method="POST">
                            <input type="hidden" name="auto_step" value="20" id="auto_step" >
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['a_u_s_citizen_permanant_alien'])) { if($this->session->userdata['a_u_s_citizen_permanant_alien']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                                    <div class="label-text">Yes</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="yes" name="other_than_us_citizen"  onclick="CitizenOtherThanUS('yes')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['a_u_s_citizen_permanant_alien'])) { if($this->session->userdata['a_u_s_citizen_permanant_alien']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                    <div class="label-text">No</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="no" name="other_than_us_citizen" onclick="CitizenOtherThanUS('no')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <span id="err1" style="color: red"></span>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

