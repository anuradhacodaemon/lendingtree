<!-- Banner starts here -->

<?php 

//echo '<pre>';
//print_r($this->session);

?>
<div class="main-section inner_height" id="container1">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Auto Loan Application</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Type Of Loan</label>
                    <form id="typ_loan" method="post">
                    <input type="hidden" name="auto_step" value="1" id="auto_step" >
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type']))
                            { if($this->session->userdata['type']== 1)
                                echo 'class="button status"'; else echo 'class="button"';} else  echo 'class="button"';
                                ?>
                            >
                            <div class="label-text">New Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="1" name="type_loan"  onclick="TypeOfLoan(1)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 2) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">Used Car Purchase</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="2" name="type_loan" onclick="TypeOfLoan(2)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['type'])) { if($this->session->userdata['type']== 3) echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"'; ?>>
                            <div class="label-text">Refinance</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="3" name="type_loan" onclick="TypeOfLoan(3)" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->

