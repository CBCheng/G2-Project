<?php
ob_start();
session_start();
try {
    
    $expertNo = $_SESSION["expertNo"];
    require_once("connectExpert.php");
    switch($_FILES['upfile']['error']){
      case UPLOAD_ERR_OK:
        if( file_exists("../img/expertImg/expPic/")===false){
            mkdir("../img/expertImg/expPic/");
        }
        $from = $_FILES['upfile']['tmp_name'];
        $fileto =pathinfo($_FILES['upfile']['name']);
        $filext = $fileto['basename'];
        $to = "../img/expertImg/expPic/{$filext}";
        $filname = "{$filext}";
        if(copy( $from, $to)){
          $memberfile = "UPDATE expert SET expertPic = '{$filname}' WHERE expertNo = $expertNo";
          $pdo->exec($memberfile);
          $_SESSION["MEM_IMG"] = $filname;       
            echo "<a href='memberinfo.php'>上傳成功</a>";
          // 回個人頁面
        }
        break;
      case UPLOAD_ERR_INI_SIZE:
        echo "上傳檔案太大，不得超過", ini_get("upload_max_filesize"),"<br>";
        break;
      case UPLOAD_ERR_FORM_SIZE:
        echo "上傳檔案太大，不得超過",  $_REQUEST["MAX_FILE_SIZE"],"<br>";
        break;
      case UPLOAD_ERR_PARTIAL:
        echo "上傳失敗，請重新上傳檔案<br>";
        break;
      case UPLOAD_ERR_NO_FILE:
        echo "echo 未上傳檔案太大<br>";
    }


    $sql ="UPDATE expert SET expFood = :expFood , expHuman = :expHuman , expSmart = :expSmart , expAdven = :expAdven , expTech = :expTech WHERE expertNo = :expertNo";
    $update_member = $pdo->prepare($sql);
    $update_member->bindValue(":expFood",$_REQUEST["expFood"]);
    $update_member->bindValue(":expHuman",$_REQUEST["expHuman"]);
    $update_member->bindValue(":expSmart",$_REQUEST["expSmart"]);
    $update_member->bindValue(":expAdven",$_REQUEST["expAdven"]);
    $update_member->bindValue(":expTech",$_REQUEST["expTech"]);
    $update_member->bindValue(":expertNo",$_REQUEST["expertNo"]);
    $update_member->execute();

 	header("location:expertBackend.php");


    }

 catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>



