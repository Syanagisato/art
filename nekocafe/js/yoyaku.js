$(function(){
	$("#date").datepicker({
		numberOfMonths: 2,
		minDate: "+1d"
	});
	$("#time").timepicker({
		minTime: "10:00am",
		maxTime: "16:00pm",
		
	});
	$("#num").on("mouseup keyup", function(e){
		var num = parseInt($(this).val());
		var numMax = parseInt($(this).attr("max"));
		var numMin = parseInt($(this).attr("min"));
		if(num > numMax){
			$(this).val(numMax);
		}else if(num < numMin){
			$(this).val(numMin);
		}else if(isNaN(num)){
			$(this).val("1");
		}
	});
});