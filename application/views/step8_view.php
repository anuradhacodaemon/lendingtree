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
                    <label for="usr">Your Name</label>
                    <div class="form-group">

                        <input type="text" name="firstname" placeholder="firstname" class="form-control" id="firstname" required="">
                        <span id="err1" style="color: red"></span>

                        <input type="text" name="lastname" placeholder="lastname" class="form-control" id="lastname" required="">
                        <span id="err2" style="color: red"></span>


                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">
                    <button class="btn btn-primary" onclick="step8($('#firstname').val(), $('#lastname').val())" > continue   <i class="fa fa-angle-right"></i> </button>
                </div>

            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script> //$('input[name=amount]').val()

                            function step8(firstname, lastname) {
                                if ($('input[name=firstname]').val() == '')
                                {

                                    $('#err1').html('firstname is empty');
                                    $('#firstname').focus();
                                    return false;
                                } else if ($('input[name=lastname]').val() == '')
                                {

                                    $('#err2').html('lastname is empty');
                                    $('#lastname').focus();
                                    $('#err1').html('');
                                    return false;
                                } else
                                {
                                    $('#err2').html('');
                                    $.ajax({
                                        type: "GET",
                                        url: "<?php echo BASE_URL . 'auto/step8/' ?>" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val(),
                                        success: function (data)
                                        {

                                            $('#container').html(data);
                                        }
                                    });
                                }

                            }
</script>