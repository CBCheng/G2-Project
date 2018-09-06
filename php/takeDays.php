<?php 
$scheduleNo = $_POST["scheduleNo"];

try {
	require_once("connectDatabase.php");
	$pdo->beginTransaction();
  	$sql = "select * from myschedule where scheduleNo = $scheduleNo";

    $schs = $pdo->query($sql);
  	$schRow = $schs->fetch(PDO::FETCH_ASSOC);

$arr= json_decode($schRow["scheduleData"]);

	$arrcount = count($arr); 

for($i=0;$i<$arrcount;$i++){

 ?>
					<li data-daybox="<?php echo $i;?>" class="dayList">
						<div>
							<span class="resetDay">
								<?php echo 'D'.($i+1) ?>
							</span>
						</div>
						<span class="date chinese">尚未選擇日期</span>
						<div>
							<span >
								
							</span>
							<div class="dayDel">
								<img src="img/planning/trash.png">
							</div>
							<div class="moveIcon"id="moveIcon">
								<img src="img/planning/helf-arrow-blue.png">
							</div>
						</div>
					</li>

<?php
}
?>
<input id="depTime" type="hidden" name="depTime" value="<?php echo $schRow["depTime"];?> ">
<input id="planetNA" type="hidden" name="depTime" value="<?php echo $schRow["planetName"];?> ">
 <?php
} catch (PDOException $e) {
		$pdo->rollBack();
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}

 ?>