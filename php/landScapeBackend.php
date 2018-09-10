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
    <link rel="stylesheet" type="text/css" href="css/landScapeBackend.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>景點管理</title>
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
            <h1>景點管理</h1>
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>景點編號</td>
                        <td>景點名稱</td>
                        <td>星球名稱</td>
                        <td>屬性類別</td>
                        <td>景點圖片(代表)</td>
                        <td>景點狀態</td>
                        <td>修改</td>
                    </tr>

<?php
try{
    require_once("connect_g2.php");

    $sql = "select * from view";
    $views = $pdo->query($sql);
    $viRows = $views->fetchAll(PDO::FETCH_ASSOC);



    foreach ($viRows as $viRow){
        $viType = '';
        if($viRow["viewFood"] == 1){
            $viRow["viewFood"] = '　'.'美食';
            $viType.= $viRow["viewFood"];
        }
        if($viRow["viewHuman"] == 1){
            $viRow["viewHuman"] = '　'.'人文';
            $viType.= $viRow["viewHuman"];
        }
        if($viRow["viewSmart"] == 1){
            $viRow["viewSmart"] = '　'.'知性';
            $viType.= $viRow["viewSmart"];
        }
        if($viRow["viewAdven"] == 1){
            $viRow["viewAdven"] = '　'.'冒險';
            $viType.= $viRow["viewAdven"];
        }
        if($viRow["viewTech"] == 1){
            $viRow["viewTech"] = '　'.'科技';
            $viType.= $viRow["viewTech"];
        }
        $viTy = substr($viType,3,strlen($viType));

        $upDown = '';
        if($viRow["viewStatus"] == '1'){
            $upDown = '顯示';
        }else{
            $upDown = '隱藏';
        }

?>
                    <tr>
                        <td><?php echo $viRow["viewNo"]?></td>
                        <td><?php echo $viRow["viewName"]?></td>
                        <td>
                        <?php echo $viRow["planet"]?>
                        </td>
                        <td>
                        <?php echo $viTy?>
                        </td>
                        <td>
                            <img src="../<?php echo $viRow["viewImg1"]?>" alt="景點代表圖">
                        </td>
                        <td>
                        <?php echo $upDown?>
                        </td>
                        <td><button class="lightBoxBtn" value="<?php echo $viRow["viewNo"]?>">修改</button></td>
                    </tr>
                    <!-- <script>
                    $(function(){
                        $('#lightBoxBtn').on('click',function(){
                            $('.lightBox').css('display','block');
                        });
                        $('#cancelBtn').on('click',function(){
                            $('.lightBox').css('display','none');
                        });
                    });
                    </script> -->


<?php
    }
} catch (PODException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>

                </table>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <script>
        // function doFirst(){
        //     var lightBoxBtn = document.getElementById('lightBoxBtn');
        //     var lightBox = document.getElementById('lightBox');
        //     var cancelBtn = document.getElementById('cancelBtn');
        //     lightBoxBtn.addEventListener('click',function(){
        //         lightBox.style.display = 'block';
        //     })
        //     cancelBtn.addEventListener('click',function(){
        //         lightBox.style.display = 'none';
        //     })
        // }
        // window.onload = doFirst;
        $(function(){
            $('.lightBoxBtn').on('click',function(){
                var viId = $(this).val();
                $.ajax({
                    url:'lanScaChangeData.php',
                    dataType:'text',
                    type: 'POST',
                    data:{viewId:viId},
                    success: function (data) {
                        $('#lightBox').remove();
                        $('.userTable').after(data);
                        $('#lightBox').css('display','block');
                        //alert(data);
                    },
                    error: function () {
                        alert('error');
                    }
                });
                
                // console.log($(this).val());
            });
            // $('#cancelBtn').on('click',function(){
            //     $('#lightBox').css('display','none');
            // });
        });
    </script>
</body>
</html>