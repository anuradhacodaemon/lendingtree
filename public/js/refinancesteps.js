var base_url = $('#domain').val();
if (window.performance) {
    console.info("window.performance work's fine on this browser");
}
if (performance.navigation.type == 1) {
    //alert( "This page is reloaded" );
    if (window.location.search.indexOf('refinancestep=1') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep1",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=2') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep2",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=3') > -1) {

        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep3",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=31') > -1) {

        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep31",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=4') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep4",
            success: function (data)
            {

                $('#containerrefinance').html(data);

                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep5",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep6",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=7') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep7",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('refinancestep=8') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"refinance/refinancestep8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('refinancestep=9') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"refinance/refinancestep9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    } 
    if (window.location.search.indexOf('refinancestep=address') > -1) {
        $.ajax({
             type: "GET",
             url: base_url +"refinance/refinancestepaddress",
             success: function (data)
             {
 
                 $('#container').html(data);
                 //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
             }
         });
     } 
    if (window.location.search.indexOf('refinancestep=10') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"refinance/refinancestep10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

}
window.onpopstate = function ()
{
    if (window.location.search.indexOf('refinancestep=1') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep1",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=2') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep2",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=3') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep3",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=31') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep31",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=4') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep4",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('refinancestep=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep5",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    
    if (window.location.search.indexOf('refinancestep=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep6",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }   

    if (window.location.search.indexOf('refinancestep=7') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep7",
            success: function (data)
            {

                $('#containerrefinance').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('refinancestep=8') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"refinance/refinancestep8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('refinancestep=9') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"refinance/refinancestep9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }


    if (window.location.search.indexOf('refinancestep=address') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"refinance/refinancestepaddress",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }


    if (window.location.search.indexOf('refinancestep=10') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"refinance/refinancestep10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

}
function refinancestep1() {
    ga('send', 'event', 'spececity', 'auto refinance', 'How Much Do Currently Owe');
    var url = base_url + "refinance/refinancestep2/" + $('input[name=currently_owe]').val();

    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {


            window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=2");

            $('#containerrefinance').html(data);



        }
    });

}
function refinancestep2() {
    ga('send', 'event', 'spececity', 'auto refinance', 'What Is Your Current Monthly Payment');
    $.ajax({
        type: "GET",
        url: base_url + "refinance/refinancestep3/" + $('input[name=monthly_payment]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=3");

            $('#containerrefinance').html(data);
        }
    });

}
function validateVin(vin) {
    var re = new RegExp("^[A-HJ-NPR-Z\\d]{8}[\\dX][A-HJ-NPR-Z\\d]{2}\\d{6}$");
    return vin.match(re);
}
function refinancestep3() {
    ga('send', 'event', 'spececity', 'auto refinance', 'Vehicle VIN Number');
    var RE = /^[A-Za-z]+$/;
    var RE1 = /^\d*\.?\d*$/;
    if ($('input[name=vin]').val() == '')
    {

        $('#err1').html('Your VIN is empty');
        $('#vin').focus();
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep4/" + $('input[name=vin]').val()+'/'+ $('input[name=current_milage]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=4");
                $('#containerrefinance').html(data);
            }
        });
    }

}
function refinancestepresidence() {
    ga('send', 'event', 'spececity', 'auto refinance', 'Vehicle VIN Number');
    var RE = /^\d*\.?\d*$/;
   // alert($('#home_status').val());
    if ($('input[name=pay_month]').val() == '' || $('input[name=pay_month]').val() == 0  || $('input[name=pay_month]').val() == '$')
    {

        $('#err1').html('Your Monthly Pay is empty');
        $('#pay_month').focus();
        return false;
    } else if ($('#err2').val() == 0 && $('#pay_month1').val()=='')
    {
        $('#err1').html('Your ');
        $('#pay_month').focus();
        return false;
    }else if ($('#home_status').val() == '')
    {
        $('#err3').html('Please select Your Home Residence');
        $('#home_status').focus();
        $('#err1').html('');
        $('#err2').html('');
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep5/" + $('input[name=pay_month1]').val()+'/'+ $('#home_status').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=5");
                $('#containerrefinance').html(data);
            }
        });
    }

}

