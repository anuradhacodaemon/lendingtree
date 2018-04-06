
       
    <div class="clearfix">
      <div class="" id="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <h1></h1>
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Requested Amount</label>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 7) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">$5,000-$10,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase"  onclick="step3(7)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 6) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$10,000-$15,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(6)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 5) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">,$15,000-$20,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(5)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 4) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">$20,000-$30,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 3) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$30,000- $40,000 </div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 2) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">$40,000 - $50,000</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="NewCarPurchase" onclick="step3(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
               <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['userdata']['years_emt'])) { if($this->session->userdata['userdata']['years_emt']== 1) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
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
