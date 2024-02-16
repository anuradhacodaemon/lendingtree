<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php  /*  if(isset($this->session->userdata['type']))
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
                          */
                          echo 'Auto Loan Application';
              ?>
              </h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Other Income</label>
                    <div class="row">
                    <form id="second_income" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="10.1" id="auto_step" >
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="second_income_source" placeholder="List Income Source" value="<?php if (isset($this->session->userdata['if_source_income_yes_what_isit'])) echo $this->session->userdata['if_source_income_yes_what_isit'] ?>" class="form-control width_100" id="second_income_source" >
                                <span id="err1" style="color: red"></span>
                            </div>                           
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <input type="text" name="second_monthly_income" placeholder="Monthly Income Amount" value="<?php if (isset($this->session->userdata['if_source_income_yes_monthly_income'])) echo $this->session->userdata['if_source_income_yes_monthly_income'] ?>" class="form-control width_100" id="second_monthly_income" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <div class="clearfix"></div>
                           
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <input type="submit" value="Continue" class="button" >
                            </div>   
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script> //$('input[name=amount]').val()

$(document).ready(function() {
    $('#second_monthly_income').on('blur', function() {
        $("#err2").html("");
        var value = parseInt($(this).val().replace(/[^0-9.,]/g, ''));
        if (!isNaN(value)) 
        {
            value = value.toLocaleString('en-US', {  minimumFractionDigits: 2,maximumFractionDigits: 2 })
            $(this).val(value);
        }
        else{
                $("#err2").html("Enter Number only");
                return false;
                $(this).focus();
            }
    });
    //

});

</script>
