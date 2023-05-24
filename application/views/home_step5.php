<div class="clearfix">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1 class="text-head">ZIP code of the property</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <label class="control-label"></label>
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                           
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="zip" placeholder="Zip" value="<?php if (isset($this->session->userdata['zip'])) echo $this->session->userdata['zip'] ?>" class="form-control" id="zip" maxlength="5">
                                <span id="err6" style="color: red"></span>
                            </div>

							<div class="col-xs-12 col-sm-12 margbot_10">
                                <div class="text-center font_14" id="Zipcity">
									<!--Virginia Beach, VA-->
								</div>
                            </div>

                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <button type="button" class="button" onclick="home_step5()">Continue<span class="continueIcon sprites"></span></button>
                                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                -->

                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#zip').blur(function () {
        verifyZip()
    });
    function verifyZip()
    {
        var RE = /^\d*\.?\d*$/;
        var RE1 = /^\d*\.?\d*$/;
        var RE2 = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
        if ($('input[name=zip]').val() == '')
        {

            $('#err6').html('zip is empty');
            $('#zip').focus();
            $('#err1').html('');
            $('#err2').html('');
            $('#err3').html('');
            $('#err4').html('');
            $('#err5').html('');
            return false;
        } else if (!RE1.test($("#zip").val()))
        {

            $('#err6').html('zip should be number');
            $('#zip').focus();
            $('#err1').html('');
            $('#err2').html('');
            $('#err3').html('');
            $('#err4').html('');
            $('#err5').html('');
            return false;
        } else if (!RE2.test($("#zip").val()))
        {

            $('#err6').html('Zip code is invalid. 5 digits are mandatory');
            $('#zip').focus();
            $('#err1').html('');
            $('#err2').html('');
            $('#err3').html('');
            $('#err4').html('');
            $('#err5').html('');

            return false;
        } else
        {
            $('#err1').html('');
            $('#err2').html('');
            $('#err3').html('');
            $('#err4').html('');
            $('#err5').html('');
            $('#err6').html('');

            $.ajax({
                type: "GET",
                url: base_url + "homeloan/ajaxZipcode/" + $('input[name=zip]').val(),
                success: function (data)
                {
                    $('#Zipcity').html(data);

                }
            });

        }
    }
</script>

