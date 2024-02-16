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
                    <label class="control-label">Primary Employment Income</label>
                    <div class="row">
                    <form id="co_user_docs" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="25" id="auto_step" >
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-6 margbot_10">
                            <span style = "color:black;"> $ </span>
                                <input type="text" name="cosigner_monthly_income_pre_tax" placeholder="Gross Monthly Earnings" value="<?php if (isset($this->session->userdata['cosigner_monthly_income_pre_tax'])) echo $this->session->userdata['cosigner_monthly_income_pre_tax'] ?>" class="form-control width_100" id="cosigner_monthly_income_pre_tax" >
                                <span id="err1" style="color: red"></span>
                            </div> 
                            <div class="col-xs-12 col-sm-6 margbot_10">
                            <span class="optional-file">Select How Many Dependants You Have?</span>    
                            <select class="form-control" name="co_total_dependent" id="co_total_dependent" style="max-width: 100%;">
                                <option value="">Select Dependents</option>
                                <?php for($i=0;$i<=10;$i++){  ?>
                                    <option value="<?php echo $i; ?>" <?php if (!empty($this->session->userdata['co_total_dependent']) && $this->session->userdata['co_total_dependent'] == $i) { echo "Selected"; }  ?>><?php echo $i; ?></option>
                                <?php } ?>
                            </select> 
                                <span id="err3" style="color: red"></span>
                            </div>  
                            <div class="col-xs-12 col-sm-6 margbot_10"></div>                        
                            <div class="col-xs-12 col-sm-6 margbot_10">
                            <span class="optional-file">Accepting File type [.png, .txt, .pdf] (Optional) </span>     
                                <input type="file" name="cosigner_upload_user_doc" accept=".png, .txt, .pdf"  value="<?php if (isset($this->session->userdata['cosigner_documant'])) echo $this->session->userdata['cosigner_documant'] ?>" class="form-control width_100" id="cosigner_documant" >
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
    $('#cosigner_monthly_income_pre_tax').on('blur', function() {
        $("#err1").html("");
        var value = parseInt($(this).val().replace(/[^0-9.,]/g, ''));
        if (!isNaN(value)) 
        {
            value = value.toLocaleString('en-US', {  minimumFractionDigits: 2,maximumFractionDigits: 2 })
            $(this).val(value);
        }
        else{
                $("#err1").html("Enter Number only");
                return false;
                $(this).focus();
            }
    });
    //

});

</script>
