<div class="clearfix" id="container1">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="form-main home-loan clearfix">
                    <h1 class="text-head">Do you have a second mortgage?</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step8(1)">
                                <button class="offer-circ">
                                    <div <?php if(isset($this->session->userdata['mortgage_2'])) { if($this->session->userdata['mortgage_2']== 1) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div   <?php if(isset($this->session->userdata['mortgage_2'])) { if($this->session->userdata['mortgage_2']== 1) echo 'class="offer-img offer-yes_check selected"'; else   echo 'class="offer-img offer-yes_check"';} else  echo 'class="offer-img offer-yes_check"';?> ></div>
                                                <p class="title">Yes</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step9(2)">
                                <button class="offer-circ">
                                    <div <?php if(isset($this->session->userdata['mortgage_2'])) { if($this->session->userdata['mortgage_2']== 2) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div <?php if(isset($this->session->userdata['mortgage_2'])) { if($this->session->userdata['mortgage_2']== 2) echo 'class="offer-img offer-no_slash selected"'; else   echo 'class="offer-img offer-no_slash"';} else  echo 'class="offer-img offer-no_slash"';?> ></div>
                                                <p class="title">No</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                  
                </div>
            </div>
            <!--<div class="disclosure">
                <i class="fa fa-lock"></i>&nbsp;&nbsp;Privacy secured&nbsp;&nbsp;|&nbsp;&nbsp;
                <a id="promodisclosure" rel="nofollow" class="disclosures-link" href="">Advertising Disclosures</a>
            </div>-->
        </div>
    </div>
</div>
<!-- Banner ends here -->

