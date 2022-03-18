$(function(){
    //画像領域の指定
    $('#ok3').on('click', function(){
    	var wid = $('#back-wid').val();
    	var hei = $('#back-hei').val();
    	$('#layout').css('width', wid);
    	$('#layout').css('height', hei);
    	$('#wid-hei').text('Width:' + wid + 'px Height:' + hei + 'px');
    });
    
   //背景の追加
    $('#ok').on('click', function(){
        var back = $('#back').val();
        $('#layout').css('background-image', 'url(' + back + ')');
        $('#backimg').text('背景画像：' + back);
    });
    
    //オブジェの追加
    num = 1;
    $('#ok2').on('click', function(){
        var obje = $('#obje').val();
        var img = $('<img src="' + obje + '" class="img" id="img' + num + '" style="position: absolute" onmousedown="dragOn(this.id)" ondragstart="return false;">');
        $('#layout').append(img);
        $('footer').append('<div id="obje' + num + '"></div>');
        $('footer').append('<li>' + obje + '</li>');
        num++;
    });
})

 //※１：onmousedown="dragOn(this.id)"はmove.jsで作った関数の呼び出し
 //※２：ondragstart="return false;"は、chromeの誤作動を防ぐもの
 