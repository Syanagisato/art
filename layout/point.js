$(function(){
	var p = $('<p id="point">');
	$('#text').append(p);
	$('#layout').on('click', function(e) {
		var x = e.offsetX;
		var y = e.offsetY;
		p.text("ポイント位置  Top: " + y + " Left: " + x);
		console.log(x);
		console.log(y);
	});
});