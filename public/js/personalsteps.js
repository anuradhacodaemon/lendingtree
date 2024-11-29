var base_url = $('#domain').val();
if (window.performance) {
    console.info("window.performance work's fine on this browser");
}
var urlParams = new URLSearchParams(window.location.search);
var step = parseInt(urlParams.get('step'));
console.log("The step from lending>>>" + step);
//This condition works when user directly put the step value in it
if (performance.navigation.type == 1) {

    if (step == 1) {
        $('#step_count').val(1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step1",
            success: function (data) {
                window.history.pushState("Details", "Title", base_url + "auto?step=1");
                $('#container').html(data);
            }
        });
    }
    if (step == 2) {
        $('#step_count').val(2);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step2",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 3) {
        $('#step_count').val(3);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step3",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 4) {
        $('#step_count').val(4);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step4",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 5) {
        $('#step_count').val(5);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step5",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 6) {
        $('#step_count').val(6);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step6",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 7) {
        $('#step_count').val(7);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step7",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 8) {
        $('#step_count').val(8);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step8",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 9) {
        $('#step_count').val(9);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step9",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 10) {
        $('#step_count').val(10);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step10",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 9.1) {
        $('#step_count').val(9.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step9_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 11) {
        $('#step_count').val(11);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step11",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 11.1) {
        $('#step_count').val(11.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step11_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 12) {
        $('#step_count').val(12);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step12",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 13) {
        $('#step_count').val(13);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step13",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 14) {
        $('#step_count').val(14);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step14",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 15) {
        $('#step_count').val(15);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step15",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 16) {
        $('#step_count').val(16);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step16",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 17) {
        $('#step_count').val(17);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step17",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 18) {
        $('#step_count').val(18);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step18",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 19) {
        $('#step_count').val(19);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step19",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 20) {
        $('#step_count').val(20);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step20",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 21) {
        $('#step_count').val(21);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step21",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 22) {
        $('#step_count').val(22);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step22",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 22.1) {
        $('#step_count').val(22.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step22_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 23) {
        $('#step_count').val(23);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step23",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 24) {
        $('#step_count').val(24);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step24",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 25) {
        $('#step_count').val(25);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step25",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 26) {
        $('#step_count').val(26);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step26",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 27) {
        $('#step_count').val(27);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step27",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 28) {
        $('#step_count').val(28);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step28",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 29) {
        $('#step_count').val(29);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step29",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 30) {
        $('#step_count').val(30);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step30",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 31) {
        $('#step_count').val(31);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step31",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 32) {
        $('#step_count').val(32);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step32",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 32.1) {
        $('#step_count').val(32.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step32_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 33) {
        $('#step_count').val(33);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step33",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 34) {
        $('#step_count').val(34);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step34",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 35) {
        $('#step_count').val(35);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step35",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 36) {
        $('#step_count').val(36);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step36",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 37) {
        $('#step_count').val(37);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step37",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 38) {
        $('#step_count').val(38);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step38",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 39) {
        $('#step_count').val(39);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step39",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 40) {
        $('#step_count').val(40);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step40",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 41) {
        $('#step_count').val(41);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step41",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 42) {
        $('#step_count').val(42);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step42",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (step == 43) {
        $('#step_count').val(43);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step43",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }

    //This is the END for user directly PUT step value in URL
}

//This condition works when user click on browser Back Button

/*window.onpopstate = function (event)
{
    console.log("This is state>>" + event.state);
    if (pageId==1') > -1) {
    alert('check this');
    }
}*/
window.addEventListener('popstate', function (event) {
    //console.log("This is state>>" + event.state);
    var currentState = window.history.state;
    console.log(currentState.id);
    let pageId = currentState.id;
    if (pageId == 1) {
        $('#step_count').val(1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step1",
            success: function (data) {
                //window.history.pushState("Details", "Title", base_url + "auto?step=1");
                $('#container').html(data);
            }
        });
    }
    if (pageId == 2) {
        $('#step_count').val(2);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step2",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 3) {
        $('#step_count').val(3);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step3",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 4) {
        $('#step_count').val(4);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step4",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 5) {
        $('#step_count').val(5);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step5",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 6) {
        $('#step_count').val(6);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step6",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 7) {
        $('#step_count').val(7);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step7",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 8) {
        $('#step_count').val(8);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step8",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 9) {
        $('#step_count').val(9);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step9",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 10) {
        $('#step_count').val(10);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step10",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 9.1) {
        $('#step_count').val(9.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step9_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 11) {
        $('#step_count').val(11);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step11",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 11.1) {
        $('#step_count').val(11.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step11_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 12) {
        $('#step_count').val(12);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step12",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 13) {
        $('#step_count').val(13);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step13",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 14) {
        $('#step_count').val(14);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step14",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 15) {
        $('#step_count').val(15);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step15",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 16) {
        $('#step_count').val(16);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step16",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 17) {
        $('#step_count').val(17);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step17",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 18) {
        $('#step_count').val(18);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step18",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 19) {
        $('#step_count').val(19);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step19",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 20) {
        $('#step_count').val(20);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step20",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 21) {
        $('#step_count').val(21);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step21",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 22) {
        $('#step_count').val(22);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step22",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 22.1) {
        $('#step_count').val(22.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step22_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 23) {
        $('#step_count').val(23);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step23",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 24) {
        $('#step_count').val(24);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step24",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 25) {
        $('#step_count').val(25);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step25",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 26) {
        $('#step_count').val(26);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step26",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 27) {
        $('#step_count').val(27);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step27",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 28) {
        $('#step_count').val(28);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step28",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 29) {
        $('#step_count').val(29);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step29",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 30) {
        $('#step_count').val(30);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step30",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 31) {
        $('#step_count').val(31);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step31",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 32) {
        $('#step_count').val(32);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step32",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 32.1) {
        $('#step_count').val(32.1);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step32_1",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 33) {
        $('#step_count').val(33);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step33",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 34) {
        $('#step_count').val(34);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step34",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 35) {
        $('#step_count').val(35);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step35",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 36) {
        $('#step_count').val(36);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step36",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 37) {
        $('#step_count').val(37);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step37",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 38) {
        $('#step_count').val(38);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step38",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 39) {
        $('#step_count').val(39);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step39",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 40) {
        $('#step_count').val(40);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step40",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 41) {
        $('#step_count').val(41);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step41",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 42) {
        $('#step_count').val(42);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step42",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
    if (pageId == 43) {
        $('#step_count').val(43);
        $.ajax({
            type: "GET",
            url: base_url + "personalLoan/step43",
            success: function (data) {
                $('#container').html(data);
            }
        });
    }

    //Browser Back condition Ends below
});







//============================================OLD CODE=====================================================

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
