var flag = false;
var eid;
window.document.onmouseup = dragOff; //※1マウスが上がったときにdragOff関数を呼び出して、止める
window.document.onmousemove = dragMove; //※2マウスが動いたときに時にdragMove関数を呼び出して、動かす

function dragOn(thisid) {
	flag = true;
	eid = thisid; //引数(thisid)で取得したid名をグローバル変数【eid】に代入
	X = event.clientX - document.getElementById(eid).offsetLeft; //mousudown時（imgタグに書き込んだonmousedownのやつ）のマウス位置（左からの距離）と要素の位置（左からの距離）を引いて、要素(左)とマウス(左)の距離を算出
	Y = event.clientY - document.getElementById(eid).offsetTop; //mousudown時（上記同じく）のマウス位置（上からの距離）と要素の位置（上からの距離）を引いて、要素(上)とマウス(上)の距離を算出
}

function dragOff() { //※1
	flag = false; //グローバル変数【flag】に‘false’を代入＝初期状態に戻して、止める
}

var p = document.createElement("p");

function dragMove() { //※2
	if (!flag) return; //グローバル変数【flag】が‘true’以外、つまり‘false’の時は、dragMove処理（関数）を抜ける（クリック中は【flag】が‘true’なので、以下の処理が実行される）
	mX = event.clientX - X; //【現在のマウス位置(左)】からマウスダウン時に取得した【要素(左)とマウスの距離(左)】を差し引いて、マウスが移動した分の距離(左)を算出
	mY = event.clientY - Y; //【現在のマウス位置(上)】からマウスダウン時に取得した【要素(上)とマウスの距離(上)】を差し引いて、マウスが移動した分の距離(上)を算出
	var targete = document.getElementById(eid);
	targete.style.left = mX + "px"; //上の計算で出た移動距離に行く
	targete.style.top = mY + "px";
	
	p.innerHTML = "画像位置  Left: " + mX + "px  Top: " + mY + "px";
	
}

var text = document.getElementById("text");
text.appendChild(p);
