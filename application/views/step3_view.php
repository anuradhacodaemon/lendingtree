<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Loan Amount?</label>

                    <div class="col-xs-12 col-sm-12 ">
                        <label class="button">
                            <input type="text" name="amount" placeholder="$0" class="form-control" id="amount" required="">
                            <span id="err" style="color: red"></span>

                    </div>
                            <button class="btn btn-primary" onclick="step4()" > continue   <i class="fa fa-angle-right"></i> </button>


                </div>
            </div>
        </div>
    </div>
</div>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
-->
<script> //$('input[name=amount]').val()

                                                function step4() {
                                                    var RE = /^\d*\.?\d*$/;
                                                    if ($('input[name=amount]').val() == '')
                                                    {

                                                        $('#err').html('Amount is empty');
                                                        $('#amount').focus();
                                                        return false;
                                                    } else if (!RE.test($("#amount").val()))
                                                    {

                                                        $('#err').html('Amount should be number');
                                                        $('#amount').val('');
                                                        $('#amount').focus();
                                                        return false;
                                                    } else
                                                    {
                                                        $.ajax({
                                                            type: "GET",
                                                            url: "<?php echo BASE_URL . 'auto/step4/' ?>" + $('input[name=amount]').val(),
                                                            success: function (data)
                                                            {

                                                                $('#container').html(data).effect("slide", 'slow');;
                                                            }
                                                        });
                                                    }

                                                }
</script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>

<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">

<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">

<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet"><script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">
