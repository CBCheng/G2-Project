<?php
ob_start();
session_start();

try {
require_once("../connectBooks.php");
// echo $gearTypeNo;
if(isset($_REQUEST['orderNo'])){   // when isset() 
	$orderNo = $_REQUEST['orderNo']; 
// $orderNo = 51;
	$sql="select * from orderlist where orderNo=$orderNo";

      }

 
	$orderlist = $pdo->query($sql);  //gearlist 是 PDOStatement物件
  	$orderRow = $orderlist->fetchAll(PDO::FETCH_ASSOC);
  	foreach($orderRow as $data){
?>
        
            <tr>
                <td><?php echo $data["productNo"] ?></td>
                <td><?php echo $data["proName"] ?></td>
                <td><?php echo $data["price"] ?></td>
                <td><?php echo $data["productQuantity"] ?></td>   
            </tr>
<?php	 
	}
}catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>
