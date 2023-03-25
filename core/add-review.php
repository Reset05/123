<?php
include_once 'db.php';
$product_id = $_POST['product_id'];
$name = $_POST['name'];
$text = $_POST['text'];
$date = date('Y-m-d H:i:s');
$stmt = $pdo->prepare("INSERT INTO reviews (product_id, name, text, created_at) VALUES (?, ?, ?, ?)");
$stmt->execute([$product_id, $name, $text, $date]);
header('Location:../index.php')
?>