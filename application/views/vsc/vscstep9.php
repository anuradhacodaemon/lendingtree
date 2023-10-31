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
                           
                   <label class="control-label">I represent that everything i have stated in this application is correct and complete to the best of my knowledge. you are authorized to check my (our) credit history, and to answer questions about your credit history with me. (us).</label>
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
                            <p class="subtext" style="float:left;">
                                It is a felony crime to lie on an application for credit.
                            </p>
                            </div>
                             <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <button type="button" class="button" onclick="vscstep10()">Continue<span class="continueIcon sprites"></span></button>
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
