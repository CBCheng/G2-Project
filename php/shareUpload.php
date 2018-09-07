<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>shareUpload</title>
</head>
<body>

<?php 
switch($_FILES['upFile']['error']){
  case 0:
    if( file_exists("../img/shareUpload")===false){
    	mkdir("../img/shareUpload");
    }
    $from = $_FILES['upFile']['tmp_name'];
    $to = "../img/shareUpload//" . $_FILES['upFile']['name'];
    if(copy( $from, $to)){
    	echo "上傳成功<br>";
    }
    break;
  case 1:
    echo "上傳檔案太大，不得超過", ini_get("upload_max_filesize"),"<br>";
    break;
  case 2:
    echo "上傳檔案太大，不得超過",  $_REQUEST["MAX_FILE_SIZE"],"<br>";
    break;
  case 3:
    echo "上傳失敗，請重新上傳檔案<br>";
    break;
  case 4:
    echo "echo 未上傳檔案太大<br>";
}
// echo "['error']: " , $_FILES['upFile']['error'] , "<br>";
// echo "['name']: " , $_FILES['upFile']['name'] , "<br>";
// echo "['tmp_name']: " , $_FILES['upFile']['tmp_name'] , "<br>";
// echo "['type']: " , $_FILES['upFile']['type'] , "<br>";
// echo "['size']: " , $_FILES['upFile']['size'] , "<br>";

$scheduleNo = $_REQUEST["scheduleNo"];
$scheduleName = $_REQUEST["scheduleName"];
$picName = $_FILES['upFile']['name'];
try {
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

  // $sql = "update myschedule set share=1, ItineraryPic='$picName', scheduleName='$scheduleName'
  //                         where scheduleNo= $scheduleNo";
  //                         echo $sql;
  $sql = "update myschedule set share=:share, ItineraryPic=:ItineraryPic, scheduleName=:scheduleName
                          where scheduleNo=:scheduleNo";                          	
  $datas = $pdo->prepare( $sql ); 
  $datas->bindValue(":scheduleNo", $scheduleNo);
  $datas->bindValue(":ItineraryPic", $picName);             
  $datas->bindValue(":scheduleName", $scheduleName);
  $datas->bindValue(":share", 1); 
  $datas->execute();

    header("location:../refer.php");
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";		
}
?> 





</body>
</html>