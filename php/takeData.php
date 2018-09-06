<?php 
$scheduleNo = $_POST["takeData"];

try {
	require_once("connectDatabase.php");
	$pdo->beginTransaction();
  $sql = "select * from myschedule where scheduleNo = $scheduleNo";

   $schs = $pdo->query($sql);
  $schRow = $schs->fetch(PDO::FETCH_ASSOC);

	
// echo $schRow["scheduleData"];
// header("Content-type: text/xml");
$arr= json_decode($schRow["scheduleData"]);

$ulNum=0;
$ulday=1;
foreach($arr as $views) {
$liViews=0;

 ?>
<ul data-schdulebox="<?php echo $ulNum; ?>" id="schduleDay<?php echo $ulday; ?>" class="schduleItems list">


 <?php  	
    foreach ($views as $view) {

				$sql = "select * from view where viewName = '$view'";
				$tags = $pdo->query($sql);
				 $tagRow = $tags->fetchAll(PDO::FETCH_ASSOC);
				 foreach ($tagRow as $tagName) {
				 	$txt ='';
				 	if($tagName['viewFood']==1){
				 		$txt .='<span class="tag fod">美食</span>';
				 	}
				 	if($tagName['viewHuman']==1){
				 		$txt .='<span class="tag hum">人文</span>';
				 	}
				 	if($tagName['viewSmart']==1){
				 		$txt .='<span class="tag int">知性</span>';
				 	}
				 	if($tagName['viewAdven']==1){
				 		$txt .='<span class="tag adv">冒險</span>';;
				 	}
				 	if($tagName['viewTech']==1){
				 		$txt .='<span class="tag tec">科技</span>';;
				 	}
				 $viewNo = substr($tagName['viewNo'],4,2);

 ?>
					<li  data-schdule="<?php echo $viewNo;?>" >
						<div class="Itemcontent">
							<p class=" ItemName">
								<?php echo $view;?>
							</p>
							<span></span>
							<div class="tagBox">
								<?php echo $txt; ?>
							</div>
							<span class="deleteIcon">
								<img src="img/planning/trash.png">
							</span>
							
						</div>
					</li>

 <?php
			}
 $liViews +=1;
 			
 		}

 ?>
</ul>

<?php
$ulNum +=1;
$ulday+=1;
	}
} catch (PDOException $e) {
		$pdo->rollBack();
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}

 ?>