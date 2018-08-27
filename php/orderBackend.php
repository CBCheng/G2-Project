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
    <link rel="stylesheet" href="css/orderBackend.css">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
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
            <h1>訂單管理</h1>
            <div class="orderSearch">
                搜尋會員編號
                <i class="fa fa-search" id="i-advanced-search-i"></i>
                <input type="text" id="i-advanced-search" >
                搜尋訂單編號
                <i class="fa fa-search" id="i-advanced-search-i"></i>
                <input type="text" id="i-advanced-search" >
            </div>
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>訂單編號</td>
                        <td>會員編號</td>
                        <td>下單時間</td>
                        <td>訂單金額</td>
                        <td>訂單狀態</td>
                        <td>檢視訂單</td>
                        <td>修改訂單</td>
                        <td>刪除訂單</td>
                    </tr>
                    <tr>
                        <td>B00001</td>
                        <td>C00001</td>
                        <td>2050.8.10 12:25:36</td>
                        <td>300NT</td>
                        <td>已付款</td>
                        <td>
                            <button>檢視</button>
                        </td>
                        <td>
                            <button id="lightBoxBtn">修改</button>
                        </td>
                        <td>
                            <button>刪除</button>
                        </td>
                    </tr>
                    
                </table>

                <div class="lightBox" id="lightBox">
                        <h2>修改訂單資料</h2>
                            <table>
                                <tr>
                                    <td>訂單編號</td>
                                    <td>B00001</td>
                                    <td>會員編號</td>
                                    <td>C00001</td>
                                </tr>
                                <tr>
                                    <td>訂單時間</td>
                                    <td>2050.8.10 12:25:36</td>
                                    <td>會員姓名</td>
                                    <td>王大陸</td>
                                </tr>
                                <tr>
                                    <td>訂單狀態</td>
                                    <td>準備出貨</td>
                                    <td>訂單金額</td>
                                    <td>300NT</td>
                                </tr>
                            </table>
                            <div class="orderDetail">
                                <span>訂單明細</span>
                                <table>
                                    <tr>
                                        <td></td>
                                        <td>商品編號</td>
                                        <td>商品編號</td>
                                        <td>商品名稱</td>
                                        <td>單價</td>
                                        <td>數量</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>P00001</td>
                                        <td>圖片1</td>
                                        <td>多功能激光槍</td>
                                        <td>300NT</td>
                                        <td>20</td>   
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>P00001</td>
                                        <td>圖片1</td>
                                        <td>多功能激光槍</td>
                                        <td>300NT</td>
                                        <td>20</td>
                                    </tr>
                                </table>
                                
                            </div>
                            <div class="receive">
                            <span >收件資訊</span>
                            <table>
                                    <tr>
                                        <td>收件人姓名</td>
                                        <td><input type="text" value="王大陸"></td>
                                        <td>地址</td>
                                        <td><input type="text" value="中央大學"></td>
                                    </tr>
                                    <tr>
                                        <td>電話</td>
                                        <td><input type="text" value="0800123123"></td>
                                        <td>email</td>
                                        <td><input type="text" value="123@gamil.com"></td>
                                    </tr>
                                </table>
                            </div>

                            <button id="cancelBtn">取消</button>
                                        <button>確認修改</button>
                        </div>



            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <script>
            function doFirst(){
                var lightBoxBtn = document.getElementById('lightBoxBtn');
                var lightBox = document.getElementById('lightBox');
                var cancelBtn = document.getElementById('cancelBtn');
                lightBoxBtn.addEventListener('click',function(){
                    lightBox.style.display = 'block';
                })
                cancelBtn.addEventListener('click',function(){
                    lightBox.style.display = 'none';
                })
            }
            window.onload = doFirst;
        </script>

</body>
</html>