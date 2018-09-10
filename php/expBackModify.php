<?php
// ob_start();
// session_start();
    switch($_FILES['upFile']['error']){
      case 0:
        if( file_exists("../img/expertImg/expPic")===false){
            mkdir("../img/expertImg/expPic");
        }
        $from = $_FILES['upFile']['tmp_name'];
        $to = "../img/expertImg/expPic//" . $_FILES['upFile']['name'];
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

$picName = "img/expertImg/expPic/".$_FILES['upFile']['name'];


try {

    // $expertNo = $_SESSION["expertNo"];
    require_once("connectExpert.php");

    $sql ="UPDATE expert SET expFood = :expFood , expHuman = :expHuman , expSmart = :expSmart , expAdven = :expAdven , expTech = :expTech , expertPic = :expertPic WHERE expertNo = :expertNo";
    $update_member = $pdo->prepare($sql);
    $update_member->bindValue(":expFood",$_REQUEST["expFood"]);
    $update_member->bindValue(":expHuman",$_REQUEST["expHuman"]);
    $update_member->bindValue(":expSmart",$_REQUEST["expSmart"]);
    $update_member->bindValue(":expAdven",$_REQUEST["expAdven"]);
    $update_member->bindValue(":expTech",$_REQUEST["expTech"]);
    $update_member->bindValue(":expertPic",$picName);
    $update_member->bindValue(":expertNo",$_REQUEST["expertNo"]);
    $update_member->execute();

 	header("location:expertBackend.php");


    }

 catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>



