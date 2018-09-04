<?php
try {
    require_once("connectExpert.php");
    $memNo = $_REQUEST["memNo"];
    $expertNo = $_REQUEST["expertNo"];

    // $memNo = '1';
    // $expertNo = '103';

    $sql1 = "select * from expertcollect where memNo = $memNo and expertNo = $expertNo;";
    $members = $pdo->query($sql1);

    if($members->rowCount() == 0) {
    	$sql = "insert into expertcollect (memNo,expertNo) values ('$memNo','$expertNo');";
    	$pdo->exec($sql);
    	echo '已將專家收藏囉!';
    } else {
    	$sql = "DELETE FROM expertcollect
				WHERE memNo = $memNo and expertNo = $expertNo;";
    	$pdo->exec($sql);
    	echo '已取消收藏';
    }

    
    	
    
    
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>