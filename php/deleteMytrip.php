<?php 
ob_start();
session_start();
if(isset($_SESSION["MEM_NO"])===true){

$memNo = $_SESSION["MEM_NO"];
$scheduleNo = $_POST["schNo"];

// $memNo = 1;

try {
	require_once("connectDatabase.php");

  	$sql = "delete from myschedule where scheduleNo = $scheduleNo and memNo = $memNo";
  	$pdo->exec($sql);


} catch (PDOException $e) {

		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}
}
 ?>