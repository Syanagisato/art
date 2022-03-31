//予約情報の登録
<?php
session_start();

if(empty($_POST["date"]) || empty($_POST["time"]) || empty($_POST["num"]) || empty($_POST["menu"]) || empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone"])) {
	header("Location: yoyaku.php?err=1");
	exit();
}

require_once("template/config.php");

$date = $_POST["date"];
$time = htmlspecialchars($_POST["time"], ENT_QUOTES);
$num = $_POST["num"];
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$email = htmlspecialchars($_POST["email"], ENT_QUOTES);
$phone = htmlspecialchars($_POST["phone"], ENT_QUOTES);
print_r($_POST);

$sql = "INSERT INTO yoyaku(date, time, num, menu, name, email, phone)";
$sql .= " VALUES(:date, :time, :num, :menu, :name, :email, :phone)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":date", $date, PDO::PARAM_STR);
$stmt->bindValue(":time", $time, PDO::PARAM_STR);
$stmt->bindValue(":num", $num, PDO::PARAM_INT);
$stmt->bindValue(":menu", $_POST["menu"], PDO::PARAM_STR);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":email", $email, PDO::PARAM_STR);
$stmt->bindValue(":phone", $phone, PDO::PARAM_STR);
$stmt->execute();
$id = $pdo->lastInsertId();
header("Location: confirm.php?id=".$id);
exit();
?>