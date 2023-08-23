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
    if(step == 21)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_p_details1q');
        var formData = new FormData(form);
        formData.append('marital_status', value);
        getFormId(form);
    }
    
}
//for home  5/26 is Buying/Own/Rent  
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
    if(step == 23)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('co_home_id');
        var formData = new FormData(form);
        formData.append('co_home_status', value);
        getFormId(form);
    }
    
}
//step 9.1
function geWavedStepLinkRadioBtn(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('waiver_form');
    var formData = new FormData(form);
    formData.append('waiver_payment_value', value);
    getFormId(form);
}

//step 11
function gecoMakerRadioBtn(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('comaker_loan_form');
    var formData = new FormData(form);
    formData.append('comaker_loan_value', value);
    getFormId(form);
}

//step 12
function getoutstanding_judgmentRadioBtn(value)
{
    console.log('this is value>>' + value);
    var form = document.getElementById('outstanding_judgment_form');
    var formData = new FormData(form);
    formData.append('outstanding_judgment_value', value);
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
    if(step == 10)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('p_another_source_income');
        var formData = new FormData(form);
        formData.append('p_another_source', value);
        getFormId(form);
    }
    if(step == 27)
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
    if(step == 28)
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
    if(step == 13)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('bankruptcy_adjustmnt');
        var formData = new FormData(form);
        formData.append('bankruptcy_adjustmnt', value);
        getFormId(form);
    }
    if(step == 30)
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
    if(step == 14)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('force_closure');
        var formData = new FormData(form);
        formData.append('force_closure', value);
        getFormId(form);
    }
    if(step == 31)
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
    if(step == 15)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('any_law_suit');
        var formData = new FormData(form);
        formData.append('any_law_suit', value);
        getFormId(form);
    }
    if(step == 32)
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
    if(step == 16)
    {
        console.log('this is value>>' + value);
        var form = document.getElementById('other_than_us_citizen');
        var formData = new FormData(form);
        formData.append('other_than_us_citizen', value);
        getFormId(form);
    }
    if(step == 33)
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
            window.history.pushState({id:1}, "Title", base_url + "recreationalLoan?step=1");
        }
        /*if(step == 2)
        {
            var selected_marital_status = $('input[name="req_amt"]:checked').val();
            formData.append('req_amt', selected_marital_status);
            window.history.pushState({id:2}, "Title", base_url + "recreationalLoan?step=2");
        }*/
        if(step == 4 || step == 21)
        {
            if(step == 4)
            {
                var selected_marital_status = $('input[name="marital_status"]:checked').val();
                formData.append('marital_status', selected_marital_status);
            }
            if(step == 21)
            {
                var selected_marital_status = $('input[name="co_marital_status"]:checked').val();
                formData.append('co_marital_status', selected_marital_status);
            }
        }
        if(step == 6 || step == 26)
        {
            if(step == 6)
            {
                var selected_home_status = $('input[name="home_status"]:checked').val();
                formData.append('home_status', selected_home_status);
            }
            if(step == 23)
            {
                var selected_home_status = $('input[name="co_home_status"]:checked').val();
                formData.append('co_home_status', selected_home_status);
            }
        }
        if(step == 9.1 || step == 26)
        {
            
            var selected_home_status = $('input[name="waiver_payment_value"]:checked').val();
            formData.append('waiver_payment_value', selected_home_status);
            
        }
        if(step == 10)
        {
            
            var selected_home_status = $('input[name="p_another_source"]:checked').val();
            formData.append('p_another_source_income', selected_home_status);
            
        }
        if(step == 11 || step == 24)
        {
            if(step == 11)
            {
                var selected_home_status = $('input[name="comaker_loan_value"]:checked').val();
                formData.append('comaker_loan_form', selected_home_status);
            }
            
        }

        if(step == 27)
            {
                var selected_home_status = $('input[name="co_p_another_source"]:checked').val();
                formData.append('co_p_another_source', selected_home_status);    
            }

        if(step == 28)
        {
           
            if(step == 28)
            {
                var selected_home_status = $('input[name="co_co_maker"]:checked').val();
                formData.append('co_co_maker', selected_home_status);
            }
            
        }
        if(step == 35)
        {
           
            if(step == 35)
            {
                var selected_home_status = $('input[name="co_miltary_involve"]:checked').val();
                formData.append('co_miltary_involve', selected_home_status);
            }
            
        }
        if(step == 36)
        {

            if(step == 36)
            {
                var selected_home_status = $('input[name="co_member_credit"]:checked').val();
                formData.append('co_member_credit', selected_home_status);
            }
            
        }
        if(step == 37)
        {
           
            if(step == 37)
            {
                var selected_home_status = $('input[name="co_outstanding_judgement"]:checked').val();
                formData.append('co_outstanding_judgement', selected_home_status);
            }
            
        }
        if(step == 111 || step == 30)
        {
            if(step == 111)
            {
                var selected_home_status = $('input[name="bankruptcy_adjustmnt"]:checked').val();
                formData.append('bankruptcy_adjustmnt', selected_home_status);
            }
            if(step == 30)
            {
                var selected_home_status = $('input[name="co_bankruptcy_adjustmnt"]:checked').val();
                formData.append('co_bankruptcy_adjustmnt', selected_home_status);
            }
            
        }
        if(step == 222 || step == 31)
        {
            if(step == 222)
            {
                var selected_home_status = $('input[name="force_closure"]:checked').val();
                formData.append('force_closure', selected_home_status);
            }
            if(step == 31)
            {
                var selected_home_status = $('input[name="co_force_closure"]:checked').val();
                formData.append('co_force_closure', selected_home_status);
            }
            
        }
        if(step == 32)
        {
            if(step == 32)
            {
                var selected_home_status = $('input[name="co_any_law_suit"]:checked').val();
                formData.append('co_any_law_suit', selected_home_status);
            }
            
        }
        if(step == 16 || step == 33)
        {
            if(step == 16)
            {
                var selected_home_status = $('input[name="other_than_us_citizen"]:checked').val();
                formData.append('other_than_us_citizen', selected_home_status);
            }
            if(step == 33)
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
        if(step == 19)
        {
            var selected_home_status = $('input[name="add_cosigner"]:checked').val();
            formData.append('add_cosigner', selected_home_status);
        }
            
        //console.log(formData);
        if(step == 19 || step == 34)
        {
            if(step == 19 && selected_home_status == 'no')
            {
                $("#add_cosigner23").hide();
                $('#loader_page_final').show();
            }
            if(step == 34)
            {
                $("#final_step34").hide();
                $('#loader_page_final').show();
            }
            
        }
        
        $.ajax({
            type: "POST",
            url:base_url + "recreationalLoan/auto_step",
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
                      recreational_step2();
                  }
                  if(step == 2)
                  {
                      recreational_step3();
                  }
                  if(step == 3)
                  {
                      recreational_step4();
                  }
                  if(step == 4)
                  {
                      //alert('you are in 4');
                      recreational_step5();
                  }
                  if(step == 5)
                  {
                      //alert('you are in 5');
                      recreational_step6();
                  }
                  if(step == 6)
                  {
                     // alert('you are in 6');
                      recreational_step7();
                  }
                  if(step == 7)
                  {
                      //alert('you are in 7');
                      recreational_step8();
                  }
                  if(step == 8)
                  {
                      //alert('you are in 8');
                      recreational_step9();
                  }
                  if(step == 9)
                  {
                      //alert('you are in 9');
                      recreational_step9_1();
                  }
                  if(step == 9.1)
                  {
                      //alert('you are in 9.1');
                      recreational_step10();
                  }
                  if(step == 10)
                  {
                      //alert('you are in 10');
                      recreational_step10_1();
                  }
                  if(step == 10)
                  {
                    //alert('you are in 10');
                    if(selected_home_status == 'yes')
                    {
                        recreational_step10_1();
                    }else{
                        recreational_step11();
                    }
                  }
                  if(step == 10.1)
                  {
                      //alert('you are in 10.1');
                      recreational_step11();
                  }
                  if(step == 11 || step == 32)
                  {
                        if(step == 11)
                        {
                            //alert('you are in 11 >>>'+ selected_home_status);
                            if(selected_home_status == 'yes')
                            {
                                recreational_step12();
                            }
                            else{
                                    //alert('you are in 11 >>>'+ selected_home_status);
                                    recreational_step12();
                                }
                        }
                        if(step == 32)
                        {
                            //alert('you are in 32.1 >>>'+ selected_home_status);
                            if(selected_home_status == 'yes')
                            {
                                recreational_step33();
                            }
                            else{
                                    //alert('you are in 33 >>>'+ selected_home_status);
                                    recreational_step33();
                                }
                        }
                      
                  }
                  if(step == 11.1)
                  {
                    //alert('you are in 11.1');
                    recreational_step12();
                  }
                  if(step == 12)
                  {
                    //alert('you are in 12');
                    recreational_step13();
                  }
                  if(step == 13 || step == 28)
                  {
                    if(step == 13)
                    {
                        //alert('you are in 13');
                        recreational_step14();
                    }
                    if(step == 28)
                    {
                        //alert('you are in 13');
                        recreational_step29();
                    }
                    
                  }
                  if(step == 14 || step == 35)
                  {
                    if(step == 14)
                    {
                        //alert('you are in 14');
                        recreational_step15();
                    }
                    if(step == 35)
                    {
                        //alert('you are in 35');
                        recreational_step36();
                    }
                    
                  }
                  if(step == 15 || step == 36)
                  {
                    if(step == 15)
                    {
                        //alert('you are in 15');
                        recreational_step16();
                    }
                    if(step == 36)
                    {
                        //alert('you are in 36');
                        recreational_step37();
                    }
                    
                  }
                  if(step == 16 || step == 37)
                  {
                    if(step == 16)
                    {
                        //alert('you are in 16');
                        recreational_step17();
                    }
                    if(step == 37)
                    {
                        //alert('you are in 37');
                        recreational_step38();
                    }                        
                  }
                  if(step == 17 || step == 38)
                  {
                    if(step == 17)
                    {
                        //alert('you are in 17');
                        recreational_step18();
                    }
                    if(step == 38)
                    {
                        //alert('you are in 38');
                        recreational_step39();
                    }
                    
                  }
                  if(step == 18)
                  {
                    if(step == 18)
                    {
                        //alert('you are in 18');
                        recreational_step19();
                    }
                   
                    
                  }
                  if(step == 19 || step == 32)
                  {
                    if(step == 19)
                    {
                        //alert('you are in 19');
                        recreational_step20();
                    }
                    if(step == 32)
                    {
                        //alert('you are in 40');
                        recreational_step33();
                    }
                  }
                  if(step == 20 || step == 41)
                  {
                    if(step == 20)
                    {
                        //alert('you are in 20');
                        recreational_step21();
                    }
                    if(step == 41)
                    {
                        //alert('you are in 41');
                        recreational_step42();
                    }
                    
                  }
                  if(step == 21 || step == 42)
                  {
                    if(step == 21)
                    {
                        //alert('you are in 21');
                        recreational_step22();
                    }
                    if(step == 42)
                    {
                        //alert('you are in 42');
                        recreational_step43();
                    }
                    
                  }
                  if(step == 22)
                  {
                    //alert('you are in 22');
                    recreational_step23();
                  }
                  if(step == 23)
                  {
                    //alert('you are in 22.1');
                    recreational_step24();
                  }
//================THIS IS A FINAL STEP ON 23 and 43 ========================================
                  if(step == 19 || step == 34)
                  {
                    if(step == 19)
                    {
                        //alert('you are in 23 >>>'+ selected_home_status);
                        if(selected_home_status == 'yes')
                        {
                            autoloan_step20();
                        }
                        else{
                                //alert('you are in 23 >>> Success is coming soon');
                                if(obj['message'] != "")
                                {
                                    $('#loader_page_final').hide();
                                    $("#add_cosigner19").show();
                                    let text = obj['message'];
                                    let newText = text.replace(/\./g, ".<br>");
                                    $('#showMsgToApplicant').html(newText);
                                    $('#exampleModal').modal('show');
                                    setInterval(function() {
                                        $('#exampleModal').modal('hide');
                                        $('#showMsgToApplicant').html('');
                                        window.location.href = 'https://jacksoncountyfcu.com/';
                                    }, 5000);
                                }
                            }
                    }
                    if(step == 34)
                    {
                        //alert('you are in 43 >>> Success is coming soon');
                        if(obj['message'] != "")
                        {
                            $('#loader_page_final').hide();
                            $("#final_step34").show();
                            let text = obj['message'];
                            let newText = text.replace(/\./g, ".<br>");
                            $('#showMsgToApplicant').html(newText);
                            $('#exampleModal').modal('show');
                            setInterval(function() {
                                $('#exampleModal').modal('hide');
                                $('#showMsgToApplicant').html('');
                                window.location.href = 'https://jacksoncountyfcu.com/';
                            }, 5000);
                        }
                    }
                      
                  }
                  if(step == 24)
                  {
                    //alert('you are in 24 >>>');
                    recreational_step25();
                  }
                  if(step == 25)
                  {
                    //alert('you are in 25 >>>');
                    recreational_step26();
                  }
                  if(step == 26)
                  {
                    //alert('you are in 26 >>>');
                    recreational_step27();
                  }
                  if(step == 27)
                  {
                    //alert('you are in 27 >>>');
                    if(selected_home_status == 'yes')
                    {
                        recreational_step27_1();
                    }else{
                        recreational_step28();
                    }
                  }
                  if(step == 27.1)
                  {
                    //alert('you are in 27 >>>');
                    recreational_step28();
                  }
                  if(step == 28)
                  {
                    //alert('you are in 28 >>>');
                    recreational_step29();
                  }
                  if(step == 29)
                  {
                    //alert('you are in 29 >>>');
                    recreational_step30();
                  }
                  if(step == 30)
                  {
                    //alert('you are in 30 >>>');
                    recreational_step31();
                  }
                  if(step == 31)
                  {
                    //alert('you are in 31 >>>');
                    recreational_step32();
                  }

                  if(step == 33)
                  {
                    //alert('you are in 33 >>>');
                    recreational_step34();
                  }
                  
                             
              }
              else if(obj['error']==1) 
              {
                    if(step == 2)
                    {
                        $('#err1').html(obj['error_messages']['p_req_amt']);
                        $('#err2').html(obj['error_messages']['purpose_of_loan']);
                    }
                    if(step == 3)
                    {
                        $('#err1').html(obj['error_messages']['firstname']);
                        $('#err2').html(obj['error_messages']['lastname']);
                        $('#err3').html(obj['error_messages']['phone']);
                        $('#err4').html(obj['error_messages']['p_email']);
                        $('#err5').html(obj['error_messages']['tex_driv_lic']);
                        $('#err6').html(obj['error_messages']['soc_sec']);
                        $('#err7').html(obj['error_messages']['my_dob']);
                    }
                    if(step == 4 || step == 21)
                    {
                        //alert('you are in 4');
                        if(step == 4)
                        {
                            $('#err1').html(obj['error_messages']['marital_status']);
                        }
                        if(step == 21)
                        {
                            $('#err1').html(obj['error_messages']['co_marital_status']);
                        }
                        
                    }
                    if(step == 5)
                    {
                        //alert('you are in 5');
                        $('#err1').html(obj['error_messages']['address']);
                        $('#err2').html(obj['error_messages']['living_there_years']);
                        $('#err3').html(obj['error_messages']['monthly_pay']);
                    }
                    if(step == 6 || step == 26)
                    {
                        //alert('you are in 6');
                        if(step == 6)
                        {
                            $('#err1').html(obj['error_messages']['home_status']);
                            
                        }
                        if(step == 23)
                        {
                            $('#err1').html(obj['error_messages']['co_home_status']);
                        }
                        
                    }
                    if(step == 7)
                    {
                        //alert('you are in 7');
                        $('#err1').html(obj['error_messages']['relative_firstname']);
                        $('#err2').html(obj['error_messages']['relative_relation']);
                        $('#err3').html(obj['error_messages']['relative_address']);
                        $('#err4').html(obj['error_messages']['relatives_phone']);
                    }
                    if(step == 8)
                    {
                        //alert('you are in 8');
                        /*$('#err1').html(obj['error_messages']['personal_refrence']);
                        $('#err2').html(obj['error_messages']['personal_refrence_phone']);
                        $('#err3').html(obj['error_messages']['personal_refrence_address']);*/

                        $('#err1').html(obj['error_messages']['employer_name']);
                        $('#err4').html(obj['error_messages']['working_years']);


                    }
                    if(step == 9)
                    {
                        //alert('you are in 9');
                        $('#err1').html(obj['error_messages']['monthly_income_pre_tax']);
                        $('#err2').html(obj['error_messages']['upload_user_doc']);
                        $('#err3').html(obj['error_messages']['total_dependent']);
                    }
                    if(step == 10)
                    {
                        //alert('you are in 10');
                        $('#err1').html(obj['error_messages']['monthly_income_pre_tax']);
                        $('#err2').html(obj['error_messages']['upload_user_doc']);
                    }
                    if(step == 9.1)
                    {
                        //alert('you are in 10.1');
                        $('#err1').html(obj['error_messages']['waiver']);
                    }
                    if(step == 11 || step == 27)
                    {
                        if(step == 11)
                        {
                            //alert('you are in 10.1');
                            $('#err1').html(obj['error_messages']['comaker_loan_value']);
                        }
                        if(step == 27)
                        {
                            //alert('you are in 10.1');
                            $('#err1').html(obj['error_messages']['co_p_another_source']);
                        }
                        
                    }
                    if(step == 10.1 || step == 27.1)
                    {
                        if(step == 10.1)
                        {
                            //alert('you are in 11.1');
                            $('#err1').html(obj['error_messages']['second_income_source']);
                            $('#err2').html(obj['error_messages']['second_monthly_income']);
                        }
                        if(step == 27.1)
                        {
                            //alert('you are in 11.1');
                            $('#err1').html(obj['error_messages']['cosigner_second_income_source']);
                            $('#err2').html(obj['error_messages']['cosigner_second_monthly_income']);
                        }
                        
                    }
                    if(step == 33)
                    {
                      
                      
                            //alert('you are in 12');
                            $('#err1').html(obj['error_messages']['cosigner_previous_employer_name']);
                            $('#err2').html(obj['error_messages']['cosigner_previous_working_years']);
                        
                       
                    }
                    if(step == 28)
                    {
                       
                        
                            //alert('you are in 13');
                            $('#err1').html(obj['error_messages']['co_co_maker']);
                        
                        
                    }
                    if(step == 14 || step == 35)
                    {
                        if(step == 14)
                        {
                            //alert('you are in 14');
                            $('#err1').html(obj['error_messages']['force_closure']);
                        }
                        if(step == 35)
                        {
                            //alert('you are in 14');
                            $('#err1').html(obj['error_messages']['co_miltary_involve']);
                        }
                    }
                    if(step == 36)
                    {
                        
                        if(step == 36)
                        {
                            alert('you are in 36');
                            $('#err1').html(obj['error_messages']['co_member_credit']);
                        }
                    }
                    if(step == 16 || step == 37)
                    {
                        if(step == 16)
                        {
                            //alert('you are in 16');
                            $('#err1').html(obj['error_messages']['outstanding_judgement']);
                        }
                        if(step == 37)
                        {
                            //alert('you are in 16');
                            $('#err1').html(obj['error_messages']['co_outstanding_judgement']);
                        }
                        
                    }
                    if(step == 17 || step == 38)
                    {
                        if(step == 17)
                        {
                            //alert('you are in 17');
                            $('#err1').html(obj['error_messages']['i_represnt_accurate']);
                        }
                        if(step == 30)
                        {
                            //alert('you are in 17');
                            $('#err1').html(obj['error_messages']['co_bankruptcy_adjustmnt']);
                        }
                        
                    }
                    if(step == 18 || step == 31)
                    {
                        if(step == 18)
                        {
                            //alert('you are in 18');
                            $('#err1').html(obj['error_messages']['on_die_cancel_loan']);
                        }
                        if(step == 31)
                        {
                            //alert('you are in 18');
                            $('#err1').html(obj['error_messages']['co_force_closure']);
                        }
                        
                    }
                    if(step == 19 || step == 32)
                    {
                        if(step == 19)
                        {
                            //alert('you are in 19');
                            $('#err1').html(obj['error_messages']['any_law_suit']);
                        }
                        if(step == 32)
                        {
                            //alert('you are in 19');
                            $('#err1').html(obj['error_messages']['co_any_law_suit']);
                        }
                        
                    }
                    if(step == 16 || step == 33)
                    {
                        if(step == 16)
                        {
                            //alert('you are in 20');
                            $('#err1').html(obj['error_messages']['other_than_us_citizen']);
                        }
                        if(step == 33)
                        {
                            //alert('you are in 41');
                            $('#err1').html(obj['error_messages']['co_other_than_us_citizen']);
                        }
                        
                    }
                    if(step == 21 || step == 42)
                    {
                        if(step == 21)
                        {
                            //alert('you are in 21');
                            $('#err1').html(obj['error_messages']['income_get_reduce_nxt_2y']);
                        }
                        if(step == 42)
                        {
                            //alert('you are in 21');
                            $('#err1').html(obj['error_messages']['co_income_get_reduce_nxt_2y']);
                        }
                    }
                    if(step == 34)
                    {
                        if(step == 34)
                        {
                            //alert('you are in 43');
                            $('#loader_page_final').hide();
                            $("#final_step34").show();
                            $('#err1').html(obj['error_messages']['co_i_represnt_accurate']);
                        }
                        
                    }
                    if(step == 22.1)
                    {
                        //alert('you are in 22.1');
                        $('#err1').html(obj['error_messages']['on_die_cancel_loan']);
                    }
                    if(step == 19)
                    {
                        //alert('you are in 23');
                        $('#err1').html(obj['error_messages']['add_cosigner']);
                    }
                    if(step == 20)
                    {
                        //alert('you are in 24');
                        $('#err1').html(obj['error_messages']['cosigner_firstname']);
                        $('#err2').html(obj['error_messages']['cosigner_lastname']);
                        $('#err3').html(obj['error_messages']['cosigner_phone']);
                        $('#err4').html(obj['error_messages']['cosigner_email']);
                        $('#err5').html(obj['error_messages']['cosigner_tdl']);
                        $('#err6').html(obj['error_messages']['cosigner_ssn']);
                        $('#err7').html(obj['error_messages']['cosigner_dob']);
                    }
                    if(step == 22)
                    {
                        //alert('you are in 26');
                        $('#err1').html(obj['error_messages']['cosigner_home_address']);
                        $('#err2').html(obj['error_messages']['cosigner_living_there_years']);
                        $('#err3').html(obj['error_messages']['cosigner_monthly_pay']);
                    }
                    if(step == 28)
                    {
                        //alert('you are in 28');
                        $('#err1').html(obj['error_messages']['co_relatives_firstname']);
                        $('#err2').html(obj['error_messages']['co_relative_relation']);
                        $('#err3').html(obj['error_messages']['cosigners_relative_address']);
                        $('#err4').html(obj['error_messages']['cosigners_relatives_phone']);
                    }
                    if(step == 29)
                    {
                        //alert('you are in 8');
                        $('#err1').html(obj['error_messages']['cosigners_personal_refrence']);
                        $('#err2').html(obj['error_messages']['cosigners_personal_refrence_phone']);
                        $('#err3').html(obj['error_messages']['cosigners_personal_refrence_address']);
                    }
                    if(step == 24)
                    {
                        //alert('you are in 30');
                        $('#err1').html(obj['error_messages']['cosigners_employer_name']);
                        $('#err2').html(obj['error_messages']['cosigners_employer_job_title']);
                        $('#err3').html(obj['error_messages']['co_supervisor_name']);
                        $('#err4').html(obj['error_messages']['cosigners_working_years']);
                        $('#err5').html(obj['error_messages']['cosigners_business_address']);
                    }
                    if(step == 25)
                    {
                        //alert('you are in 10');
                        $('#err1').html(obj['error_messages']['cosigner_monthly_income_pre_tax']);
                        $('#err2').html(obj['error_messages']['cosigner_upload_user_doc']);
                        $('#err3').html(obj['error_messages']['co_total_dependent']);
                    }
                    
              }   
            },
            error: function(jqXHR, text, error){
                
                 //alert("Something went wrong:url issue");
            }
        });

        
    }
