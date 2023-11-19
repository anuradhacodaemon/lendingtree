<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">How Much Pay a Month</label>
                    <div class="col-xs-12 col-sm-12 margbot_40">
                        <input  type="text" id="pay_month" name="pay_month" value="<?php if (!empty($this->session->userdata['pay_month'])) { echo '$'.number_format($this->session->userdata['pay_month'],2); } ?>" class="form-control"  >
                       <input  type="hidden" id="pay_month1" name="pay_month1"  class="form-control" value="<?php if (!empty($this->session->userdata['pay_month'])) echo $this->session->userdata['pay_month'] ?>"  >
                       <input  type="hidden" id="err2" name="err2" value="0"  class="form-control"  >
                        <span id="err1" style="color: red"></span>
                    </div>

                    <label class="control-label">Your Home Residence?</label>
                    <div class="col-xs-12 col-sm-12 margbot_40">
                        <select class="form-control width_100" name="home_status" id="home_status">
                            <option value="">Select Residence</option>
                            <option <?php echo (isset($this->session->userdata['home_status']) && $this->session->userdata['home_status'] == 'Buying') ? 'selected' : '' ?> value="Buying">Buying</option>
                            <option <?php echo (isset($this->session->userdata['home_status']) && $this->session->userdata['home_status'] == 'Own') ? 'selected' : '' ?> value="Own">Own</option>
                            <option <?php echo (isset($this->session->userdata['home_status']) && $this->session->userdata['home_status'] == 'Rent') ? 'selected' : '' ?> value="Rent">Rent</option>
                        </select> 
                        <span id="err3" style="color: red"></span>
                    </div>
                    
                    
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <p class="subtext">
                            Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                        </p>
                        </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="personal_step6()">Continue<span class="continueIcon sprites"></span></button>
                                            <!--     <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                        -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {

$("#pay_month").on('keyup', function(e){
    
     
if (e.keyCode < 48 || e.keyCode > 57) {
     $('#pay_month').html('');
      $('#err1').html('Your Monthly Pay should be number');
        $('#pay_month').focus();
    }
    else
    {
       var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val('$'+n.toLocaleString()); 
    $('#err1').html('');
       $('#err2').val(1);
    }
   
  });
$("#pay_month").keyup(function(){
    var val = $("#pay_month").val().replace(/\D/g, '');
        $("#pay_month1").val(val);
    });
});
</script>