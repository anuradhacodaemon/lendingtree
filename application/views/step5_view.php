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
  <label for="usr">When you are born?</label>
                        <div class="form-group" >
                           <select id="selectMonth" name="month" style="width:auto;display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1; $i <= 12; $i++){ ?>
                            <option class=""><?php echo $i ?></option>
                           <?php } ?>
                        </select>

                        <select id="selectDate" name="day" style="width:auto; display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1; $i <= 31; $i++){ ?>
                            <option class=""><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                       
                        <select id="selectYear" name="year" style="width:auto; display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1900; $i <= 2015; $i++){ ?>
                            <option class=""><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                    </div>                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin: 2px 0;">
                        <button class="btn btn-primary" onclick="step5($('#selectMonth').val(),$('#selectDate').val(),$('#selectYear').val())" > continue   <i class="fa fa-angle-right"></i> </button>
                    </div>
               
            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script> //$('input[name=amount]').val()

                        function step5(month,day,year) {
                           // alert("<?php echo BASE_URL . 'auto/step6/' ?>" + month+'/'+day+'/'+year);
                            $.ajax({
                                type: "GET",
                                url: "<?php echo BASE_URL . 'auto/step5/' ?>" + month+'/'+day+'/'+year,
                                success: function (data)
                                {
                                    
                                    $('#container').html(data);
                                }
                            });
                            
                        }
</script>