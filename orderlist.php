<?php 

$orderNo = $_REQUEST['orderNo'];
   // $productNo = 1;
try {
require_once("connectBooks.php"); 
	$sql="select * from orderlist where orderNo='$orderNo'";
	$orderlist = $pdo->query($sql);  //productlist 是 PDOStatement物件
	$orderRow = $orderlist->fetchAll(PDO::FETCH_ASSOC);
	foreach($orderRow = $orderlist){ ?>
		
	        <form method="post" action="">
                <div class="wrap"> 
                    <input type="hidden" name="orderNo"  value="<?php echo $orderRow["orderNo"] ?>">
                    <input type="hidden" name="productNo" value="<?php echo $orderRow["productNo"]?>">
                    <input type="hidden" name="productQuantity" value="<?php echo $orderRow["productQuantity"]?>">
                    <input type="hidden" name="price" value="<?php echo $orderRow["price"]?>">

                </div>
		    </form>
    <?php      
	} //<input type="text" size="3" maxlength="3" name="quantity" value="1" />
}catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>
