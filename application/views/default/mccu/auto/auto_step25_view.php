
<?php 

//echo '<pre>';
//print_r($this->session->userdata());

?>
    <div class="clearfix">
      <div class="container" id="container">
        <div class="row">
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <h1>Buying New Vehicle</h1>
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Cosigner Marital Status</label>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status']== 'single') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">Single</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="single"  onclick="step5('single')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status']== 'married') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">Married</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="married" onclick="step5('married')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status']== 'divorced') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Divorced</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="divorced" onclick="step5('divorced')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_marital_status'])) { if($this->session->userdata['cosigner_marital_status']== 'widowed') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Widowed</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="widowed" onclick="step5('widowed')" class="ng-pristine ng-invalid ng-invalid-required"></label>
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
