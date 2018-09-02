<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=cd102;charset=utf8";
	$user = "tzuyi00";
	$password = "tzuyi00";
	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	// $options[PDO::ATTR_CASE] = PDO::CASE_NATURAL;
	// $options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo = new PDO($dsn, $user, $password, $options);
	$sql = "update emp set sal = sal + 100";
	$pdo -> exec( $sql );
	echo "異動成功<br>";
} catch (PDOException $e) {
	// echo "錯誤原因 : " , $e->getMessage(), "<br>";
	// echo "錯誤行號 : " , $e->getLine(), "<br>";
	echo "請通知系統維謢人員. :) <br>";
}

?>
</body>
</html>