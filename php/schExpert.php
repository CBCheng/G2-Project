<?php 
// $expertNo = $_POST["expertNo"];

// $memNo = 1;

try {
	require_once("connectDatabase.php");
	$pdo->beginTransaction();
  	$sql = "select * from expert ";

    $experts = $pdo->query($sql);
  	$expertRow = $experts->fetchAll(PDO::FETCH_ASSOC);


foreach ($expertRow as $expert) {
	


 ?>
<li>
	<div class="positionRE">
		<div class="expertImg">
				<img src="img/expPic/<?php echo $expert['expertPic']; ?>.jpg">
			</div>
			<div class="expertNameBG ">
												
			</div>
			<span class="expertName chinese">
				<?php echo $expert['expertName']; ?>
			</span>

			<div class="expertBtn">
				<span class="chinese" data-expert="<?php echo $expert['expertNo']; ?>">
					選擇
				</span>
		</div>
	</div>
</li>
	
 <?php
	}
} catch (PDOException $e) {
		$pdo->rollBack();
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}

 ?>