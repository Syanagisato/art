$(function(){
	for(let i = 0; i < 50; i++){
		$('#con').append('<tr class="tr">');
	}
	for(let i = 0; i < 100; i++){
		$('.tr').append('<td class="td">');
	}
	
	$('td').on('click', function(){
		$(this).removeClass();
		$(this).addClass('black');
	});
	
	$('#black').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('black');
		});
	});
	
	$('#red').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('red');
		});
	});
	
	$('#yellow').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('yellow');
		});
	});
	
	$('#blue').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('blue');
		});
	});
	
	$('#green').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('green');
		});
	});
	
	$('#skyblue').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('skyblue');
		});
	});
	
	$('#pink').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('pink');
		});
	});
	
	$('#orange').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('orange');
		});
	});
	
	$('#brown').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('brown');
		});
	});
	
	$('#erase').on('click', function(){
		$('td').on('click', function(){
			$(this).removeClass();
			$(this).addClass('erase');
		});
	});
	
	$('#reset').on('click', function(){
		$('td').removeClass();
		$('td').addClass("td");
	});
	
});