<?php

$commentNo = $_REQUEST['commentNo'];

try {
	require_once("connectCd102g2.php");
	$sql = "update itineraryre set reContent='此筆留言已遭管理員刪除' where commentNo=$commentNo";
	$deletReport = $pdo->exec($sql);
	
	header("location:reportBackend.php");
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";
}


?>