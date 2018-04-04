<div class="main-section inner_height clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
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
                        <input  type="text" id="email" placeholder="you@example.com" name="email" value="<?php if (isset($this->session->userdata['userdata']['email'])) echo $this->session->userdata['userdata']['email'] ?>" class="form-control"  >
                    </div>
                    <label class="control-label">We take your privacy seriouly</label>
                    <span id="err1" style="color: red"></span>

                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="password" name="password" placeholder="Create Password" value="<?php if (isset($this->session->userdata['userdata']['password'])) echo $this->session->userdata['userdata']['password'] ?>" class="form-control" id="password" >
                    </div>
                    <label class="control-label">Plesae enter atleast 6 character</label>
                    <span id="err2" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <p class="subtext">
                            Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="step8($('#email').val(), $('#password').val())">Create Log in<span class="continueIcon sprites"></span></button>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--

<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label"></label>
                     <div class="form-group">
                            <label for="usr">Your Pre-tax yearly income?</label>
                            <input type="text" name="pre_tax_income" value="<?php if (isset($this->session->userdata['userdata']['pre_tax_income'])) echo $this->session->userdata['userdata']['pre_tax_income'] ?>" placeholder="" class="form-control" id="pre_tax_income" required="">
                                                                    <span id="err1" style="color: red"></span>

                        </div>
                         <div class="form-group">
                            <label for="usr">Any other yearly income?</label>
                            <input type="text" name="other_income"  value="<?php if (isset($this->session->userdata['userdata']['other_income'])) echo $this->session->userdata['userdata']['other_income'] ?>" placeholder="" class="form-control" id="other_income" required="">
                                                                    <span id="err2" style="color: red"></span>

                         </div>
                                         
                                    <button class="btn btn-primary" onclick="back()" > <i class="fa fa-angle-left"></i> Back    </button>

                    <button class="btn btn-primary" onclick="step7($('#pre_tax_income').val(),$('#other_income').val())" > continue   <i class="fa fa-angle-right"></i> </button>

       
    
                </div>
            </div>
        </div>
    </div>
</div>
-->

<script> //$('input[name=amount]').val()

    function back() {

        $.ajax({
            type: "GET",
            url: "<?php echo BASE_URL . 'auto/step7' ?>",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });

    }

    function step8(email, password) {
  
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if ($('input[name=email]').val() == '')
        {

            $('#err1').html('Your email is empty');
            $('#email').focus();
            return false;
        } 
        else if (!regex.test($('input[name=email]').val()))
        {
            $('#err1').html('Your email is not valid');
            $('#email').focus();
            return false;
        } 
        
        else if ($('input[name=password]').val() == '')
        {

            $('#err2').html('Your password is empty');
            $('#password').focus();
            $('#err1').html('');
            return false;
        } 
         else if ($('input[name=password]').val().length <= 5)
        {

            $('#err2').html('Your password is less than 6 character');
            $('#password').focus();
            $('#err1').html('');
            return false;
        }
        
        else
        {
            $('#err2').html('');
            
            $.ajax({
                type: "GET",
                url: "<?php echo BASE_URL . 'auto/step9/' ?>" + email + '/' + password,
                success: function (data)
                {

                    $('#container').html(data).effect("slide", {distance: 5});
                }
            });
            

        }

    }
    
      $(document).ready(function() {
            <?php
            if (!empty($this->session->flashdata('item'))) {
                ?>
                window.setTimeout(function(){
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
                });
                }, 4000);
                $(".forgot_section").hide();
            <?php } ?>
            });
</script>