//
function recreational_step2()
{   
    $('#step_count').val(2);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step2",
        success: function (data)
        {    
            /*var data = { key: 'value' };
            var url = 'auto?step=2';
            window.history.pushState(data, '', base_url + "auto?step=2");*/
            //alert('you are in the function');
            window.history.pushState({id:2}, "Title", base_url + "recreationalLoan?step=2");
            $('#container').html(data);                
        }
    });
}
function recreational_step3()
{   
    $('#step_count').val(3);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step3",
        success: function (data)
        {      
            window.history.pushState({id:3}, "Title", base_url + "recreationalLoan?step=3");
            $('#container').html(data);                
        }
    });
}

function recreational_step4()
{   
    $('#step_count').val(4);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step4",
        success: function (data)
        {      
            window.history.pushState({id:4}, "Title", base_url + "recreationalLoan?step=4");
            $('#container').html(data);                
        }
    });
}
//
function recreational_step5()
{  
    $('#step_count').val(5);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step5",
        success: function (data)
        {      
            window.history.pushState({id:5}, "Title", base_url + "recreationalLoan?step=5");
            $('#container').html(data);                
        }
    });
}
function recreational_step6()
{  
    $('#step_count').val(6);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step6",
        success: function (data)
        {      
            window.history.pushState({id:6}, "Title", base_url + "recreationalLoan?step=6");
            $('#container').html(data);                
        }
    });
}
function recreational_step7()
{  
    $('#step_count').val(7);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step7",
        success: function (data)
        {      
            window.history.pushState({id:7}, "Title", base_url + "recreationalLoan?step=7");
            $('#container').html(data);                
        }
    });
}
function recreational_step8()
{  
    $('#step_count').val(8);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step8",
        success: function (data)
        {      
            window.history.pushState({id:8}, "Title", base_url + "recreationalLoan?step=8");
            $('#container').html(data);                
        }
    });
}
function recreational_step9()
{  
    $('#step_count').val(9);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step9",
        success: function (data)
        {      
            window.history.pushState({id:9}, "Title", base_url + "recreationalLoan?step=9");
            $('#container').html(data);                
        }
    });
}
function recreational_step10()
{  
    $('#step_count').val(10);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step10",
        success: function (data)
        {      
            window.history.pushState({id:10}, "Title", base_url + "recreationalLoan?step=10");
            $('#container').html(data);                
        }
    });
}
function recreational_step9_1()
{  
    $('#step_count').val(9.1);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step9_1",
        success: function (data)
        {      
            window.history.pushState({id:9.1}, "Title", base_url + "recreationalLoan?step=9.1");
            $('#container').html(data);                
        }
    });
}
function recreational_step10_1()
{  
    $('#step_count').val(10.1);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step10_1",
        success: function (data)
        {      
            window.history.pushState({id:10.1}, "Title", base_url + "recreationalLoan?step=10.1");
            $('#container').html(data);                
        }
    });
}
function recreational_step11()
{  
    $('#step_count').val(11);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step11",
        success: function (data)
        {      
            window.history.pushState({id:11}, "Title", base_url + "recreationalLoan?step=11");
            $('#container').html(data);                
        }
    });
}
function recreational_step11_1()
{  
    $('#step_count').val(11.1);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step11_1",
        success: function (data)
        {      
            window.history.pushState({id:11.1}, "Title", base_url + "recreationalLoan?step=11.1");
            $('#container').html(data);                
        }
    });
}
function recreational_step12()
{  
    $('#step_count').val(12);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step12",
        success: function (data)
        {      
            window.history.pushState({id:12}, "Title", base_url + "recreationalLoan?step=12");
            $('#container').html(data);                
        }
    });
}
function recreational_step13()
{  
    $('#step_count').val(13);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step13",
        success: function (data)
        {      
            window.history.pushState({id:13}, "Title", base_url + "recreationalLoan?step=13");
            $('#container').html(data);                
        }
    });
}
function recreational_step14()
{  
    $('#step_count').val(14);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step14",
        success: function (data)
        {      
            window.history.pushState({id:14}, "Title", base_url + "recreationalLoan?step=14");
            $('#container').html(data);                
        }
    });
}
function recreational_step15()
{  
    $('#step_count').val(15);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step15",
        success: function (data)
        {      
            window.history.pushState({id:15}, "Title", base_url + "recreationalLoan?step=15");
            $('#container').html(data);                
        }
    });
}
function recreational_step16()
{  
    $('#step_count').val(16);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step16",
        success: function (data)
        {      
            window.history.pushState({id:16}, "Title", base_url + "recreationalLoan?step=16");
            $('#container').html(data);                
        }
    });
}
function recreational_step17()
{  
    $('#step_count').val(17);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step17",
        success: function (data)
        {      
            window.history.pushState({id:17}, "Title", base_url + "recreationalLoan?step=17");
            $('#container').html(data);                
        }
    });
}
function recreational_step18()
{  
    $('#step_count').val(18);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step18",
        success: function (data)
        {      
            window.history.pushState({id:18}, "Title", base_url + "recreationalLoan?step=18");
            $('#container').html(data);                
        }
    });
}
function recreational_step19()
{  
    $('#step_count').val(19);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step19",
        success: function (data)
        {      
            window.history.pushState({id:19}, "Title", base_url + "recreationalLoan?step=19");
            $('#container').html(data);                
        }
    });
}
function recreational_step20()
{  
    $('#step_count').val(20);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step20",
        success: function (data)
        {      
            window.history.pushState({id:20}, "Title", base_url + "recreationalLoan?step=20");
            $('#container').html(data);                
        }
    });
}
function recreational_step21()
{  
    $('#step_count').val(21);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step21",
        success: function (data)
        {      
            window.history.pushState({id:21}, "Title", base_url + "recreationalLoan?step=21");
            $('#container').html(data);                
        }
    });
}
function recreational_step22()
{  
    $('#step_count').val(22);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step22",
        success: function (data)
        {      
            window.history.pushState({id:22}, "Title", base_url + "recreationalLoan?step=22");
            $('#container').html(data);                
        }
    });
}
function recreational_step22_1()
{  
    $('#step_count').val(22.1);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step22_1",
        success: function (data)
        {      
            window.history.pushState({id:22.1}, "Title", base_url + "recreationalLoan?step=22.1");
            $('#container').html(data);                
        }
    });
}
function recreational_step23()
{  
    $('#step_count').val(23);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step23",
        success: function (data)
        {      
            window.history.pushState({id:23}, "Title", base_url + "recreationalLoan?step=23");
            $('#container').html(data);                
        }
    });
}
function recreational_step24()
{  
    $('#step_count').val(24);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step24",
        success: function (data)
        {      
            window.history.pushState({id:24}, "Title", base_url + "recreationalLoan?step=24");
            $('#container').html(data);                
        }
    });
}
function recreational_step25()
{  
    $('#step_count').val(25);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step25",
        success: function (data)
        {      
            window.history.pushState({id:25}, "Title", base_url + "recreationalLoan?step=25");
            $('#container').html(data);                
        }
    });
}
function recreational_step26()
{  
    $('#step_count').val(26);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step26",
        success: function (data)
        {      
            window.history.pushState({id:26}, "Title", base_url + "recreationalLoan?step=26");
            $('#container').html(data);                
        }
    });
}

