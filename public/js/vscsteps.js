var base_url = $('#domain').val();
if (window.performance) {
  console.info("window.performance work's fine on this browser");
}
var urlParams = new URLSearchParams(window.location.search);
var step = parseInt(urlParams.get('step'));

if (performance.navigation.type == 1) {
   
    if (window.location.search.indexOf('vscstep=1') > -1) {
         
      $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        }); 
    }
    if (window.location.search.indexOf('vscstep=2') > -1) {
       
       $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('vscstep=3') > -1) {
       
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep3",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('vscstep=4') > -1) {
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
   
    if (window.location.search.indexOf('vscstep=1') > -1) {
         
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('vscstep=2') > -1) {
         
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('vscstep=3') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep3",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('vscstep=4') > -1) {
        
       $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep4",
            success: function (data)
            {
               
                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('vscstep=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep5",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
     if (window.location.search.indexOf('vscstep=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep6",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
     if (window.location.search.indexOf('vscstep=7') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep7",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
   
    if (window.location.search.indexOf('vscstep=8') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('vscstep=9') > -1) {
        $.ajax({
            type: "GET",
            url: base_url +"vsc/vscstep9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    
//}
 }, false);
function vscstep1(id) {
    ga('send', 'event', 'MCT', 'auto loan', 'type of loan');
    var url = base_url + "vsc/vscstep1/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=1");
            
            $('#container').html(data);
            
             
            
        }
    });

}
function vscstep2(id) {
    ga('send', 'event', 'MCT', 'auto loan', 'type of loan');
    var url = base_url + "vsc/vscstep2/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=2");
            
            $('#container').html(data);
            
             
            
        }
    });

}
// function step3(id) {
//     ga('send', 'event', 'MCT', 'auto loan', 'Requested Amount');
//     $.ajax({
//         type: "GET",
//         url: base_url + "auto/step3/" + id,
//         success: function (data)
//         {
//             window.history.pushState("Details", "Title", base_url + "auto?step=3");

//             $('#container').html(data);
//         }
//     });

// }
function vscstep3(id) {
    ga('send', 'event', 'MCT', 'auto loan', 'type of loan');
    var url = base_url + "vsc/vscstep3/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=3");
            
            $('#container').html(data);
            
             
            
        }
    });

}
function vscstep4() {
    var year = $('input[name=year]').val();
    alert(year);
        //var requested_amount = $("#requested_amount").val().replace(/\D/g, '');
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Requested Amount');
    $.ajax({
        type: "GET",
        url: base_url + "vsc/vscstep4/" + vin,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=4");

            $('#container').html(data);
        }
    });

}

function vscstep41111() {
    ga('send', 'event', 'MCT', 'auto loan', 'type of loan');
    
    alert($('input[name=year]').val());
    $.ajax({
        type: "GET",
        url: base_url + "vsc/vscstep4111111/" + $('input[name=year]').val() + '/' + $('input[name=make]').val()+ '/' + $('input[name=model]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=411111");
            $('#container').html(data);
        }
    });

}

function vscstep5() {
    var vin = $('input[name=vin]').val();
    //var requested_amount = $("#requested_amount").val().replace(/\D/g, '');
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Requested Amount');
    var RE = /^[A-HJ-NPR-Z\\d]{8}[\\dX][A-HJ-NPR-Z\\d]{2}\\d{6}$/;
    if ($('input[name=vin]').val() == '')
    {

        $('#err1').html('VIN Number is empty');
        $('#vin').focus();
        return false;
    }
    // else if(!RE.test($('input[name=vin]').val()))
    // {

    //     $('#err1').html('Please Enter Correct VIN Number');
    //     $('#vin').focus();
    //     return false;
    // }
    else{
    $.ajax({
        type: "GET",
        url: base_url + "vsc/vscstep5/" + vin,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=5");

            $('#container').html(data);
        }
    });
}
}

function vscstep6() {
    var current_milage = $('input[name=current_milage]').val();
    //var requested_amount = $("#requested_amount").val().replace(/\D/g, '');
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Requested Amount');

    var RE = /^[A-HJ-NPR-Z\\d]{8}[\\dX][A-HJ-NPR-Z\\d]{2}\\d{6}$/;
    if ($('input[name=current_milage]').val() == '')
    {

        $('#err1').html('Current Milage is empty');
        $('#current_milage').focus();
        return false;
    }
    // else if(!RE.test($('input[name=vin]').val()))
    // {

    //     $('#err1').html('Please Enter Correct VIN Number');
    //     $('#vin').focus();
    //     return false;
    // }
    else{
    $.ajax({
        type: "GET",
        url: base_url + "vsc/vscstep6/" + current_milage,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=6");

            $('#container').html(data);
        }
    });
}


}

function vscstep7(id) {
    ga('send', 'event', 'MCT', 'auto loan', 'type of loan');
    var url = base_url + "vsc/vscstep7/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=7");
            
            $('#container').html(data);
            
             
            
        }
    });

}


function vscstep8(id) {
    ga('send', 'event', 'MCT', 'auto loan', 'type of loan');
    var url = base_url + "vsc/vscstep8/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=8");
            
            $('#container').html(data);
            
             
            
        }
    });

}


function vscstep9() {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Requested Amount');
    var email = $('input[name=email]').val();
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
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
    }
    // else if(!RE.test($('input[name=vin]').val()))
    // {

    //     $('#err1').html('Please Enter Correct VIN Number');
    //     $('#vin').focus();
    //     return false;
    // }
    else{
    $.ajax({
        type: "GET",
        url: base_url + "vsc/vscstep9/" + email,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "vsc?vscstep=9");

            $('#container').html(data);
        }
    });
}


}


function vscstep10(val) {
    ga('send', 'event', 'MCT', 'auto loan', 'submit');
    var url = base_url + "vsc/vscstep10/" + val;
    
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
