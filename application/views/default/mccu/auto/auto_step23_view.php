
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
              <?php  /* if(isset($this->session->userdata['type']))
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
                          echo 'Co-signer Information';
              ?>
              </h1>
              <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Your Primary Residence</label>
              <form id="co_home_id" method="POST">
                <input type="hidden" name="auto_step" value="23" id="auto_step" >
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_own_rent'])) { if($this->session->userdata['cosigner_own_rent']== 'Buying') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">Buying</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Buying" name="co_home_status"  onclick="getHomeRadioBtn(23, 'Buying')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_own_rent'])) { if($this->session->userdata['cosigner_own_rent']== 'Own') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">Own</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Own" name="co_home_status" onclick="getHomeRadioBtn(23, 'Own')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['cosigner_own_rent'])) { if($this->session->userdata['cosigner_own_rent']== 'Rent') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button'; ?>>
                    <div class="label-text">Rent</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="Rent" name="co_home_status" onclick="getHomeRadioBtn(23, 'Rent')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              </
          </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->
