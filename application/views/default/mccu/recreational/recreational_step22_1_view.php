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
                    <label class="control-label">Loan Protection</label>
                    <div class="row">
                        <form id="on_die_cancel_loan" method="POST">
                            <input type="hidden" name="auto_step" value="22.1" id="auto_step" >
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['die_or_ill_cancel_the_loan'])) { if($this->session->userdata['die_or_ill_cancel_the_loan']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                                    <div class="label-text">Yes</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="yes" name="on_die_cancel_loan"  onclick="onDieCancelLoan('yes')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['die_or_ill_cancel_the_loan'])) { if($this->session->userdata['die_or_ill_cancel_the_loan']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                    <div class="label-text">No</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="no" name="on_die_cancel_loan" onclick="onDieCancelLoan('no')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <span id="err1" style="color: red"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

