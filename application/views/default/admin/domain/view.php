 <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Domain</h2>

                    <div class="clearfix"></div>
                </div>


                <div class="x_content">

                   <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="">
                       
                       
                        <div class="form-group">
                           
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <strong><?php echo $this->lang->line('domain'); ?> : </strong>
                               <?php if(isset($domain[0]['domain']))  echo $domain[0]['domain']?>
                            </div>
                        </div>
                       
                         
                        <div class="ln_solid"></div>
                      

                    </form>
                </div>

            </div>
        </div>
    </div>