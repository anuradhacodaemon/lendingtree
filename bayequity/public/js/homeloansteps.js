var base_url = $('#domain').val();
if (window.performance) {
    console.info("window.performance work's fine on this browser");
}
if (performance.navigation.type == 1) {
    //alert( "This page is reloaded" );
    if (window.location.search.indexOf('homeloan=1') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=2') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=3') > -1) {

        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep3",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=4') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep4",
            success: function (data)
            {

                $('#container').html(data);

                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=41') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep41",
            success: function (data)
            {

                $('#container').html(data);

                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep5",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep6",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=7') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep7",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=8') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=9') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=10') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=11') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep11",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=111') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep111",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=12') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep12",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=13') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep13",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=14') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep14",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=15') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep15",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=16') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep16",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=17') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep17",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=171') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep171",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=172') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep172",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=18') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep18",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=19') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep19",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=20') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep20",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=21') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep21",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=22') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep22",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=23') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep23",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

}
//window.addEventListener('popstate', function(event) {
window.onpopstate = function ()
{
    if (window.location.search.indexOf('homeloan=1') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep1",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=2') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep2",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=3') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep3",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=4') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep4",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=41') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep41",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=5') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep5",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }

    if (window.location.search.indexOf('homeloan=6') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep6",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=7') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep7",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=8') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep8",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=9') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep9",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=10') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep10",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=11') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep11",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=111') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep111",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=12') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep12",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=13') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep13",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=14') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep14",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=15') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep15",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=16') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep16",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=17') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep17",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=171') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep171",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=172') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep172",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=18') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep18",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=19') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep19",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=20') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep20",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=21') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep21",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=22') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep22",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
    if (window.location.search.indexOf('homeloan=23') > -1) {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep23",
            success: function (data)
            {

                $('#container').html(data);
                //location.href = '<?php echo 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>';
            }
        });
    }
}
//}, false);
function home_step1(id) {

    var url = base_url + "homeloan/homestep1/" + id;

    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {


            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=1");

            $('#container').html(data);



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


            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=2");

            $('#container').html(data);



        }
    });

}
function home_step3(id) {

    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep3/" + id,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=3");

            $('#container').html(data);
        }
    });

}

function home_step4(id) {


    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep4/" + id,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=4");
            $('#container').html(data);
        }
    });


}

function home_step41(id) {


    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep41/" + id,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=41");
            $('#container').html(data);
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
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=5");
                $('#container').html(data);
            }
        });

    }

}
function home_step6() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep6/" + $('input[name=property_value]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=6");
            $('#container').html(data);
        }
    });
}

function home_step7() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep7/" + $('input[name=mortgage_bal]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=7");
            $('#container').html(data);
        }
    });
}

function home_step8() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep8/1",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=8");
            $('#container').html(data);
        }
    });
}

function home_step9() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep9/0",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=9");
            $('#container').html(data);
        }
    });
}
function home_step10() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep10/" + $('input[name=remaining_mortgage_bal]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=10");
            $('#container').html(data);
        }
    });
}

function home_step11() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep11/1",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=11");
            $('#container').html(data);
        }
    });
}
function home_step111(id) {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep111/" + id,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=111");
            $('#container').html(data);
        }
    });
}
function home_step12(id) {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep12/" + id,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=12");
            $('#container').html(data);
        }
    });
}

function home_step13() {
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
    } else {
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep13/" + $('#selectMonth').val() + '/' + $('#selectDate').val() + '/' + $('#selectYear').val() + '/' + $('input[name=ssn]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=13");
                $('#container').html(data);
            }
        });
    }
}
function home_step14() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep14/1",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=14");
            $('#container').html(data);
        }
    });
}
function home_step15() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep15/0",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=15");
            $('#container').html(data);
        }
    });
}

function home_step16(id) {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep16/" + id,
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=11");
            $('#container').html(data);
        }
    });
}

function home_step17() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep17/1",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=17");
            $('#container').html(data);
        }
    });
}

function home_step171() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep171/" + $('input[name=bankruptcy_years]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=171");
            $('#container').html(data);
        }
    });
}
function home_step172() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep172/" + $('input[name=foreclosure_years]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=172");
            $('#container').html(data);
        }
    });
}
function home_step18() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep18/2",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=18");
            $('#container').html(data);
        }
    });
}
function home_step19() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep19/3",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=19");
            $('#container').html(data);
        }
    });
}
function home_step20() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep20/3",
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=20");
            $('#container').html(data);
        }
    });
}

function home_step21() {
    $.ajax({
        type: "GET",
        url: base_url + "homeloan/homestep21/" + $('input[name=bankruptcy_years]').val(),
        success: function (data)
        {
            window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=21");
            $('#container').html(data);
        }
    });
}

function home_step22() {

    var RE = /^\d*\.?\d*$/;
    var RE1 = /^\d*\.?\d*$/;
    var RE2 = /(^\d{5}$)|(^\d{5}-\d{4}$)/;

    if ($('input[name=address]').val() == '')
    {

        $('#err5').html('address is empty');
        $('#address').focus();
        return false;
    }
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
    } else if ($('input[name=city]').val() == '')
    {

        $('#err7').html('City is empty.Please enter a valid property zip code.');
        $('#zip').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        $('#err6').html('');
        return false;
    } else
    {
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        $('#err5').html('');
        $('#err6').html('');
        $('#err7').html('');
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep22/" + $('input[name=zip]').val() + '/' + $('input[name=city]').val() + '/' + $('input[name=address]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=22");
                $('#container').html(data);
            }
        });
    }
}


function home_step23() {
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
    } else
    {
        $('#err2').html('');
        $('#err1').html('');
        $.ajax({
            type: "GET",
            url: base_url + "homeloan/homestep23/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "homeloan?homeloan=23");
                $('#container').html(data);
            }
        });
    }
}

function home_step24() {

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
            url: base_url + "homeloan/homestep24/" + $('input[name=email]').val() + '/' + $('input[name=phone]').val(),
            success: function (data)
            {

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
 