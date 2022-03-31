<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>ねこちゃん紹介</title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/icon.css">
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/cursol.js"></script>
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<div id="con">
	<img src="img/icon.png" id="icon">
	<?php require_once("template/header.php"); ?>
	
	<div id="top">
		<h1>ねこちゃん紹介</h1>
		<p>今回は、やんちゃなキジトラ猫(♂)のくろすけと、世話好きな三毛猫(♀)のリーリアをご紹介します！</p>
	</div>
	
	<div class="catsSyokai">
		<div class="puropera">
			<img src="img/p1.png" class="puropera_illust">
		</div>
		<div class="catsPhoto">
			<img src="img/1.jpg" class="catPhoto">
		</div>
	</div>
	
	<div class="catsSyokai">
		<div class="puropera">
			<img src="img/p1.png" class="puropera_illust">
		</div>
		<div class="catsPhoto">
			<img src="img/2.jpg" class="catPhoto">
		</div>
	</div>
	
	<div class="catsSyokai">
		<div class="puropera">
			<img src="img/p1.png" class="puropera_illust">
		</div>
		<div class="catsPhoto">
			<img src="img/3.jpg" class="catPhoto">
		</div>
	</div>
	
	<?php require_once("template/footer.php"); ?>
	</div>
	<script src="js/puropera.js"></script>
</body>

</html>
