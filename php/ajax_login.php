<?php
ob_start();
session_start();
try{
  $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
	$user = "tzuyi00";
	$password = "tzuyi00";
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
  $sql = "select * from member where MEM_EMAIL = :MEM_EMAIL and MEM_PSW = :MEM_PSW ";
  $member = $pdo ->prepare( $sql );
  $member->bindValue(":MEM_EMAIL", $_REQUEST["memEmail"]);
  $member->bindValue(":MEM_PSW", $_REQUEST["memPsw"]);
  $member->execute();
   
  if( $member->rowCount()==0){ //查無此人
	  echo "NG";
  }else{ //登入成功
    //自資料庫中取回資料
  	$memRow = $member->fetch(PDO::FETCH_ASSOC);
    $_SESSION["MEM_NO"] = $memRow["MEM_NO"];
  	$_SESSION["MEM_EMAIL"] = $memRow["MEM_EMAIL"];
    $_SESSION["MEM_NAME"] = $memRow["MEM_NAME"];
 
  


    //送出登入者的姓名資料
    echo $_SESSION["MEM_NAME"];
  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>