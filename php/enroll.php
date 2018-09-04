<?php
ob_start();
session_start();

try{
  require_once("connect_g2.php");
  $sql = "insert into member (MEM_PSW, MEM_NAME,MEM_EMAIL) VALUES (:MEM_PSW, :MEM_NAME,:MEM_EMAIL)";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":MEM_PSW", $_REQUEST["memPsw_input"]);
  $member->bindValue(":MEM_NAME", $_REQUEST["regist_name"]);
  $member->bindValue(":MEM_EMAIL", $_REQUEST["regist_email"]);
  $member->execute();
  $MEM_NO = $pdo->lastInsertId();

  // 抓MEM_NAME  ID PSW SESSION
 	// 註冊成功發送註冊完成訊息 跳轉頁面
          //將登入資訊寫入session
  $_SESSION["MEM_NO"] = $MEM_NO;
  $_SESSION["MEM_PSW"] = $_REQUEST["memPsw_input"];
  $_SESSION["MEM_NAME"] = $_REQUEST["regist_name"];
  $_SESSION["MEM_EMAIL"] = $_REQUEST["regist_email"];
  // $_SESSION["MEM_IMG"] = $memRow["MEM_IMG"];
        //跳轉頁面
    //echo "<a href='member_profile.php'>會員專區</a> ";
  header("location:member_profile.php");  
  if( $member->rowCount() !=0 ){
      $memRow = $member->fetch(PDO::FETCH_ASSOC);
  
        //將登入資訊寫入session
      $_SESSION["MEM_NO"] = $memRow["MEM_NO"];
      $_SESSION["MEM_PSW"] = $memRow["MEM_PSW"];
      $_SESSION["MEM_NAME"] = $memRow["MEM_NAME"];
      $_SESSION["MEM_EMAIL"] = $memRow["MEM_EMAIL"];
      $_SESSION["MEM_IMG"] = $memRow["MEM_IMG"];
        //跳轉頁面
    //echo "<a href='member_profile.php'>會員專區</a> ";
      header("location:member_profile.php");  
  }else{
    echo "註冊失敗";
  }


     // $_SESSION['MEM_ID'] = $member['MEM_ID'];
     // $_SESSION['MEM_PSW'] = $member['MEM_PSW'];
     // $_SESSION['MEM_NAME'] = $member['MEM_NAME'];
     // $_SESSION['MEM_POINTS'] = $member['MEM_POINTS'];


}catch(PDOException $e){
  echo $e->getMessage(),"<br>";
  echo $e->getLine(),"<br>";
}









?>