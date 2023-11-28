
<?php 

//echo '<pre>';
//print_r($this->session->userdata());

?>
    <div class="clearfix">
      <div class="container" id="container">
        <div class="row">
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
            <h1>Recreational Loan</h1>
              <div class="clearfix"></div>
              <label class="control-label">Do You Have any Outstanding Judgments Against You?</label>
              <form id="outstanding_judgment_form" method="POST">
              <input type="hidden" name="auto_step" value="12" id="auto_step" >
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['outstanding_judgment_value'])) { if($this->session->userdata['outstanding_judgment_value']== 'Y') echo 'class="button status"'; else echo 'class=button';} else echo 'class=button';?>>
                    <div class="label-text">YES</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="yes" name="outstanding_judgment_value"  onclick="getoutstanding_judgmentRadioBtn('yes')" class="ng-pristine ng-invalid ng-invalid-required" id ="button-selected"></label>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                  <label <?php if(isset($this->session->userdata['outstanding_judgment_value'])) { if($this->session->userdata['outstanding_judgment_value']== 'N') echo 'class="button status"'; else echo 'class=button';}else echo 'class=button'; ?>>
                    <div class="label-text">NO</div>
                    <span class="continueIcon sprites"></span>
                  <input type="radio" value="no" name="outstanding_judgment_value" onclick="getoutstanding_judgmentRadioBtn('no')" class="ng-pristine ng-invalid ng-invalid-required"></label>
              </div>
              <span id="err1" style="color: red"></span>
              </form>
              
              
          <!--    
<div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
           
          -->
          </div>
          </div>
        </div>
      </div>
        
    </div>
    <!-- Banner ends here -->
