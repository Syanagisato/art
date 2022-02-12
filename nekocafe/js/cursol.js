$(window).on("mousemove", function(e){
	//$("#icon").css("left", e.clientX + "px");
	//$("#icon").css("top", e.clientY + "px");
	$("#icon").animate({
		left: e.pageX,
		top: e.pageY
	}, 10);
	$("a").hover(function(){
		$("#icon").hide();
	}, function(){
		$("#icon").show();
	});
});