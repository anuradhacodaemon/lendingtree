<div class="clearfix" id="container1">
    <div class="" id="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="form-main home-loan score clearfix">
                    <h1 class="text-head">Estimate your credit score</h1>
                    <!--<a href="" class="disclosure-sec">Disclosures</a>-->
                    <div class="clearfix"></div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step12(1)">
                                <button class="offer-circ">
                                    <div <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 1) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div  <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 1) echo 'class="offer-img offer-excellent_credit selected"'; else   echo 'class="offer-img offer-excellent_credit"';} else  echo 'class="offer-img offer-excellent_credit"';?> ></div>
                                                <p class="title">Excellent <br>≥720</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step12(2)">
                                <button class="offer-circ">
                                    <div <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 2) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div  <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 2) echo 'class="offer-img offer-good_credit selected"'; else   echo 'class="offer-img offer-good_credit"';} else  echo 'class="offer-img offer-good_credit"';?> ></div>
                                                <p class="title">Good <br>680-719</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step12(3)">
                                <button class="offer-circ">
                                    <div <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 3) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel">
                                            <div class="second-bevel">
                                                <div <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 3) echo 'class="offer-img offer-fair_credit selected"'; else   echo 'class="offer-img offer-fair_credit"';} else  echo 'class="offer-img offer-fair_credit"';?> ></div>
                                                <p class="title">Fair <br>640-679</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="offer-cont">
                            <a href="javascript:void(0);" onclick="home_step12(4)">
                                <button class="offer-circ">
                                    <div <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 4) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
                                        <div class="inner-bevel"> 
                                            <div class="second-bevel">
                                                <div  <?php if(isset($this->session->userdata['credit_score'])) { if($this->session->userdata['credit_score']== 4) echo 'class="offer-img offer-poor_credit selected"'; else   echo 'class="offer-img offer-poor_credit"';} else  echo 'class="offer-img offer-poor_credit"';?> ></div>
                                                <p class="title">Poor <br>≤639</p>
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

