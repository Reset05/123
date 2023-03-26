<?php
session_start();
include_once 'db.php';

$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$pass = md5($pass);

// Проверяем, существует ли уже такой логин или пароль
$sql = "SELECT * FROM users WHERE login = '$login' OR email = '$email'";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
  // Если пользователь с таким логином или email уже существует, выводим сообщение об ошибке
  $error = 'Пользователь с таким логином или email уже существует';
} else {
  // Если пользователь не существует, выполняем запрос INSERT
  $sql = "INSERT INTO users (login, password, email) VALUES ('$login', '$pass', '$email')";
  $result = mysqli_query($mysqli, $sql);
  
  if($result) {
    $_SESSION['user_id'] = mysqli_insert_id($mysqli);
    header('Location: ../index.php');
    exit();
  }
}

?>