<?php
session_start();

$mysql = new mysqli("localhost", "mysql", "mysql", "myfirstbd");
$mysql->query("SET NAMES utf8");

$_SESSION['name'] = $_POST['name'];
$_SESSION['number'] = $_POST['number'];
$_SESSION['text'] = $_POST['text'];

$mysql->query("INSERT INTO `messages` (`name`, `number`, `text`) VALUES ('$_SESSION[name]', '$_SESSION[number]', '$_SESSION[text]')");