<!-- Banner starts here -->



<?php 

//echo '<pre>';
//print_r($this->session);

?>
<div class="clearfix" id="container1">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Loan Protection</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">If you die or become critically ill during your loan, would you like the credit union to cancel the remaining balance of the loan?</label>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['die_or_ill_cancel_the_loan']))
                            { if($this->session->userdata['die_or_ill_cancel_the_loan']== 'Y')
                                echo 'class="button status"'; else echo 'class="button"';} else  echo 'class="button"';
                                ?>
                            
                            >
                            <div class="label-text">YES</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="Y"  onclick="personal_step11('Y')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['die_or_ill_cancel_the_loan'])) { if($this->session->userdata['die_or_ill_cancel_the_loan']== 'N') echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">NO</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="N" onclick="personal_step11('N')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->

<script> //$('input[name=amount]').val()
 $(document).ready(function () {
<?php
if (!empty($this->session->flashdata('item'))) {
    ?>
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 4000);
            $(".forgot_section").hide();
<?php } ?>
    });
</script>