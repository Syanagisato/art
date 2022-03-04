<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>アクセス</title>
	<link rel="stylesheet" href="css/style4.css">
	<link rel="stylesheet" href="css/icon.css">
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/cursol.js"></script>
	<script src="js/fabric.min.js"></script>
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<div id="con">
		<img src="img/icon.png" id="icon">
		
		<?php require_once("template/header.php"); ?>
		<div id="stage"><img src="img/map.png"></div>
		<canvas></canvas>
		
		<div id="setumei">
			<p>猫の浜駅から徒歩10分です。</p>
			<p>駅を降りたら東改札口を出て、パン屋さんと花屋さんの間の路地をまっすぐお越しください。</p>
			<p>３本目の交差点を左に曲がったら左手にすぐ当店の看板があります。</p>
		</div>
		
		<?php require_once("template/footer.php"); ?>
		
	</div>
	<script src="js/map.js"></script>
</body>

</html>
