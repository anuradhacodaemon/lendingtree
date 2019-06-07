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
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <p><strong>Third Party Link Disclaimer:</strong>&nbsp;<?php $getPhone=$this->loan_model->get_phone(); if(!empty($getPhone[0]['footer'])) { echo $getPhone[0]['footer']; } ?>&nbsp;</p>
            </div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<img src="<?php echo BASE_URL; ?>public/html/img/ftr-logo.png" alt="" title="" />
			</div>
        </div>
    </div>
</div>
<!-- Footer ends here -->
<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'localhost:82') {
    $setURL = 'http://' . $_SERVER['HTTP_HOST'] . '/lendingtree/';
} else {
    $setURL = 'http://' . $_SERVER['SERVER_NAME'] . '/';
}
?>	
<input type="hidden" id="domain" value="<?php echo $setURL; ?>" />
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">
<script src="<?php echo BASE_URL; ?>/public/js/lendingsteps.js"></script>
<script src="<?php echo BASE_URL; ?>/public/js/refinancesteps.js"></script>
<script src="<?php echo BASE_URL; ?>/public/js/homeloansteps.js"></script>

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
                $('#city').prop('disabled', false);

                if (JSON.parse(data) == '') {
                    $('#city').prop('disabled', 'disabled');
                    // array empty or does not exist
                }



                //$("#city").empty();
                $("#city").html("<option value=''>Select City</option>");
                $.each(JSON.parse(data), function (key, value) {
                    $('select[name="city"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            }
        });
    }


    $(function () {
//----- OPEN
        $('[data-popup-open]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
            e.preventDefault();
        });
//----- CLOSE
        $('[data-popup-close]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
            e.preventDefault();
        });
    });
    $(document).ready(function () {

        var formatter = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            minimumFractionDigits: 2,
        });
        var x = formatter.format($('#ex6SliderVal').html()).replace("$", "");
        $('#ex6SliderVal').html(x);
        
       
        
    });
    

 
</script>


<?php
if ($this->session->flashdata('item')) {
    $message = $this->session->flashdata('item');
    ?>

    <div class="popup" data-popup="popup-1">
        <div class="popup-inner">
            <h2>Thank you</h2>
            <p><h1> <?php echo $message['message'];
    ?></h1></p>
            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
        </div>
    </div>           

    <?php
}
?>
