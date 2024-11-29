<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                           
                    <!-- <label class="control-label"> Great!Your rates are ready to view.<br>
                        Let's create a login to view your rates.</label> -->
                        <label class="control-label"> Contact Information</label>
                    <div class="col-xs-12 col-sm-12 margbot_40">
                        <input  type="text" id="email" placeholder="you@example.com" name="email" value="<?php if (isset($this->session->userdata['email'])) echo $this->session->userdata['email'] ?>" class="form-control"  >
                        <span id="err1" style="color: red"></span>
                    </div>
                     
                    <!-- <label class="control-label">We take your privacy seriously. </label> -->
                   

                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="phone" placeholder="Phone" value="<?php if (isset($this->session->userdata['phone'])) echo $this->session->userdata['phone'] ?>" class="form-control" id="phone" maxlength="10">
                        <span id="err2" style="color: red"></span>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 margbot_10">
                      <!--  <p class="subtext">
                            Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                        </p> -->
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <!-- <button type="button" class="button" onclick="step8()">Submit<span class="continueIcon sprites"></span></button> -->
                        <button type="button" class="button" onclick="step9()">Continue<span class="continueIcon sprites"></span></button>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script> //$('input[name=amount]').val()
 $(document).ready(function () {
<?php
if (!empty($this->session->flashdata('item'))) {
    ?>
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 4000);
            $(".forgot_section").hide();
<?php } ?>
    });
</script>
