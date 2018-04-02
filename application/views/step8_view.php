<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Name</label>
                    <div class="form-group">

                        <input type="text" name="firstname" placeholder="firstname" class="form-control" id="firstname" required="" value="<?php if(isset($this->session->userdata['userdata']['firstname'])) echo $this->session->userdata['userdata']['firstname']?>">
                        <span id="err1" style="color: red"></span>
                        </div>
<div class="form-group">
                        <input type="text" name="lastname" placeholder="lastname" class="form-control" id="lastname" value="<?php if(isset($this->session->userdata['userdata']['lastname'])) echo $this->session->userdata['userdata']['lastname']?>" required="">
                        <span id="err2" style="color: red"></span>


                    </div>
                    
                                                        <button class="btn btn-primary" onclick="back()" > <i class="fa fa-angle-left"></i> Back    </button>

                                            <button class="btn btn-primary" onclick="step8($('#firstname').val(), $('#lastname').val())" > continue   <i class="fa fa-angle-right"></i> </button>


                </div>
            </div>
        </div>
    </div>
</div>


<script> //$('input[name=amount]').val()
    
     function back() {

                            $.ajax({
                                type: "GET",
                                url: "<?php echo BASE_URL . 'auto/step6' ?>",
                                success: function (data)
                                {
                                    
                                    $('#container').html(data).effect("slide", 'slow');
                                    //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
                                }
                            });

                        }

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

                                        $('#container').html(data).effect("slide", 'slow');
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
