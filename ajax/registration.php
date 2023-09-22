<?php
session_start();

$mysql = new mysqli("localhost", "mysql", "mysql", "myfirstbd");
$mysql->query("SET NAMES utf8");

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['isAccount'] = false;

$result = $mysql->query("SELECT email FROM `users` WHERE email = '$_SESSION[email]'");

if($result->fetch_all()[0][0]){
    $_SESSION['isAccount'] = false;
    echo 'На эту почту уже зарегистрирован аккаунт!';
}
else{
    $_SESSION['isAccount'] = true;
    $mysql->query("INSERT INTO `users` (`name`, `email`, `password`) VALUES('$_SESSION[name]', '$_SESSION[email]', '$_SESSION[password]')");
    echo 'Вы успешно зарегистрированы!';
}

$mysql->close();