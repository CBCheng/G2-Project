<?php
ob_start();
session_start();
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

    $whoShare = $_SESSION["MEM_NO"];
    // if( isset($_SESSION["MEM_NO"]) === true ){
    //     $whoShare = $_SESSION["MEM_NO"];
    // }
    $sql = "select * from myschedule where memNo = :memNo";
    $share = $pdo->prepare($sql);

    $share->bindValue(':memNo',$whoShare);
    $share->execute();
    $shaRows = $share->fetchAll(PDO::FETCH_ASSOC);

    foreach ($shaRows as $key => $shaRow) {
?>

<div class="mytrip"><?php echo $shaRow["scheduleName"] ?>
<input type="hidden" name="scheduleName" value="<?php echo $shaRow["scheduleNo"] ?>"></div>

<?php
    }
?>    
    <script>
        $('.mytrip').on('click',function(){
            var tripId = $(this).children().val();
            $.ajax({
                url: 'php/refChangeName.php',
                data: {tripName:tripId},
                type: 'POST',
                dataType: 'text',
                success: function (data) {
                    $('#tripName').remove();
                    $('.upload').prepend(data);
                },
                error: function () {
                    alert('error');
                }
            });
        });
    </script>
<?php
} catch (PODException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>