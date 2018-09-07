<?php
	$dsn = "mysql:host=127.0.0.1;dbname=cd102g2";
	$user = "cheng2";
	$password = "9453";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);

?>