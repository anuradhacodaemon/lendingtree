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
                            <option value="">Month</option>
                            <?php for ($i = 1; $i <= 12; $i++) { ?>
                                <option class="" <?php
                                if (isset($this->session->userdata['userdata']['month'])) {
                                    if ($this->session->userdata['userdata']['month'] == $i)
                                        echo 'selected';
                                }
                                ?> ><?php echo $i ?></option>
<?php } ?>
                        </select>
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
                        <select id="selectDate" name="day" class="form-control">
                            <option value="">Day</option>
                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option class="" <?php
                                    if (isset($this->session->userdata['userdata']['day'])) {
                                        if ($this->session->userdata['userdata']['day'] == $i)
                                            echo 'selected';
                                    }
                                    ?>><?php echo $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 margbot_10">
                        <select id="selectYear" name="year" class="form-control">
                            <option value="">Year</option>
<?php for ($i = 1900; $i <= 2015; $i++) { ?>
                                <option class="" <?php
    if (isset($this->session->userdata['userdata']['years'])) {
        if ($this->session->userdata['userdata']['years'] == $i)
            echo 'selected';
    }
    ?>><?php echo $i ?></option>
<?php } ?>
                        </select>
                    </div>
                      <span id="err" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12 radio">
                        <button type="button" class="button" onclick="step5($('#selectMonth').val(), $('#selectDate').val(), $('#selectYear').val())">Continue<span class="continueIcon sprites"></span></button>
                                <!--   <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script> //$('input[name=amount]').val()
    function back() {

    $.ajax({
    type: "GET",
            url: "<?php echo BASE_URL . 'auto/step4' ?>",
            success: function (data)
            {

            $('#container').html(data).effect("slide", {distance: 5});
            //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
    });
    }

    function step5(month, day, year) {
    // alert("<?php echo BASE_URL . 'auto/step6/' ?>" + month+'/'+day+'/'+year);

    
    if ($('#selectMonth').val() === "") {
    

    $('#err').html('Month is empty');
    $('#selectMonth').focus();
    return false;
    } else if ($('#selectDate').val() === "")
    {
   
    $('#err').html('Day is empty');
    $('#selectDate').focus();
    return false;
    } 
    else if ($('#selectYear').val() === "")
    {
    
    $('#err').html('Year is empty');
    $('#selectYear').focus();
    return false;
    } 
        else{
    $.ajax({
    type: "GET",
            url: "<?php echo BASE_URL . 'auto/step5/' ?>" + month + '/' + day + '/' + year,
            success: function (data)
            {

            $('#container').html(data).effect("slide", {distance: 5});
            }
    });
    }

    }
</script>

<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">

