<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/userBackend.css">
    <title>Document</title>
</head>
<body>
<!-- nav -->
    <div class="userFull">
        <nav>
            <div class="navUser">
                <div class="logo">
                    <img src="../img/phpImg/logo-backend.png" alt="LOGO">
                </div>
                <div class="userName">
                    <?php
                    if($_SESSION["mgrAccess"]=="一般" || $_SESSION["mgrAccess"]=="最高"){
                        echo '<h3>'.$_SESSION["mgrAccess"].'管理員<br>'.$_SESSION["mgrName"].'</h3>';
                    }else{
                        echo '<h3>'.$_SESSION["mgrAccess"].$_SESSION["mgrName"].'</h3>';
                    }
                    ?>
                    
                    <p>您好!</p>
                    <div class="loginOut">
                        <label for="logOutPic"></label>
                        <img src="../img/phpImg/logout.png" alt="登出" >
                        <a href="indexBackend.php">登出</a>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="navBarContent">
<!-- 登入判斷權限 -->
                <?php
if($_SESSION["mgrAccess"]=="一般"){
            echo '<a href="menberBackend.php">會員管理</a>';
            echo '<a href="landScapeBackend.php">景點管理</a>';
            echo '<a href="mallBackend.php">商城管理</a>';
            echo '<a href="orderBackend.php">訂單管理</a>';
            echo '<a href="expertBackend.php">專家管理</a>';
            echo '<a href="reportBackend.php">檢舉管理</a>';
            echo '<a href="serviceBackend.php">客服管理</a>';
}else if($_SESSION["mgrAccess"]=="專家"){
            echo '<a href="expertBackend.php">專家管理</a>';
}else{
            echo '<a href="userBackend.php" id="userBackend">使用者管理</a>';
            echo '<a href="menberBackend.php">會員管理</a>';
            echo '<a href="landScapeBackend.php">景點管理</a>';
            echo '<a href="mallBackend.php">商城管理</a>';
            echo '<a href="orderBackend.php">訂單管理</a>';
            echo '<a href="expertBackend.php">專家管理</a>';
            echo '<a href="reportBackend.php">檢舉管理</a>';
            echo '<a href="serviceBackend.php">客服管理</a>';
}

                ?>
                    
                    
            </div>
        </nav>

<!-- content -->


<div class="wrapContent">
            
            <div class="content">
            <h1>使用者管理</h1>
            <button class="addUser">新增使用者</button>
            <table class="userTable">
                    <tr class="tableTitle">
                        <td>管理員編號</td>
                        <td>管理員姓名</td>
                        <td>管理員帳號</td>
                        <td>管理員密碼</td>
                        <td>狀態</td>
                        <td>權限</td>
                        <td>確認修改</td>
                    </tr>
<?php

try {
    require_once("connectCd102g2.php");
        $sql ="select * from bgmgr";
        $bgmgr = $pdo->query($sql);
    while($bgmgrRow = $bgmgr->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
            echo "<td>",$bgmgrRow["mgrNo"],"</td>";
            echo "<td>",$bgmgrRow["mgrName"],"</td>";
            echo "<td>",$bgmgrRow["mgrId"],"</td>";
            echo "<td>",$bgmgrRow["mgrPsw"],"</td>";
            echo "<td>",$bgmgrRow["mgrAccess"],"</td>";
            echo "<td>",$bgmgrRow["mgrStatus"],"</td>";
            echo "<td><button>修改</button></td>";
        echo "</tr>";
    }
                                
?>   
</table>
<?php
     
}catch(PDOException $e){
  echo "error~<br>";
  echo $e->getMessage() , "<br>";
}
?>
  </div>
        </div>
    </div>
    <div class="clearfix"></div>      


</body>
</html>