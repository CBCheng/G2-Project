<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>session</title>
</head>
<body>
<?php
try{
	require_once("connectCd102g2.php");
	$sql = "select * from bgmgr where mgrId = :mgrId and mgrPsw = :mgrPsw";
	$bgmgr = $pdo->prepare($sql);
	$bgmgr -> bindValue(":mgrId",$_REQUEST["mgrId"]);
	$bgmgr -> bindValue(":mgrPsw",$_REQUEST["mgrPsw"]);
	$bgmgr -> execute();

	if( $bgmgr->rowCount() !=0 ){
	 $bgmgrRow = $bgmgr->fetch(PDO::FETCH_ASSOC);
		// echo $memRow["memName"] , "您好<br>";
        //將登入資訊寫入session
		// $_SESSION["memId"] = $memRow["memId"];
		$_SESSION["mgrName"]= $bgmgrRow["mgrName"];
		$_SESSION["mgrAccess"]= $bgmgrRow["mgrAccess"];
		// $_SESSION["mgrStatus"]= $bgmgrRow["mgrStatus"];
		// $_SESSION["email"] = $memRow["email"];
		// echo "<a href='userBackend.php'></a> ";
		if($bgmgrRow["mgrStatus"]=="啟用"){
			if($_SESSION["mgrAccess"]=="一般"){
				header("location:menberBackend.php");
			}else if($_SESSION["mgrAccess"]=="專家"){
				header("location:expertBackend.php");
			}else{
				header("location:userBackend.php");
			}
		}else{
			echo "此帳密已停權";
		}
	}else{
		echo "查無此帳密，請重新登入";
		// echo "<script>";
		// echo "alert('查無此帳密，請重新登入')";
		// echo "</script>";
	}
		}
catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
?>	

</body>
</html>