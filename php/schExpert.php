<?php 
$expertPlanet = trim($_POST["expertPlanet"]);
// $expertPlanet = '瓦特星';



try {
	require_once("connectDatabase.php");
		
	
$arr = array(1,2,3,4,5,6);
	for($i=1;$i<4;$i++){

		if($expertPlanet==='瓦特星'){
		$txt='10';
		}
		if($expertPlanet==='達沙星'){
			$txt='20';
		}	
		if($expertPlanet==='奧倫星'){
			$txt='30';
		}
		
		
		echo count($arr);
		$num = rand(0,count($arr)-1);

		foreach($arr as $key => $value){
      		if($key == $num){
      			$txt.=$arr[$key];
         		unset($arr[$key]);
         		// echo $key ;
         		$arr = array_values($arr);
      		}
    }


		// $txt.=;
	
	$sql = "select * from expert where planet = '$expertPlanet' and expertNo = $txt";

    $experts = $pdo->query($sql);
  	$expertRow = $experts->fetchAll(PDO::FETCH_ASSOC);


// 	$num = 0;
// 	$temp=0;
foreach ($expertRow as $expert) {

	


 ?>
<li>
	<div class="positionRE">
		<div class="expertImg">
				<img src="<?php echo $expert['expertPic']; ?>">
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
  }	
} catch (PDOException $e) {
		
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}

 ?>