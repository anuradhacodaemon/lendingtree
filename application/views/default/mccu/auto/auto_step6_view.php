
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
              <label class="control-label">Own Or Rent</label>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['buying_own_rent'])) { if($this->session->userdata['buying_own_rent']== 7) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">Buying</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Buying"  onclick="step5('Buying')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['buying_own_rent'])) { if($this->session->userdata['buying_own_rent']== 6) echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">Own</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Own" onclick="step5('Own')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['buying_own_rent'])) { if($this->session->userdata['buying_own_rent']== 5) echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Rent</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Rent" onclick="step5('Rent')" class="ng-pristine ng-invalid ng-invalid-required"></label>
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
