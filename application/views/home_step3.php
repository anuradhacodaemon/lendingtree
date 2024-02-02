<?php //echo '<pre>';
//print_r($this->session->userdata());?>
<div class="clearfix" id="container1">
  <div class="" id="container">
    <div class="form-main home-loan clearfix">
      <h1 class="text-head">How will this property be used?</h1>
      <!--<a href="javascript:void(0)" class="disclosure-sec">Disclosures</a>-->
      <div class="offer-cont">
        <a href="javascript:void(0);" onclick="home_step4(1)">
          <button class="offer-circ">
            <div
              <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 1) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
              <div class="inner-bevel">
                <div class="second-bevel">
                  <div
                    <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 1) echo 'class="offer-img offer-primary_home selected"'; else   echo 'class="offer-img offer-primary_home"';} else  echo 'class="offer-img offer-primary_home"';?>>
                  </div>
                  <p class="title">Primary Home</p>
                </div>
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="offer-cont">
        <a href="javascript:void(0);" onclick="home_step4(2)">
          <button class="offer-circ">
            <div
              <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 2) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
              <div class="inner-bevel">
                <div class="second-bevel">
                  <div
                    <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 2) echo 'class="offer-img offer-secondary_home selected"'; else   echo 'class="offer-img offer-secondary_home"';} else  echo 'class="offer-img offer-secondary_home"';?>>
                  </div>
                  <p class="title">Secondary Home</p>
                </div>
              </div>
            </div>
          </button>
        </a>
      </div>
      <div class="offer-cont">
        <a href="javascript:void(0);" onclick="home_step4(3)">
          <button class="offer-circ">
            <div
              <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 3) echo 'class="outer-circ selected-circ"'; else echo 'class="outer-circ"';} else  echo 'class="outer-circ"';?>>
              <div class="inner-bevel">
                <div class="second-bevel">
                  <div
                    <?php if(isset($this->session->userdata['home_type'])) { if($this->session->userdata['home_type']== 3) echo 'class="offer-img offer-rental_property selected"'; else   echo 'class="offer-img offer-rental_property"';} else  echo 'class="offer-img offer-rental_property"';?>>
                  </div>
                  <p class="title">Rental Property</p>
                </div>
              </div>
            </div>
          </button>
        </a>
      </div>
    </div>
    <div class="disclosure">
      <i class="fa fa-lock"></i>&nbsp;&nbsp;Privacy secured&nbsp;&nbsp;|&nbsp;&nbsp;
      <a id="promodisclosure" rel="nofollow" class="disclosures-link" href="">Advertising Disclosures</a>
    </div>
  </div>
</div>
<!-- Banner ends here -->