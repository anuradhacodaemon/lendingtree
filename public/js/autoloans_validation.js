var base_url = $('#domain').val();

if (window.performance) 
{
    console.info("window.performance work's fine on this browser");
}
$(document).ready(function() {
        var urlParams = new URLSearchParams(window.location.search);
        var step = parseInt(urlParams.get('step'));;

        //var step = $("#step_count").val();
        alert(step);

        //console.log("The urlParams>>>"+ urlParams);
        console.log("The step>>>"+ step);
});







/**
 * 
 * All the step functions for validations
 * 
 * 
 * 
 * 
*/
if(step != "" && step == 3)
{
$(document).ready(function() {
    $('#p_detailswqewq').validate({
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        rules: {
            firstname: {
                required: true,
                noSpace: true
            },
            lastname: {
                required: true,
                noSpace:true
            },
            phone:{
                required: true,
                minlength: 10,
                maxlength: 10,
                digits:true
            }
        },
        messages: {
                firstname: {
                    required: 'Please enter your firstname.'
                },
                lastname: {
                    required: 'Please enter your lastname.'
                },
                phone: {
                    required: 'Please enter your phone.',
                    minlength: 'Please enter your phone.',
                    mxnlength: 'Please enter your phone.',
                    digits: 'Please enter only digits.'
                }
        },
        submitHandler: function(form) 
        {
          alert("you are in success>>>");
          let add = parseInt(step) + 1;
          $("#step_count").val(add);    
            $.ajax({
                type: "POST",
                url: base_url + "auto/auto_step4/",
                data:{  firstname:$('input[name=firstname]').val(),
                        lastname:$('input[name=lastname]').val(),
                        phone:$('input[name=phone]').val()
                    },
                success: function (data)
                {
                    window.history.pushState("Details", "Title", base_url + "auto?step=4");
                    //window.location.pathname = "auto?step=4";
                    $('#container').html(data);
                }
            });
        }
      });
    });
}
//

/**
 * All step for AJAX
 * 
 * 
 * 
 * 
 */

jQuery.validator.addMethod("noSpace", function(value, element) { 
    return value.indexOf(" ") < 0 && value != ""; 
  }, "No space please and don't leave it empty");


//for marital status  
function getMaritalRadioBtn(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('p_details1q');
    var formData = new FormData(form);
    formData.append('marital_status', value);
    getFormId(form);
}
//for home  is Buying/Own/Rent  
function getHomeRadioBtn(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('home_id');
    var formData = new FormData(form);
    formData.append('home_status', value);
    getFormId(form);
}
//step 10.1
function geWavedStepLinkRadioBtn(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('waiver_form');
    var formData = new FormData(form);
    formData.append('waiver_payment_value', value);
    getFormId(form);
}
//step 1
function TypeOfLoan(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('typ_loan');
    var formData = new FormData(form);
    formData.append('type_loan', value);
    getFormId(form);
}
//step 2
function reqAmountLoan(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('req_amount');
    var formData = new FormData(form);
    formData.append('req_amt', value);
    getFormId(form);
}

 

