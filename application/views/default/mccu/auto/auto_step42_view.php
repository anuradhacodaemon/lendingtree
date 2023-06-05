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
                    <label class="control-label">Cosigner IS ANY INCOME LISTED LIKELY TO BE REDUCED WITHIN THE NEXT TWO YEARS?</label>
                    <div class="row">
                    <form id="co_income_get_reduce_nxt_2y" method="POST">
                            <input type="hidden" name="auto_step" value="42" id="auto_step" >
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['cosigner_any_income_tobe_reduced_n2_year'])) { if($this->session->userdata['cosigner_any_income_tobe_reduced_n2_year']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                                    <div class="label-text">Yes</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="yes" name="co_income_get_reduce_nxt_2y"  onclick="IncomeGetReducedInNxt2Y(42, 'yes')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['cosigner_any_income_tobe_reduced_n2_year'])) { if($this->session->userdata['cosigner_any_income_tobe_reduced_n2_year']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                    <div class="label-text">No</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="no" name="co_income_get_reduce_nxt_2y" onclick="IncomeGetReducedInNxt2Y(42, 'no')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <span id="err1" style="color: red"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

