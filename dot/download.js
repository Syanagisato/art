var dl = document.getElementById("dl");
dl.addEventListener('click', () => {
	html2canvas(document.querySelector("#canvas")).then(canvas => {
		let dlEle = document.createElement("a");
		dlEle.href = canvas.toDataURL("image/png");
		dlEle.download = "canvas.png";
		dlEle.click();
	});
});
