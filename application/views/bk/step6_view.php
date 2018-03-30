<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label"></label>
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
                    <button class="btn btn-primary" onclick="step6()" > continue   <i class="fa fa-angle-right"></i> </button>



                </div>
            </div>
        </div>
    </div>
</div>

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