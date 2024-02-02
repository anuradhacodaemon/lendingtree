<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Your Name</label>
                    <div class="form-group">

                        <input type="text" name="firstname" placeholder="firstname" class="form-control" id="firstname" required="">
                        <span id="err1" style="color: red"></span>
                        </div>
<div class="form-group">
                        <input type="text" name="lastname" placeholder="lastname" class="form-control" id="lastname" required="">
                        <span id="err2" style="color: red"></span>
                        <button class="btn btn-primary" onclick="step8($('#firstname').val(), $('#lastname').val())" > continue   <i class="fa fa-angle-right"></i> </button>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script> //$('input[name=amount]').val()

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

                                        $('#container').html(data);
                                    }
                                });
                            }

                        }
</script>