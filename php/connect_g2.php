<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
	$user = "cd102g2";
	$password = "cd102g2";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
?>