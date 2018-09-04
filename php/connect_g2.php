<<<<<<< HEAD
<?php
	$dsn = "mysql:host=127.0.0.1;dbname=cd102g2";
	$user = "root";
	$password = "admin";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO( $dsn, $user, $password, $options);

=======
<?php
	$dsn = "mysql:host=localhost;port=3306;dbname=ohplanet;charset=utf8";
	$user = "tzuyi00";
	$password = "tzuyi00";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
>>>>>>> 448920185f7860431d5e09c6b4c2b745806776ee
?>