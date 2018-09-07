<?php

try {
	require_once("connectCd102g2.php");

	
	$sql = "insert into bgmgr (mgrNo,mgrPsw,mgrName,mgrId,mgrAccess,mgrStatus) values(null,'請輸入密碼','請輸入姓名','請輸入帳號','最高','啟用')";
	$addUser = $pdo->exec($sql);

	header("location:userBackend.php");



} catch (PDOException $e) {
	
}
?>