var base_url = $('#domain').val();
if (window.performance) {
  console.info("window.performance work's fine on this browser");
}
    var urlParams = new URLSearchParams(window.location.search);
    var step = parseInt(urlParams.get('step'));

    console.log("The step from lending>>>"+ step);
  if (performance.navigation.type == 1) {
    
    if (window.location.search.indexOf('step=1') > -1) {
    $('#step_count').val(1);    
      $.ajax({
            type: "GET",
            url: base_url +"auto/step1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        }); 
    }
    if (window.location.search.indexOf('step=2') > -1) {
        $('#step_count').val(2); 
       $.ajax({
            type: "GET",
            url: base_url +"auto/step2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
     if (window.location.search.indexOf('step=3') > -1) {
        $('#step_count').val(3); 
         $.ajax({
             type: "GET",
             url: base_url +"auto/step3",
             success: function (data)
             {

                 $('#container').html(data);
                 //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
             }
         });
     }
    if (window.location.search.indexOf('step=4') > -1) {
      $('#step_count').val(4);  
       $.ajax({
            type: "GET",
            url: base_url +"auto/step4",
            success: function (data)
            {
                
                $('#container').html(data);
                
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=5') > -1) {
        $('#step_count').val(5);  
        $.ajax({
            type: "POST",
            url: base_url +"auto/step5",
            data:{},
            success: function (data)
            {
                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
   if (window.location.search.indexOf('step=6') > -1) {
       $('#step_count').val(6);  
       $.ajax({
            type: "GET",
            url: base_url +"auto/step6",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=7') > -1) {
        $('#step_count').val(7);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step7",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }    
    if (window.location.search.indexOf('step=8') > -1) {
        $('#step_count').val(8);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }   
    if (window.location.search.indexOf('step=9') > -1) {
        $('#step_count').val(9);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    } 
    if (window.location.search.indexOf('step=10') > -1) {
        $('#step_count').val(10);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }  
    if (window.location.search.indexOf('step=10.1') > -1) {
        $('#step_count').val(10.1);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step10_1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }    
     
  }
  
   window.addEventListener('popstate', function(event) {
        console.log("This is state>>" + event.navigation);

       /** if (event.state) {
            //alert(event.state);
        }
         if (window.location.search.indexOf('step=1') > -1) {
            alert(1);  
         }
         if (window.location.search.indexOf('step=2') > -1) {
            alert(2);  
         }
       **/
   
//window.onpopstate = function ()
//{
   
    if (window.location.search.indexOf('step=1') > -1) {
        $('#step_count').val(1);  
        $.ajax({
            type: "GET",
            url: base_url +"auto/step1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=2') > -1) {
        $('#step_count').val(2); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=3') > -1) {
        $('#step_count').val(3); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step3",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=4') > -1) {
        $('#step_count').val(4); 
       $.ajax({
            type: "GET",
            url: base_url +"auto/step4",
            success: function (data)
            {
               
                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=5') > -1) {
        $('#step_count').val(5); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step5",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
     if (window.location.search.indexOf('step=6') > -1) {
        $('#step_count').val(6); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step6",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=7') > -1) {
        $('#step_count').val(7); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step7",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=8') > -1) {
        $('#step_count').val(8); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=9') > -1) {
        $('#step_count').val(9); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=10') > -1) {
        $('#step_count').val(10); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=10.1') > -1) {
        $('#step_count').val(10.1); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step10_1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
   
    
//}
 }, false);

function step1(id) {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'type of loan');
    var url = base_url + "auto/step1/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "auto?step=1");
            
            $('#container').html(data);
            
             
            
        }
    });

}
function step2(id) {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'type of loan');
    var url = base_url + "auto/step2/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "auto?step=2");
            
            $('#container').html(data);
            
             
            
        }
    });

}


function step4() {
    //ga('send', 'event', 'BMTCCU', 'auto loan', 'Current Employer');
    var RE = /^[A-Za-z]+$/;
    var RE1 = /^\d*\.?\d*$/;
    if ($('input[name=firstname]').val() == '')
    {

        $('#err1').html('Your First Name is empty');
        $('#firstname').focus();
        return false;
    } else if (!RE.test($("#firstname").val()))
    {

        $('#err1').html('Your First Name should have letter only ');
        $('#firstname').focus();
        return false;
    }
    else if ($('input[name=lastname]').val() == '')
    {

        $('#err2').html('Your First Name is empty');
        $('#lastname').focus();
        $('#err_lastname').html('');
        return false;
    } 
    else if ($('input[name=lastname]').val() == '')
    {

        $('#err2').html('Your Last Name should have letter only ');
        $('#lastname').focus();
        return false;
    } 
    else if ($('input[name=phone]').val() == '')
    {

        $('#err3').html('Your phone is empty');
        $('#phone').focus();
        $('#err1').html('');
        $('#err2').html('');
        return false;
    } else if (!RE1.test($('#phone').val()))
    {

        $('#err3').html('Your phone number should be atleast 10 digit');
        $('#phone').focus();
        $('#err1').html('');
        $('#err2').html('');
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "auto/step4/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=4");
                $('#container').html(data);
            }
        });
    }

}


/*function step5() {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Pre-Tax Monthly Income');
    var RE = /^\d*\.?\d*$/;
   
    if ($('input[name=pre_tax_income]').val() == '' || $('input[name=pre_tax_income]').val() == 0)
    {

        $('#err1').html('Your Pre-tax yearly income is empty');
        $('#pre_tax_income').focus();
        return false;
    } else if ($('#err2').val() == 0 && $('#pre_tax_income1').val()=='')
    {
        $('#err1').html('Your Pre-tax yearly income should be number');
        $('#pre_tax_income').focus();
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "auto/step5/" + $('input[name=pre_tax_income1]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=5");
                $('#container').html(data);
            }
        });

    }

}*/
function step6() {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Your Details');
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

        $('#err2').html('Your Lastname should have letter only ');
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
    } else if ($('#state').val() == '')
    {
        //alert($(this).val());
        // alert($('input[name=state]').has('option').length);
        $('#err4').html('state is empty');
        $('#state').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        return false;
    } else if ($('#city').val() == '' && !$('#city').prop('disabled'))
    {
        $('#err5').html('city is empty');
        $('#city').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        return false;
    } else if ($('input[name=zip]').val() == '')
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
        var city = 0;
        if ($('#city').val() > 0)
            city = $('#city').val();

        $.ajax({
            type: "GET",
            url: base_url + "auto/step6/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val() + '/' + $('input[name=address]').val() + '/' + city + '/' + $('#state').val() + '/' + $('input[name=zip]').val() + '/' + $('input[name=ssn]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=6");
                $('#container').html(data);
            }
        });
    }
}

function step7(){
    ga('send', 'event', 'BMTCCU', 'auto loan', 'When Were You Born');
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
            url: base_url + "auto/step7/" +  $('#selectMonth').val() + '/' +  $('#selectDate').val() + '/' +  $('#selectYear').val()+ '/' +  $('input[name=ssn]').val(),
            success: function (data)
            {
                  window.history.pushState("Details", "Title", base_url + "auto?step=7");
               $('#container').html(data);
            }
        });
    }
}

function step8() {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Submit');
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
            url: base_url + "auto/step8/" + $('input[name=email]').val() + '/' + $('input[name=phone]').val(),
            success: function (data)
            {
                // alert(data);
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
 