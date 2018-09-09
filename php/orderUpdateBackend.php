<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>Examples</title>

</head>
<body>
<?php
try {
  require_once("../connectBooks.php");
  $sql = "update ordermater set 
          orderNo=:orderNo, 
          memNo=:memNo,
          orderTime=:orderTime,
          totlePrice=:totlePrice,
          orderStatus=:orderStatus,
          orderName=:orderName,
          address=:address where orderNo=:orderNo";	
  $products = $pdo->prepare( $sql ); 
  $products->bindValue(":orderNo", $_REQUEST["orderNo"]); 
  $products->bindValue(":memNo", $_REQUEST["memNo"]);             
  $products->bindValue(":orderTime", $_REQUEST["orderTime"]);
  $products->bindValue(":totlePrice", $_REQUEST["totlePrice"]);
  $products->bindValue(":orderStatus", $_REQUEST["orderStatus"]);
  $products->bindValue(":orderName", $_REQUEST["orderName"]);
  $products->bindValue(":address", $_REQUEST["address"]);
  $products->execute();
  header("location:orderBackend.php");
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";		
}
?> 　　 
</body>
</html>