<div class="clearfix">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Pre-tax yearly income?</label>
                    <div class="col-xs-12 col-sm-12 margbot_40">
                        <input  type="text" id="pre_tax_income" name="pre_tax_income" value="<?php if (isset($this->session->userdata['userdata']['pre_tax_income'])) echo $this->session->userdata['userdata']['pre_tax_income'] ?>" class="form-control"  maxlength="8">
                    </div>
                    <span id="err1" style="color: red"></span>
                    <label class="control-label">Any other yearly income?</label>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" name="other_income" placeholder="" value="<?php if (isset($this->session->userdata['userdata']['other_income'])) echo $this->session->userdata['userdata']['other_income'] ?>" class="form-control" id="other_income" maxlength="8">
                    </div>
                    <span id="err2" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <p class="subtext">
                            Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="step7($('#pre_tax_income').val(), $('#other_income').val())">Continue<span class="continueIcon sprites"></span></button>
                                            <!--     <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                        -->

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
            url: "<?php echo BASE_URL . 'auto/step5' ?>",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });

    }

    function step7(pre_tax_income, other_income) {
        var RE = /^\d*\.?\d*$/;
        if ($('input[name=pre_tax_income]').val() == '')
        {

            $('#err1').html('Your Pre-tax yearly income is empty');
            $('#pre_tax_income').focus();
            return false;
        } else if (!RE.test($("#pre_tax_income").val()))
        {

            $('#err1').html('Your Pre-tax yearly income should be number');
            $('#pre_tax_income').focus();
            return false;
        } else if ($('input[name=other_income]').val() == '')
        {

            $('#err2').html('Any other yearly income is empty');
            $('#other_income').focus();
            $('#err1').html('');
            return false;
        } else if (!RE.test($("#other_income").val()))
        {

            $('#err2').html('Any other yearly income should be number');
            $('#other_income').focus();
            $('#err1').html('');
            return false;
        } else
        {
            $('#err2').html('');
            $.ajax({
                type: "GET",
                url: "<?php echo BASE_URL . 'auto/step7/' ?>" + pre_tax_income + '/' + other_income,
                success: function (data)
                {

                    $('#container').html(data).effect("slide", {distance: 5});
                }
            });

        }

    }
</script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">

