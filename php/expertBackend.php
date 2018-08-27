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
            <!-- <button class="addUser" id="lightBoxBtn">新增專家</button> -->
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>專家編號</td>
                        <td>姓名</td>
                        <td>專家照片</td>
                        <td>星球編號</td>
                        <td>專家介紹</td>
                        <td>美食</td>
                        <td>人文</td>
                        <td>知性</td>
                        <td>冒險</td>
                        <td>科技</td>
                        <td>查看日期</td>
                        <td>確認修改</td>
                    </tr>
                    <tr>
                        <td>A001</td>
                        <td>林小明</td>
                        <td>圖片1</td>
                        <td>ccc</td>
                        <td>我是在瓦特興擔任導遊的林小明。敬請多多指教</td>
                        <td>9</td>
                        <td>7</td>
                        <td>8</td>
                        <td>2</td>
                        <td>3</td>
                        <td>
                            <button id="dateBtn">查看日期</button>
                        </td>
                        
                        <td>
                            <button>儲存</button>
                        </td>
                    </tr>
                    
                </table>

                <div class="lightBox" id="lightBox">
                    <h2>新增專家</h2>
                        <table border="1">
                            <tr>
                                <td>專家編號</td>
                                <td>A001</td>
                            </tr>
                            <tr>
                                <td>星球編號</td>
                                <td>
                                        <select>
                                            <option value="0">aaa 奧倫星</option>
                                            <option value="1">bbb 瓦特星</option> 
                                            <option value="2">ccc 達沙星</option>            
                                        </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>屬性類別</td>
                                <td>美食:
                                    <select>
                                        <option value="0">1</option>
                                        <option value="1">2</option> 
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                        <option value="4">5</option>  
                                        <option value="5">6</option>
                                        <option value="6">7</option>
                                        <option value="7">8</option>
                                        <option value="8">9</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                    <td></td>
                                    <td>人文:
                                        <select>
                                            <option value="0">1</option>
                                            <option value="1">2</option> 
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                            <option value="4">5</option>  
                                            <option value="5">6</option>
                                            <option value="6">7</option>
                                            <option value="7">8</option>
                                            <option value="8">9</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td>知性:
                                            <select>
                                                <option value="0">1</option>
                                                <option value="1">2</option> 
                                                <option value="2">3</option>
                                                <option value="3">4</option>
                                                <option value="4">5</option>  
                                                <option value="5">6</option>
                                                <option value="6">7</option>
                                                <option value="7">8</option>
                                                <option value="8">9</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td></td>
                                            <td>冒險:
                                                <select>
                                                    <option value="0">1</option>
                                                    <option value="1">2</option> 
                                                    <option value="2">3</option>
                                                    <option value="3">4</option>
                                                    <option value="4">5</option>  
                                                    <option value="5">6</option>
                                                    <option value="6">7</option>
                                                    <option value="7">8</option>
                                                    <option value="8">9</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                                <td></td>
                                                <td>科技:
                                                    <select>
                                                        <option value="0">1</option>
                                                        <option value="1">2</option> 
                                                        <option value="2">3</option>
                                                        <option value="3">4</option>
                                                        <option value="4">5</option>  
                                                        <option value="5">6</option>
                                                        <option value="6">7</option>
                                                        <option value="7">8</option>
                                                        <option value="8">9</option>
                                                    </select>
                                                </td>
                                            </tr>
                            <tr>
                                <td>專家圖片</td>
                                <td>圖片</td>
                            </tr>
                            <tr>
                                <td>專家介紹</td>
                                <td>
                                    <textarea name="" id="" cols="30" rows="10">一位自稱曾擔任黃偉展助理的女子，在臉書爆料黃偉展男女關係複雜，自己淪為「小五」。此事引起軒然大波，黃偉展和妻子今天下午在中西區赤崁里活動中心現身，黃偉展坦承劈腿2名女子，其中1人還墮胎。
                                            黃偉展當場向支持者及家人道歉，黃偉展的妻子也說，黃偉展是3個小孩的父親，她必須忍下來，給黃偉展一個機會彌補。</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button id="cancelBtn">取消</button>
                                    <button>確認新增</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="lightBoxManagement" id="lightBoxManagement">
                        <h2>專家日期管理</h2>
                        
                        <div class="expertInfo">
                            <span class="expertMonth">2018  八月</span>
                            <span class="expertName">A001  林小明</span>
                            <div><img src="img/waterman.jpg" alt=""></div>
                        </div>
                        <table class="expertDated">
                            <tr>
                                <td>被預約的日期</td>
                                <td>8/5~8/9</td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>8/15~8/20</td>
                                <td>+</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="text"></td>
                                <td><button>確定</button></td>
                            </tr>
                        </table >
                        <table class="expertDatedEmpty">
                                <tr>
                                    <td>尚有空的日期</td>
                                    <td>8/5~8/9</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>8/15~8/20</td>
                                    <td></td>
                                </tr>
                                
                            </table >
                            <div class="cancelBtnGroup">
                                <button id="cancelDateBtn">取消</button>
                                <button>確認修改</button>
                            </div>
                            
                        <!-- <div class="expertDated">
                            <div class="expertDatedL">被預約的日期</div>
                            <div class="expertDatedR">
                                <div>8/5~8/9</div>
                                <div>8/15~8/20</div>
                                <div><input type="text">確認</div>
                            </div>
                        </div>
                        <div></div>
                    </div> -->
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

            var dateBtn = document.getElementById('dateBtn');
            var lightBoxManagement = document.getElementById('lightBoxManagement');
            var cancelDateBtn = document.getElementById('cancelDateBtn');
            dateBtn.addEventListener('click',function(){
                lightBoxManagement.style.display = 'block';
            })
            cancelDateBtn.addEventListener('click',function(){
                lightBoxManagement.style.display = 'none';
            })
        }
        window.onload = doFirst;
    </script>
</body>
</html>