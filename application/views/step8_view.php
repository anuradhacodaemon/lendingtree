<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div> 
                    <label class="control-label">If you are laid off and lose this income source, would you like to have your loan payments waived?</label>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['laid_off_for_payment_waived']))
                            { if($this->session->userdata['laid_off_for_payment_waived']== 'Y')
                                echo 'class="button status"'; else echo 'class="button"';} else  echo 'class="button"';
                                ?>
                            
                            >
                            <div class="label-text">YES</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="Y"  onclick="step9('Y')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <label <?php if(isset($this->session->userdata['laid_off_for_payment_waived'])) { if($this->session->userdata['laid_off_for_payment_waived']== 'N') echo 'class="button status"'; else echo 'class=button';} else  echo 'class="button"';?>>
                            <div class="label-text">NO</div>
                            <span class="continueIcon sprites"></span>
                            <input type="radio" value="N" onclick="step9('N')" class="ng-pristine ng-invalid ng-invalid-required"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
