<?php
ob_start();
session_start();
try{
  
  // $days = $_REQUEST["quizDay"];
  // echo $aa;
  require_once("connectCd102g2.php");

  $sql = "select * from myschedule where memNo = :schPlanet and expertNo = :schFullDay";
  $schedule = $pdo->prepare( $sql );
  $schedule->bindValue(":schPlanet", $_REQUEST["schPlanet"]);
  $schedule->bindValue(":schFullDay", $_REQUEST["schFullDay"]);
  $schedule->execute();
  if( $schedule->rowCount()==0){ //查無此人
	  echo "NG";
  }else{ //登入成功
    //自資料庫中取回資料
  	$scheduleRow = $schedule->fetch(PDO::FETCH_ASSOC);

    $_SESSION["scheduleNo"] = $scheduleRow["scheduleNo"];

      // $_SESSION["schPlanet"] = $scheduleRow["schPlanet"];
      // $_SESSION["schName"] = $scheduleRow["schName"];
      // $_SESSION["quizPic"] = $scheduleRow["quizPic"];
      // $_SESSION["quizPlanetPic"] = $scheduleRow["quizPlanetPic"];
      // $_SESSION["schDay"] = $scheduleRow["schDay"];
      echo json_encode($scheduleRow);
      // echo $scheduleRow["schPlanet"]+'|'+$scheduleRow["schName"]+'|'+$scheduleRow["quizPic"]+"|"+$scheduleRow["quizPlanetPic"];
  	// $_SESSION["schPlanet"] = $scheduleRow["schPlanet"];
  	// $_SESSION["memId"] = $memRow["memId"];
  	// $_SESSION["memName"] = $memRow["memName"];
  	// $_SESSION["email"] = $memRow["email"];

    //送出登入者的姓名資料
    
  }
}catch(PDOException $e){
  echo $e->getMessage();
}

?>
