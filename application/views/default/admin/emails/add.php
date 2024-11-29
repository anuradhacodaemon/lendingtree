 <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Email</h2>

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
                                <select name="domain_id">
                                    <option value="">select domain </option>
                                    <?php foreach($domain as $k=>$v){?>
                                    <option value="<?php echo $v['domain_id']?>"><?php echo $v['domain']?></option>
                                    <?php } ?>
                                </select>
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