<?php
//PDOクラスを使ってDBに接続
$host = "localhost";
$dbname = "nekocafe";
$dbuser = "root";
$dbpass = '';

$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";

$pdo = new PDO($dsn, $dbuser, $dbpass);
?>