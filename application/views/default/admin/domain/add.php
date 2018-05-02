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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Domain Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="domain" required name="domain" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['domain']))  echo $domain[0]['domain']?>">
                            </div>
                        </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="phone" required name="phone" class="form-control col-md-7 col-xs-12" type="text" value="<?php if (isset($settings[0]['phone'])) echo $settings[0]['phone'] ?>" maxlength="16" >
                        </div>
                    </div>
                       
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="email" required name="emails" class="form-control col-md-7 col-xs-12" type="text" value="<?php if(isset($domain[0]['email']))  echo $domain[0]['email']?>">
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