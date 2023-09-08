<!-- Footer starts here -->
<div class="footer-main wow fadeIn clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Third Party Link Disclaimer:&nbsp;<?php $getPhone=$this->loan_model->get_phone(); if(!empty($getPhone[0]['footer'])) { echo $getPhone[0]['footer']; } ?>&nbsp;
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.min.js"></script>
<!--<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/bootstrap-theme.min.css">-->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/js/slide/custom.css" type="text/css">
<link href="<?php echo BASE_URL; ?>public/js/slide/jquery-ui.css" rel="stylesheet">

<script src="<?php echo BASE_URL; ?>public/js/homeloansteps.js"></script>

<link href="<?php echo BASE_URL; ?>public/css/popup.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<?php 
    $segment = $this->uri->segment(1);
    if($segment == 'auto') {  
?>

    <script src="<?php echo BASE_URL; ?>public/js/lendingsteps.js"></script>
<?php } ?>

<?php 
    $segment = $this->uri->segment(1);
    if($segment == 'personal') {  
?>

<script src="<?php echo BASE_URL; ?>public/js/personalsteps.js"></script>
    
<?php } ?>

<?php 
    $segment = $this->uri->segment(1);
    if($segment == 'refinance') {  
?>
<script src="<?php echo BASE_URL; ?>public/js/refinancesteps.js"></script>

<?php } ?>
<script>
    new WOW().init();
</script>


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
                 $('#city').prop('disabled',false);

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
/*$(document).ready(function () {
                            var formatter = new Intl.NumberFormat('en-US', {
                                style: 'currency',
                                currency: 'USD',
                                minimumFractionDigits: 2,
                            });
                            var x = formatter.format($('#ex6SliderVal').html()).replace("$", "");
                            //$('#ex6SliderVal').html(x);
                        });*/
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
<div class="modal fade" id="disclosureModal" tabindex="-1" role="dialog" aria-labelledby="disclosureModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="disclosure">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="disclosureModalLabel">Disclosures</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>By providing the Credit Union with a wireless phone number (cell phone) you consent to receiving phone calls, including autodialed and pre-recorded calls from the Credit Union or its third-party debt collector at that number. </h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

