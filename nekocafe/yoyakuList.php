<?php
require_once("template/config.php");

$sql = "SELECT * FROM yoyaku";
$rs = $pdo->query($sql);
?>

<!doctype html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>店側：予約データ</title>
	<link rel="stylesheet" href="css/list.css">
	<meta name="viewport" content="width=device-width">
</head>

<body>
	<h1>予約データ</h1>
	<?php while($row = $rs->fetch(PDO::FETCH_ASSOC)): ?>
		<div id="data">
			<p>ID:<?php echo $row['id']; ?></p>
			<p>来店日:<?php echo $row['date']; ?></p>
			<p>時間:<?php echo $row['time']; ?></p>
			<p>人数:<?php echo $row['num']; ?></p>
			<p>メニュー:<?php echo $row['menu']; ?></p>
			<p>名前:<?php echo $row['name']; ?></p>
			<p>メール:<?php echo $row['email']; ?></p>
			<p>電話:<?php echo $row['phone']; ?></p>
		</div>
	<?php endwhile; ?>
	</div>
</body>
</html>