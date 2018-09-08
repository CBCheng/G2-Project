<?php
$proNo = $_REQUEST["productNo"];
$proName = $_REQUEST["productName"];
$proType = $_REQUEST["productClass"];
$proPrice = $_REQUEST["productPrice"];
$proText = $_REQUEST["proText"];
$proUpDown = $_REQUEST["upDown"];
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
    $sql = "update product set productName='$proName', productDital='$proText',
    productPrice='$proPrice', productClass='$proType', sale='$proUpDown'
    where productNo='$proNo'";
        
    }
    $datas = $pdo->prepare($sql);
    $datas->bindValue(":productName", $proName);
    $datas->bindValue(":productDital", $proText);
    $datas->bindValue(":productPic1", 'product-01-1.jpg');
    $datas->bindValue(":productPic2", 'product-01-1.jpg');
    $datas->bindValue(":productPic3", 'product-01-1.jpg');
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