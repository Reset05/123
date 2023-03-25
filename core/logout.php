<?php
session_start();

// Если пользователь нажал на кнопку "Выход"
if (isset($_POST['logout'])) {
  // Удаляем все переменные сессии
  $_SESSION = array();
  session_destroy();
  
  // Перенаправляем пользователя на страницу входа
  header('Location: ../index.php');
  exit();
}
?>