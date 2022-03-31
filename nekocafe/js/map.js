let road = document.getElementById("road");
road.addEventListener('click', () => {
	const can = document.getElementById("can");
	const ctx = can.getContext('2d');

	var timer1;
	var timer2;

	var count = 0;
	var next = false;

	timer1 = setInterval(function(){
		ctx.clearRect(0, 0, 300, 300);
		ctx.fillStyle = "#fcc";
		ctx.fillRect(50+count, 55, 30, 30);
		count++;
		if(count == 170){
			clearInterval(timer1);
			next = true;
		}
		if(next == true){
			count = 0;
			timer2 = setInterval(function(){
				ctx.clearRect(0, 0, 300, 300);
				ctx.fillStyle = "#fcc";
				ctx.fillRect(220, 55-count, 30, 30);
				count++;
				if(count > 30){
					clearInterval(timer2);
				}
			}, 50);
		}
	}, 20);
});


