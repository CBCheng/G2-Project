<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=bgmgr;charset=utf8";
	$user = "bombx15130";
	$password = "123456";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
?>