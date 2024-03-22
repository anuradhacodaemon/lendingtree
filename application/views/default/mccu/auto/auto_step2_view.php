
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
              <?php /*  if(isset($this->session->userdata['type']))
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
                          }  */

                          echo 'Auto Loan Application';
              ?>
              </h1>
              <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Requested Amount</label>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <form id="req_amount" method="post" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="2" id="auto_step" >
                          <div class="col-xs-12 col-sm-12 margtop_10">
                              <input type="text" name="p_req_amt" placeholder="Enter Requested Amount" value="<?php if (isset($this->session->userdata['requested_amount'])) echo $this->session->userdata['requested_amount'] ?>" class="form-control" id="req_amt" >
                              <span id="err1" style="color: red"></span>
                          </div>
                          <div class="col-xs-12 col-sm-12 radio margtop_30">
                              <input type="submit" value="Continue" class="button" id="amt_button">       
                          </div>   
                      </form> 
                    </div>
                </div>
          </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->
    <script> //$('input[name=amount]').val()

    $(document).ready(function() {
        $('#req_amt').on('blur', function() {
            $("#err1").html("");
            var cleanedValue = $(this).val().replace(/,/g, '');
            var value = parseFloat(cleanedValue);
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

        $('#amt_button').click(function() {
        var value1 = $('#req_amt').val();
            if (value1==0.00||value1==0) 
            {

              $("#err1").html("Amount must be greater than zero");
                    return false;
                    $(this).focus();
            } 
       });

    });
    
</script>
