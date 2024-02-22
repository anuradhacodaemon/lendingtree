<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Buying New Vehicle</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                     
                                <?php
                                if ($this->session->flashdata('item')) {
                                    $message = $this->session->flashdata('item');
                                    ?><div class="alert">
                                    <div id="show"><?php echo $message['message'];
                                    ?></div> </div>
                                    <?php
                                }
                                ?>
                           
                   <label class="control-label">I represent that everything I have stated in this application is correct and complete to the best of my knowledge. you are authorized to check my (our) credit history, and to answer questions about your credit history with me. (us).</label>
                    <div class="row">
                        <form id="user_consnt" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="17" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="check">
                                <div class="col-xs-12 col-sm-2 margbot_10">
                                    <input type="checkbox" name="i_represent_stated" value="consent"
                                    <?php if(isset($this->session->userdata['i_represent_stated'])) { if($this->session->userdata['i_represent_stated']== 'Y') echo 'checked="checked"'; else echo '';}  ?>
                                    class="form-control width_100 button" id="i_represent_stated" required>
                                    <span id="err1" style="color: red"></span>
                                </div>
                                <div class="col-xs-12 col-sm-8 margbot_10">
                                    <input type="text" name="date_of_application" readonly="readonly" value="<?php echo date('d-m-Y') ?>" class="form-control width_100" id="date_of_application" >
                                    <span id="err2" style="color: red"></span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                            <p class="subtext" style="margin-left:35px;">
                                It is a felony crime to lie on an application for credit.
                            </p>
                            </div>
                                <div class="check">
                                <div class="col-xs-12 col-sm-2 margbot_10">
                                    <input type="checkbox" checked name="loan_insurance" value="loan_insurance" id="insurance"
                                    <?php if(isset($this->session->userdata['loan_insurance'])) { if($this->session->userdata['loan_insurance']== 'Y') echo 'checked="checked"'; else echo '';}  ?>
                                    class="form-control width_50 button" id="loan_insurance" required>
                                    <span id="err1" style="color: red"></span>
                                </div>
                                <div class="col-xs-12 col-sm-8 margbot_10">
                                <a href="javascript:void(0)" style="float:left;" class="insurance-sec">Opt In for Life Plus Protection</a>
                                </div>
                            </div>
                             <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <button type="button" class="button" onclick="step10()">Continue<span class="continueIcon sprites"></span></button>
                            </div>   
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

    function insurance_vsc()
{  
   // $("#disclosureModal").modal('show'); // Open the modal
   swal("Life Plus Protection helps protect the credit union and your family in the unforeseen event were you to suddenly pass away while still paying off this loan.\n \n In this scenario, your family would inherit a clean title to your vehicle without having to pay off your outstanding debt.");
// Confirmation
// Swal.fire({
//   html: '<span class="swal-title">Life Plus Protection helps protect the credit union and your family in the unforeseen event were you to suddenly pass away while still paying off this loan<hr class="swal-hr--custom-color">In this scenario, your family would inherit a clean title to your vehicle without having to pay off your outstanding debt',
// })

}

    $(".insurance-sec").click(function(){
        insurance_vsc();
  });
</script>
<style>
 .insurance-sec {
    font-size: 20px;
  }
  #insurance {
  width: 30px;
  height: 30px;
}
.swal-title {
  font-size: 16px;
}
.swal2-popup {
      width: 50%;
 }
.swal-hr--custom-color {
  border-top: 1px solid #8a1b1e;
}
.swal2-styled.swal2-confirm {
    font-size: 16px;
}
.swal-text {
  font-weight: bold;
}

@media (max-width: 767px){
    .subtext{
        margin-left:0 !important;
    }
    .insurance-sec{
        float:none !important;
    }
}
</style>