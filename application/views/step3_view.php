
<div class="clearfix">
    <div class="">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <!-- <h1>Compare live auto rates</h1> -->
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Get a better offer with a down payment</label>
                    <h2>Even $200 could make a difference!</h2>
                    <div class="col-xs-12 col-sm-12 margbot_10">
                        <input type="text" id="amount"  value="<?php if (isset($this->session->userdata['userdata']['amount'])) echo $this->session->userdata['userdata']['amount'] ?>"  name="amount" class="form-control" placeholder="$0" maxlength="8">
                    </div>
                    <span id="err" style="color: red"></span>
                    <div class="col-xs-12 col-sm-12">
                        <label class="checkbox-sec">Wanting To Get Pre Approved
                            <input type="checkbox" checked="checked"  name="pre_approved" id="pre_approved">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-xs-12 col-sm-12 radio">

                        <button type="button" class="button" onclick="step4()" >Continue<span class="continueIcon sprites"></span></button>
                   <!--  <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
        
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
            url: "<?php echo BASE_URL . 'auto/step2' ?>",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });

    }

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
            var pre_approved = 1;
            if ($('input[name=pre_approved]').prop("checked") == true) {
                pre_approved = 1;
            } else if ($('input[name=pre_approved]').prop("checked") == false) {
                pre_approved = 0;
            }

            $.ajax({
                type: "GET",
                url: "<?php echo BASE_URL . 'auto/step4/' ?>" + $('input[name=amount]').val() + '/' + pre_approved,
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

