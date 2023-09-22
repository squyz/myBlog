<?php
session_start();
$mysql = new mysqli("localhost", "mysql", "mysql", "myfirstbd");
$mysql->query("SET NAMES utf8");

$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['isAccount'] = false;

$checkEmail = $mysql->query("SELECT email FROM `users` WHERE email = '$_SESSION[email]'");

if($checkEmail->fetch_all()[0][0]){
    $checkPassword = $mysql->query("SELECT password FROM `users` WHERE email = '$_SESSION[email]'");
    if($checkPassword->fetch_all()[0][0] == $_SESSION['password']){
        $_SESSION['isAccount'] = true;
        echo 'Вы успешно вошли в аккаунт!';
    }
    else{
        $_SESSION['isAccount'] = false;
        echo 'Вы написали неверный пароль';
    }
}
else{
    $_SESSION['isAccount'] = false;
    echo 'Почта с паролем не найдены. Вы хотите зарегистрироваться?';
}

$mysql->close();