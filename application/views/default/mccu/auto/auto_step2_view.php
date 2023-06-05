
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
              <label class="control-label">Requested Amount</label>
              <form id="req_amount" method="POST">
              <input type="hidden" name="auto_step" value="2" id="auto_step" >
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 7) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">$5,000 - $10,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="$5,000 - $10,000" name="req_amt"  onclick="reqAmountLoan(7)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 6) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$10,000 - $15,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="$10,000 - $15,000" name="req_amt" onclick="reqAmountLoan(6)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 5) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">$15,000 - $20,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="$15,000 - $20,000" name="req_amt" onclick="reqAmountLoan(5)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 4) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">$20,000 - $30,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="$20,000 - $30,000" name="req_amt" onclick="reqAmountLoan(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 3) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$30,000 - $40,000 </div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="$30,000 - $40,000" name="req_amt" onclick="reqAmountLoan(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 2) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$40,000 - $50,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="$40,000 - $50,000" name="req_amt" onclick="reqAmountLoan(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 1) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$50,000+</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="$50,000+" name="req_amt" onclick="reqAmountLoan(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <span id="err1" style="color: red"></span>
              </form>
          </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->
