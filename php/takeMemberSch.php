<?php 
$memNo = $_POST["memNo"];
// $memNo = 1;

try {
	require_once("connectDatabase.php");
	$pdo->beginTransaction();
  	$sql = "select * from myschedule where memNo = $memNo";

    $schs = $pdo->query($sql);
  	$schRow = $schs->fetchAll(PDO::FETCH_ASSOC);



// echo $aa;
foreach ($schRow as $sch) {

$days=(int)substr($sch['arrTime'],8,2)-(int)substr($sch['depTime'],8,2);

 ?>
					<li class="Schdule1" data-num="<?php echo $sch['scheduleNo']; ?>">
						<p>
						<?php echo $sch['scheduleName']; ?>
						</p>
						<p><?php echo $days; ?>天</p>
						<p><?php echo $sch['planetName']; ?></p>
					</li>






 <?php
}
} catch (PDOException $e) {
		$pdo->rollBack();
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}

 ?>