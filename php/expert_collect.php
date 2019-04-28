<?php
try {
    ob_start();
    session_start();
    require_once("connectCd102g2.php");
    $memNo = $_SESSION['MEM_NO'];
    $expertNo = $_REQUEST["expertNo"];

    $sql1 = "select * from expertcollect where memNo = $memNo and expertNo = $expertNo;";
    $members = $pdo->query($sql1);


    if($members->rowCount() == 0) {
    	$sql2 = "insert into expertcollect (memNo,expertNo) values ('$memNo','$expertNo');";
        $sql3 = "update expert set expertPopular = expertPopular + 1 where expertNo = $expertNo;";
    	$pdo->exec($sql2);
        $pdo->exec($sql3);
    	echo '已將專家收藏囉!';
    } else {
    	$sql2 = "DELETE FROM expertcollect WHERE memNo = $memNo and expertNo = $expertNo;";
        $sql3 = "update expert set expertPopular = expertPopular - 1 where expertNo = '$expertNo';";
    	$pdo->exec($sql2);
        $pdo->exec($sql3);
    	echo '已取消收藏';
    }

} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>