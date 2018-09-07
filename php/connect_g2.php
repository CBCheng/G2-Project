<?php
<<<<<<< HEAD
	$dsn = "mysql:host=localhost;port=3306;dbname=ohplanet;charset=utf8";
	$user = "tzuyi00";
	$password = "tzuyi00";
=======
	$dsn = "mysql:host=127.0.0.1;dbname=cd102g2";
	$user = "cheng2";
	$password = "9453";
>>>>>>> a37366100f46f5c77842cd2deb710e5a5caf58f1
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
?>