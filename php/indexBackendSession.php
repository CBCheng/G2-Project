<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>session</title>
</head>
<body>
<?php
echo "id : ", session_id() ,"<br>";
//自session中取回登入者資料
// echo "帳號 : ", $_SESSION["memId"] ,"<br>";
  
// echo "email : ", $_SESSION["email"] ,"<br>";
echo "姓名 : ", $_SESSION["mgrName"] ,"<br>";
echo "權限 : ", $_SESSION["mgrAccess"] ,"<br>";
?>	

</body>
</html>