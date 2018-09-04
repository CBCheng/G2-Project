<?php
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

    $tripId = $_REQUEST['tripName'];
    $sql = "select * from myschedule where scheduleNo = :scheduleNo";
    $trip = $pdo->prepare($sql);

    $trip->bindValue(':scheduleNo',$tripId);
    $trip->execute();
    $tripRows = $trip->fetch(PDO::FETCH_ASSOC);
?>

<input id="tripName" name="scheduleName" type="text" placeholder="<?php echo $tripRows["scheduleName"] ?>">
<input type="hidden" name="scheduleNo" value="<?php echo $tripRows["scheduleNo"] ?>">
     
<?php  
} catch (PODException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>