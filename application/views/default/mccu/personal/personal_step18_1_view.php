<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php  /*  if(isset($this->session->userdata['type']))
                      { 
                        if($this->session->userdata['type']== 1)
                        {
                          //echo 'Buying New Vehicle';
                          echo "Loan Protection";
                        }
                        elseif($this->session->userdata['type']== 2)
                        {
                          //echo 'Buying Used Vehicle';
                          echo "Loan Protection";
                        }
                        elseif($this->session->userdata['type']== 3)
                        {
                          //echo 'Refinance For Vehicle';
                          echo "Loan Protection";
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }*/
                          echo 'Personal Loan Application';
              ?>
              </h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">If You Are Suddenly Hurt and Unable to Work, Would You Like the Credit Union to Make Payments on This Loan While You Recover?</label>
                    <div class="row">
                        <form id="on_hurt_cancel_loan" method="POST">
                            <input type="hidden" name="auto_step" value="18.1" id="auto_step" >
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['hurt_or_unable_cancel_the_loan'])) { if($this->session->userdata['hurt_or_unable_cancel_the_loan']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                                    <div class="label-text">Yes</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="yes" name="on_hurt_cancel_loan"  onclick="onHurtCancelLoan('yes')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['hurt_or_unable_cancel_the_loan'])) { if($this->session->userdata['hurt_or_unable_cancel_the_loan']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                    <div class="label-text">No</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="no" name="on_hurt_cancel_loan" onclick="onHurtCancelLoan('no')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <span id="err1" style="color: red"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
