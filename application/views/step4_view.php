<div class="clearfix">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Gross [Pre-Tax] Monthly Income?</label>
                    <div class="col-xs-12 col-sm-12 margbot_40">
                        <input  type="text" id="pre_tax_income" name="pre_tax_income" value="<?php if (isset($this->session->userdata['userdata']['pre_tax_income'])) echo '$'.number_format($this->session->userdata['userdata']['pre_tax_income']) ?>" class="form-control"  >
                       <input  type="hidden" id="pre_tax_income1" name="pre_tax_income1"  class="form-control"  >
                       <input  type="hidden" id="err2" name="err2" value="0"  class="form-control"  >

                    
                    </div>
                    <span id="err1" style="color: red"></span>
                    
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <p class="subtext">
                            Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="step5()">Continue<span class="continueIcon sprites"></span></button>
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

$("#pre_tax_income").on('keyup', function(e){
    
     
if (e.keyCode < 48 || e.keyCode > 57) {
     $('#pre_tax_income').html('');
      $('#err1').html('Your Pre-tax yearly income should be number');
        $('#pre_tax_income').focus();
    }
    else
    {
       var n = parseInt($(this).val().replace(/\D/g,''),10);
    $(this).val('$'+n.toLocaleString()); 
    $('#err1').html('');
       $('#err2').val(1);
    }
   
  });
$("#pre_tax_income").keyup(function(){
    var val = $("#pre_tax_income").val().replace(/\D/g, '');
        $("#pre_tax_income1").val(val);
    });
});
</script>