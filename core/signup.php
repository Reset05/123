<?php
session_start();
include_once 'db.php';

$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$pass = md5($pass);

$sql = "INSERT INTO users (login, password, email) VALUES ('$login', '$pass', '$email')";
$result = mysqli_query($mysqli, $sql);
if($result) {
    $_SESSION['user_id'] =
    mysqli_insert_id($msyqli);
    header('Location: ../index.php');
    exit();
}
?>