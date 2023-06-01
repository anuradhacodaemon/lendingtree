var base_url = $('#domain').val();

if (window.performance) 
{
    console.info("window.performance work's fine on this browser");
}
$(document).ready(function() {
        var urlParams = new URLSearchParams(window.location.search);
        var step = parseInt(urlParams.get('step'));;

        //var step = $("#step_count").val();
        //alert(step);

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
//step 11
function anotherSourceIncome(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('p_another_source_income');
    var formData = new FormData(form);
    formData.append('p_another_source', value);
    getFormId(form);
}
//step 13
function coMaker(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('co_maker');
    var formData = new FormData(form);
    formData.append('co_maker', value);
    getFormId(form);
}
//step 14
function miltaryInvolve(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('miltry_involve');
    var formData = new FormData(form);
    formData.append('miltary_involve', value);
    getFormId(form);
}
//step 15
function memberCredit(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('member_credit');
    var formData = new FormData(form);
    formData.append('member_credit', value);
    getFormId(form);
}
//step 16
function OutstandingJudge(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('outstanding_judgement');
    var formData = new FormData(form);
    formData.append('outstanding_judgement', value);
    getFormId(form);
}
//step 17
function BankruptcyJudge(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('bankruptcy_adjustmnt');
    var formData = new FormData(form);
    formData.append('bankruptcy_adjustmnt', value);
    getFormId(form);
}
//step 18
function ForceClosure(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('force_closure');
    var formData = new FormData(form);
    formData.append('force_closure', value);
    getFormId(form);
}
//step 19
function PartyToLawSuit(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('any_law_suit');
    var formData = new FormData(form);
    formData.append('any_law_suit', value);
    getFormId(form);
}
//step 20
function CitizenOtherThanUS(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('other_than_us_citizen');
    var formData = new FormData(form);
    formData.append('other_than_us_citizen', value);
    getFormId(form);
}
//step 21
function IncomeGetReducedInNxt2Y(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('income_get_reduce_nxt_2y');
    var formData = new FormData(form);
    formData.append('income_get_reduce_nxt_2y', value);
    getFormId(form);
}
//step 22.1
function onDieCancelLoan(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('on_die_cancel_loan');
    var formData = new FormData(form);
    formData.append('on_die_cancel_loan', value);
    getFormId(form);
}
//step 23
function addCosigner(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('add_cosigner');
    var formData = new FormData(form);
    formData.append('add_cosigner', value);
    getFormId(form);
}

//
//INSERT OR UPDATE DATA THROUGH AJAX
    function getFormId(form)
    {
        event.preventDefault();
       // alert('you are1');
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
        if(step == 11)
        {
            var selected_home_status = $('input[name="p_another_source"]:checked').val();
            formData.append('p_another_source', selected_home_status);
        }
        if(step == 13)
        {
            var selected_home_status = $('input[name="co_maker"]:checked').val();
            formData.append('co_maker', selected_home_status);
        }
        if(step == 14)
        {
            var selected_home_status = $('input[name="miltary_involve"]:checked').val();
            formData.append('miltary_involve', selected_home_status);
        }
        if(step == 15)
        {
            var selected_home_status = $('input[name="member_credit"]:checked').val();
            formData.append('member_credit', selected_home_status);
        }
        if(step == 16)
        {
            var selected_home_status = $('input[name="outstanding_judgement"]:checked').val();
            formData.append('outstanding_judgement', selected_home_status);
        }
        if(step == 17)
        {
            var selected_home_status = $('input[name="bankruptcy_adjustmnt"]:checked').val();
            formData.append('bankruptcy_adjustmnt', selected_home_status);
        }
        if(step == 18)
        {
            var selected_home_status = $('input[name="force_closure"]:checked').val();
            formData.append('force_closure', selected_home_status);
        }
        if(step == 19)
        {
            var selected_home_status = $('input[name="any_law_suit"]:checked').val();
            formData.append('any_law_suit', selected_home_status);
        }
        if(step == 20)
        {
            var selected_home_status = $('input[name="other_than_us_citizen"]:checked').val();
            formData.append('other_than_us_citizen', selected_home_status);
        }
        if(step == 21)
        {
            var selected_home_status = $('input[name="income_get_reduce_nxt_2y"]:checked').val();
            formData.append('income_get_reduce_nxt_2y', selected_home_status);
        }
        if(step == 22.1)
        {
            var selected_home_status = $('input[name="on_die_cancel_loan"]:checked').val();
            formData.append('on_die_cancel_loan', selected_home_status);
        }
        if(step == 23)
        {
            var selected_home_status = $('input[name="add_cosigner"]:checked').val();
            formData.append('add_cosigner', selected_home_status);
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
                      //alert('you are in 4');
                      autoloan_step5();
                  }
                  if(step == 5)
                  {
                      //alert('you are in 5');
                      autoloan_step6();
                  }
                  if(step == 6)
                  {
                      //alert('you are in 6');
                      autoloan_step7();
                  }
                  if(step == 7)
                  {
                      //alert('you are in 7');
                      autoloan_step8();
                  }
                  if(step == 8)
                  {
                      //alert('you are in 8');
                      autoloan_step9();
                  }
                  if(step == 9)
                  {
                      //alert('you are in 9');
                      autoloan_step10();
                  }
                  if(step == 10)
                  {
                      //alert('you are in 10');
                      autoloan_step10_1();
                  }
                  if(step == 10.1)
                  {
                      //alert('you are in 10.1');
                      autoloan_step11();
                  }
                  if(step == 11)
                  {
                      //alert('you are in 11 >>>'+ selected_home_status);
                      if(selected_home_status == 'yes')
                      {
                        autoloan_step11_1();
                      }
                      else{
                            //alert('you are in 11 >>>'+ selected_home_status);
                            autoloan_step12();
                          }
                  }
                  if(step == 11.1)
                  {
                    //alert('you are in 11.1');
                    autoloan_step12();
                  }
                  if(step == 12)
                  {
                    //alert('you are in 12');
                    autoloan_step13();
                  }
                  if(step == 13)
                  {
                    //alert('you are in 13');
                    autoloan_step14();
                  }
                  if(step == 14)
                  {
                    //alert('you are in 14');
                    autoloan_step15();
                  }
                  if(step == 15)
                  {
                    //alert('you are in 15');
                    autoloan_step16();
                  }
                  if(step == 16)
                  {
                    //alert('you are in 16');
                    autoloan_step17();
                  }
                  if(step == 17)
                  {
                    //alert('you are in 17');
                    autoloan_step18();
                  }
                  if(step == 18)
                  {
                    //alert('you are in 18');
                    autoloan_step19();
                  }
                  if(step == 19)
                  {
                    //alert('you are in 19');
                    autoloan_step20();
                  }
                  if(step == 20)
                  {
                    //alert('you are in 20');
                    autoloan_step21();
                  }
                  if(step == 21)
                  {
                    //alert('you are in 21');
                    autoloan_step22();
                  }
                  if(step == 22)
                  {
                    //alert('you are in 22');
                    autoloan_step22_1();
                  }
                  if(step == 22.1)
                  {
                    //alert('you are in 22.1');
                    autoloan_step23();
                  }
                  if(step == 23)
                  {
                      //alert('you are in 23 >>>'+ selected_home_status);
                      alert('Next Part is yet to done');
                      /*if(selected_home_status == 'yes')
                      {
                        autoloan_step11_1();
                      }
                      else{
                            alert('you are in 23 >>>'+ selected_home_status);
                            autoloan_step12();
                          }*/
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
                        //alert('you are in 4');
                        $('#err1').append(obj['error_messages']['marital_status']);
                    }
                    if(step == 5)
                    {
                        //alert('you are in 5');
                        $('#err1').append(obj['error_messages']['address']);
                        $('#err2').append(obj['error_messages']['living_there_years']);
                        $('#err3').append(obj['error_messages']['monthly_pay']);
                    }
                    if(step == 6)
                    {
                        //alert('you are in 6');
                        $('#err1').append(obj['error_messages']['home_status']);
                    }
                    if(step == 7)
                    {
                        //alert('you are in 7');
                        $('#err1').append(obj['error_messages']['relative_firstname']);
                        $('#err2').append(obj['error_messages']['relative_relation']);
                        $('#err3').append(obj['error_messages']['relative_address']);
                        $('#err4').append(obj['error_messages']['relatives_phone']);
                    }
                    if(step == 8)
                    {
                        //alert('you are in 8');
                        $('#err1').append(obj['error_messages']['personal_refrence']);
                        $('#err2').append(obj['error_messages']['personal_refrence_phone']);
                        $('#err3').append(obj['error_messages']['personal_refrence_address']);
                    }
                    if(step == 9)
                    {
                        //alert('you are in 9');
                        $('#err1').append(obj['error_messages']['employer_name']);
                        $('#err2').append(obj['error_messages']['employer_job_title']);
                        $('#err3').append(obj['error_messages']['supervisor_name']);
                        $('#err4').append(obj['error_messages']['working_years']);
                        $('#err5').append(obj['error_messages']['business_address']);
                    }
                    if(step == 10)
                    {
                        //alert('you are in 10');
                        $('#err1').append(obj['error_messages']['monthly_income_pre_tax']);
                    }
                    if(step == 10.1)
                    {
                        //alert('you are in 10.1');
                        $('#err1').append(obj['error_messages']['waiver']);
                    }
                    if(step == 11)
                    {
                        //alert('you are in 10.1');
                        $('#err1').append(obj['error_messages']['p_another_source']);
                    }
                    if(step == 11.1)
                    {
                        //alert('you are in 11.1');
                        $('#err1').append(obj['error_messages']['second_income_source']);
                        $('#err2').append(obj['error_messages']['second_monthly_income']);
                    }
                    if(step == 12)
                    {
                        //alert('you are in 12');
                        $('#err1').append(obj['error_messages']['previous_employer_name']);
                        $('#err2').append(obj['error_messages']['previous_working_years']);
                    }
                    if(step == 13)
                    {
                        //alert('you are in 13');
                        $('#err1').append(obj['error_messages']['co_maker']);
                    }
                    if(step == 14)
                    {
                        //alert('you are in 14');
                        $('#err1').append(obj['error_messages']['miltary_involve']);
                    }
                    if(step == 15)
                    {
                        //alert('you are in 15');
                        $('#err1').append(obj['error_messages']['member_credit']);
                    }
                    if(step == 16)
                    {
                        //alert('you are in 16');
                        $('#err1').append(obj['error_messages']['outstanding_judgement']);
                    }
                    if(step == 17)
                    {
                        //alert('you are in 17');
                        $('#err1').append(obj['error_messages']['bankruptcy_adjustmnt']);
                    }
                    if(step == 18)
                    {
                        //alert('you are in 18');
                        $('#err1').append(obj['error_messages']['force_closure']);
                    }
                    if(step == 19)
                    {
                        //alert('you are in 19');
                        $('#err1').append(obj['error_messages']['any_law_suit']);
                    }
                    if(step == 20)
                    {
                        //alert('you are in 20');
                        $('#err1').append(obj['error_messages']['other_than_us_citizen']);
                    }
                    if(step == 21)
                    {
                        //alert('you are in 21');
                        $('#err1').append(obj['error_messages']['income_get_reduce_nxt_2y']);
                    }
                    if(step == 22)
                    {
                        //alert('you are in 22');
                        $('#err1').append(obj['error_messages']['i_represnt_accurate']);
                    }
                    if(step == 22.1)
                    {
                        //alert('you are in 22.1');
                        $('#err1').append(obj['error_messages']['on_die_cancel_loan']);
                    }
                    if(step == 23)
                    {
                        //alert('you are in 23');
                        $('#err1').append(obj['error_messages']['add_cosigner']);
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
            $('#container').html(data);                
        }
    });
}
function autoloan_step11_1()
{  
    $('#step_count').val(11.1);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step11_1/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=11.1");
            $('#container').html(data);                
        }
    });
}
function autoloan_step12()
{  
    $('#step_count').val(12);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step12/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=12");
            $('#container').html(data);                
        }
    });
}
function autoloan_step13()
{  
    $('#step_count').val(13);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step13/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=13");
            $('#container').html(data);                
        }
    });
}
function autoloan_step14()
{  
    $('#step_count').val(14);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step14/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=14");
            $('#container').html(data);                
        }
    });
}
function autoloan_step15()
{  
    $('#step_count').val(15);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step15/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=15");
            $('#container').html(data);                
        }
    });
}
function autoloan_step16()
{  
    $('#step_count').val(16);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step16/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=16");
            $('#container').html(data);                
        }
    });
}
function autoloan_step17()
{  
    $('#step_count').val(17);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step17/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=17");
            $('#container').html(data);                
        }
    });
}
function autoloan_step18()
{  
    $('#step_count').val(18);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step18/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=18");
            $('#container').html(data);                
        }
    });
}
function autoloan_step19()
{  
    $('#step_count').val(19);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step19/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=19");
            $('#container').html(data);                
        }
    });
}
function autoloan_step20()
{  
    $('#step_count').val(20);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step20/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=20");
            $('#container').html(data);                
        }
    });
}
function autoloan_step21()
{  
    $('#step_count').val(21);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step21/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=21");
            $('#container').html(data);                
        }
    });
}
function autoloan_step22()
{  
    $('#step_count').val(22);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step22/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=22");
            $('#container').html(data);                
        }
    });
}
function autoloan_step22_1()
{  
    $('#step_count').val(22.1);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step22_1/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=22.1");
            $('#container').html(data);                
        }
    });
}
function autoloan_step23()
{  
    $('#step_count').val(23);
    $.ajax({
        type: "POST",
        url:  base_url + "auto/step23/",
        data:{},
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "auto?step=23");
            $('#container').html(data);                
        }
    });
}








//


