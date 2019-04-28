<?php 

$viewNo = $_REQUEST["viewNo"];
$viewName = $_REQUEST["viewName"];
$planet = $_REQUEST["planet"];
$type1 = $_REQUEST["type1"];
$type2 = $_REQUEST["type2"];
$type3 = $_REQUEST["type3"];
$type4 = $_REQUEST["type4"];
$type5 = $_REQUEST["type5"];
$upOrDown = $_REQUEST["upOrDown"];
$viContent = $_REQUEST["viContent"];

$viType1 = '';
$viType2 = '';
$viType3 = '';
$viType4 = '';
$viType5 = '';

if($type1 == '1'){
    $viType1 = '1';
}else{
    $viType1 = '0';
}
if($type2 == '1'){
    $viType2 = '1';
}else{
    $viType2 = '0';
}
if($type3 == '1'){
    $viType3 = '1';
}else{
    $viType3 = '0';
}
if($type4 == '1'){
    $viType4 = '1';
}else{
    $viType4 = '0';
}
if($type5 == '1'){
    $viType5 = '1';
}else{
    $viType5 = '0';
}

if($upOrDown == '1'){
    $upDown = '1';
}else{
    $upDown = '0';
}

try {
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

  $sql = "update view set viewName='$viewName', planet='$planet', viewStatus='$upDown',
  viewFood='$viType1', viewHuman='$viType2', viewSmart='$viType3', viewAdven='$viType4', viewTech='$viType5',
  viewContent='$viContent' where viewNo= '$viewNo'";
  $datas = $pdo->prepare( $sql );
  $datas->execute();

    header("location:landScapeBackend.php");
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
	echo "錯誤行號 : " , $e->getLine(), "<br>";		
}
?> 