<?php
session_start();
require_once('database.php');
$userId = $_SESSION['id'];
$foodName = $_POST['foodName'];
$customDuration = ($_POST['customDuration'])? $_POST['customDuration'] : null;
$customAmount = ($_POST['customAmount'])? $_POST['customAmount'] : null;

$stmt = $pdo->prepare("SELECT * FROM `food` WHERE LOWER(`foodName`) = LOWER('$foodName')");
$stmt->execute();
$row = $stmt->fetch();
var_dump($row);
if($row) {
    $foodId = $row['id'];
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', '$customDuration', '$customAmount')");
} else {
    $foodId = 14; // custom food id
    $stmt = $pdo->prepare("INSERT INTO `userfood`(`userId`, `foodId`, `customFoodName`, `customDuration`, `customAmount`)
    VALUES ('$userId', '$foodId', '$foodName', '$customDuration', '$customAmount')");
}
$stmt->execute();
header("Location: index.php");
?>
