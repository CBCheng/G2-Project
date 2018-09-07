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
            <form action="addUserBackend.php" method="get">
            <input type="submit" name="addUser" value="新增使用者">
            <!-- <button class="addUser">新增使用者</button> -->
            </form>
            <table class="userTable">
                    <tr class="tableTitle">
                        <td>管理員編號</td>
                        <td>管理員姓名</td>
                        <td>管理員帳號</td>
                        <td>管理員密碼</td>
                        <td>狀態</td>
                        <td>權限</td>
                        <td>確認修改</td>
                        <td>刪除</td>
                    </tr>

<?php

try {
    require_once("connectCd102g2.php");
        $sql ="select * from bgmgr";
        $bgmgr = $pdo->query($sql);
    while($bgmgrRow = $bgmgr->fetch(PDO::FETCH_ASSOC)){
        echo "<form action='userUpdateBackend.php' method='post'>";

        echo "<input type='hidden' name='mgrNo' value=".$bgmgrRow["mgrNo"].">";
        echo "<tr>";
            echo "<td>",$bgmgrRow["mgrNo"],"</td>";
            echo "<td><input type='text' name='mgrName' value=",$bgmgrRow["mgrName"],"></td>";
            echo "<td><input type='text' name='mgrId' value=",$bgmgrRow["mgrId"],"></td>";
            echo "<td><input type='text' name='mgrPsw' value=",$bgmgrRow["mgrPsw"],"></td>";
            if($bgmgrRow["mgrStatus"]=="啟用"){
                echo "<td><select name='mgrStatus'>";
                echo "<option value='啟用' selected>啟用</option>";
                echo "<option value='停用'>停用</option>";
                echo "</select></td>";
            }else{
                echo "<td><select name='mgrStatus'>";
                echo "<option value='啟用'>啟用</option>";
                echo "<option value='停用' selected>停用</option>";
                echo "</select></td>";
            }
            
            switch($bgmgrRow["mgrAccess"]){
                case "最高":
                    echo "<td><select name='mgrAccess'>";
                    echo "<option value='最高' selected>最高</option>";
                    echo "<option value='一般'>一般</option>";
                    echo "<option value='專家'>專家</option>";
                    echo "</select></td>";
                    break;
                case "一般":
                    echo "<td><select name='mgrAccess'>";
                    echo "<option value='最高'>最高</option>";
                    echo "<option value='一般' selected>一般</option>";
                    echo "<option value='專家'>專家</option>";
                    echo "</select></td>";
                    break;
                case "專家":
                    echo "<td><select name='mgrAccess'>";
                    echo "<option value='最高'>最高</option>";
                    echo "<option value='一般'>一般</option>";
                    echo "<option value='專家' selected>專家</option>";
                    echo "</select></td>";
                    break;

            }
        
            
            echo "<td><input type='submit' value='儲存修改'></td>";
            
            echo "<td><input type='submit' name='delBtn' value='刪除'></td>";
        echo "</tr>";
    echo "</form>";
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