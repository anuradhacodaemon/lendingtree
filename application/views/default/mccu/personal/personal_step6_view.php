
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
                          echo 'Buying Refinance For Vehicle';
                        }
                        elseif($this->session->userdata['type']== 5)
                        {
                          echo 'Personal Loan Application';
                        }
                        elseif($this->session->userdata['type']== 6)
                        {
                          echo 'Recreational Vehical Loan';
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
              <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Your Primary Residence</label>
              <form id="home_id" method="POST">
              <input type="hidden" name="auto_step" value="6" id="auto_step" >
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['buying_own_rent'])) { if($this->session->userdata['buying_own_rent']== 'Buying') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">Buying</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Buying" name="home_status"  onclick="getHomeRadioBtn(6, 'Buying')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['buying_own_rent'])) { if($this->session->userdata['buying_own_rent']== 'Own') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">Own</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Own" name="home_status" onclick="getHomeRadioBtn(6, 'Own')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['buying_own_rent'])) { if($this->session->userdata['buying_own_rent']== 'Rent') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Rent</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Rent" name="home_status" onclick="getHomeRadioBtn(6, 'Rent')" class="ng-pristine ng-invalid ng-invalid-required"></label>
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
