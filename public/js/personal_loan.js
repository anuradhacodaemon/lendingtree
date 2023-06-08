var base_url = $('#domain').val();

if (window.performance) 
{
    console.info("window.performance work's fine on this browser");
}
$(document).ready(function() {
        var urlParams = new URLSearchParams(window.location.search);
        var step = parseInt(urlParams.get('step'));;
        console.log("From Personal The step>>>"+ step);
});

//

/**
 * All step for AJAX
 * 
 * 
 * 
 * 
 */



//for marital status 4 or 25 
function getMaritalRadioBtn(step, value)
{
    if(step == 4)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('p_details1q');
        var formData = new FormData(form);
        formData.append('marital_status', value);
        getFormId(form);
    }
    if(step == 25)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_p_details1q');
        var formData = new FormData(form);
        formData.append('marital_status', value);
        getFormId(form);
    }
    
}
//for home  6/27 is Buying/Own/Rent  
function getHomeRadioBtn(step, value)
{
    if(step == 6)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('home_id');
        var formData = new FormData(form);
        formData.append('home_status', value);
        getFormId(form);
    }
    if(step == 27)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_home_id');
        var formData = new FormData(form);
        formData.append('co_home_status', value);
        getFormId(form);
    }
    
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
//step 11 or 32
function anotherSourceIncome(step, value)
{
    if(step == 11)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('p_another_source_income');
        var formData = new FormData(form);
        formData.append('p_another_source', value);
        getFormId(form);
    }
    if(step == 32)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_p_another_source_income');
        var formData = new FormData(form);
        formData.append('co_p_another_source', value);
        getFormId(form);
    }
    
}
//step 13 or 34
function coMaker(step, value)
{
    if(step == 13)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_maker');
        var formData = new FormData(form);
        formData.append('co_maker', value);
        getFormId(form);
    }
    if(step == 34)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_co_maker');
        var formData = new FormData(form);
        formData.append('co_co_maker', value);
        getFormId(form);
    }
    
}
//step 14 or 35
function miltaryInvolve(step, value)
{
    if(step == 14)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('miltry_involve');
        var formData = new FormData(form);
        formData.append('miltary_involve', value);
        getFormId(form);
    }
    if(step == 35)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_miltry_involve');
        var formData = new FormData(form);
        formData.append('co_miltary_involve', value);
        getFormId(form);
    }
    
}
//step 15 or 36
function memberCredit(step, value)
{
    if(step == 15)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('member_credit');
        var formData = new FormData(form);
        formData.append('member_credit', value);
        getFormId(form);
    }
    if(step == 36)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_member_credit');
        var formData = new FormData(form);
        formData.append('co_member_credit', value);
        getFormId(form);
    }
    
}
//step 16 or 37
function OutstandingJudge(step, value)
{
    if(step == 16)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('outstanding_judgement');
        var formData = new FormData(form);
        formData.append('outstanding_judgement', value);
        getFormId(form);
    }
    if(step == 37)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_outstanding_judgement');
        var formData = new FormData(form);
        formData.append('co_outstanding_judgement', value);
        getFormId(form);
    }
}
//step 17 or 38
function BankruptcyJudge(step, value)
{
    if(step == 17)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('bankruptcy_adjustmnt');
        var formData = new FormData(form);
        formData.append('bankruptcy_adjustmnt', value);
        getFormId(form);
    }
    if(step == 38)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_bankruptcy_adjustmnt');
        var formData = new FormData(form);
        formData.append('co_bankruptcy_adjustmnt', value);
        getFormId(form);
    }
    
}
//step 18 or 39
function ForceClosure(step, value)
{
    if(step == 18)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('force_closure');
        var formData = new FormData(form);
        formData.append('force_closure', value);
        getFormId(form);
    }
    if(step == 39)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_force_closure');
        var formData = new FormData(form);
        formData.append('co_force_closure', value);
        getFormId(form);
    }
    
}
//step 19 or 40
function PartyToLawSuit(step, value)
{
    if(step == 19)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('any_law_suit');
        var formData = new FormData(form);
        formData.append('any_law_suit', value);
        getFormId(form);
    }
    if(step == 40)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_any_law_suit');
        var formData = new FormData(form);
        formData.append('co_any_law_suit', value);
        getFormId(form);
    }
    
}
//step 20 or 41
function CitizenOtherThanUS(step, value)
{
    if(step == 20)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('other_than_us_citizen');
        var formData = new FormData(form);
        formData.append('other_than_us_citizen', value);
        getFormId(form);
    }
    if(step == 41)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_other_than_us_citizen');
        var formData = new FormData(form);
        formData.append('co_other_than_us_citizen', value);
        getFormId(form);
    }
    
}
//step 21 or 42
function IncomeGetReducedInNxt2Y(step, value)
{
    if(step == 21)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('income_get_reduce_nxt_2y');
        var formData = new FormData(form);
        formData.append('income_get_reduce_nxt_2y', value);
        getFormId(form);
    }
    if(step == 42)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_income_get_reduce_nxt_2y');
        var formData = new FormData(form);
        formData.append('co_income_get_reduce_nxt_2y', value);
        getFormId(form);
    }
    
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
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=1");
        }
        if(step == 2)
        {
            var selected_marital_status = $('input[name="req_amt"]:checked').val();
            formData.append('req_amt', selected_marital_status);
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=2");
        }
        if(step == 4 || step == 25)
        {
            if(step == 4)
            {
                var selected_marital_status = $('input[name="marital_status"]:checked').val();
                formData.append('marital_status', selected_marital_status);
            }
            if(step == 25)
            {
                var selected_marital_status = $('input[name="co_marital_status"]:checked').val();
                formData.append('co_marital_status', selected_marital_status);
            }
        }
        if(step == 6 || step == 27)
        {
            if(step == 4)
            {
                var selected_home_status = $('input[name="home_status"]:checked').val();
                formData.append('home_status', selected_home_status);
            }
            if(step == 27)
            {
                var selected_home_status = $('input[name="co_home_status"]:checked').val();
                formData.append('co_home_status', selected_home_status);
            }
        }
        if(step == 10.1)
        {
            
            var selected_home_status = $('input[name="waiver_payment_value"]:checked').val();
            formData.append('waiver_payment_value', selected_home_status);
            
        }
        if(step == 11 || step == 32)
        {
            if(step == 11)
            {
                var selected_home_status = $('input[name="p_another_source"]:checked').val();
                formData.append('p_another_source', selected_home_status);
            }
            if(step == 32)
            {
                var selected_home_status = $('input[name="co_p_another_source"]:checked').val();
                formData.append('co_p_another_source', selected_home_status);    
            }
            
        }
        if(step == 13 || step == 34)
        {
            if(step == 13)
            {
                var selected_home_status = $('input[name="co_maker"]:checked').val();
                formData.append('co_maker', selected_home_status);
            }
            if(step == 34)
            {
                var selected_home_status = $('input[name="co_co_maker"]:checked').val();
                formData.append('co_co_maker', selected_home_status);
            }
            
        }
        if(step == 14 || step == 35)
        {
            if(step == 14)
            {
                var selected_home_status = $('input[name="miltary_involve"]:checked').val();
                formData.append('miltary_involve', selected_home_status);
            }
            if(step == 35)
            {
                var selected_home_status = $('input[name="co_miltary_involve"]:checked').val();
                formData.append('co_miltary_involve', selected_home_status);
            }
            
        }
        if(step == 15 || step == 36)
        {
            if(step == 15)
            {
                var selected_home_status = $('input[name="member_credit"]:checked').val();
                formData.append('member_credit', selected_home_status);
            }
            if(step == 36)
            {
                var selected_home_status = $('input[name="co_member_credit"]:checked').val();
                formData.append('co_member_credit', selected_home_status);
            }
            
        }
        if(step == 16 || step == 37)
        {
            if(step == 16)
            {
                var selected_home_status = $('input[name="outstanding_judgement"]:checked').val();
                formData.append('outstanding_judgement', selected_home_status);
            }
            if(step == 37)
            {
                var selected_home_status = $('input[name="co_outstanding_judgement"]:checked').val();
                formData.append('co_outstanding_judgement', selected_home_status);
            }
            
        }
        if(step == 17 || step == 38)
        {
            if(step == 17)
            {
                var selected_home_status = $('input[name="bankruptcy_adjustmnt"]:checked').val();
                formData.append('bankruptcy_adjustmnt', selected_home_status);
            }
            if(step == 38)
            {
                var selected_home_status = $('input[name="co_bankruptcy_adjustmnt"]:checked').val();
                formData.append('co_bankruptcy_adjustmnt', selected_home_status);
            }
            
        }
        if(step == 18 || step == 39)
        {
            if(step == 18)
            {
                var selected_home_status = $('input[name="force_closure"]:checked').val();
                formData.append('force_closure', selected_home_status);
            }
            if(step == 39)
            {
                var selected_home_status = $('input[name="co_force_closure"]:checked').val();
                formData.append('co_force_closure', selected_home_status);
            }
            
        }
        if(step == 19 || step == 40)
        {
            if(step == 19)
            {
                var selected_home_status = $('input[name="any_law_suit"]:checked').val();
                formData.append('any_law_suit', selected_home_status);
            }
            if(step == 40)
            {
                var selected_home_status = $('input[name="co_any_law_suit"]:checked').val();
                formData.append('co_any_law_suit', selected_home_status);
            }
            
        }
        if(step == 20 || step == 41)
        {
            if(step == 20)
            {
                var selected_home_status = $('input[name="other_than_us_citizen"]:checked').val();
                formData.append('other_than_us_citizen', selected_home_status);
            }
            if(step == 41)
            {
                var selected_home_status = $('input[name="co_other_than_us_citizen"]:checked').val();
                formData.append('co_other_than_us_citizen', selected_home_status);
            }
            
        }
        if(step == 21 || step == 42)
        {
            if(step == 21)
            {
                var selected_home_status = $('input[name="income_get_reduce_nxt_2y"]:checked').val();
                formData.append('income_get_reduce_nxt_2y', selected_home_status);
            }
            if(step == 42)
            {
                var selected_home_status = $('input[name="co_income_get_reduce_nxt_2y"]:checked').val();
                formData.append('co_income_get_reduce_nxt_2y', selected_home_status);
            }
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
            url:base_url + "personalLoan/auto_step/",
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
                      personal_step2();
                  }
                  if(step == 2)
                  {
                      personal_step3();
                  }
                  if(step == 3)
                  {
                      personal_step4();
                  }
                  if(step == 4)
                  {
                      //alert('you are in 4');
                      personal_step5();
                  }
                  if(step == 5)
                  {
                      //alert('you are in 5');
                      personal_step6();
                  }
                  if(step == 6)
                  {
                      //alert('you are in 6');
                      personal_step7();
                  }
                  if(step == 7)
                  {
                      //alert('you are in 7');
                      personal_step8();
                  }
                  if(step == 8)
                  {
                      //alert('you are in 8');
                      personal_step9();
                  }
                  if(step == 9)
                  {
                      //alert('you are in 9');
                      personal_step10();
                  }
                  if(step == 10)
                  {
                      //alert('you are in 10');
                      personal_step10_1();
                  }
                  if(step == 10.1)
                  {
                      //alert('you are in 10.1');
                      personal_step11();
                  }
                  if(step == 11 || step == 32)
                  {
                        if(step == 11)
                        {
                            //alert('you are in 11 >>>'+ selected_home_status);
                            if(selected_home_status == 'yes')
                            {
                                personal_step11_1();
                            }
                            else{
                                    //alert('you are in 11 >>>'+ selected_home_status);
                                    personal_step12();
                                }
                        }
                        if(step == 32)
                        {
                            //alert('you are in 32.1 >>>'+ selected_home_status);
                            if(selected_home_status == 'yes')
                            {
                                personal_step32_1();
                            }
                            else{
                                    //alert('you are in 33 >>>'+ selected_home_status);
                                    personal_step33();
                                }
                        }
                      
                  }
                  if(step == 11.1)
                  {
                    //alert('you are in 11.1');
                    personal_step12();
                  }
                  if(step == 12)
                  {
                    //alert('you are in 12');
                    personal_step13();
                  }
                  if(step == 13 || step == 34)
                  {
                    if(step == 13)
                    {
                        //alert('you are in 13');
                        personal_step14();
                    }
                    if(step == 34)
                    {
                        //alert('you are in 13');
                        personal_step35();
                    }
                    
                  }
                  if(step == 14 || step == 35)
                  {
                    if(step == 14)
                    {
                        //alert('you are in 14');
                        personal_step15();
                    }
                    if(step == 35)
                    {
                        //alert('you are in 35');
                        personal_step36();
                    }
                    
                  }
                  if(step == 15 || step == 36)
                  {
                    if(step == 15)
                    {
                        //alert('you are in 15');
                        personal_step16();
                    }
                    if(step == 36)
                    {
                        //alert('you are in 36');
                        personal_step37();
                    }
                    
                  }
                  if(step == 16 || step == 37)
                  {
                    if(step == 16)
                    {
                        //alert('you are in 16');
                        personal_step17();
                    }
                    if(step == 37)
                    {
                        //alert('you are in 37');
                        personal_step38();
                    }                        
                  }
                  if(step == 17 || step == 38)
                  {
                    if(step == 17)
                    {
                        //alert('you are in 17');
                        personal_step18();
                    }
                    if(step == 38)
                    {
                        //alert('you are in 38');
                        personal_step39();
                    }
                    
                  }
                  if(step == 18 || step == 39)
                  {
                    if(step == 18)
                    {
                        //alert('you are in 18');
                        personal_step19();
                    }
                    if(step == 39)
                    {
                        //alert('you are in 39');
                        personal_step40();
                    }
                    
                  }
                  if(step == 19 || step == 40)
                  {
                    if(step == 19)
                    {
                        //alert('you are in 19');
                        personal_step20();
                    }
                    if(step == 40)
                    {
                        //alert('you are in 40');
                        personal_step41();
                    }
                  }
                  if(step == 20 || step == 41)
                  {
                    if(step == 20)
                    {
                        //alert('you are in 20');
                        personal_step21();
                    }
                    if(step == 41)
                    {
                        //alert('you are in 41');
                        personal_step42();
                    }
                    
                  }
                  if(step == 21 || step == 42)
                  {
                    if(step == 21)
                    {
                        //alert('you are in 21');
                        personal_step22();
                    }
                    if(step == 42)
                    {
                        //alert('you are in 42');
                        personal_step43();
                    }
                    
                  }
                  if(step == 22)
                  {
                    //alert('you are in 22');
                    personal_step22_1();
                  }
                  if(step == 22.1)
                  {
                    //alert('you are in 22.1');
                    personal_step23();
                  }
