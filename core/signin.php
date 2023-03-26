<?php
session_start();
include_once 'db.php';

$login = $_POST['login'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'";
$result = mysqli_query($mysqli, $sql);

if(mysqli_num_rows($result) == 1) {
  $user = mysqli_fetch_assoc($result);
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['login'] = $user['login'];
  header('Location: ../index.php');
  exit();
} else {
  $error = 'Неверный логин или пароль';
}
?>