function recreational_step27_1()
{  
    $('#step_count').val(27.1);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step27_1",
        success: function (data)
        {      
            window.history.pushState({id:27.1}, "Title", base_url + "recreationalLoan?step=27.1");
            $('#container').html(data);                
        }
    });
}
function recreational_step27()
{  
    $('#step_count').val(27);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step27",
        success: function (data)
        {      
            window.history.pushState({id:27}, "Title", base_url + "recreationalLoan?step=27");
            $('#container').html(data);                
        }
    });
}
function recreational_step28()
{  
    $('#step_count').val(28);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step28",
        success: function (data)
        {      
            window.history.pushState({id:28}, "Title", base_url + "recreationalLoan?step=28");
            $('#container').html(data);                
        }
    });
}
function recreational_step29()
{  
    $('#step_count').val(29);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step29",
        success: function (data)
        {      
            window.history.pushState({id:29}, "Title", base_url + "recreationalLoan?step=29");
            $('#container').html(data);                
        }
    });
}
function recreational_step30()
{  
    $('#step_count').val(30);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step30",
        success: function (data)
        {      
            window.history.pushState({id:30}, "Title", base_url + "recreationalLoan?step=30");
            $('#container').html(data);                
        }
    });
}
function recreational_step31()
{  
    $('#step_count').val(31);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step31",
        success: function (data)
        {      
            window.history.pushState({id:31}, "Title", base_url + "recreationalLoan?step=31");
            $('#container').html(data);                
        }
    });
}
function recreational_step32()
{  
    $('#step_count').val(32);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step32",
        success: function (data)
        {      
            window.history.pushState({id:32}, "Title", base_url + "recreationalLoan?step=32");
            $('#container').html(data);                
        }
    });
}
function recreational_step32_1()
{  
    $('#step_count').val(32.1);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step32_1",
        success: function (data)
        {      
            window.history.pushState({id:32.1}, "Title", base_url + "recreationalLoan?step=32.1");
            $('#container').html(data);                
        }
    });
}
function recreational_step33()
{  
    $('#step_count').val(33);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step33",
        success: function (data)
        {      
            window.history.pushState({id:33}, "Title", base_url + "recreationalLoan?step=33");
            $('#container').html(data);                
        }
    });
}
function recreational_step34()
{  
    $('#step_count').val(34);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step34",
        success: function (data)
        {      
            window.history.pushState({id:34}, "Title", base_url + "recreationalLoan?step=34");
            $('#container').html(data);                
        }
    });
}
function recreational_step35()
{  
    $('#step_count').val(35);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step35",
        success: function (data)
        {      
            window.history.pushState({id:35}, "Title", base_url + "recreationalLoan?step=35");
            $('#container').html(data);                
        }
    });
}
function recreational_step36()
{  
    $('#step_count').val(36);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step36",
        success: function (data)
        {      
            window.history.pushState({id:36}, "Title", base_url + "recreationalLoan?step=36");
            $('#container').html(data);                
        }
    });
}
function recreational_step37()
{  
    $('#step_count').val(37);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step37",
        success: function (data)
        {      
            window.history.pushState({id:37}, "Title", base_url + "recreationalLoan?step=37");
            $('#container').html(data);                
        }
    });
}
function recreational_step38()
{  
    $('#step_count').val(38);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step38",
        success: function (data)
        {      
            window.history.pushState({id:38}, "Title", base_url + "recreationalLoan?step=38");
            $('#container').html(data);                
        }
    });
}
function recreational_step39()
{  
    $('#step_count').val(39);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step39",
        success: function (data)
        {      
            window.history.pushState({id:39}, "Title", base_url + "recreationalLoan?step=39");
            $('#container').html(data);                
        }
    });
}
function recreational_step40()
{  
    $('#step_count').val(40);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step40",
        success: function (data)
        {      
            window.history.pushState({id:40}, "Title", base_url + "recreationalLoan?step=40");
            $('#container').html(data);                
        }
    });
}
function recreational_step41()
{  
    $('#step_count').val(41);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step41",
        success: function (data)
        {      
            window.history.pushState({id:41}, "Title", base_url + "recreationalLoan?step=41");
            $('#container').html(data);                
        }
    });
}
function recreational_step42()
{  
    $('#step_count').val(42);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step42",
        success: function (data)
        {      
            window.history.pushState({id:42}, "Title", base_url + "recreationalLoan?step=42");
            $('#container').html(data);                
        }
    });
}
function recreational_step43()
{  
    $('#step_count').val(43);
    $.ajax({
        type: "GET",
        url:  base_url + "recreationalLoan/step43",
        success: function (data)
        {      
            window.history.pushState({id:43}, "Title", base_url + "recreationalLoan?step=43");
            $('#container').html(data);                
        }
    });
}

function disclosure_recreational()
{  
    $("#disclosureModal").modal('show'); // Open the modal
}

document.addEventListener("DOMContentLoaded", function() {
    document.body.addEventListener("click", function(event) {
        if (event.target.matches(".disclosure-sec")) {
            // Handle the click event
            disclosure_recreational();
        }
    });
});



//


