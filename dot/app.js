$(function(){
	for(let i = 0; i < 50; i++){
		$('table').append('<tr class="tr">');
	}
	for(let i = 0; i < 100; i++){
		$('.tr').append('<td class="yes">');
	}
	
	$('#ok').on('click', function(){
		var color = $('#color').val();
		$('#pen').text(color);
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('color');
			$(this).css('background-color', color);
		});
	});
	
	$('td').on('click', function(){
		$(this).removeClass();
		$(this).addClass('black');
	});
	
	$('#erase').on('click', function(){
		$('#pen').text('消しゴム');
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).css('background-color', '');
		});
	});
	
	var line = true;
	$('#line').on('click', function(){
		if(line == true){
			$('td.yes').removeClass('yes');
			$('td').addClass('non');
			line = false;
		}else{
			$('td.non').removeClass('non');
			$('td').addClass('yes');
			line = true;
		}
	});
	
	var back = true
	$('#back').on('click', function(){
		if(back == true){
			$('table').css('background-color', '#999');
			back = false;
		}else{
			$('table').css('background-color', 'white');
			back = true;
		}
	});
	
	$('#reset').on('click', function(){
		$('td').removeClass();
		$('td').css('background-color', '');
		$('td').addClass("yes");
	});
	
});