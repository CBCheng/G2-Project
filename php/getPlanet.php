<?php 
$scheduleNo = $_POST["scheduleNo"];

// $memNo = 1;

try {
	require_once("connectDatabase.php");
	$pdo->beginTransaction();
  	$sql = "select * from myschedule where scheduleNo = $scheduleNo";

    $planets = $pdo->query($sql);
  	$planetRow = $planets->fetch(PDO::FETCH_ASSOC);




 ?>

<?php echo $planetRow['planetName'] ?>


 <?php

} catch (PDOException $e) {
		$pdo->rollBack();
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}

 ?>