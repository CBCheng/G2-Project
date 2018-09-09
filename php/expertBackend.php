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
    <link rel="stylesheet" href="css/expertBackend.css">
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
    <h1>專家管理</h1>
        <table class="userTable">
            <tr class="tableTitle">
                <td>專家編號</td>
                <td>姓名</td>
                <td>專家照片</td>
                <td>星球</td>
                <td>美食</td>
                <td>人文</td>
                <td>知性</td>
                <td>冒險</td>
                <td>科技</td>
                <td>修改</td>
            </tr>
<?php
try {
    require_once("connectCd102g2.php");
    $sql = "select * from expert";
    $members = $pdo->query($sql);
    $memRows = $members->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($memRows as $memRow) {
        $NO = $memRow["expertNo"];

?>
    
    <tr>
        <form action="expBackModify.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="expertNo" value="<?php echo $memRow["expertNo"];?>">
        <td><?php echo $memRow["expertNo"];?></td>
        <td><?php echo $memRow["expertName"];?></td>
        <td>
            <label>
            <img id="image" src="../<?php echo $memRow["expertPic"];?>">
            <input id="upFile<?php echo $NO?>" type='file' size="5" name='upFile' disabled>
            </label>
        </td>
        <td><?php echo $memRow["planet"];?></td>
        <td>
            <input id="expFood<?php echo $NO?>" type='number' min="1" max="10" name='expFood' value="<?php echo $memRow["expFood"];?>" disabled>
        </td>
        <td>
            <input id="expHuman<?php echo $NO?>" type='number' min="1" max="10" name='expHuman' value="<?php echo $memRow["expHuman"];?>" disabled>
        </td>
        <td>
            <input id="expSmart<?php echo $NO?>" type='number' min="1" max="10" name='expSmart' value="<?php echo $memRow["expSmart"];?>" disabled>
        </td>
        <td>
            <input id="expAdven<?php echo $NO?>" type='number' min="1" max="10" name='expAdven' value="<?php echo $memRow["expAdven"];?>" disabled>
        </td>
        <td>
            <input id="expTech<?php echo $NO?>" type='number' min="1" max="10" name='expTech' value="<?php echo $memRow["expTech"];?>" disabled>
        </td>
        <td>
            <input type='button' value='修改' onclick="attr('<?php echo $NO?>')">
            <input type='submit' value='儲存'>
        </td>
        </form>
    </tr>

    

<?php
    }
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>
    
                    
        </table>
    </div>
</div>
</div>
<div class="clearfix"></div>
        



    <script>

        function attr(no){

            var expFood = "expFood" + no ;
            var expHuman = "expHuman" + no ;
            var expSmart = "expSmart" + no ;
            var expAdven = "expAdven" + no ;
            var expTech = "expTech" + no ;
            var upFile = "upFile" + no ;
            document.getElementById(expFood).disabled=false;
            document.getElementById(expHuman).disabled=false;
            document.getElementById(expSmart).disabled=false;
            document.getElementById(expAdven).disabled=false;
            document.getElementById(expTech).disabled=false;
            document.getElementById(upFile).disabled=false;
        }


        function doFirst(){
            document.getElementById('upFile').onchange = fileChange;
        }
        function fileChange(){
            var file = document.getElementById('upFile').files[0];

            var readFile = new FileReader();    //constructor建構函數
            readFile.readAsDataURL(file);
            readFile.addEventListener('load',function(e){
                var image = document.getElementById('image');
                image.src = this.result;
            });
        }
        window.addEventListener('load',doFirst);

// window.addEventListener("load",function(){
//     document.getElementById("expertPic").onchange=function(e){
//         var file = e.target.files[0];
//         var reader = new FileReader();
//         reader.onload = function(){
//             //$(this).prev().attr('src','reader.result');
//             document.getElementByClassId("image").src =reader.result;
//         }
//         reader.readAsDataURL(file);
//     };
// },false);   


    </script>
</body>
</html>