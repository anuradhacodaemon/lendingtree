
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
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Marital Status</label>
              <form id="p_details1q" method="post">
              <input type="hidden" name="auto_step" value="4" id="auto_step" >
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['marital_status'])) { if($this->session->userdata['marital_status']== 'single') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">Single</div>  
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="single" name="marital_status" onclick="getMaritalRadioBtn(4, 'single')" class="ng-pristine ng-invalid ng-invalid-required" id="marital_status"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['marital_status'])) { if($this->session->userdata['marital_status']== 'married') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">Married</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="married" name="marital_status" onclick="getMaritalRadioBtn(4, 'married')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['marital_status'])) { if($this->session->userdata['marital_status']== 'divorced') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Divorced</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="divorced" name="marital_status" onclick="getMaritalRadioBtn(4, 'divorced')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['marital_status'])) { if($this->session->userdata['marital_status']== 'widowed') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Widowed</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="widowed" name="marital_status" onclick="getMaritalRadioBtn(4, 'widowed')" class="ng-pristine ng-invalid ng-invalid-required"></label>
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

