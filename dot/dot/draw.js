//ドット絵クリエイト

//マス目作成
$(function(){
	for(let i = 0; i < 50; i++){
		$('table').append('<tr class="tr">');
	}
	for(let i = 0; i < 100; i++){
		$('.tr').append('<td class="yes">');
	}
	
	//お絵描き
	$('#ok').on('click', function(){
		var color = $('#color').val();
		$('#pen').text(color);
		
		var draw = false;
		
		$('table').on('mousedown', function(){
			if(draw == false){
				draw = true;
			}
		});
	
		$(window).on('mouseup', function(){
			if(draw == true){
				draw = false;
			}
		});
		
		$('td').on('mouseover', function(){
			if(draw == true){
				$(this).addClass('color');
				$(this).css('background-color', color);
			}
		});
		
		$('td').on('click', function(){
			$(this).addClass('color');
			$(this).css('background-color', color);
		});
	});
	
	//消しゴム
	$('#erase').on('click', function(){
		$('#pen').text('消しゴム');
		
		var erase = false;
		
		$('table').on('mousedown', function(){
			if(erase == false){
				erase = true;
			}
		});
		
		$(window).on('mouseup', function(){
			if(erase == true){
				erase = false;
			}
		});
		
		$('td').on('mouseover', function(){
			if(erase == true){
				$(this).removeClass('color');
				$(this).css('background-color', '');
			}
		});
		
		$('td').on('click', function(){
			$(this).removeClass('color');
			$(this).css('background-color', '');
		});
	});
	
	//格子線の入れ替え
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
	
	//背景色変更
	$('#ok2').on('click', function(){
		var back = $('#back').val();
		$('table').css('background-color', back);
	});
	
	//リセット
	$('#reset').on('click', function(){
		let con = confirm('本当にリセットしますか');
		if(con){
			$('td').removeClass();
			$('td').css('background-color', '');
			$('td').addClass("yes");
		}
	});
	
});