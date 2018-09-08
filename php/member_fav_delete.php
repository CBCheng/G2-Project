<?php
try {
    // ob_start();
    // session_start();
    require_once("connectExpert.php");
    // $memNo = @$_SESSION['MEM_NO'];
    $memNo = '1';
    $expertNo = $_REQUEST["expertNo"];

    $sql = "DELETE FROM expertcollect WHERE memNo = $memNo and expertNo = $expertNo";
    $pdo->exec($sql);
    echo '已取消收藏';

} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>