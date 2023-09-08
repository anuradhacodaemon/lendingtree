
<?php 

//echo '<pre>';
//print_r($this->session->userdata());

?>
    <div class="clearfix">
      <div class="container" id="container">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="form-main clearfix">
              <h1>Buying New Vehicle</h1>
              <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Requested Amount</label>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 7) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">$5,000 - $10,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase"  onclick="step3(7)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 6) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$10,000 - $15,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(6)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 5) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">$15,000 - $20,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(5)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 4) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">$20,000 - $30,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 3) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$30,000 - $40,000 </div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 2) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$40,000 - $50,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['requested_amount'])) { if($this->session->userdata['requested_amount']== 1) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$50,000+</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
          <!--    
<div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
           
          -->
          </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->
