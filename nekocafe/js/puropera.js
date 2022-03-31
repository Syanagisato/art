$(function(){
	const img_src = ["img/p1.png", "img/p2.png", "img/p3.png", "img/p4.png"];
	
	let index = 0;
	
	function puropera(){
		if(index == 3){
			index = 0;
		}else{
			index++;
		}
		$(".puropera_illust").attr('src', img_src[index]);
	}
	
	let propera_move = setInterval(puropera, 100);
});