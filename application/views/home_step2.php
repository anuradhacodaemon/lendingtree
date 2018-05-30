<div class="clearfix" id="container1">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-main home-loan clearfix">
                    <h1 class="text-head">Great! What type of property are you refinancing?</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step3(1)">
                                <button class="offer-circ">
                                    <div  <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 1) echo 'class="outer-circ selected-circ"'; else echo 'class=outer-circ';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div  <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 1) echo 'class="offer-img offer-home-loan selected"'; else echo 'class=offer-img offer-home-loan';} else  echo 'class="offer-img offer-home-loan"';?>></div>
                                                <p class="title">Single Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step3(2)">
                                <button class="offer-circ">
                                    <div  <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 2) echo 'class="outer-circ selected-circ"'; else echo 'class=outer-circ';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div  <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 2) echo 'class="offer-img offer-townhouse selected"'; else echo 'class=offer-img offer-townhouse';} else  echo 'class="offer-img offer-townhouse"';?>></div>
                                                <p class="title">Townhome</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step3(3)">
                                <button class="offer-circ">
                                    <div  <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 3) echo 'class="outer-circ selected-circ"'; else echo 'class=outer-circ';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div  <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 3) echo 'class="offer-img offer-condminium selected"'; else echo 'class=offer-img offer-condminium';} else  echo 'class="offer-img offer-condminium"';?>></div>
                                                <p class="title">Condominium</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step3(4)">
                                <button class="offer-circ">
                                    <div class="outer-circ">
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div class="offer-img offer-multi_family_home"></div>
                                                <p class="title">Multi Family Home</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step3(5)">
                                <button class="offer-circ">
                                    <div class="outer-circ">
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div class="offer-img offer-mobile_home"></div>
                                                <p class="title">Manufactured or Mobile Home</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="disclosure">
                <i class="fa fa-lock"></i>&nbsp;&nbsp;Privacy secured&nbsp;&nbsp;|&nbsp;&nbsp;
                <a id="promodisclosure" rel="nofollow" class="disclosures-link" href="">Advertising Disclosures</a>
            </div>
        </div>
    </div>
</div>
<!-- Banner ends here -->

