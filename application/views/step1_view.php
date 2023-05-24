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
                    <h1>Buying New Vehicle</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <label class="control-label">Type Of Loan</label>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type']))
                            { if($this->session->userdata['type']== 1)
                                echo 'class="button status"'; else echo 'class="button"';} else  echo 'class="button"';
                                ?>
                            
                            >
                            <div class="label-text">New Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase"  onclick="step2(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 2) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Used Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <!--
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 3) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"'; ?>>
                            <div class="label-text">Refinance</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 4) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Lease Buy Out</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="NewCarPurchase" onclick="step2(4)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->

