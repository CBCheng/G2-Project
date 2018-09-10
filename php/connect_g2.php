<?php
<<<<<<< HEAD
	$dsn = "mysql:host=127.0.0.1;dbname=cd102g2;charset=utf8";
	$user = "root";
	$password = "admin";
=======
	$dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
	$user = "cheng2";
	$password = "9453";
>>>>>>> 50267328ea4769ce4f0ee5bfd8e4e4bf10fb51b1
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
?>