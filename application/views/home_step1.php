<?php //echo '<pre>';
//print_r($this->session->userdata());?>
<div class="main-section inner_height clearfix" id="container1">
  <div class="container" id="container">
    <div class="form-main clearfix">
      <h1 class="text-head">What type of home loan are you looking for?</h1>
      <!--<a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>-->
     <!-- <div class="offer-cont">
        <a href="javascript:void(0);" onclick="home_step2(1)">
          <button class="offer-circ">
            <div
              <?php // if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 1) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
              <div class="inner-bevel">
                <div class="second-bevel">
                  <div
                    <?php // if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 1) echo 'class="offer-img offer-purchase_house selected"'; else   echo 'class="offer-img offer-purchase_house"';} else  echo 'class="offer-img offer-purchase_house"';?>>
                  </div>
                  <p class="title">Purchase</p>
                </div>
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="offer-cont">
        <a href="javascript:void(0);" onclick="home_step2(2)">
          <button class="offer-circ">
            <div
              <?php // if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 2) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
              <div class="inner-bevel">
                <div class="second-bevel">
                  <div
                    <?php // if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 2) echo 'class="offer-img offer-refinance_house selected"'; else   echo 'class="offer-img offer-purchase_house"';} else  echo 'class="offer-img offer-refinance_house"';?>>
                  </div>
                  <p class="title">Refinance</p>
                </div>
              </div>
            </div>
          </button>
        </a>
      </div>-->
      <div class="offer-cont">
        <a href="javascript:void(0);" onclick="home_step2(3)">
          <button class="offer-circ">
            <div
              <?php if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 3) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
              <div class="inner-bevel">
                <div class="second-bevel">
                  <div
                    <?php if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 3) echo 'class="offer-img offer-home_equity_house selected"'; else   echo 'class="offer-img offer-home_equity_house"';} else  echo 'class="offer-img offer-home_equity_house"';?>>
                  </div>
                  <p class="title">Home Equity</p>
                </div>
              </div>
            </div>
          </button>
        </a>
      </div>
    <!--  <div class="offer-cont">
        <a href="javascript:void(0);" onclick="home_step2(4)">
          <button class="offer-circ">
            <div
              <?php // if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 4) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
              <div class="inner-bevel">
                <div class="second-bevel">
                  <div
                    <?php // if(isset($this->session->userdata['loan_type'])) { if($this->session->userdata['loan_type']== 4) echo 'class="offer-img offer-reverse_mtg_house selected"'; else   echo 'class="offer-img offer-reverse_mtg_house"';} else  echo 'class="offer-img offer-reverse_mtg_house"';?>>
                  </div>
                  <p class="title">Reverse Mortgage</p>
                </div>
              </div>
            </div>
          </button>
        </a>
      </div> -->
    </div>
    <div class="disclosure">
      <i class="fa fa-lock"></i>&nbsp;&nbsp;Privacy secured&nbsp;&nbsp;|&nbsp;&nbsp;
      <a id="promodisclosure" rel="nofollow" class="disclosures-link" href="">Advertising Disclosures</a>
    </div>
  </div>
</div>
<!-- Banner ends here -->