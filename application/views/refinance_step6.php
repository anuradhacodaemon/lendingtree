<div class="clearfix">
    <div class="container" id="containerrefinance">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="logo">
                    <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>public/html/img/logo.png" alt="Logo" title="Coastal Community community federal credit union" class="img-responsive"/></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Refinance Your Vehicle</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
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
                           
                    <label class="control-label"> Great!Your rates are ready to view.<br>
                        Let's create a login to view your rates.</label>
                    <div class="col-xs-12 col-sm-12 margbot_40">
                        <input  type="text" id="email" placeholder="you@example.com" name="email" value="<?php if (isset($this->session->userdata['email'])) echo $this->session->userdata['email'] ?>" class="form-control"  >
                        <span id="err1" style="color: red"></span>
                    </div>
                     
                    <label class="control-label">We take your privacy seriously. </label>
                   

                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="phone" placeholder="Phone" value="<?php if (isset($this->session->userdata['phone'])) echo $this->session->userdata['phone'] ?>" class="form-control" id="phone" maxlength="10">
                        <span id="err2" style="color: red"></span>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <p class="subtext">
                            Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="refinancestep7()">Submit<span class="continueIcon sprites"></span></button>
                        

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
