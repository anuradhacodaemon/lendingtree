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
    <input type="text" id="domain" value="<?php  echo base_url(); ?>" />
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>/public/js/lendingsteps.js"></script>
<link href="<?php echo BASE_URL; ?>public/css/popup.css" rel="stylesheet">


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


<script>
                            function get_city(id) {
                                // alert("<?php echo BASE_URL; ?>auto/getcity/" +  id);
                                $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
         $('#err4').html('');
    
    $.ajax({
                                    type: "GET",
                                    url: "<?php echo BASE_URL; ?>auto/getcity/" + id,
                                    success: function (data)
                                    {
                                        var len = data.length;
                                        //alert(len);
                                        //$("#city").empty();
                                        $("#city").html("<option value=''>select city</option>");
                                        $.each(JSON.parse(data), function (key, value) {
                                            $('select[name="city"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                                        });
                                    }
                                });
                            }
              
              
              $(function() {
//----- OPEN
$('[data-popup-open]').on('click', function(e)  {
var targeted_popup_class = jQuery(this).attr('data-popup-open');
$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
e.preventDefault();
});
//----- CLOSE
$('[data-popup-close]').on('click', function(e)  {
var targeted_popup_class = jQuery(this).attr('data-popup-close');
$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
e.preventDefault();
});
});
                            
</script>


 <?php
if ($this->session->flashdata('item')) {
    $message = $this->session->flashdata('item');
    ?>
                    
         <div class="popup" data-popup="popup-1">
<div class="popup-inner">
<h2>Thank you</h2>
<p> <?php echo $message['message'];
    ?></p>
<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
</div>
</div>           
                 
    <?php
}
?>

 