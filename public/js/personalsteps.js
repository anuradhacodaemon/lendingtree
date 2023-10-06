var base_url = $('#domain').val();
if (window.performance) {
  console.info("window.performance work's fine on this browser");
}
  if (performance.navigation.type == 1) {
   
    if (window.location.search.indexOf('step=1') > -1) {
         
      $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        }); 
    }
    if (window.location.search.indexOf('step=2') > -1) {
       
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=3') > -1) {
       
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step3",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=4') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step4",
            success: function (data)
            {
                
                $('#container').html(data);
                
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=5') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step5",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
   if (window.location.search.indexOf('step=6') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step6",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=7') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step7",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }  
    
    if (window.location.search.indexOf('step=8') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('step=9') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }   

    if (window.location.search.indexOf('step=10') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    } 
     
  }
  
   window.addEventListener('popstate', function(event) {
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
         
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=2') > -1) {
         
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=3') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step3",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=4') > -1) {
       $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step4",
            success: function (data)
            {
               
                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('step=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step5",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
     if (window.location.search.indexOf('step=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step6",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
     if (window.location.search.indexOf('step=7') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step7",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
   
        if (window.location.search.indexOf('step=8') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('step=9') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('step=10') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"personal/personal_step10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
//}
 }, false);
// function step1(id) {
//     ga('send', 'event', 'BMTCCU', 'personal loan', 'type of loan');
//     var url = base_url + "personal/personal_step1/" + id;
    
//     $.ajax({
//         type: "GET",
//         url: url,
//         success: function (data)
//         {
            
           
//             window.history.pushState("Details", "Title", base_url + "personal?step=1");
            
//             $('#container').html(data);
            
             
            
//         }
//     });

// }
function personal_step2(id) {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'type of loan');
    var url = base_url + "personal/personal_step2/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "personal?personal_step=2");
            
            $('#container').html(data);
            
             
            
        }
    });

}
function personal_step3() {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'Requested Amount');
    var RE1 = /^\d+$/;
    var requested_amount = $('input[name=requested_amount1]').val();
    if (($("#requested_amount").val()) == '') 
    {

        $('#err2').html('Requested Amount Required');
        $('#requested_amount').focus();
        $('#err1').html('');
        return false;
    } else
    {
        $('#err2').html('');
    $.ajax({
        type: "GET",
        url: base_url + "personal/personal_step3/" + requested_amount,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "personal?personal_step=3");

            $('#container').html(data);
        }
    });
 }



}

function personal_step4() {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'Current Employer');
    var RE = /^[A-Za-z]+$/;
    var RE1 = /^\d*\.?\d*$/;
    if ($('input[name=cemployer]').val() == '')
    {

        $('#err1').html('Your Current Employer is empty');
        $('#cemployer').focus();
        return false;
    } else if ($('input[name=job_title]').val() == '')
    {

        $('#err2').html('How many years have you worked there is empty');
        $('#job_title').focus();
        $('#err1').html('');
        return false;
    } else if (!RE1.test($("#job_title").val()))
    {

        $('#err2').html('Only digits allowed ');
        $('#job_title').focus();
        $('#err1').html('');
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "personal/personal_step4/" + $('input[name=cemployer]').val() + '/' + $('input[name=job_title]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "personal?personal_step=4");
                $('#container').html(data);
            }
        });
    }

}


function personal_step5() {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'Pre-Tax Monthly Income');
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
    }else if ($('#total_dependent').val() == '')
    {
        $('#err3').html('Please select the option for the number of dependents');
        $('#total_dependent').focus();
        $('#err1').html('');
        $('#err2').html('');
        return false;
    }
     else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "personal/personal_step5/" + $('input[name=pre_tax_income1]').val() + "/" + $("#total_dependent").val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "personal?personal_step=5");
                $('#container').html(data);
            }
        });

    }

}
function personal_step6() {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'Your Details');
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
    }else
    {
        $('#err2').html('');
        var city = 0;
        if ($('#city').val() > 0)
            city = $('#city').val();

        $.ajax({
            type: "GET",
          //  url: base_url + "personal/personal_step6/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val() + '/' + $('input[name=address]').val() + '/' +  $('#city_name').val() + '/' + $('#state_name').val() + '/' + $('input[name=p_zip_code]').val() + '/' + $('input[name=ssn]').val(),
          url: base_url + "personal/personal_step6/",
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
                window.history.pushState("Details", "Title", base_url + "personal?personal_step=6");
                $('#container').html(data);
            }
        });
    }
}

function personal_step7(){
    ga('send', 'event', 'BMTCCU', 'personal loan', 'When Were You Born');
     var regex = /^[0-9]{3}\-?[0-9]{2}\-?[0-9]{4}$/;
    
        if ($('#dob').val() === "") {

        $('#err').html('Date of Birth is empty');
        $('#dob').focus();
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
               url: base_url + "personal/personal_step7/" +  $('#dob').val() + '/'  +  $('input[name=ssn]').val(),
            success: function (data)
            {
                  window.history.pushState("Details", "Title", base_url + "personal?personal_step=7");
               $('#container').html(data);
            }
        });
    }
}

function personal_step8() {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'Submit');
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
            url: base_url + "personal/personal_step8/" + $('input[name=email]').val() + '/' + $('input[name=phone]').val(),
            success: function (data)
            {
                // alert(data);
                if (data == 1)
                {
                    //location.href = base_url;
                    gtag_report_conversion(base_url);
                } else
                {
                    window.history.pushState("Details", "Title", base_url + "personal?personal_step=8");
                    $('#container').html(data);
                }
            }
        });
    }
}

function personal_step9(val) {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'laid_off_for_payment_waived');
    var url = base_url + "personal/personal_step9/" + val;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "personal?personal_step=9");
            
            $('#container').html(data);
            
        }
    });

}

function personal_step10(val) {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'i_represent_stated');

    let isChecked = $('#i_represent_stated').is(':checked');

    if (isChecked == false)
    {
        $('#err1').html('The Consent field is required.');
        $('#i_represent_stated').focus();
        return false;
    }
    
            $.ajax({
                type: "GET",
                url: base_url + "personal/personal_step10/",
                data: {
                i_represent_stated: $('input[name=i_represent_stated]').val(),
                date_of_application: $('input[name=date_of_application]').val()
            },
           success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "personal?personal_step=10");
                $('#container').html(data);
            }
        });;

}

function personal_step11(val) {
    ga('send', 'event', 'BMTCCU', 'personal loan', 'submit');
    var url = base_url + "personal/personal_step11/" + val;
    
    $.ajax({
        type: "GET",
        url: url,
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