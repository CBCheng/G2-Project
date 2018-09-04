<<<<<<< HEAD
<?php
	$dsn = "mysql:host=127.0.0.1;dbname=cd102g2";
	$user = "root";
	$password = "admin";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);

=======
<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
	$user = "cd102g2";
	$password = "cd102g2";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
>>>>>>> 448920185f7860431d5e09c6b4c2b745806776ee
?>