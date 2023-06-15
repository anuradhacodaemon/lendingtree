
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
              <label class="control-label">Requested Amount</label>
              <div class="row">
                <form id="r_req_amount" method="POST" onsubmit="return getFormId(this)">
                <input type="hidden" name="auto_step" value="2" id="auto_step">
              
                <div class="col-xs-12 col-sm-6 margbot_10">
                    <input type="text" name="r_req_amt" placeholder="Enter Requested Amount" value="<?php if (isset($this->session->userdata['requested_amount'])) echo $this->session->userdata['requested_amount'] ?>" class="form-control width_100" id="r_req_amt">
                    <span id="err1" style="color: red"></span>
                </div>
                    
                <div class="col-xs-12 col-sm-12 radio margtop_30">
                    <input type="submit" value="Continue" class="button" >
                                            
                </div>
                </form>
              </div>
              </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->
