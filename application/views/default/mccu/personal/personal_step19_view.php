<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php   /*  if(isset($this->session->userdata['type']))
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
                          echo 'Personal Loan Application';
              ?>
              </h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Are You Adding any Co-signers To This Application?</label>
                    <div class="row">
                    <form id="add_cosigner" method="POST">
                            <input type="hidden" name="auto_step" value="19" id="auto_step" >
                            <div class="col-xs-12 col-sm-12 radio">
                                <label <?php if(isset($this->session->userdata['add_co_signers_onto_loan'])) { if($this->session->userdata['add_co_signers_onto_loan']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                                    <div class="label-text">Yes</div>
                                    <span class="continueIcon sprites"></span>
                                <input type="radio" value="yes" name="add_cosigner"  onclick="addCosigner('yes')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                            </div>
                            <div class="col-xs-12 col-sm-12 radio">
                                <label id="add_cosigner19" <?php if(isset($this->session->userdata['add_co_signers_onto_loan'])) { if($this->session->userdata['add_co_signers_onto_loan']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                                    <div class="label-text">No</div>
                                    <span class="continueIcon sprites"></span>
                                
                                <input type="radio" value="no" name="add_cosigner" onclick="addCosigner('no')" class="ng-pristine ng-invalid ng-invalid-required" ></label>
                                <center><img style="display: none;width: 60px;position: relative;" id="loader_page_final" src="<?php echo base_url() ?>public/html/img/loader.gif"></center>
                            </div>
                            <span id="err1" style="color: red"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

