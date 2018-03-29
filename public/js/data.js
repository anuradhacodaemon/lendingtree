// Set Global Variabels 
//used to set progress bar max width in px.
var progressBarWidth;

// used to save ajax response and is ajax request completed.
var response;
var isAjaxComplete = false;
var onPageLoad = true;
// these are the random slots used to show variations in progress bar
var step1Slot = Math.floor((Math.random() * 15) + 15);
var step2Slot = Math.floor((Math.random() * 10) + 40);
var step3Slot = Math.floor((Math.random() * 15) + 60);
var step4Slot = Math.floor((Math.random() * 10) + 75);

var step1Interval = Math.floor((Math.random() * 200) + 1);
var step2Interval = Math.floor((Math.random() * 500) + 1000);
var step3Interval = Math.floor((Math.random() * 500) + 1000);
var step4Interval = Math.floor((Math.random() * 100) + 1);

// array to randomize time interval of each stage 
var intervalArr = [step1Interval,step2Interval,step3Interval,step4Interval];

$(document).ready(function(){
	//send ajax call to fetch data 
    readData();
    $("#button_view > div > button").click(function(){
        $("#button_view").hide();
        $("#data > table thead").html("");
        $("#data > table tbody").html("");

        $("#progress-bar").css("width","0%");
        $("#progress-bar").html("0%");

        onPageLoad =false;
        readData();
    }); 
	
});
var readData = function(){
    $("#progress_bar_holder").show();
    $.ajax({
        url: "https://data.cityofnewyork.us/resource/5scm-b38n.json", 
        type: "GET",
        success: function(result){
            response = result;
            //renderResult(response);
        },
        error:function(error){

        }
    });
}
// show progress bar and start showing progress on ajax call start
$(document).ajaxStart(function(){
	$("#progress_bar_holder").show();
	progressBarWidth = $("#progress-bar-parent").css("width").split("px")[0];

	startProgressBar(intervalArr[Math.floor((Math.random()* 4) + 0)]);
	$("#response_text > h3 > small").html("Initiating your request");
});
// check if ajax request completed or not.
$(document).ajaxComplete(function(){
	isAjaxComplete = true;
})

// Start Processing progress bar
var startProgressBar = function(interval){
    progressIntervalTillResponse = setInterval(processProgressBar, interval);
}
// Check stage of the progress bar and change the interval accordingly.
var processProgressBar = function(){
	var widthArr =  $("#progress-bar").css("width").split("px");
	var width = Math.round((Math.round(widthArr[0])/progressBarWidth)*100);

	if(width < step1Slot){
		$("#response_text > h3 > small").html("Fetching data...");
		
	}else if(width == step1Slot){
		resetProgress();
	}
	else if(width < step2Slot){
		$("#response_text > h3 > small").html("Validating result...");
	}
	else if(width == step2Slot){
		resetProgress();
	}
	else if(width < step3Slot){
		$("#response_text > h3 > small").html("Formatting data...");
	}
	else if(width == step3Slot){
		resetProgress();
	}
	else if(width < step4Slot){
		$("#response_text > h3 > small").html("Rendering result...");
	}
	else if(width == step4Slot){
		resetProgress();
	}
	else if(width<100){
		$("#response_text > h3 > small").html("Finishing Request...");
	}
	else{
		$("#response_text > small").html("Request complete.");
		$("#progress_bar_holder").hide();
		$("#response_text > h3 >small").html("");
		clearInterval(progressIntervalTillResponse);
	}
	if(width<100){
		$("#progress-bar").css("width",(width + 1)+"%");
		$("#progress-bar").html((width + 1)+"%");
	}
	if(width==100){
		renderResult(response);
       
	}
}
// reset progress bar after each stage and check if received ajax response or not.
// if not received ajax response hold the process for few seconds.
var resetProgress = function(){
	if(!isAjaxComplete){
		setTimeout(startProgressBar, 1000, intervalArr[Math.floor((Math.random()* 3) + 0)])
	}
	else{
		startProgressBar(intervalArr[Math.floor((Math.random()* 3) + 0)]);
	}
}
// render result
var renderResult = function(response){
		renderTableHeader();
		renderResponse(response);
}
// render table header 
var renderTableHeader = function(){
	$("#data > table thead").append('<tr><th class="hidden-xs hidden-sm">List No.</th><th class="hidden-xs hidden-sm">First Name</th><th class="hidden-xs hidden-sm">Last Name</th><th class="hidden-md hidden-lg">Name</th><th>Exam No.</th><th>Group No.</th><th class="hidden-xs hidden-sm">List Title Code</th><th class="hidden-xs hidden-sm">List Title Desc</th><th class="hidden-md hidden-lg">List Title</th></tr>');	
}
// render table data 
var renderResponse = function(response){
	var tableData = '';
	if(onPageLoad)
        limit = 10;
    else
        limit = response.length;

    currentRow = 0;
    $.each(response, function(i, obj) {
		tableData += '<tr>';
		tableData += '<td class="hidden-xs hidden-sm">'+obj.list_no+'</td>';
		tableData += '<td class="hidden-xs hidden-sm user-name">'+obj.first_name+'</td>';
		tableData += '<td class="hidden-xs hidden-sm user-name">'+obj.last_name+'</td>';
		tableData += '<td class="hidden-md hidden-lg user-name">'+obj.first_name+' '+obj.last_name+'</td>';
		tableData += '<td>'+obj.exam_no+'</td>';
		tableData += '<td>'+obj.group_no+'</td>';
		tableData += '<td class="hidden-xs hidden-sm">'+obj.list_title_code+'</td>';
		tableData += '<td class="hidden-xs hidden-sm">'+obj.list_title_desc+'</td>';
		tableData += '<td class="hidden-md hidden-lg">'+obj.list_title_code+'</td>';
		tableData += '</tr>';
		$("#data > table > tbody").append(tableData);
		tableData="";
        if(currentRow == limit){
            $("#button_view").show();
            return false;
        }
        currentRow++;
    });
}