<?php 

$jsonStr = $_POST["schedules"];
// echo $jsonStr;
$schedules = json_decode( $jsonStr );
// echo $schedules->memNo;
// echo $schedules->memNo,'<br>';
// echo $schedules->expertNo,'<br>';
// echo $schedules->depTime,'<br>';
// echo $schedules->arrTime,'<br>';
// echo $schedules->name,'<br>';
// echo $schedules->share,'<br>';
// echo $schedules->itineraryPic,'<br>';
// echo $schedules->planetName;
// echo $schedules->depTime;

// $arr = serialize($schedules->daysData); 

// $arr='[';
// foreach($schedules->daysData as $vals1){
// 	$arr.='[';
// 	foreach($vals1 as $vals2){
		
// 		$arr .='"'.$vals2.'"'.',';
	

// 	}

// 	$arr.='],';

// }
// $arr.=']';


$tojson =json_encode($schedules->daysData);
// $return= json_decode($tojson);
// echo $tojson;
// $return= json_decode($tojson);
// echo $return;
// foreach ($schedules->daysData as $key => $value) {
// 		$newData[urlencode($key)]=urlencode($value);
// }
// $aa=json_encode(($newData));
// $chinese=urldecode($aa);
// echo $jsonStr;
// $daysData='';
// 	for($i=0;$i<3;$i++){
// 			for($j=0;$j<count($schedules->daysData[$i]);$j++){
// 						$daysData.=$schedules->daysData[$i][$j];
// 				}
				
// 		}

// echo $daysData;
try {
	require_once("connectDatabase.php");
	$pdo->beginTransaction();
// 	// $aa ='{"name":"瓦特星大冒險","days":[["第一天","新竹","台北","桃園"],["第二天","屏東","彰化","台南"],["第三天","宜蘭","花蓮","台東"]]}';

// 	// $sql = "insert into myschedule values ( null, 5, '102', '2018-09-04', '2018-09-07', '瓦特星大逃難', '1', 'p1_v1_03.jpg', '$aa','123','123')";
// 	// $myschedule = $pdo->queryAll($sql);



// 	// $sqlout= "select * from myschedule where memNo = 5";
// 	// $myschedule = $pdo->query($sqlout);
// 	// $myschedules=$myschedule->fetch(PDO::FETCH_ASSOC);
// 	// echo $myschedules["scheduleData"];




		$sql = "insert into myschedule values ( null, :memNo, :expertNo, :depTime, :arrTime, :scheduleName, :share, :planetName, :litneraryPic, :scheduleData,null,null,null,null)";

		$sch = $pdo->prepare( $sql );
		$sch->bindValue(":memNo", $schedules->memNo);
		$sch->bindValue(":expertNo", $schedules->expertNo);
		$sch->bindValue(":depTime", $schedules->depTime);
		$sch->bindValue(":arrTime", $schedules->arrTime);
		$sch->bindValue(":scheduleName", $schedules->name);
		$sch->bindValue(":share", $schedules->share);
		$sch->bindValue(":planetName", $schedules->planetName);
		$sch->bindValue(":litneraryPic", $schedules->itineraryPic);
		$sch->bindValue(":scheduleData", $tojson);
		
		$sch->execute();
		// $pdo->lastInsertId(); 
		$pdo->commit();




// // echo  json_encode($jsonStr);
// // echo $sch->name,'<br>';
// // $a='';
// // foreach ($sch as $key ) {
	
// // 	echo $sch->name;
// // }

// 	// 	for($i=0;$i<3;$i++){
// 	// 	// echo $sch->days[$i][0];
// 	// // echo $key;
// 	// 		for($j=0;$j<count($sch->days[$i]);$j++){
// 	// 					$a.=$sch->days[$i][$j].'&nbsp';
				
// 	// 			}
		
// 	// 	}
// 	// echo $a;
// 	// echo $key;

	} catch (PDOException $e) {
		$pdo->rollBack();
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
	}

 ?>
