<?php

$commentNo = $_REQUEST['no'];
try {
	require_once("connectCd102g2.php");
	$sql = "update itineraryre set reReportedTimes=reReportedTimes+1 where commentNo=$commentNo";
	$commentRow = $pdo->exec($sql);
	echo '異動成功';
} catch (PDOException $e) {
	echo "error~<br>";
  	echo $e->getMessage() , "<br>";
}
?>