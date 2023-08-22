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
                    <a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>
                    <div class="clearfix"></div>
                    <label class="control-label">Current Income</label>
                    <div class="row">
                        <form id="user_docs" method="POST" enctype="multipart/form-data" onsubmit="return getFormId(this)">
                        <div class="col-lg-12 col-md- col-sm-12 col-xs-12">
                        <input type="hidden" name="auto_step" value="9" id="auto_step" >
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <span style = "color:black;font-size: 12px;"> <strong>$</strong> </span>
                                <input type="text" name="monthly_income_pre_tax" placeholder="Monthly income [pre-tax]" value="<?php if (isset($this->session->userdata['employment_monthly_income'])) echo $this->session->userdata['employment_monthly_income'] ?>" class="form-control width_100" id="monthly_income_pre_tax" >
                                <span id="err1" style="color: red"></span>
                            </div>  
                            <div class="col-xs-12 col-sm-6 margbot_10">
                                <span class="optional-file">How Many Dependents They Have? </span>    
                                <select class="form-control" name="total_dependent" id="total_dependent" style="max-width: 100%;">
                                    <option value="">How Many Dependents</option>
                                    <?php for($i=0;$i<=10;$i++){  ?>
                                        <option value="<?php echo $i; ?>" <?php if (!empty($this->session->userdata['employment_total_dependent']) && $this->session->userdata['employment_total_dependent'] == $i) { echo "Selected"; }  ?>><?php echo $i; ?></option>
                                    <?php } ?>
                                </select> 
                                <span id="err3" style="color: red"></span>
                            </div>  
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-6 margbot_10">
                            <span class="optional-file">Accepted Files [paystub/Bank statements] in Formats [.png, .txt, .pdf] (Optional field) </span>    
                                <input type="file" name="upload_user_doc" accept=".png, .txt, .pdf" value="<?php if (isset($this->session->userdata['upload_document_proof'])) echo $this->session->userdata['upload_document_proof'] ?>" class="form-control width_100" id="employer_job_title" >
                                <span id="err2" style="color: red"></span>
                            </div>
                            <!-- <span class="optional-file">Accepting File type (Optional)</span>      -->
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                            <input type="submit" value="Continue" class="button" >
                                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                -->

                            </div>   
                        </div>
                        </
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
