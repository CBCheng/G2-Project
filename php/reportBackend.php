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
    <link rel="stylesheet" href="css/reportBackend.css">
    <title>Document</title>
</head>
<body>
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
<!-- ==================================內容更改區================================================= -->


        <div class="wrapContent">
            
            <div class="content">
            <h1>檢舉管理</h1>
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>會員編號</td>
                        <td>姓名</td>
                        <td>帳號</td>
                        <td>行程編號</td>
                        <td>留言編號</td>
                        <td>留言內容</td>
                        <td>檢舉次數</td>
                        <td>刪除留言</td>
                    </tr>
<?php 
try {
    require_once("connectCd102g2.php");
    $sql = "select * from cd102g2.itineraryre as a join cd102g2.member as b on a.memNo = b.MEM_NO where a.reReportedTimes>0 order by a.reReportedTimes DESC";
    $report = $pdo->query($sql);
    while($reportRow = $report->fetch(PDO::FETCH_ASSOC)){
?>
                <form action="deleteReport.php" method="get">
                    <input type="hidden" name="commentNo" value="<?php echo $reportRow["commentNo"]?>">
                    <tr>
                        <td><?php echo $reportRow["memNo"]?></td>
                        <td><?php echo $reportRow["MEM_NAME"]?></td>
                        <td><?php echo $reportRow["MEM_ID"]?></td>
                        <td><?php echo $reportRow["scheduleNo"]?></td>
                        <td><?php echo $reportRow["commentNo"]?></td>
                        <td><?php echo $reportRow["reContent"]?></td>
                        <td><?php echo $reportRow["reReportedTimes"]?></td>
                        <td><input type="submit" name="delReportBtn" value="刪除"></td>
                    </tr>
                </form>
<?php


    }
} catch (PDOException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>"; 
}
?>
                    
                    
                </table>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</body>
</html>