<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>お店について</title>
	<link rel="stylesheet" href="css/style3.css">
	<link rel="stylesheet" href="css/icon.css">
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/cursol.js"></script>
	<script src="app.js"></script>
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<div id="con">
	<img src="img/icon.png" id="icon">
	<?php require_once("template/header.php"); ?>
	<section class="shop">
		<h1>お店について</h1>
	</section>
	
	<main>
		<article class="menu">
		<p>当店は、時間制・ワンドリンク制となっております。</p>
		<p>メニューは右の欄からお選びください</p>
		<p>
			来店の際は以下のことを守っていただくようお願いいたします。
			<ul>
			 <li>ねこちゃんを優しくなでてあげることは良いですが、抱っこはしないでください。</li>
			 <li>制限時間が過ぎた場合は、10分毎に300円加算されますのでご注意ください。</li>
			 <li>ねこちゃんがじゃれてきた際に、爪で肌や衣服等に傷がつく場合がありますが、一切の責任は負いかねます。<br>（絆創膏の用意がありますので、必要があれば遠慮なくお申し出ください。）</li>
			 <li>ドリンクのおかわりはございません。新たにご注文していただくことは可能です。</li>
			 <li>ドリンクは絶対にねこちゃんに飲ませないでください。</li>
			</ul>
		</p>
		</article>
		
		<section class="menu">
			<table>
				<caption>MENU</caption>
				<tr>
				<th>Time</th>
				<th>Drink</th>
				</tr>
				<tr>
					<td>30分<br>600円</td>
					<td>コーヒー<br>HOT or Ice</td>
				</tr>
				<tr>
					<td>60分<br>1200円</td>
					<td>紅茶<br>HOT or Ice</td>
				</tr>
				<tr>
					<td>90分<br>1800円</td>
					<td>緑茶<br>HOT only</td>
				</tr>
				<tr>
					<td>60分＜朝限定＞<br>1000円</td>
					<td>ジュース<br>ORANGE or APPLE</td>
				</tr>
			</table>
		</section>
	</main>
	<?php require_once("template/footer.php"); ?>
	</div>
</body>

</html>
