<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
                <?php  if(isset($this->session->userdata['type']))
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
                          echo 'Personal Loan';
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
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Vehicle Details</label>
                    <div class="row">
                        <form id="vehicle_details" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="44.1" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-4 margbot_10">
                                <input type="text" name="year" placeholder="Year" value="<?php if (isset($this->session->userdata['vehicle_year'])) echo $this->session->userdata['vehicle_year'] ?>" class="form-control width_100" id="vehicle_year" >
                                <span id="err1" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-4 margbot_10">
                                <input type="text" name="make" placeholder="Enter Make/Brand" value="<?php if (isset($this->session->userdata['vehicle_make_brand'])) echo $this->session->userdata['vehicle_make_brand'] ?>" class="form-control width_100" id="vehicle_make_brand" >
                                <span id="err2" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-4 margbot_10">
                                <input type="text" name="model" placeholder="Enter Model" value="<?php if (isset($this->session->userdata['vehicle_model'])) echo $this->session->userdata['vehicle_model'] ?>" class="form-control width_100" id="vehicle_model" >
                                <span id="err3" style="color: red"></span>
                            </div>
                            
                            <div class="clearfix"></div>

                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <input type="submit" value="Continue" class="button">
                                            
                            </div>   
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->