//================THIS IS A FINAL STEP ON 23 and 43 ========================================
                  if(step == 23 || step == 43)
                  {
                    if(step == 23)
                    {
                        //alert('you are in 23 >>>'+ selected_home_status);
                        if(selected_home_status == 'yes')
                        {
                            personal_step24();
                        }
                        else{
                                //alert('you are in 23 >>> Success is coming soon');
                                if(obj['message'] != "")
                                {
                                    let text = obj['message'];
                                    let newText = text.replace(/\./g, ".<br>");
                                    $('#showMsgToApplicant').html(newText);
                                    $('#exampleModal').modal('show');
                                    setInterval(function() {
                                        $('#exampleModal').modal('hide');
                                        $('#showMsgToApplicant').html('');
                                        window.location.href = base_url;
                                    }, 5000);
                                }
                            }
                    }
                    if(step == 43)
                    {
                        //alert('you are in 43 >>> Success is coming soon');
                        if(obj['message'] != "")
                        {
                            let text = obj['message'];
                            let newText = text.replace(/\./g, ".<br>");
                            $('#showMsgToApplicant').html(newText);
                            $('#exampleModal').modal('show');
                            setInterval(function() {
                                $('#exampleModal').modal('hide');
                                $('#showMsgToApplicant').html('');
                                window.location.href = base_url;
                            }, 5000);
                        }
                    }
                      
                  }
                  if(step == 24)
                  {
                    //alert('you are in 24 >>>');
                    personal_step25();
                  }
                  if(step == 25)
                  {
                    //alert('you are in 25 >>>');
                    personal_step26();
                  }
                  if(step == 26)
                  {
                    //alert('you are in 26 >>>');
                    personal_step27();
                  }
                  if(step == 27)
                  {
                    //alert('you are in 27 >>>');
                    personal_step28();
                  }
                  if(step == 28)
                  {
                    //alert('you are in 28 >>>');
                    personal_step29();
                  }
                  if(step == 29)
                  {
                    //alert('you are in 29 >>>');
                    personal_step30();
                  }
                  if(step == 30)
                  {
                    //alert('you are in 30 >>>');
                    personal_step31();
                  }
                  if(step == 31)
                  {
                    //alert('you are in 31 >>>');
                    personal_step32();
                  }
                  if(step == 32.1)
                  {
                    //alert('you are in 32.1 >>>');
                    personal_step33();
                  }
                  if(step == 33)
                  {
                    //alert('you are in 33 >>>');
                    personal_step34();
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
                    if(step == 4 || step == 25)
                    {
                        //alert('you are in 4');
                        if(step == 4)
                        {
                            $('#err1').append(obj['error_messages']['marital_status']);
                        }
                        if(step == 25)
                        {
                            $('#err1').append(obj['error_messages']['co_marital_status']);
                        }
                        
                    }
                    if(step == 5)
                    {
                        //alert('you are in 5');
                        $('#err1').append(obj['error_messages']['address']);
                        $('#err2').append(obj['error_messages']['living_there_years']);
                        $('#err3').append(obj['error_messages']['monthly_pay']);
                    }
                    if(step == 6 || step == 27)
                    {
                        //alert('you are in 6');
                        if(step == 6)
                        {
                            $('#err1').append(obj['error_messages']['home_status']);
                        }
                        if(step == 27)
                        {
                            $('#err1').append(obj['error_messages']['co_home_status']);
                        }
                        
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
                    if(step == 11 || step == 32)
                    {
                        if(step == 11)
                        {
                            //alert('you are in 10.1');
                            $('#err1').append(obj['error_messages']['p_another_source']);
                        }
                        if(step == 32)
                        {
                            //alert('you are in 10.1');
                            $('#err1').append(obj['error_messages']['co_p_another_source']);
                        }
                        
                    }
                    if(step == 11.1 || step == 32.1)
                    {
                        if(step == 11.1)
                        {
                            //alert('you are in 11.1');
                            $('#err1').append(obj['error_messages']['second_income_source']);
                            $('#err2').append(obj['error_messages']['second_monthly_income']);
                        }
                        if(step == 32.1)
                        {
                            //alert('you are in 11.1');
                            $('#err1').append(obj['error_messages']['cosigner_second_income_source']);
                            $('#err2').append(obj['error_messages']['cosigner_second_monthly_income']);
                        }
                        
                    }
                    if(step == 12 || step == 33)
                    {
                        if(step == 12)
                        {
                            //alert('you are in 12');
                            $('#err1').append(obj['error_messages']['previous_employer_name']);
                            $('#err2').append(obj['error_messages']['previous_working_years']);
                        }
                        if(step == 33)
                        {
                            //alert('you are in 12');
                            $('#err1').append(obj['error_messages']['cosigner_previous_employer_name']);
                            $('#err2').append(obj['error_messages']['cosigner_previous_working_years']);
                        }
                       
                    }
                    if(step == 13 || step == 34)
                    {
                        if(step == 13)
                        {
                            //alert('you are in 13');
                            $('#err1').append(obj['error_messages']['co_maker']);
                        }
                        if(step == 34)
                        {
                            //alert('you are in 13');
                            $('#err1').append(obj['error_messages']['co_co_maker']);
                        }
                        
                    }
                    if(step == 14 || step == 35)
                    {
                        if(step == 14)
                        {
                            //alert('you are in 14');
                            $('#err1').append(obj['error_messages']['miltary_involve']);
                        }
                        if(step == 35)
                        {
                            //alert('you are in 14');
                            $('#err1').append(obj['error_messages']['co_miltary_involve']);
                        }
                    }
                    if(step == 15 || step == 36)
                    {
                        if(step == 15)
                        {
                            //alert('you are in 15');
                            $('#err1').append(obj['error_messages']['member_credit']);
                        }
                        if(step == 36)
                        {
                            alert('you are in 36');
                            $('#err1').append(obj['error_messages']['co_member_credit']);
                        }
                    }
                    if(step == 16 || step == 37)
                    {
                        if(step == 16)
                        {
                            //alert('you are in 16');
                            $('#err1').append(obj['error_messages']['outstanding_judgement']);
                        }
                        if(step == 37)
                        {
                            //alert('you are in 16');
                            $('#err1').append(obj['error_messages']['co_outstanding_judgement']);
                        }
                        
                    }
                    if(step == 17 || step == 38)
                    {
                        if(step == 17)
                        {
                            //alert('you are in 17');
                            $('#err1').append(obj['error_messages']['bankruptcy_adjustmnt']);
                        }
                        if(step == 38)
                        {
                            //alert('you are in 17');
                            $('#err1').append(obj['error_messages']['co_bankruptcy_adjustmnt']);
                        }
                        
                    }
                    if(step == 18 || step == 39)
                    {
                        if(step == 18)
                        {
                            //alert('you are in 18');
                            $('#err1').append(obj['error_messages']['force_closure']);
                        }
                        if(step == 39)
                        {
                            //alert('you are in 18');
                            $('#err1').append(obj['error_messages']['co_force_closure']);
                        }
                        
                    }
                    if(step == 19 || step == 40)
                    {
                        if(step == 19)
                        {
                            //alert('you are in 19');
                            $('#err1').append(obj['error_messages']['any_law_suit']);
                        }
                        if(step == 40)
                        {
                            //alert('you are in 19');
                            $('#err1').append(obj['error_messages']['co_any_law_suit']);
                        }
                        
                    }
                    if(step == 20 || step == 41)
                    {
                        if(step == 20)
                        {
                            //alert('you are in 20');
                            $('#err1').append(obj['error_messages']['other_than_us_citizen']);
                        }
                        if(step == 41)
                        {
                            //alert('you are in 41');
                            $('#err1').append(obj['error_messages']['co_other_than_us_citizen']);
                        }
                        
                    }
                    if(step == 21 || step == 42)
                    {
                        if(step == 21)
                        {
                            //alert('you are in 21');
                            $('#err1').append(obj['error_messages']['income_get_reduce_nxt_2y']);
                        }
                        if(step == 42)
                        {
                            //alert('you are in 21');
                            $('#err1').append(obj['error_messages']['co_income_get_reduce_nxt_2y']);
                        }
                    }
                    if(step == 22 || step == 43)
                    {
                        if(step == 22)
                        {
                            //alert('you are in 22');
                            $('#err1').append(obj['error_messages']['i_represnt_accurate']);
                        }
                        if(step == 43)
                        {
                            //alert('you are in 43');
                            $('#err1').append(obj['error_messages']['co_i_represnt_accurate']);
                        }
                        
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
                    if(step == 24)
                    {
                        //alert('you are in 24');
                        $('#err1').append(obj['error_messages']['cosigner_firstname']);
                        $('#err2').append(obj['error_messages']['cosigner_lastname']);
                        $('#err3').append(obj['error_messages']['cosigner_phone']);
                        $('#err4').append(obj['error_messages']['cosigner_email']);
                    }
                    if(step == 26)
                    {
                        //alert('you are in 26');
                        $('#err1').append(obj['error_messages']['cosigner_home_address']);
                        $('#err2').append(obj['error_messages']['cosigner_living_there_years']);
                        $('#err3').append(obj['error_messages']['cosigner_monthly_pay']);
                    }
                    if(step == 28)
                    {
                        //alert('you are in 28');
                        $('#err1').append(obj['error_messages']['co_relatives_firstname']);
                        $('#err2').append(obj['error_messages']['co_relative_relation']);
                        $('#err3').append(obj['error_messages']['cosigners_relative_address']);
                        $('#err4').append(obj['error_messages']['cosigners_relatives_phone']);
                    }
                    if(step == 29)
                    {
                        //alert('you are in 8');
                        $('#err1').append(obj['error_messages']['cosigners_personal_refrence']);
                        $('#err2').append(obj['error_messages']['cosigners_personal_refrence_phone']);
                        $('#err3').append(obj['error_messages']['cosigners_personal_refrence_address']);
                    }
                    if(step == 30)
                    {
                        //alert('you are in 30');
                        $('#err1').append(obj['error_messages']['cosigners_employer_name']);
                        $('#err2').append(obj['error_messages']['cosigners_employer_job_title']);
                        $('#err3').append(obj['error_messages']['co_supervisor_name']);
                        $('#err4').append(obj['error_messages']['cosigners_working_years']);
                        $('#err5').append(obj['error_messages']['cosigners_business_address']);
                    }
                    if(step == 31)
                    {
                        //alert('you are in 10');
                        $('#err1').append(obj['error_messages']['cosigner_monthly_income_pre_tax']);
                    }
                    
              }   
            },
            error: function(jqXHR, text, error){
                
                 //alert("Something went wrong:url issue");
            }
        });

        
    }
