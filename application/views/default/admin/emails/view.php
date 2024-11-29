 <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Email</h2>

                    <div class="clearfix"></div>
                </div>


                <div class="x_content">

                   <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="">
                       
                       
                        <div class="form-group">
                           
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                 <strong>Domain : </strong>
                               <?php
                               $res=$this->emails->get_domains($emails[0]['domain_id']);
                               if(isset($emails[0]['domain_id']))  echo $res[0]['domain']?>
                                 
                                  <strong>Email : </strong>
                               <?php if(isset($emails[0]['emails']))  echo $emails[0]['emails']?>
                            </div>
                        </div>
                       
                         
                        <div class="ln_solid"></div>
                      

                    </form>
                </div>

            </div>
        </div>
    </div>