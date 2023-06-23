
<?php 

//echo '<pre>';
//print_r($this->session->userdata());

?>
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
              <label class="control-label">Joint Owner/Co-Signer Marital Status</label>
              <form id="co_p_details1q" method="post">
              <input type="hidden" name="auto_step" value="25" id="auto_step" >
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status'] == 'Single') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">Single</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Single" name="co_marital_status" onclick="getMaritalRadioBtn(25, 'Single')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status'] == 'Married') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">Married</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Married" name="co_marital_status" onclick="getMaritalRadioBtn(25, 'Married')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status'] == 'Divorced') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Divorced</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Divorced" name="co_marital_status" onclick="getMaritalRadioBtn(25, 'Divorced')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status'] == 'Widowed') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Widowed</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Widowed" name="co_marital_status" onclick="getMaritalRadioBtn(25, 'Widowed')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              </form>
          </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->
