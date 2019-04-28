<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>

<?php 

$MEM_NO = $_SESSION["MEM_NO"];
require_once("connect_g2.php");

switch($_FILES['upfile']['error']){
  case UPLOAD_ERR_OK:
    echo "UPLOAD_ERR_OK";
    if( file_exists("../img/member/")===false){
      echo "making directory...";
    	mkdir("../img/member/");
    }
    $filname = $_FILES['upfile']['name'];
    $tmpFile = $_FILES['upfile']['tmp_name'];
    $uploaddir = '../img/member/';
    $uploadfile = $uploaddir . basename($filname);

    try {
      echo '<pre>';
      if (move_uploaded_file($tmpFile, $uploadfile)) {
          echo "File is valid, and was successfully uploaded.\n";
          $memberfile = "UPDATE member SET MEM_IMG = '{$filname}' WHERE MEM_NO = $MEM_NO";
          echo $memberfile;
          $pdo->exec($memberfile);
          echo "<script>alert('上傳成功!')</script>";
          // 回個人頁面
          header('location:../member_profile.php');
      } else {
          echo "Possible file upload attack!\n";
      }

      echo 'Here is some more debugging info:';
      print_r($_FILES);

      print "</pre>";
    } 
    catch (Exception $ex) {
      echo $ex;
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

// header('location:../member_profile.php');
?>


</body>
</html>