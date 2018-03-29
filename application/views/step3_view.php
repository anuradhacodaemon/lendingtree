<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>learning tree</title>
        <!-- Bootstrap -->
        <link href="<?php echo BASE_URL; ?>public/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="<?php echo BASE_URL; ?>public/css/font.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom CSS -->

    </head>
    <body>
        <div class="container" id="container">

            <div class="btn-toolbar text-center well">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">

                    <div class="form-group">
                        <label for="usr">Loan Amount?</label>
                        <input type="text" name="amount" placeholder="$0" class="form-control" id="amount" required="">
                        <span id="err" style="color: red"></span>

                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">
                    <button class="btn btn-primary" onclick="step4()" > continue   <i class="fa fa-angle-right"></i> </button>
                </div>

            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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

                                            $('#container').html(data);
                                        }
                                    });
                                }

                            }
</script>