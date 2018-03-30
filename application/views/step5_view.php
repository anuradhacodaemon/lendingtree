<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Whe You Are Born?</label>
                    <div class="form-group" >
                        <select id="selectMonth" name="month" style="width:auto;display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1; $i <= 12; $i++) { ?>
                                <option class=""><?php echo $i ?></option>
                            <?php } ?>
                        </select>

                        <select id="selectDate" name="day" style="width:auto; display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option class=""><?php echo $i ?></option>
                            <?php } ?>
                        </select>

                        <select id="selectYear" name="year" style="width:auto; display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1900; $i <= 2015; $i++) { ?>
                                <option class=""><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        <button class="btn btn-primary" onclick="step5($('#selectMonth').val(), $('#selectDate').val(), $('#selectYear').val())" > continue   <i class="fa fa-angle-right"></i> </button>

                    </div>    

                </div>
            </div>
        </div>
    </div>
</div>



<script> //$('input[name=amount]').val()

                                                     function step5(month, day, year) {
                                                         // alert("<?php echo BASE_URL . 'auto/step6/' ?>" + month+'/'+day+'/'+year);
                                                         $.ajax({
                                                             type: "GET",
                                                             url: "<?php echo BASE_URL . 'auto/step5/' ?>" + month + '/' + day + '/' + year,
                                                             success: function (data)
                                                             {

                                                                 $('#container').html(data).effect("slide", 'slow');
                                                             }
                                                         });

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
