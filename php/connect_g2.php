<?php
<<<<<<< HEAD
	$dsn = "mysql:host=127.0.0.1;dbname=cd102g2";
	$user = "sharon";
	$password = "money0923";
=======
	$dsn = "mysql:host=localhost;port=3306;dbname=ohplanet;charset=utf8";
	$user = "tzuyi00";
	$password = "tzuyi00";
>>>>>>> 0f0bf121fe3374001811a5e588a8affd61dbb6d5
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);
?>