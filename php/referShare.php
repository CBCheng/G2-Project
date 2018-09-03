<?php
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);


    $whoShare = 1;
    // $thisId = 'p1_v1';
    $sql = "select * from myschedule where memNo = :memNo";
    $share = $pdo->prepare($sql);

    $share->bindValue(':memNo',$whoShare);
    $share->execute();
    $shaRows = $share->fetchAll(PDO::FETCH_ASSOC);


    // $sql = "select * from myschedule where memId = :memId";
    // $refers = $pdo->query($sql);
    // $refRows = $refers->fetchAll(PDO::FETCH_ASSOC);

    foreach ($shaRows as $key => $shaRow) {
?>
<div class="mytrip"><?php echo $shaRow["scheduleName"] ?></div>

<?php
    }
} catch (PODException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>