//
//INSERT OR UPDATE DATA THROUGH AJAX
    function getFormId(form)
    {
        event.preventDefault();
        alert('you are1');
        var step = $('#auto_step').val();
        //var formId = document.getElementById('formID');
        //console.log("the form is here>>> "+ formId);
    
        var formData = new FormData(form);
        if(step == 1)
        {
            var selected_marital_status = $('input[name="type_loan"]:checked').val();
            formData.append('type_loan', selected_marital_status);
        }
        if(step == 2)
        {
            var selected_marital_status = $('input[name="req_amt"]:checked').val();
            formData.append('req_amt', selected_marital_status);
        }
        if(step == 4)
        {
            var selected_marital_status = $('input[name="marital_status"]:checked').val();
            formData.append('marital_status', selected_marital_status);
        }
        if(step == 6)
        {
            var selected_home_status = $('input[name="home_status"]:checked').val();
            formData.append('home_status', selected_home_status);
        }
        if(step == 10.1)
        {
            var selected_home_status = $('input[name="waiver_payment_value"]:checked').val();
            formData.append('waiver_payment_value', selected_home_status);
        }
            
        //console.log(formData);
        
        $.ajax({
            type: "POST",
            url:base_url + "auto/auto_step/",
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            success: function (data) {
              var obj = $.parseJSON(data);
              if(obj['success'] == 1)
              {
                  if(step == 1)
                  {
                      autoloan_step2();
                  }
                  if(step == 2)
                  {
                      autoloan_step3();
                  }
                  if(step == 3)
                  {
                      autoloan_step4();
                  }
                  if(step == 4)
                  {
                      alert('you are in 4');
                      autoloan_step5();
                  }
                  if(step == 5)
                  {
                      alert('you are in 5');
                      autoloan_step6();
                  }
                  if(step == 6)
                  {
                      alert('you are in 6');
                      autoloan_step7();
                  }
                  if(step == 7)
                  {
                      alert('you are in 7');
                      autoloan_step8();
                  }
                  if(step == 8)
                  {
                      alert('you are in 8');
                      autoloan_step9();
                  }
                  if(step == 9)
                  {
                      alert('you are in 9');
                      autoloan_step10();
                  }
                  if(step == 10)
                  {
                      alert('you are in 10');
                      autoloan_step10_1();
                  }
                  if(step == 10.1)
                  {
                      alert('you are in 10.1');
                      autoloan_step11();
                  }
                  
                             
              }
              else if(obj['error']==1) 
              {
                    if(step == 3)
                    {
                        $('#err1').append(obj['error_messages']['firstname']);
                        $('#err2').append(obj['error_messages']['lastname']);
                        $('#err3').append(obj['error_messages']['phone']);
                    }
                    if(step == 4)
                    {
                        alert('you are in 4');
                        $('#err1').append(obj['error_messages']['marital_status']);
                    }
                    if(step == 5)
                    {
                        alert('you are in 5');
                        $('#err1').append(obj['error_messages']['address']);
                        $('#err2').append(obj['error_messages']['living_there_years']);
                        $('#err3').append(obj['error_messages']['monthly_pay']);
                    }
                    if(step == 6)
                    {
                        alert('you are in 6');
                        $('#err1').append(obj['error_messages']['home_status']);
                    }
                    if(step == 7)
                    {
                        alert('you are in 7');
                        $('#err1').append(obj['error_messages']['relative_firstname']);
                        $('#err2').append(obj['error_messages']['relative_relation']);
                        $('#err3').append(obj['error_messages']['relative_address']);
                        $('#err4').append(obj['error_messages']['relatives_phone']);
                    }
                    if(step == 8)
                    {
                        alert('you are in 8');
                        $('#err1').append(obj['error_messages']['personal_refrence']);
                        $('#err2').append(obj['error_messages']['personal_refrence_phone']);
                        $('#err3').append(obj['error_messages']['personal_refrence_address']);
                    }
                    if(step == 9)
                    {
                        alert('you are in 9');
                        $('#err1').append(obj['error_messages']['employer_name']);
                        $('#err2').append(obj['error_messages']['employer_job_title']);
                        $('#err3').append(obj['error_messages']['supervisor_name']);
                        $('#err4').append(obj['error_messages']['working_years']);
                        $('#err5').append(obj['error_messages']['business_address']);
                    }
                    if(step == 10)
                    {
                        alert('you are in 10');
                        $('#err1').append(obj['error_messages']['monthly_income_pre_tax']);
                    }
                    if(step == 10.1)
                    {
                        alert('you are in 10.1');
                        $('#err1').append(obj['error_messages']['waiver']);
                    }
              }   
            },
            error: function(jqXHR, text, error){
                
                 //alert("Something went wrong:url issue");
            }
        });

        
    }
//
function autoloan_step2()
{   
    $('#step_count').val(2);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step2/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=2");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step3()
{   
    $('#step_count').val(3);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step3/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=3");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}

function autoloan_step4()
{   
    $('#step_count').val(4);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step4/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=4");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
//
function autoloan_step5()
{  
    $('#step_count').val(5);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step5/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=5");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step6()
{  
    $('#step_count').val(6);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step6/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=6");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step7()
{  
    $('#step_count').val(7);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step7/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=7");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step8()
{  
    $('#step_count').val(8);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step8/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=8");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step9()
{  
    $('#step_count').val(9);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step9/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=9");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step10()
{  
    $('#step_count').val(10);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step10/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=10");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step10_1()
{  
    $('#step_count').val(10.1);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step10_1/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=10.1");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}
function autoloan_step11()
{  
    $('#step_count').val(11);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step11/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=11");
            //window.location.pathname =  "auto?step=5";
            $('#container').html(data);                
        }
    });
}


//


