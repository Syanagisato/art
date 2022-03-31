<?php
session_start();
require_once("template/config.php");

$sql = "SELECT id, menu, price FROM menu";
$rs = $pdo->query($sql);

?>

<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>来店予約</title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery.timepicker.css">
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<?php require_once("template/header.php"); ?>
	<section>
		<h1>ご予約</h1>
	</section>
	
	<article>
		<h2>ご希望の来店日とメニューを選んでください</h2>
		
		<?php if(!empty($_POST["date"]) || !empty($_POST["num"])): ?>
		<p>未入力の欄があります。</p>
		<?php endif; ?>
		
		<form action="add.php" method="post">
			<p>
				<label for="date">来店日</label>
				<input type="text" name="date" id="date" readonly="readonly" required>
			</p>
			
			<p>
				<label for="time">来店時間</label>
				<input type="text" name="time" id="time">
			</p>
			
			<p>
				<label for="num">人数</label>
				<input type="number" name="num" id="num" value="1" min="1" max="4" step="1" required>
			
			</p>
			<p>※小学生以下は入店不可。店内はあまり広くないため、最大4名様まで。</p>
			
			<p class="list">
				<h3>メニュー</h3>
				<?php while($row = $rs->fetch(PDO::FETCH_ASSOC)): ?>
				<input type="radio" name="menu" value="<?php echo $row['menu']; ?>" id="menu_<?php echo $row['id']; ?>">
				<label for="menu_<?php echo $row['id']; ?>"><?php echo "{$row['menu']} : {$row['price']}円"; ?></label>
				<?php endwhile; ?>
			</p>
			
			<h3>お客様情報</h3>
			
			<p>来店の際の本人様確認に使用させていただきます。個人情報は厳守いたします。</p>
			
			<p>
				<label for="uname">お名前</label>
				<input type="text" name="name" id="name">
			</p>
			
			<p>
				<label for="email">メールアドレス</label>
				<input type="text" name="email" id="email">
			</p>
			
			<p>
				<label for="phone">電話番号</label>
				<input type="text" name="phone" id="phone">
			</p>
			
			<p><button type="submit">決定</button></p>
		</form>
	</article>
	
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/datepicker-ja.js"></script>
	<script src="js/jquery.timepicker.js"></script>
	<script src="js/yoyaku.js"></script>
	
	<?php require_once("template/footer.php"); ?>
</body>

</html>
