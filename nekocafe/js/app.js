const img_src = ["img/cat2s.jpg", "img/cat3s.jpg", "img/cat4s.jpg"];

let num = 0;

function slide_time(){
	if(num === 2){
		num = 0;
	} else {
		num++;
	}
	
	document.getElementById("slide_img").src = img_src[num];
	
}

setInterval(slide_time, 1500);