//
function personal_step2()
{   
    $('#step_count').val(2);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step2/",
        success: function (data)
        {    
            /*var data = { key: 'value' };
            var url = 'auto?step=2';
            window.history.pushState(data, '', base_url + "auto?step=2");*/
            //alert('you are in the function');
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=2");
            $('#container').html(data);                
        }
    });
}
function personal_step3()
{   
    $('#step_count').val(3);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step3/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=3");
            $('#container').html(data);                
        }
    });
}

function personal_step4()
{   
    $('#step_count').val(4);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step4/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=4");
            $('#container').html(data);                
        }
    });
}
//
function personal_step5()
{  
    $('#step_count').val(5);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step5/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=5");
            $('#container').html(data);                
        }
    });
}
function personal_step6()
{  
    $('#step_count').val(6);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step6/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=6");
            $('#container').html(data);                
        }
    });
}
function personal_step7()
{  
    $('#step_count').val(7);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step7/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=7");
            $('#container').html(data);                
        }
    });
}
function personal_step8()
{  
    $('#step_count').val(8);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step8/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=8");
            $('#container').html(data);                
        }
    });
}
function personal_step9()
{  
    $('#step_count').val(9);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step9/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=9");
            $('#container').html(data);                
        }
    });
}
function personal_step10()
{  
    $('#step_count').val(10);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step10/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=10");
            $('#container').html(data);                
        }
    });
}
function personal_step10_1()
{  
    $('#step_count').val(10.1);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step10_1/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=10.1");
            $('#container').html(data);                
        }
    });
}
function personal_step11()
{  
    $('#step_count').val(11);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step11/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=11");
            $('#container').html(data);                
        }
    });
}
function personal_step11_1()
{  
    $('#step_count').val(11.1);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step11_1/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=11.1");
            $('#container').html(data);                
        }
    });
}
function personal_step12()
{  
    $('#step_count').val(12);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step12/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=12");
            $('#container').html(data);                
        }
    });
}
function personal_step13()
{  
    $('#step_count').val(13);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step13/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=13");
            $('#container').html(data);                
        }
    });
}
function personal_step14()
{  
    $('#step_count').val(14);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step14/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=14");
            $('#container').html(data);                
        }
    });
}
function personal_step15()
{  
    $('#step_count').val(15);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step15/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=15");
            $('#container').html(data);                
        }
    });
}
function personal_step16()
{  
    $('#step_count').val(16);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step16/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=16");
            $('#container').html(data);                
        }
    });
}
function personal_step17()
{  
    $('#step_count').val(17);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step17/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=17");
            $('#container').html(data);                
        }
    });
}
function personal_step18()
{  
    $('#step_count').val(18);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step18/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=18");
            $('#container').html(data);                
        }
    });
}
function personal_step19()
{  
    $('#step_count').val(19);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step19/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=19");
            $('#container').html(data);                
        }
    });
}
function personal_step20()
{  
    $('#step_count').val(20);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step20/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=20");
            $('#container').html(data);                
        }
    });
}
function personal_step21()
{  
    $('#step_count').val(21);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step21/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=21");
            $('#container').html(data);                
        }
    });
}
function personal_step22()
{  
    $('#step_count').val(22);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step22/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=22");
            $('#container').html(data);                
        }
    });
}
function personal_step22_1()
{  
    $('#step_count').val(22.1);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step22_1/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=22.1");
            $('#container').html(data);                
        }
    });
}
function personal_step23()
{  
    $('#step_count').val(23);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step23/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=23");
            $('#container').html(data);                
        }
    });
}
function personal_step24()
{  
    $('#step_count').val(24);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step24/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=24");
            $('#container').html(data);                
        }
    });
}
function personal_step25()
{  
    $('#step_count').val(25);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step25/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=25");
            $('#container').html(data);                
        }
    });
}
function personal_step26()
{  
    $('#step_count').val(26);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step26/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=26");
            $('#container').html(data);                
        }
    });
}
function personal_step27()
{  
    $('#step_count').val(27);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step27/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=27");
            $('#container').html(data);                
        }
    });
}
function personal_step28()
{  
    $('#step_count').val(28);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step28/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=28");
            $('#container').html(data);                
        }
    });
}
function personal_step29()
{  
    $('#step_count').val(29);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step29/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=29");
            $('#container').html(data);                
        }
    });
}
function personal_step30()
{  
    $('#step_count').val(30);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step30/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=30");
            $('#container').html(data);                
        }
    });
}
function personal_step31()
{  
    $('#step_count').val(31);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step31/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=31");
            $('#container').html(data);                
        }
    });
}
function personal_step32()
{  
    $('#step_count').val(32);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step32/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=32");
            $('#container').html(data);                
        }
    });
}
function personal_step32_1()
{  
    $('#step_count').val(32.1);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step32_1/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=32.1");
            $('#container').html(data);                
        }
    });
}
function personal_step33()
{  
    $('#step_count').val(33);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step33/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=33");
            $('#container').html(data);                
        }
    });
}
function personal_step34()
{  
    $('#step_count').val(34);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step34/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=34");
            $('#container').html(data);                
        }
    });
}
function personal_step35()
{  
    $('#step_count').val(35);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step35/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=35");
            $('#container').html(data);                
        }
    });
}
function personal_step36()
{  
    $('#step_count').val(36);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step36/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=36");
            $('#container').html(data);                
        }
    });
}
function personal_step37()
{  
    $('#step_count').val(37);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step37/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=37");
            $('#container').html(data);                
        }
    });
}
function personal_step38()
{  
    $('#step_count').val(38);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step38/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=38");
            $('#container').html(data);                
        }
    });
}
function personal_step39()
{  
    $('#step_count').val(39);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step39/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=39");
            $('#container').html(data);                
        }
    });
}
function personal_step40()
{  
    $('#step_count').val(40);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step40/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=40");
            $('#container').html(data);                
        }
    });
}
function personal_step41()
{  
    $('#step_count').val(41);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step41/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=41");
            $('#container').html(data);                
        }
    });
}
function personal_step42()
{  
    $('#step_count').val(42);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step42/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=42");
            $('#container').html(data);                
        }
    });
}
function personal_step43()
{  
    $('#step_count').val(43);
    $.ajax({
        type: "GET",
        url:  base_url + "personalLoan/step43/",
        success: function (data)
        {      
            window.history.pushState("Details", "Title", base_url + "personalLoan?step=43");
            $('#container').html(data);                
        }
    });
}




//


