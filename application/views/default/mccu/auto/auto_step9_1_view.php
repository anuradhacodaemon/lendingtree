
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
                          //echo 'Buying New Vehicle';
                          echo "Involuntary Unemployment Protection";
                        }
                        elseif($this->session->userdata['type']== 2)
                        {
                          //echo 'Buying Used Vehicle';
                          echo "Involuntary Unemployment Protection";
                        }
                        elseif($this->session->userdata['type']== 3)
                        {
                          //echo 'Refinance For Vehicle';
                          echo "Involuntary Unemployment Protection";
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">If you are laid off and lose this income source, would you like to have your loan payments waived?</label>
              <form id="waiver_form" method="POST">
              <input type="hidden" name="auto_step" value="9.1" id="auto_step" >
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['laid_off_for_payment_waived'])) { if($this->session->userdata['laid_off_for_payment_waived']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">YES</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="yes" name="waiver_payment_value"  onclick="geWavedStepLinkRadioBtn('yes')" class="ng-pristine ng-invalid ng-invalid-required" id ="button-selected"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['laid_off_for_payment_waived'])) { if($this->session->userdata['laid_off_for_payment_waived']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">NO</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="no" name="waiver_payment_value" onclick="geWavedStepLinkRadioBtn('no')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <span id="err1" style="color: red"></span>
              </form>
              
              
          <!--    
<div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
           
          -->
          </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->