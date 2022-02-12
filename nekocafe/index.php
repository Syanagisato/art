<!doctype html>
<html lang="ja">

	<head>
		<meta charset="utf-8">
		<title>保護ねこカフェBaum</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/icon.css">
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/cursol.js"></script>
		<script src="js/app.js"></script>
		<meta name="viewport" content="width=device-width">
	</head>
	
	<body>
		<div id="con">
		<img src="img/icon.png" id="icon">
		<?php require_once("template/header.php"); ?>
		
		<section>
			<h1>保護ねこカフェBaum</h1>
		</section>
		
		<div class="slider">
			<img src="img/cat2s.jpg" alt="ねこちゃん" id="slide_img">
		</div>
		
		<main>
			<p><a href="yoyaku.php">来店予約はコチラ</a></p>
			<p>身寄りのないねこちゃんたちの保護活動と共に、里親さんも探しています。</p>
			<p>ぜひ、会いに来てください！</p>
		</main>
		<?php require_once("template/footer.php"); ?>
		</div>
	</body>
</html>