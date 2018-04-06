<!-- Footer starts here -->
    <div class="footer-main">
      <!-- <ul class="sub-nav">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <li><a href="/index.php">Home</a></li>|
              <li><a href="/online-banking/guide-to-services.php">Home Banking</a></li>|
              <li><a href="/about/index.php">About</a></li>|
              <li><a href="/about/contact.php">Contact</a></li>|
              <li><a href="/resources/applications-employment.php">Careers</a></li>|
              <li><a href="/checking/index.php">Checking</a></li>|
              <li><a href="/savings/index.php">Savings</a></li>|
              <li><a href="/loans/index.php">Loans</a></li>|
              <li><a href="/rates/index.php">Rates</a></li>|
              <li><a href="/resources/index.php">Resources</a></li>|
              <li><a href="/resources/atms.php">ATM/Branch Locator </a></li>|
              <li><a href="docs/2015-03-19-privacy-policy.pdf">Privacy Policy</a></li>|
              <li><a href="#">Routing # 313182181</a></li>
            </div>
          </div>
        </div>
      </ul> -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p><strong>Third Party Link Disclaimer:</strong>&nbsp;Coastal Community FCU is not responsible for the content or availability of linked sites.&nbsp;Please be advised that Coastal Community FCU does not represent either the third party or you, the member, if you enter into a transaction. Further, the privacy and security policies of the linked site may differ from those practiced by the credit union.&nbsp;</p>
            </div>
          </div>
        </div>
	</div>
    <!-- Footer ends here -->
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>/public/js/lendingsteps.js"></script>

<script> //$('input[name=amount]').val()
 $(document).ready(function () {
<?php
if (!empty($this->session->flashdata('item'))) {
    ?>
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 4000);
            $(".forgot_section").hide();
<?php } ?>
    });
</script>

