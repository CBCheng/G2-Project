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
                    <tr>
                        <td>1</td>
                        <td>羅賴奧林山</td>
                        <td>
                            奧倫星
                        </td>
                        <td>
                            冒險
                        </td>
                        <td>
                            <img src="img/poa/fireman.jpg" alt="">
                        </td>
                        <td>
                            隱藏
                        </td>
                        <td><button id="lightBoxBtn">修改</button></td>
                    </tr>
                </table>
                <div class="lightBox" id="lightBox">
                    <h2>修改景點資料</h2>
                        <table border="1">
                            <tr>
                                <td>景點編號</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>景點名稱</td>
                                <td><input type="text" value="羅賴奧林山"></td>
                            </tr>
                            <tr>
                                <td>星球名稱</td>
                                <td>
                                    <select>
                                        <option value="0">奧倫星</option>
                                        <option value="1">瓦特星</option> 
                                        <option value="2">達沙星</option>            
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>屬性類別</td>
                                <td>
                                    <select>
                                        <option value="0">冒險</option>
                                        <option value="1">知性</option> 
                                        <option value="2">人文</option>
                                        <option value="3">美食</option>
                                        <option value="4">科技</option>              
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>景點圖片</td>
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
                                <td>景點狀態(預設為隱藏)</td>
                                <td>
                                    <select>
                                        <option value="0">隱藏</option>
                                        <option value="1">顯示</option>   
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>景點介紹</td>
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