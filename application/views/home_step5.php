<div class="clearfix">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main clearfix">
                    <h1 class="text-head">ZIP code of the property</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                           
                            <div class="clearfix"></div>
                            <div class="col-xs-12 col-sm-12 margbot_10">
                                <input type="text" name="zip" placeholder="Zip" value="<?php if (isset($this->session->userdata['zip'])) echo $this->session->userdata['zip'] ?>" class="form-control" id="zip" maxlength="5">
                                <span id="err6" style="color: red"></span>
                            </div>

							<div class="col-xs-12 col-sm-12 margbot_10">
                                <div class="text-center font_14">
									<!--Virginia Beach, VA-->
								</div>
                            </div>

                            <div class="col-xs-12 col-sm-12 radio margtop_30">
                                <button type="button" class="button" onclick="home_step5()">Continue<span class="continueIcon sprites"></span></button>
                                              <!--           <div class="col-xs-12 col-sm-12 radio"> <button type="button" onclick="back()" class="button_back"><span class="continueIcon sprites"></span>Back</button> </div>
                                -->

                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

