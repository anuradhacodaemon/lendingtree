 <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Settings</h2>

                    <div class="clearfix"></div>
                </div>


                <div class="x_content">

                   <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="">
                        <div class="alert">
                            <?php
                            if ($this->session->flashdata('item')) {
                                $message = $this->session->flashdata('item');
                                ?>
                                <div id="show"><?php echo $message['message'];
                                ?></div>
                                <?php
                            }
                            ?>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Domain
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="first-name" required name="domain" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['domain']))  echo $domain[0]['domain']?>">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="phone" required name="phone" class="form-control col-md-7 col-xs-12" type="text" value="<?php if (isset($domain[0]['phone'])) echo $domain[0]['phone'] ?>" maxlength="16" >
                        </div>
                    </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" required name="emails" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['emails']))  echo $domain[0]['emails']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="title" required name="title" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['title']))  echo $domain[0]['title']?>">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Footer <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="footer" required name="footer" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['footer']))  echo $domain[0]['footer']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tag 
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="tagline"  name="tagline" class="form-control col-md-7 col-xs-12" ><?php if(isset($domain[0]['tagline']))  echo $domain[0]['tagline']?></textarea>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Credit Union <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="credit_union" required name="credit_union" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['credit_union']))  echo $domain[0]['credit_union']?>">
                            </div>
                        </div>
                       
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bank <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="bank" required name="bank" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['bank']))  echo $domain[0]['bank']?>">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dealership <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="dealership" required name="dealership" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['dealership']))  echo $domain[0]['dealership']?>">
                            </div>
                        </div>
                       
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Author <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="title" required name="author" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['author']))  echo $domain[0]['author']?>">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="mega_description" required name="mega_description" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['mega_description']))  echo $domain[0]['mega_description']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">keywords <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="keywords" required name="keywords" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['keywords']))  echo $domain[0]['keywords']?>">
                            </div>
                        </div>
                       
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>


<script type="text/javascript">
                            $(document).ready(function () {
                                $('#phone').keyup(function () {
                                    obj=this;
                                 var numbers = obj.value.replace(/\D/g, ''),
        char = { 0: '(', 3: ') ', 6: ' - ' };
            obj.value = '';
            for (var i = 0; i < numbers.length; i++) {
                obj.value += (char[i] || '') + numbers[i];
            }
                                    });
                                   
                            });
</script>