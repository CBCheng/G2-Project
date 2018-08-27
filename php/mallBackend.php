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
    <link rel="stylesheet" type="text/css" href="css/mallBackend.css">
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
            <h1>商城管理</h1>
            <div class="wrapChoice">
                <select name="" id="" >
                    <option value="">商品類別</option>
                <option value="">類別1</option>
                <option value="">類別2</option>
                <option value="">類別3</option>
            </select>
            <button>新增商品</button>
            </div>
            
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>商品編號</td>
                        <td>商品圖片</td>
                        <td>商品名稱</td>
                        <td>商品資訊</td>
                        <td>單價</td>
                        <td>商品類別</td>
                        
                        <td>狀態</td>
                        <td>修改</td>
                        <td>刪除</td>
                    </tr>
                    <tr>
                        <td>P0001</td>
                        <td>圖片</td>
                        <td>多功能激光槍</td>
                        <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, aliquid!
                        </td>
                        <td>300NT</td>
                        <td>類別1</td>
                        
                        <td>
                            <button>上架</button>
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
                    <h2>修改商品資料</h2>
                        <table border="1">
                            <tr>
                                <td>商品編號</td>
                                <td>P0001</td>
                            </tr>
                            <tr>
                                <td>商品名稱</td>
                                <td><input type="text" value="多功能激光槍"></td>
                            </tr>
                            <tr>
                                <td>商品類別</td>
                                <td>
                                    <select>
                                        <option value="0">類別1</option>
                                        <option value="1">類別2</option> 
                                        <option value="2">類別3</option>            
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>單價</td>
                                <td>
                                    <input type="text" value="20">
                                </td>
                            </tr>
                            <tr>
                                <td>商品圖片</td>
                                <td>圖片1</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>圖片2</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>圖片3</td>
                            </tr>
                            
                            <tr>
                                <td>商品資訊</td>
                                <td>
                                    <textarea name="" id="" cols="30" rows="10">一位自稱曾擔任黃偉展助理的女子，在臉書爆料黃偉展男女關係複雜，自己淪為「小五」。此事引起軒然大波，黃偉展和妻子今天下午在中西區赤崁里活動中心現身，黃偉展坦承劈腿2名女子，其中1人還墮胎。
                                            黃偉展當場向支持者及家人道歉，黃偉展的妻子也說，黃偉展是3個小孩的父親，她必須忍下來，給黃偉展一個機會彌補。</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button id="cancelBtn">取消</button>
                                    <button>確認修改</button>
                                </td>
                            </tr>
                            
                        </table>
                        
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