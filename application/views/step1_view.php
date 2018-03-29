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

                    <button class="btn btn-primary" onclick="step2(1)">New Car Purchase   <i class="fa fa-angle-right"></i> </button>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">
                    <button class="btn btn-primary" onclick="step2(2)">Used Car Purchase   <i class="fa fa-angle-right"></i> </button>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">
                    <button class="btn btn-primary" onclick="step2(3)">Refinance   <i class="fa fa-angle-right"></i> </button>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">
                    <button class="btn btn-primary" onclick="step2(4)">Lease Buy out   <i class="fa fa-angle-right"></i> </button>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script>

                        function step2(id) {
                            var url="<?php echo BASE_URL . 'auto/step2/' ?>"+id;
                        
                            $.ajax({
                                type: "GET",
                                url: url,
                                success: function (data)
                                {
                                    
                                    $('#container').html(data);
                                    //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
                                }
                            });

                        }
</script>