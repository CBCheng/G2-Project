<?php 
ob_start();
session_start();

if(isset($_SESSION["MEM_NO"])===true){

$memNo = $_SESSION["MEM_NO"];
// echo $memNo;

// $memNo = 1;

try {
	require_once("connectCd102g2.php");
	
  	$sql1 = "select * from myschedule where memNo = $memNo";

    $planets = $pdo->query($sql1);
  	$planetRow = $planets->fetchAll(PDO::FETCH_ASSOC);


  		foreach ($planetRow as $data) {
  			
  			$arr =json_decode($data['scheduleData']);
  			$count = count($arr);

  		



 $sql2 = "select * from expert where expertNo = $data[expertNo] ";

 $experts = $pdo->query($sql2);
 $expertRow = $experts->fetch(PDO::FETCH_ASSOC);

 // $sql3 = "select * from view where viewName = '$arr[0][0]' ";

 // $views = $pdo->query($sql3);
 // $expertRow = $views->fetch(PDO::FETCH_ASSOC);

	?>
  							<div class="mW_bigBox">
                                <div class="mW_delete" data-schno=<?php echo $data['scheduleNo'];?>><i class="fas fa-trash-alt"></i></div>
                                <div class="mW_box">
                                    <input type="hidden" value="30">
                                    <div class="mW_look"><a style="display: block; color:#333;" href="referdetial.php?scheduleNo=<?php echo $data['scheduleNo']; ?>">查看詳細</a></div>
                                    <div class="mW_tabBox">
                                        <div class="line_tab pingC_tab"><?php echo $expertRow['expertName']; ?></div>
                                        <div class="mW_imgBox">
                                            <img src="img/p3_v10_05.jpg">
                                        </div>
                                    </div>
                                    <div class="mW_txtBox">
                                        <p class="mW_day"><span><?php echo $count; ?></span>天</p>
                                        <p class="mW_title"><?php echo $data['scheduleName'] ?></p>
                                    </div>
                                    <div class="clearFix"></div>
                                </div>
                            </div>


 <?php
 // unset($brr);
 }
} catch (PDOException $e) {
		
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";		
}



}else{
	echo '<script> alert("尚未登入"); </script>';
}





 ?>