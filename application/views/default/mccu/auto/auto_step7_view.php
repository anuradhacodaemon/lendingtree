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
                    <label class="control-label">Relative's Details</label>
                    <div class="row">
                        <form id="relative" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="7" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relative_firstname" placeholder="Nearest Relative (Not living with you)" value="<?php if (isset($this->session->userdata['nearest_relative'])) echo $this->session->userdata['nearest_relative'] ?>" class="form-control width_100" id="firstname" >
                                <span id="err1" style="color: red"></span>

                            </div>

                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <select class="form-control width_100" style="width:auto;" name="relative_relation">
                                    <option value="">Select Relationship</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Parent') ? 'selected' : '' ?> value="Parent">Parent</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Sibling') ? 'selected' : '' ?> value="Sibling">Sibling</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Child') ? 'selected' : '' ?> value="Child">Child</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Uncle') ? 'selected' : '' ?> value="Uncle">Uncle</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Aunt') ? 'selected' : '' ?> value="Aunt">Aunt</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'GrandParent') ? 'selected' : '' ?> value="GrandParent">GrandParent</option>
                                    <option <?php echo (isset($this->session->userdata['relation_with_relative']) && $this->session->userdata['relation_with_relative'] == 'Cousin') ? 'selected' : '' ?> value="Cousin">Cousin</option>
                                </select> 
                                <span id="err2" style="color: red"></span>

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relative_address" placeholder="Relatives Address" value="<?php if (isset($this->session->userdata['relatives_live_address'])) echo $this->session->userdata['relatives_live_address'] ?>" class="form-control width_100" id="relative_address" >
                                <span id="err3" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="relatives_phone" minlength="10" maxlength="10" placeholder="Relatives Phone" value="<?php if (isset($this->session->userdata['relatives_phone'])) echo $this->session->userdata['relatives_phone'] ?>" class="form-control width_100" id="relatives_phone" >
                                <span id="err4" style="color: red"></span>
                            </div>

                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <input type="submit" value="Continue" class="button" >
                                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                -->

                            </div>   
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

