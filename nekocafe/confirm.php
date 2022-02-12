<?php
session_start();
if(empty($_POST["date"]) || empty($_POST["num"]) || empty($_POST["menu"]) || empty($_POST["uname"]) || empty($_POST["email"]) || empty($_POST["phone"])){
	header("Location: yoyaku.php");
	exit();
}

$date = $_POST["date"];
$time = htmlspecialchars($_POST["time"], ENT_QUOTES);
$num = $_POST["num"];
$uname = htmlspecialchars($_POST["uname"], ENT_QUOTES);
$email = htmlspecialchars($_POST["email"], ENT_QUOTES);
$phone = htmlspecialchars($_POST["phone"], ENT_QUOTES);
print_r($_POST);
?>