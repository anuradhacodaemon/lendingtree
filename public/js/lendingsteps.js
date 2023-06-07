var base_url = $('#domain').val();
if (window.performance) {
  console.info("window.performance work's fine on this browser");
}
    var urlParams = new URLSearchParams(window.location.search);
    var step = parseInt(urlParams.get('step'));

    console.log("The step from lending>>>"+ step);
    //This condition works when user directly put the step value in it
  if (performance.navigation.type == 1) {
    
    if (window.location.search.indexOf('step=1') > -1) {
    $('#step_count').val(1);    
      $.ajax({
            type: "GET",
            url: base_url +"auto/step1",
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=1");
                $('#container').html(data);
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
            }
        });
    }   
    if (window.location.search.indexOf('step=11') > -1) {
        $('#step_count').val(11);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step11",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }    
    if (window.location.search.indexOf('step=11.1') > -1) {
        $('#step_count').val(11.1);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step11_1",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }   
    if (window.location.search.indexOf('step=12') > -1) {
        $('#step_count').val(12);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step12",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    } 
    if (window.location.search.indexOf('step=13') > -1) {
        $('#step_count').val(13);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step13",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    } 
    if (window.location.search.indexOf('step=14') > -1) {
        $('#step_count').val(14);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step14",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    } 
    if (window.location.search.indexOf('step=15') > -1) {
        $('#step_count').val(15);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step15",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    } 
    if (window.location.search.indexOf('step=16') > -1) {
        $('#step_count').val(16);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step16",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }  
    if (window.location.search.indexOf('step=17') > -1) {
        $('#step_count').val(17);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step17",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }   
    if (window.location.search.indexOf('step=18') > -1) {
        $('#step_count').val(18);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step18",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    } 
    if (window.location.search.indexOf('step=19') > -1) {
        $('#step_count').val(19);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step19",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }   
    if (window.location.search.indexOf('step=20') > -1) {
        $('#step_count').val(20);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step20",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }    
    if (window.location.search.indexOf('step=21') > -1) {
        $('#step_count').val(21);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step21",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    } 
    if (window.location.search.indexOf('step=22') > -1) {
        $('#step_count').val(22);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step22",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }   
    if (window.location.search.indexOf('step=22.1') > -1) {
        $('#step_count').val(22.1);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step22_1",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=23') > -1) {
        $('#step_count').val(23);   
       $.ajax({
            type: "GET",
            url: base_url +"auto/step23",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=24') > -1) {
        $('#step_count').val(24); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step24",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=25') > -1) {
        $('#step_count').val(25); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step25",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=26') > -1) {
        $('#step_count').val(26); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step26",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=27') > -1) {
        $('#step_count').val(27); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step27",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=28') > -1) {
        $('#step_count').val(28); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step28",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=29') > -1) {
        $('#step_count').val(29); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step29",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=30') > -1) {
        $('#step_count').val(30); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step30",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=31') > -1) {
        $('#step_count').val(31); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step31",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=32') > -1) {
        $('#step_count').val(32); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step32",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=32.1') > -1) {
        $('#step_count').val(32.1); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step32_1",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=33') > -1) {
        $('#step_count').val(33); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step33",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=34') > -1) {
        $('#step_count').val(34); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step34",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=35') > -1) {
        $('#step_count').val(35); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step35",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=36') > -1) {
        $('#step_count').val(36); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step36",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=37') > -1) {
        $('#step_count').val(37); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step37",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=38') > -1) {
        $('#step_count').val(38); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step38",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=39') > -1) {
        $('#step_count').val(39); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step39",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=40') > -1) {
        $('#step_count').val(40); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step40",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=41') > -1) {
        $('#step_count').val(41); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step41",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=42') > -1) {
        $('#step_count').val(42); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step42",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=43') > -1) {
        $('#step_count').val(43); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step43",
            success: function (data)
            {
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
        if (window.location.search.indexOf('step=1') > -1) {
        alert('check this');
        }
    }*/
    window.addEventListener('popstate', function(event) {
        //console.log("This is state>>" + event.state);
        var currentState = window.history.state;
        console.log(currentState);
    if (window.location.search.indexOf('step=1') > -1) {
        $('#step_count').val(1);  
        $.ajax({
            type: "GET",
            url: base_url +"auto/step1",
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=1");
                $('#container').html(data);
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
            }
        });
    }
    if (window.location.search.indexOf('step=11') > -1) {
        $('#step_count').val(11); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step11",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=11.1') > -1) {
        $('#step_count').val(11.1); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step11_1",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=12') > -1) {
        $('#step_count').val(12); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step12",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=13') > -1) {
        $('#step_count').val(13); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step13",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=14') > -1) {
        $('#step_count').val(14); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step14",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=15') > -1) {
        $('#step_count').val(15); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step15",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=16') > -1) {
        $('#step_count').val(16); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step16",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=17') > -1) {
        $('#step_count').val(17); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step17",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=18') > -1) {
        $('#step_count').val(18); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step18",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=19') > -1) {
        $('#step_count').val(19); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step19",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=20') > -1) {
        $('#step_count').val(20); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step20",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=21') > -1) {
        $('#step_count').val(21); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step21",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=22') > -1) {
        $('#step_count').val(22); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step22",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=22.1') > -1) {
        $('#step_count').val(22.1); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step22_1",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=23') > -1) {
        $('#step_count').val(23); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step23",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=24') > -1) {
        $('#step_count').val(24); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step24",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=25') > -1) {
        $('#step_count').val(25); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step25",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=26') > -1) {
        $('#step_count').val(26); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step26",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=27') > -1) {
        $('#step_count').val(27); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step27",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=28') > -1) {
        $('#step_count').val(28); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step28",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=29') > -1) {
        $('#step_count').val(29); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step29",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=30') > -1) {
        $('#step_count').val(30); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step30",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=31') > -1) {
        $('#step_count').val(31); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step31",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=32') > -1) {
        $('#step_count').val(32); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step32",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=32.1') > -1) {
        $('#step_count').val(32.1); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step32_1",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=33') > -1) {
        $('#step_count').val(33); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step33",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=34') > -1) {
        $('#step_count').val(34); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step34",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=35') > -1) {
        $('#step_count').val(35); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step35",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=36') > -1) {
        $('#step_count').val(36); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step36",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=37') > -1) {
        $('#step_count').val(37); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step37",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=38') > -1) {
        $('#step_count').val(38); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step38",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=39') > -1) {
        $('#step_count').val(39); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step39",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=40') > -1) {
        $('#step_count').val(40); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step40",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=41') > -1) {
        $('#step_count').val(41); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step41",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=42') > -1) {
        $('#step_count').val(42); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step42",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }
    if (window.location.search.indexOf('step=43') > -1) {
        $('#step_count').val(43); 
        $.ajax({
            type: "GET",
            url: base_url +"auto/step43",
            success: function (data)
            {
                $('#container').html(data);
            }
        });
    }



    //Browser Back condition Ends below
 }, false);







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
 