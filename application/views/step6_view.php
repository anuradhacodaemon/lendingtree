
  <div class="main-section inner_height clearfix">
      <div class="container" id="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <!-- <h1>Compare live auto rates</h1> -->
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">Your Current Employer?</label>
              <div class="col-xs-12 col-sm-12 margbot_40">
                <input  type="text" id="cemployer" name="cemployer" value="<?php if(isset($this->session->userdata['userdata']['cemployer'])) echo $this->session->userdata['userdata']['cemployer']?>" class="form-control"  maxlength="8">
              </div>
               <span id="err1" style="color: red"></span>
              <label class="control-label">Your Job Title?</label>
              <div class="col-xs-12 col-sm-12 margbot_10">
                <input type="text" name="job_title" placeholder="" value="<?php if(isset($this->session->userdata['userdata']['job_title'])) echo $this->session->userdata['userdata']['job_title']?>" class="form-control" id="job_title" maxlength="8">
              </div>
              <span id="err2" style="color: red"></span>
              <div class="col-xs-12 col-sm-12 margbot_10">
                <p class="subtext">
                  Alimony, child support, or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repaying this obligation.
                </p>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="step6()">Continue<span class="continueIcon sprites"></span></button>
                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
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
                  
                        <label for="usr">Your Current Employer?</label>
                        <input type="text" name="cemployer" value="<?php if(isset($this->session->userdata['userdata']['cemployer'])) echo $this->session->userdata['userdata']['cemployer']?>" placeholder="" class="form-control" id="cemployer" required="">
                        <span id="err1" style="color: red"></span>

                   
                        <label for="usr">Your Job Title?</label>
                        <input type="text" name="job_title" placeholder="" value="<?php if(isset($this->session->userdata['userdata']['job_title'])) echo $this->session->userdata['userdata']['job_title']?>" class="form-control" id="job_title" required="">
                        <span id="err2" style="color: red"></span>

                    



                </div>   
                <button class="btn btn-primary" onclick="back()" > <i class="fa fa-angle-left"></i> Back    </button>

                                    <button class="btn btn-primary" onclick="step6()" > continue   <i class="fa fa-angle-right"></i> </button>

            </div>
        </div>
    </div>
</div>

-->
<script> //$('input[name=amount]').val()
    
    function back() {

                            $.ajax({
                                type: "GET",
                                url: "<?php echo BASE_URL . 'auto/step44' ?>",
                                success: function (data)
                                {
                                    
                                    $('#container').html(data).effect( "slide",{distance: 5});
                                    //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
                                }
                            });

                        }

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

                                                            $('#container').html(data).effect( "slide",{distance: 5});
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
