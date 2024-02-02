<div class="main-section inner_container clearfix">
    <div class="container" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1>Compare live auto rates</h1>
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label"></label>
                     <div class="form-group">
                            <label for="usr">Your Pre-tax yearly income?</label>
                            <input type="text" name="pre_tax_income" placeholder="" class="form-control" id="pre_tax_income" required="">
                                                                    <span id="err1" style="color: red"></span>

                        </div>
                         <div class="form-group">
                            <label for="usr">Any other yearly income?</label>
                            <input type="text" name="other_income" placeholder="" class="form-control" id="other_income" required="">
                                                                    <span id="err2" style="color: red"></span>

                         </div>
                                            <button class="btn btn-primary" onclick="step7($('#pre_tax_income').val(),$('#other_income').val())" > continue   <i class="fa fa-angle-right"></i> </button>

       
    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script> //$('input[name=amount]').val()

                        function step7(pre_tax_income,other_income) {
                            if ($('input[name=pre_tax_income]').val() == '')
                                {

                                    $('#err1').html('Your Pre-tax yearly income is empty');
                                    $('#pre_tax_income').focus();
                                    return false;
                                } else if ($('input[name=other_income]').val() == '')
                                {
                                
                                    $('#err2').html('Any other yearly income is empty');
                                    $('#other_income').focus();
                                     $('#err1').html('');
                                    return false;
                                } else
                                {
                                     $('#err2').html('');
                            $.ajax({
                                type: "GET",
                                url: "<?php echo BASE_URL . 'auto/step7/' ?>" + pre_tax_income+'/'+other_income,
                                success: function (data)
                                {
                                    
                                    $('#container').html(data);
                                }
                            });
                            
                            }
                            
                        }
</script>