function refinancestep4() {
    ga('send', 'event', 'spececity', 'auto refinance', 'custmer details');
    var regex = /^[0-9]{3}\-?[0-9]{2}\-?[0-9]{4}$/;
    var RE = /^[A-Za-z]+$/;
    var RE1 = /^\d*\.?\d*$/;
    var RE2 = /(^\d{5}$)|(^\d{5}-\d{4}$)/;

    if ($('input[name=firstname]').val() == '')
    {

        $('#err1').html('firstname is empty');
        $('#firstname').focus();
        return false;
    } else if (!RE.test($("#firstname").val()))
    {

        $('#err1').html('Your Firstname should have letter only ');
        $('#firstname').focus();
        return false;
    } else if ($('input[name=lastname]').val() == '')
    {

        $('#err2').html('lastname is empty');
        $('#lastname').focus();
        $('#err1').html('');
        return false;
    } else if (!RE.test($("#lastname").val()))
    {

        $('#err2').html('Your Lastname should include letters only ');
        $('#lastname').focus();
        $('#err1').html('');
        return false;
    } else if ($('input[name=address]').val() == '')
    {

        $('#err3').html('address is empty');
        $('#address').focus();
        $('#err1').html('');
        $('#err2').html('');
        return false;
    } else
    {
        $('#err2').html('');
        var city = 0;
        if ($('#city').val() > 0)
            city = $('#city').val();
        $.ajax({
            type: "GET",
           // url: base_url + "refinance/refinancestep5/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val() + '/' + $('input[name=address]').val() + '/' +  $('#city_name').val() + '/' + $('#state_name').val() + '/' + $('input[name=p_zip_code]').val(),
            url: base_url + "refinance/refinancestepresidence/",
            data: {
                firstname: $('input[name=firstname]').val(),
                lastname: $('input[name=lastname]').val(),
                address: $('input[name=address]').val(),
                city_name: $('#city_name').val(),
                state_name: $('#state_name').val(),
                p_zip_code: $('input[name=p_zip_code]').val(),
                ssn: $('input[name=ssn]').val()
            },
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=residence");
                $('#containerrefinance').html(data);
            }
        });

    }

}

function refinancestep5_new() {
    ga('send', 'event', 'spececity', 'auto refinance', 'Current Employer');
    var RE = /^[A-Za-z]+$/;
    var RE1 = /^\d*\.?\d*$/;
    if ($('input[name=cemployer]').val() == '')
    {

        $('#err1').html('Your Current Employer is empty');
        $('#cemployer').focus();
        return false;
    } else if ($("#selectMonth").val() == '')
    {

        $('#err2').html('Please select Month');
        $('#selectMonth').focus();
     //   $('#err2').html('');
        return false;
    }else if ($("#selectDate").val() == '')
    {

        $('#err4').html('Please select Month');
        $('#selectDate').focus();
      //  $('#err4').html('');
        return false;
    }
    else if ($("#selectYear").val() == '')
    {

        $('#err5').html('Please select Month');
        $('#selectYear').focus();
     //   $('#err5').html('');
        return false;
    }
    // else if (!RE1.test($("#job_title").val()))
    // {

    //     $('#err2').html('Only digits allowed ');
    //     $('#job_title').focus();
    //     $('#err1').html('');
    //     return false;
    // } 
    else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep6/" + $('input[name=cemployer]').val()+ '/' + $("#selectMonth").val() + '/' + $("#selectDate").val() + '/' + $("#selectYear").val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=7");
                 $('#containerrefinance').html(data);
            }
        });
    }

}

/* else if (!RE.test($("#cemployer").val()))
    {

        $('#err1').html('Your Current Employer should have letter only ');
        $('#cemployer').focus();
        return false;
    }*/


