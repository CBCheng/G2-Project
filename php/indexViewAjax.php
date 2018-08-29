<?php

// $thisId = $_REQUEST['thisId'];
	try {
		$dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
		$user = "cheng2";
		$password = "9453";
		$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$pdo = new PDO( $dsn, $user, $password, $options);  

		$thisId = $_REQUEST['thisId'];
		// $thisId = 'p1_v1';
		$sql = "select * from view where viewNo = :viewNo";
		$view = $pdo->prepare($sql);

		$view->bindValue(':viewNo',$thisId);
		$view->execute();
		$views = $view->fetch(PDO::FETCH_ASSOC);
		echo $views['viewName'];
?>
	

<?php
	} catch (PODException $e) {
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";	
	}
?>