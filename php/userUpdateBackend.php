<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Examples</title>

</head>
<body>
<?php
try {
  require_once("connectCd102g2.php");
  $sql = "update bgmgr set mgrName=:mgrName, mgrId=:mgrId, mgrPsw=:mgrPsw,
                              mgrStatus=:mgrStatus, mgrAccess=:mgrAccess
                          where mgrNo=:mgrNo";	
  $products = $pdo->prepare( $sql ); 
  $products->bindValue(":mgrNo", $_REQUEST["mgrNo"]); 
  $products->bindValue(":mgrName", $_REQUEST["mgrName"]);             
  $products->bindValue(":mgrId", $_REQUEST["mgrId"]);
  $products->bindValue(":mgrPsw", $_REQUEST["mgrPsw"]);
  $products->bindValue(":mgrStatus", $_REQUEST["mgrStatus"]);
  $products->bindValue(":mgrAccess", $_REQUEST["mgrAccess"]);
  $products->execute();
  header("location:userBackend.php");
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";		
}
?> 　　 
</body>
</html>