function refinancestep5() {
    ga('send', 'event', 'spececity', 'auto refinance', 'Date Of Birth');
     var regex = /^[0-9]{3}\-?[0-9]{2}\-?[0-9]{4}$/;
    
     if ($("#selectdobMonth").val() == '')
     {
 
         $('#err2').html('Please select Month');
         $('#selectdobMonth').focus();
       //  $('#err2').html('');
         return false;
     }else if ($("#selectdobDate").val() == '')
     {
 
         $('#err4').html('Please select Date');
         $('#selectdobDate').focus();
        // $('#err4').html('');
         return false;
     }
     else if ($("#selectdobYear").val() == '')
     {
 
         $('#err5').html('Please select Year');
         $('#selectdobYear').focus();
        // $('#err5').html('');
         return false;
     } else if ($('input[name=ssn]').val() == '')
    {

        $('#err7').html('ssn is empty');
        $('#ssn').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        $('#err6').html('');
        return false;
    } else if (!regex.test($('#ssn').val())) {
        $('#err7').html('ssn is not valid');
        $('#ssn').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        $('#err6').html('');
        return false;
    } else {
        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep7/"  +  $("#selectdobMonth").val() + '/' +  $("#selectdobDate").val() + '/' + $("#selectdobYear").val() + '/'  + $('input[name=ssn]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=8");
                $('#containerrefinance').html(data);
            }
        });
    }
}

function refinancestep7() {
    ga('send', 'event', 'spececity', 'auto refinance', 'Submit');
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var RE1 = /^[0-9]{10}/;
    if ($('input[name=email]').val() == '')
    {

        $('#err1').html('Your email is empty');
        $('#email').focus();
        return false;
    } else if (!regex.test($('input[name=email]').val()))
    {
        $('#err1').html('Your email is not valid');
        $('#email').focus();
        return false;
    } else if ($('input[name=phone]').val() == '')
    {

        $('#err2').html('Your phone is empty');
        $('#phone').focus();
        $('#err1').html('');
        return false;
    } else if (!RE1.test($('#phone').val()))
    {

        $('#err2').html('Your phone number should be atleast 10 digit');
        $('#phone').focus();
        $('#err1').html('');
        return false;
    } else
    {
        $('#err2').html('');

        $.ajax({
            type: "GET",
            url: base_url + "refinance/refinancestep8/" + $('input[name=email]').val() + '/' + $('input[name=phone]').val(),
            success: function (data)
            {
                // alert(data);
                if (data == 1)
                {
                    //location.href = base_url;
                    gtag_report_conversion_ref(base_url);
                } else
                {
                    window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=7");
                    $('#containerrefinance').html(data);
                }
            }
        });
    }
}

function refinancestep9(val) {
    ga('send', 'event', 'BMTCCU', 'refinance loan', 'laid_off_for_payment_waived');
    var url = base_url + "refinance/refinancestep9/" + val;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=9");
            
            $('#container').html(data);
            
        }
    });

}


function refinancestepaddress(val) {
    ga('send', 'event', 'BMTCCU', 'refinance loan', 'laid_off_for_payment_waived');
    var url = base_url + "refinance/refinancestepaddress/" + val;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=1");
            
            $('#container').html(data);
            
        }
    });

}

function refinancestep10(val) {
    ga('send', 'event', 'BMTCCU', 'refinance loan', 'i_represent_stated');

    let isChecked = $('#i_represent_stated').is(':checked');

    if (isChecked == false)
    {
        $('#err1').html('The Consent field is required.');
        $('#i_represent_stated').focus();
        return false;
    }
    
            $.ajax({
                type: "GET",
                url: base_url + "refinance/refinancestep10/",
                data: {
                i_represent_stated: $('input[name=i_represent_stated]').val(),
                date_of_application: $('input[name=date_of_application]').val()
            },
           success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "refinance?refinancestep=10");
                $('#container').html(data);
            }
        });;

}

function refinancestep11(val) {
    ga('send', 'event', 'BMTCCU', 'refinance loan', 'submit');
    var url = base_url + "refinance/refinancestep11/" + val;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            alert(data);
                if (data == 1)
                {
                    //location.href = base_url;
                    gtag_report_conversion(base_url);
                } else
                {
                    $('#container').html(data);
                }
            
        }
    });

}

/* Event snippet for Completed Auto App conversion page
 In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. */

function gtag_report_conversion_ref(url) {
    var callback = function () {
        if (typeof (url) != 'undefined') {
            window.location = url;
        }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-829513051/jW-JCJCFrYEBENu6xYsD',
        'event_callback': callback
    });
    return false;
}
 
function disclosure_auto()
{  
    $("#disclosureModal").modal('show'); // Open the modal
}

document.addEventListener("DOMContentLoaded", function() {
    document.body.addEventListener("click", function(event) {
        if (event.target.matches(".disclosure-sec")) {
            // Handle the click event
            disclosure_auto();
        }
    });
});