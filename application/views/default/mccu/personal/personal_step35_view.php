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
                        elseif($this->session->userdata['type']== 5)
                        {
                          echo 'Personal Loan';
                        }
                        elseif($this->session->userdata['type']== 6)
                        {
                          echo 'Recreational Vehical Loan';
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Cosigner Military Involvement</label>
                    <div class="row">
                    <form id="co_miltry_involve" method="POST">
                        <input type="hidden" name="auto_step" value="35" id="auto_step" >
                        <div class="col-xs-12 col-sm-12 radio">
                            <label <?php if(isset($this->session->userdata['cosigner_military_involvement'])) { if($this->session->userdata['cosigner_military_involvement']== 'Active') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                                <div class="label-text">ACTIVE</div>
                                <span class="continueIcon sprites"></span>
                            <input type="radio" value="Active" name="co_miltary_involve"  onclick="miltaryInvolve(35, 'Active')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                        </div>
                        <div class="col-xs-12 col-sm-12 radio">
                            <label <?php if(isset($this->session->userdata['cosigner_military_involvement'])) { if($this->session->userdata['cosigner_military_involvement']== 'Former') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                <div class="label-text">FORMER</div>
                                <span class="continueIcon sprites"></span>
                            <input type="radio" value="Former" name="co_miltary_involve" onclick="miltaryInvolve(35, 'Former')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                        </div>
                        <div class="col-xs-12 col-sm-12 radio">
                            <label <?php if(isset($this->session->userdata['cosigner_military_involvement'])) { if($this->session->userdata['cosigner_military_involvement']== 'None') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                <div class="label-text">NONE</div>
                                <span class="continueIcon sprites"></span>
                            <input type="radio" value="None" name="co_miltary_involve" onclick="miltaryInvolve(35, 'None')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                        </div>
                        <span id="err1" style="color: red"></span>
                    </form> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

