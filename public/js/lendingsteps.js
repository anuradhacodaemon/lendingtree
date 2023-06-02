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
            type: "POST",
            url: base_url +"auto/step5",
            data:{},
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
   window.addEventListener('popstate', function(event) {
        console.log("This is state>>" + event.navigation);
    if (window.location.search.indexOf('step=1') > -1) {
        $('#step_count').val(1);  
        $.ajax({
            type: "GET",
            url: base_url +"auto/step1",
            success: function (data)
            {
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
function step1(id) {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'type of loan');
    var url = base_url + "auto/step1/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "auto?step=1");
            
            $('#container').html(data);
            
             
            
        }
    });

}
function step2(id) {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'type of loan');
    var url = base_url + "auto/step2/" + id;
    
    $.ajax({
        type: "GET",
        url: url,
        success: function (data)
        {
            
           
            window.history.pushState("Details", "Title", base_url + "auto?step=2");
            
            $('#container').html(data);
            
             
            
        }
    });

}


function step4() {
    //ga('send', 'event', 'BMTCCU', 'auto loan', 'Current Employer');
    var RE = /^[A-Za-z]+$/;
    var RE1 = /^\d*\.?\d*$/;
    if ($('input[name=firstname]').val() == '')
    {

        $('#err1').html('Your First Name is empty');
        $('#firstname').focus();
        return false;
    } else if (!RE.test($("#firstname").val()))
    {

        $('#err1').html('Your First Name should have letter only ');
        $('#firstname').focus();
        return false;
    }
    else if ($('input[name=lastname]').val() == '')
    {

        $('#err2').html('Your First Name is empty');
        $('#lastname').focus();
        $('#err_lastname').html('');
        return false;
    } 
    else if ($('input[name=lastname]').val() == '')
    {

        $('#err2').html('Your Last Name should have letter only ');
        $('#lastname').focus();
        return false;
    } 
    else if ($('input[name=phone]').val() == '')
    {

        $('#err3').html('Your phone is empty');
        $('#phone').focus();
        $('#err1').html('');
        $('#err2').html('');
        return false;
    } else if (!RE1.test($('#phone').val()))
    {

        $('#err3').html('Your phone number should be atleast 10 digit');
        $('#phone').focus();
        $('#err1').html('');
        $('#err2').html('');
        return false;
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "auto/step4/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=4");
                $('#container').html(data);
            }
        });
    }

}


/*function step5() {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Pre-Tax Monthly Income');
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
    } else
    {
        $('#err2').html('');
        $.ajax({
            type: "GET",
            url: base_url + "auto/step5/" + $('input[name=pre_tax_income1]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=5");
                $('#container').html(data);
            }
        });

    }

}*/
function step6() {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Your Details');
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
    } else if ($('#state').val() == '')
    {
        //alert($(this).val());
        // alert($('input[name=state]').has('option').length);
        $('#err4').html('state is empty');
        $('#state').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        return false;
    } else if ($('#city').val() == '' && !$('#city').prop('disabled'))
    {
        $('#err5').html('city is empty');
        $('#city').focus();
        $('#err1').html('');
        $('#err2').html('');
        $('#err3').html('');
        $('#err4').html('');
        return false;
    } else if ($('input[name=zip]').val() == '')
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
        var city = 0;
        if ($('#city').val() > 0)
            city = $('#city').val();

        $.ajax({
            type: "GET",
            url: base_url + "auto/step6/" + $('input[name=firstname]').val() + '/' + $('input[name=lastname]').val() + '/' + $('input[name=address]').val() + '/' + city + '/' + $('#state').val() + '/' + $('input[name=zip]').val() + '/' + $('input[name=ssn]').val(),
            success: function (data)
            {
                window.history.pushState("Details", "Title", base_url + "auto?step=6");
                $('#container').html(data);
            }
        });
    }
}

function step7(){
    ga('send', 'event', 'BMTCCU', 'auto loan', 'When Were You Born');
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
            url: base_url + "auto/step7/" +  $('#selectMonth').val() + '/' +  $('#selectDate').val() + '/' +  $('#selectYear').val()+ '/' +  $('input[name=ssn]').val(),
            success: function (data)
            {
                  window.history.pushState("Details", "Title", base_url + "auto?step=7");
               $('#container').html(data);
            }
        });
    }
}

function step8() {
    ga('send', 'event', 'BMTCCU', 'auto loan', 'Submit');
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
            url: base_url + "auto/step8/" + $('input[name=email]').val() + '/' + $('input[name=phone]').val(),
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
 