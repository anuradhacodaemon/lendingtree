var base_url = $('#domain').val();
if (window.performance) {
    console.info("window.performance work's fine on this browser");
}
if (performance.navigation.type == 1) {
    //alert( "This page is reloaded" );
    if (window.location.search.indexOf('homeloanstep=1') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep1",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=2') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep2",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=3') > -1) {

        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep3",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=4') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep4",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});

                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep5",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep6",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }


}
window.onpopstate = function ()
{
    if (window.location.search.indexOf('homeloanstep=1') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep1",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=2') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep2",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=3') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep3",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=4') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep4",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloanstep=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep5",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    
    if (window.location.search.indexOf('homeloanstep=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep6",
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

}
function home_step1(id) {

    var url = base_url + "homeloan/homestep1/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=1");
            
            $('#container').html(data).effect("slide", {distance: 5});
            
             
            
        }
    });

}
function home_step2(id) {

    var url = base_url + "homeloan/homestep2/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=2");
            
            $('#container').html(data).effect("slide", {distance: 5});
            
             
            
        }
    });

}
function home_step3(id) {

    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep3/" + id,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=3");

            $('#container').html(data).effect("slide", {distance: 5});
        }
    });

}

function home_step4(id) {
   
       
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep4/" +id ,
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=4");
                $('#container').html(data).effect("slide", {distance: 5});
            }
        });
    

}


function home_step5() {
   
    var RE = /^\d*\.?\d*$/;
    var RE1 = /^\d*\.?\d*$/;
    var RE2 = /(^\d{5}$)|(^\d{5}-\d{4}$)/;
     if ($('input[name=zip]').val() == '')
    {

        $('#err6').html('zip is empty');
        $('#zip').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        return false;
    } else if (!RE1.test($("#zip").val()))
    {

        $('#err6').html('zip should be number');
        $('#zip').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        return false;
    } else if (!RE2.test($("#zip").val()))
    {

        $('#err6').html('Zip code is invalid. 5 digits are mandatory');
        $('#zip').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep5/" + $('input[name=zip]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=5");
                $('#container').html(data).effect("slide", {distance: 5});
            }
        });

    }

}
function home_step6() {
    $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep6/" + $('input[name=property_value]').val() ,
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=6");
                $('#container').html(data).effect("slide", {distance: 5});
            }
        });
}

function home_step7() {
    $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep7/" + $('input[name=mortgage_bal]').val() ,
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=7");
                $('#container').html(data).effect("slide", {distance: 5});
            }
        });
}

function home_step9() {
    $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep9/0"  ,
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloanstep=9");
                $('#container').html(data).effect("slide", {distance: 5});
            }
        });
}

function step7(){
     var regex = /^[0-9]{3}\-?[0-9]{2}\-?[0-9]{4}$/;
    
    if ($('#selectMonth').val() === "") {

        $('#err').html('Month is empty');
        $('#selectMonth').focus();
        return false;
    } else if ($('#selectDate').val() === "")
    {

        $('#err').html('Day is empty');
        $('#selectDate').focus();
        return false;
    } else if ($('#selectYear').val() === "")
    {

        $('#err').html('Year is empty');
        $('#selectYear').focus();
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
            url: base_url + "homeloan/step7/" +  $('#selectMonth').val() + '/' +  $('#selectDate').val() + '/' +  $('#selectYear').val()+ '/' +  $('input[name=ssn]').val(),
            success: function (data)
            {
                  window.history.pushState("Details", "Title", base_url + "homeloan?step=7");
               $('#container').html(data).effect("slide", {distance: 5});
            }
        });
    }
}

function step8() {

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
            url: base_url + "homeloan/step8/" + $('input[name=email]').val() + '/' + $('input[name=phone]').val(),
            success: function (data)
            {
                // alert(data);
                if (data == 1)
                {
                    //location.href = base_url;
                    gtag_report_conversion(base_url);
                } else
                {
                    $('#container').html(data).effect("slide", {distance: 5});
                }
            }
        });
    }
}

/* Event snippet for Completed Auto App conversion page
 In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. */

function gtag_report_conversion(url) {
    var callback = function () {
        if (typeof (url) != 'undefined') {
            window.location = url;
        }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-829513051/iHhxCPeEpYABENu6xYsD',
        'event_callback': callback
    });
    return false;
}
 