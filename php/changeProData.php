<?php
foreach($_FILES['upFile']['error'] as $i => $error){
  switch($_FILES['upFile']['error'][$i]){
    case 0:
      if( file_exists("../img/shop")===false){
          mkdir("../img/shop");
      }
      $from = $_FILES['upFile']['tmp_name'][$i];
      $to = "../img/shop//" . $_FILES['upFile']['name'][$i];
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
}
$picName = $_FILES['upFile']['name'];

$proNo = $_REQUEST["productNo"];
$proName = $_REQUEST["productName"];
$proType = $_REQUEST["productClass"];
$proPrice = $_REQUEST["productPrice"];
$proText = $_REQUEST["proText"];
$proUpDown = $_REQUEST["upDown"];

$picName1 = $picName[0];
$picName2 = $picName[1];
$picName3 = $picName[2];

// $picNoChange1 = $_REQUEST["imgNoChange1"];
// $picNoChange2 = $_REQUEST["imgNoChange2"];
// $picNoChange3 = $_REQUEST["imgNoChange3"];

// if($picName1=''){
//     $picName1 = $picNoChange1;
// }
// if($picName2=''){
//     $picName2 = $picNoChange2;
// }
// if($picName3=''){
//     $picName3 = $picNoChange3;
// }
// echo $proNo;
// echo $proName;
// echo $proType;
// echo $proPrice;
// echo $proText;

try {
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

    $pdo->beginTransaction();

   


    if($proNo == 0){
        $sql ="insert into product values (null, :productName, :productDital, :productPic1, :productPic2, :productPic3, :productPrice, :productClass, :sale, :excl)";
    }else{
        $sql = "update product set productName='$proName', productDital='$proText', productPic1='$picName1',
        productPic2='$picName2', productPic3='$picName3', productPrice='$proPrice', productClass='$proType', sale='$proUpDown'
        where productNo='$proNo'";     
    }
    $datas = $pdo->prepare($sql);
    $datas->bindValue(":productName", $proName);
    $datas->bindValue(":productDital", $proText);
    $datas->bindValue(":productPic1", $picName1);
    $datas->bindValue(":productPic2", $picName2);
    $datas->bindValue(":productPic3", $picName3);
    $datas->bindValue(":productPrice", $proPrice);
    $datas->bindValue(":productClass", $proType);
    $datas->bindValue(":sale", $proUpDown);
    $datas->bindValue(":excl", '1');
    $datas->execute();

    header("location:mallBackend.php");
} catch (PDOException $e) {
    $pdo->rollBack();
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";		
}
?>