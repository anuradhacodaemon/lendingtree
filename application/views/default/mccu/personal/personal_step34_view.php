<div class="clearfix">
    <div class="container" id="container">
        <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                <h1>
              <?php   if(isset($this->session->userdata['type']))
                      { 
                        if($this->session->userdata['type']== 1)
                        {
                          echo 'Buying New Vehicle';
                        }
                        elseif($this->session->userdata['type']== 2)
                        {
                          echo 'Buying Used Vehicle';
                        }
                        elseif($this->session->userdata['type']== 3)
                        {
                          echo 'Refinance For Vehicle';
                        }
                      }
                      else{
                          echo 'Buying New Vehicle';
                          }
              ?>
              </h1>
                    <a href="" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">I REPRESENT THAT EVERYTHING I HAVE STATED IN THIS APPLICATION IS CORRECT AND COMPLETE TO THE BEST OF MY KNOWLEDGE. YOU ARE AUTHORIZED TO CHECK MY (OUR) CREDIT HISTORY, AND TO ANSWER QUESTIONS ABOUT YOUR CREDIT HISTORY WITH ME. (US).</label>
                    <div class="row">
                        <form id="co_user_consnt" method="POST" onsubmit="return getFormId(this)">
                        <input type="hidden" name="auto_step" value="34" id="auto_step" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="check">
                                <div class="col-xs-12 col-sm-1 margbot_10">
                                    <input type="checkbox" name="co_i_represnt_accurate" value="consent"
                                    <?php if(isset($this->session->userdata['cosigner_i_represent_everything_correct'])) { if($this->session->userdata['cosigner_i_represent_everything_correct']== 'Y') echo 'checked="checked"'; else echo '';}  ?>
                                    class="form-control width_100 button" id="i_represnt_accurate" >
                                    <span id="err1" style="color: red"></span>
                                </div>
                                <div class="col-xs-12 col-sm-6 margbot_10">
                                    <input type="text" name="co_date_of_application" readonly="readonly" value="<?php echo date('d-m-Y') ?>" class="form-control width_100" id="date_of_application" >
                                    <span id="err2" style="color: red"></span>
                                </div>
                        </div>
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <center><img style="display: none;width: 60px;position: relative;" id="loader_page_final" src="<?php echo base_url() ?>public/html/img/loader.gif"></center>
                                <input type="submit" value="Continue" class="button" id="final_step34">
                            </div>   
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

