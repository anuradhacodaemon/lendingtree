<!-- Banner starts here -->

<?php 

//echo '<pre>';
//print_r($this->session);

?>
<div class="clearfix" id="container1">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Was the vehicle purchased from a dealership or individual in the last 30 days?</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label"></label>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['is_purchased']))
                            { if($this->session->userdata['is_purchased']== 1)
                                echo 'class="button status"'; else echo 'class="button"';} else  echo 'class="button"';
                                ?>
                            
                            >
                            <div class="label-text">Yes</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="Yes"  onclick="vscstep7(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['is_purchased'])) { if($this->session->userdata['is_purchased']== 2) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">No</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="Yes" onclick="vscstep7(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->

