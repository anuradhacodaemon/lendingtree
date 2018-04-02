 <div class="main-section inner_height clearfix">
      <div class="container" id="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-main clearfix">
              <!-- <h1>Compare live auto rates</h1> -->
              <a href="" class="disclosure-sec">Disclosures</a>
              <div class="clearfix"></div>
              <label class="control-label">When Were You Born?</label>
              <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
                <select  id="selectMonth" name="month" class="form-control">
                 
                   <?php for ($i = 1; $i <= 12; $i++) { ?>
                                <option class="" <?php if(isset($this->session->userdata['userdata']['month'])) { if($this->session->userdata['userdata']['month']==$i) echo 'selected' ;} ?> ><?php echo $i ?></option>
                            <?php } ?>
                </select>
              </div>
              <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
                <select id="selectDate" name="day" class="form-control">
                
                  <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option class="" <?php if(isset($this->session->userdata['userdata']['day'])) { if($this->session->userdata['userdata']['day']==$i) echo 'selected' ;} ?>><?php echo $i ?></option>
                            <?php } ?>
                </select>
              </div>
              <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
               <select id="selectYear" name="year" class="form-control">
                  
                   <?php for ($i = 1900; $i <= 2015; $i++) { ?>
                                <option class="" <?php if(isset($this->session->userdata['userdata']['years'])) { if($this->session->userdata['userdata']['years']==$i) echo 'selected' ;} ?>><?php echo $i ?></option>
                            <?php } ?>
               </select>
              </div>
              <div class="col-xs-12 col-sm-12 radio">
                <button type="button" class="button" onclick="step5($('#selectMonth').val(), $('#selectDate').val(), $('#selectYear').val())">Continue<span class="continueIcon sprites"></span></button>
                           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>

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
                    <label class="control-label">Whe You Are Born?</label>
                    <div class="form-group" >
                        <select id="selectMonth" name="month" style="width:auto;display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1; $i <= 12; $i++) { ?>
                                <option class="" <?php if(isset($this->session->userdata['userdata']['month'])) { if($this->session->userdata['userdata']['month']==$i) echo 'selected' ;} ?> ><?php echo $i ?></option>
                            <?php } ?>
                        </select>

                        <select id="selectDate" name="day" style="width:auto; display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option class="" <?php if(isset($this->session->userdata['userdata']['day'])) { if($this->session->userdata['userdata']['day']==$i) echo 'selected' ;} ?>><?php echo $i ?></option>
                            <?php } ?>
                        </select>

                        <select id="selectYear" name="year" style="width:auto; display: inline;" class="form-control selectWidth">
                            <?php for ($i = 1900; $i <= 2015; $i++) { ?>
                                <option class="" <?php if(isset($this->session->userdata['userdata']['years'])) { if($this->session->userdata['userdata']['years']==$i) echo 'selected' ;} ?>><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                        
                                         
                    </div>    
    <button class="btn btn-primary" onclick="back()" > <i class="fa fa-angle-left"></i> Back    </button>

                        <button class="btn btn-primary" onclick="step5($('#selectMonth').val(), $('#selectDate').val(), $('#selectYear').val())" > continue   <i class="fa fa-angle-right"></i> </button>

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
                                url: "<?php echo BASE_URL . 'auto/step4' ?>",
                                success: function (data)
                                {
                                    
                                    $('#container').html(data).effect("slide", 'slow');
                                    //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
                                }
                            });

                        }

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
