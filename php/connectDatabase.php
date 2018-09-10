<?php 
$dsn = "mysql:host=localhost;port=3306;dbname=ohplanet;charset=utf8";
$user = "tzuyi00";
$password = "tzuyi00";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($dsn, $user, $password, $options);
?>