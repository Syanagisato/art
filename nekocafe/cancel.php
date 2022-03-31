<?php
session_start();

require_once("template/config.php");

$id = $_GET["id"];
$sql = "DELETE FROM yoyaku WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$stmt->execute();

header("Location: yoyakuList.php?cancel=".$id);
exit();
?>