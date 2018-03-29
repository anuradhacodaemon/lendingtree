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
                        <label for="usr">Your Current Employer?</label>
                        <input type="text" name="cemployer" placeholder="" class="form-control" id="cemployer" required="">
                                            <span id="err1" style="color: red"></span>

                    </div>
                    <div class="form-group">
                        <label for="usr">Your Job Title?</label>
                        <input type="text" name="job_title" placeholder="" class="form-control" id="job_title" required="">
                                            <span id="err2" style="color: red"></span>

                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">
                    <button class="btn btn-primary" onclick="step6()" > continue   <i class="fa fa-angle-right"></i> </button>
                </div>

            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script> //$('input[name=amount]').val()

                            function step6() {
                                if ($('input[name=cemployer]').val() == '')
                                {

                                    $('#err1').html('Your Current Employe is empty');
                                    $('#cemployer').focus();
                                    return false;
                                } else if ($('input[name=job_title]').val() == '')
                                {
                                
                                    $('#err2').html('Your Job Title is empty');
                                    $('#job_title').focus();
                                     $('#err1').html('');
                                    return false;
                                } else
                                {
                                     $('#err2').html('');
                                    $.ajax({
                                        type: "GET",
                                        url: "<?php echo BASE_URL . 'auto/step6/' ?>" + $('input[name=cemployer]').val() + '/' + $('input[name=job_title]').val(),
                                        success: function (data)
                                        {

                                            $('#container').html(data);
                                        }
                                    });
                                }

                            }
</script>