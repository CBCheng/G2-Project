<?php
<<<<<<< HEAD
	$dsn = "mysql:host=localhost;port=3306;dbname=ohplanet;charset=utf8";
	$user = "tzuyi00";
	$password = "tzuyi00";
=======
	$dsn = "mysql:host=127.0.0.1;dbname=cd102g2;charset=utf8";
	$user = "root";
	$password = "admin";
>>>>>>> 22e51b9555bd169349cf7970574fd3f0bb0ce5be
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
?>