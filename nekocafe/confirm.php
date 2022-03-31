<?php
session_start();
require_once('template/config.php');
$sql = "SELECT date, time, num, menu, name, email, phone FROM yoyaku WHERE id=". $_GET["id"];
$rs = $pdo->query($sql);
$row = $rs->fetch(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>来店予約</title>
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<?php require_once("template/header.php"); ?>
	<div id="top">
		<h1>以下の内容で予約が完了しました！</h1>
	</div>
	
	<div id="naiyou">
		<ul>
			<li>来店日:<?php echo $row['date']; ?></li>
			<li>来店時間:<?php echo $row['time']; ?></li>
			<li>人数:<?php echo $row['num']; ?></li>
			<li>メニュー:<?php echo $row['menu']; ?></li>
			<li>おなまえ:<?php echo $row['name']; ?></li>
			<li>メールアドレス:<?php echo $row['email']; ?></li>
			<li>電話番号:<?php echo $row['phone']; ?></li>
		</ul>
	</div>
	
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	
	<?php require_once("template/footer.php"); ?>
</body>

</html>
