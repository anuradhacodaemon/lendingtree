<div class="clearfix">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Name</label>

                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="firstname" placeholder="Firstname" value="<?php if (isset($this->session->userdata['userdata']['firstname'])) echo $this->session->userdata['userdata']['firstname'] ?>" class="form-control" id="firstname" >
                    </div>
                    <span id="err1" style="color: red"></span>

                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="lastname" placeholder="Lastname" value="<?php if (isset($this->session->userdata['userdata']['lastname'])) echo $this->session->userdata['userdata']['lastname'] ?>" class="form-control" id="lastname" >
                    </div>
                    <span id="err2" style="color: red"></span>

                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="address" placeholder="Address" value="<?php if (isset($this->session->userdata['userdata']['address'])) echo $this->session->userdata['userdata']['address'] ?>" class="form-control" id="address" >
                    </div>
                    <span id="err3" style="color: red"></span>

                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <select class="form-control" style="width:auto;" name="state" id="state" onchange="get_city($(this).val())">
                            <option value=""></option>
                            <?php
                            foreach ($state as $k => $v) {
                                ?> 

                                <option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option> 
                            <?php } ?>
                        </select> 

                    </div>
                    <span id="err4" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <select class="form-control" name="city" id="city" style="width:auto;">
                            <option value="">City</option> 
                            <?php
                            foreach ($city as $k => $v) {
                                ?> 

                                <option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option> 
                            <?php } ?>
                        </select>               </div>
                    <span id="err5" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="zip" placeholder="Zip" value="<?php if (isset($this->session->userdata['userdata']['zip'])) echo $this->session->userdata['userdata']['zip'] ?>" class="form-control" id="zip" >
                    </div>
                    <span id="err6" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="ssn" placeholder="SSN" value="<?php if (isset($this->session->userdata['userdata']['ssn'])) echo $this->session->userdata['userdata']['ssn'] ?>" class="form-control" id="ssn" >
                    </div>
                    <span id="err7" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12 margbot_10">

                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="step6()">Continue<span class="continueIcon sprites"></span></button>
                                      <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                        -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

