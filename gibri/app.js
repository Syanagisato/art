function title1(){
	let n = Math.floor(Math.random() * 5);
	const a = ["となりの", "崖の上の", "蛍の", "借りぐらしの", "もののけ"];
	alert(a[n]);
}

function title2(){
	let m = Math.floor(Math.random() * 5);
	const b = ["姫", "アリエッティ", "墓", "ポニョ", "トトロ"];
	alert(b[m]);
}

function getTitle(){
	const a = ["風の谷の", "猫の", "千と千尋の", "紅の", "ハウルの", "となりの", "崖の上の", "蛍の", "借りぐらしの", "もののけ"];
	const b = ["ナウシカ", "恩返し", "神隠し", "豚", "動く城", "トトロ", "ポニョ", "墓", "アリエッティ", "姫"];
	let n = Math.floor(Math.random() * 10);
	let m = Math.floor(Math.random() * 10);
	alert(a[n] + b[m]);
	if (n == m){
		alert("おめでとう！");
	}
}