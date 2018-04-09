var base_url = 'http://culoanportal.com/';
function step2(id) {

    var url = base_url + "auto/step2/" + id;
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            $('#container').html(data).effect("slide", {distance: 5});
        }
    });

}
function step3(id) {

    $.ajax({
        type: "GET",
        url: base_url + "auto/step3/" + id,
        success: function (data)
        {

            $('#container').html(data).effect("slide", {distance: 5});
        }
    });

}

function step4() {
    var RE = /^[A-Za-z]+$/;
    if ($('input[name=cemployer]').val() == '')
    {

        $('#err1').html('Your Current Employe is empty');
        $('#cemployer').focus();
        return false;
    } else if (!RE.test($("#cemployer").val()))
    {

        $('#err1').html('Your Current Employer should have letter only ');
        $('#cemployer').focus();
        return false;
    } else if ($('input[name=job_title]').val() == '')
    {

        $('#err2').html('Your Job Title is empty');
        $('#job_title').focus();
        $('#err1').html('');
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "auto/step4/" + $('input[name=cemployer]').val() + '/' + $('input[name=job_title]').val(),
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
            }
        });
    }

}


function step5() {
    var RE = /^\d*\.?\d*$/;
    if ($('input[name=pre_tax_income]').val() == '')
    {

        $('#err1').html('Your Pre-tax yearly income is empty');
        $('#pre_tax_income').focus();
        return false;
    } else if (!RE.test($("#pre_tax_income").val()))
    {

        $('#err1').html('Your Pre-tax yearly income should be number');
        $('#pre_tax_income').focus();
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "auto/step5/" + $('input[name=pre_tax_income]').val(),
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
            }
        });

    }

}
function step6() {
    var regex = /^[0-9]{3}\-?[0-9]{2}\-?[0-9]{4}$/;
    var RE = /^[A-Za-z]+$/;
    var RE1 = /^\d*\.?\d*$/;
    
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
    }  else if ($('#state').val() == '' )
    {
        //alert($(this).val());
       // alert($('input[name=state]').has('option').length);
        $('#err4').html('state is empty');
        $('#state').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        return false;
    } 
    else if ($('#city').val() == '' )
    {
        $('#err5').html('city is empty');
        $('#city').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
         $('#err4').html('');
        return false;
    }
    else if ($('input[name=zip]').val() == '')
    {

        $('#err6').html('zip is empty');
        $('#zip').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        return false;
    }else if (!RE1.test($("#zip").val()))
    {

        $('#err6').html('zip is should be number');
        $('#zip').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
         return false;
    }
    
    else if ($('input[name=ssn]').val() == '')
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
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "auto/step6/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val() + '/' + $('input[name=address]').val() + '/' + $('#city').val() + '/' + $('#state').val() + '/' + $('input[name=zip]').val() + '/' + $('input[name=ssn]').val(),
            success: function (data)
            {

                $('#container').html(data).effect("slide", {distance: 5});
            }
        });
    }

}
function step7() {

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
    } else if ($('input[name=phone]').val() == '')
    {

        $('#err2').html('Your phone is empty');
        $('#phone').focus();
        $('#err1').html('');
        return false;
    } else
    {
        $('#err2').html('');

        $.ajax({
            type: "GET",
            url: base_url + "auto/step7/" + $('input[name=email]').val() + '/' + $('input[name=phone]').val(),
            success: function (data)
            {
                //alert(data);
                if(data==1)
                {
               location.href = base_url;
 
                }
                else
                {
                $('#container').html(data).effect("slide", {distance: 5});
            }
            }
        });


    }

}
 