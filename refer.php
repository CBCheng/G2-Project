<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="text/css" href="img/logovb.png">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <title>OH~PLANETS! | 別人怎麼玩</title>
    <!-- css -->
    <link rel="stylesheet" href="css/refer.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
     
    
        <!-- nav -->
        <div class="navColor">
        <img class="navPic" src="img/bg.png" alt="">
    </div>
    <nav>
        <!-- desk -->
        <ul class="menu mRight">
            <li>
                <a href="planning.php">開始冒險</a>
            </li>
            <li>
                <a href="refer.php">別人怎麼玩</a>
            </li>
        </ul>
        <a href="index.php" class="logo">
            <img src="img/logo-1.png">
        </a>
        <ul class="menu mLeft">
            <li>
                <a href="expert.php">專家帶你玩</a>
            </li>
            <li>
                <a href="shop.php">星際商城</a>
            </li>
        </ul>
        <ul class="member">
            <li class="shoppingCar">
                <a href="#">
                    <img class="shoppingCarPic" src="img/shopping car.png" alt="">
                    <!-- <img class="shoppingCarHover" src="img/shoppingCarHover.png" alt=""> -->
                </a>
            </li>
            <li class="memberSign">
                
      <?php
        ob_start();
        if (!isset($_SESSION)) { 
            session_start(); 
        }
           
            //檢查是否已登入
        if( isset($_SESSION["MEM_NAME"]) === true ){ //已登入
        echo '<a id="mem_a" href="member_profile.php"><span id="memName">', $_SESSION["MEM_NAME"], '</span></a> '; 
        echo '<span id="spanLogin">登出</span>';
        // echo '<input type="hidden" name="memNo" value="',$_SESSION["MEM_NO"],'">';
      }else{
        echo '<a id="mem_a" href="#"><span id="memName">&nbsp;</span></a> ';
        echo '<span id="spanLogin">登入</span>';
        // echo '<input type="hidden" name="memNo" value="',$_SESSION["MEM_NO"],'">';
      }
      ?> 
                
            </li>
        </ul>
        <!-- <ul class="memberSelect">
            <li>Hi ~ 冒險者</li>
            <li><a href="member_mytrip.html">我的行程</a></li>
            <li><a href="member_favorite.html">我的收藏</a></li>
            <li><a href="member_order.html">我的訂單</a></li>
            <li><a href="member_comment.html">專家評論</a></li>
            <li><a href="member_profile.html">會員資料修改</a></li>
            <li><a href="sign.html">登出</a></li>
        </ul> -->
        <!-- mobile -->
        <div class="hambger">
            <div class="line"></div>
        </div>
        <ul class="menuMobile">
            <img class="navPic" src="img/bgM.png" alt="">
            <li>
                <a href="planning.php">開始冒險</a>
            </li>
            <li>
                <a href="expert.php">專家帶你玩</a>
            </li>
            <li>
                <a href="refer.php">別人怎麼玩</a>
            </li>
            <li>
                <a href="shop.php">星際商城</a>
            </li>
            <li>
                <a href="member_profile.php">會員專區</a>
            </li>
            <li>
                <a href="shop.php">購物車</a>
            </li>

        </ul>
    </nav>
    <div class="login_modal" id="lightBox">
        <div class="regist_box" style="display: none;">
            <div class="regist_content">
                <span class="close">×</span>
                <h3>註冊會員</h3>

                <form method="post" action="php/enroll.php">

                    <div>
                        <div class="login_input">
                            <input required="required" type="text" id="regist_name" name="regist_name">
                            <label class="login_lable" style="top: 18px; color: grey;">*姓名 </label>
                        </div>
                        <div class="login_input">
                            <input required="required" type="password" maxlength="12" id="memPsw_input" name="memPsw_input">
                            <label class="login_lable" style="top: 18px; color: grey;">*密碼(6~12位數) </label>
                            <span class="inputErr_notice">字數不符</span>
                        </div>
                        <div class="login_input">
                            <input required="required" type="password" maxlength="12" id="memPsw_2nd_input" name="memPsw_2nd_input">
                            <label class="login_lable" style="top: 18px; color: grey;">*確認密碼 </label>
                            <span class="inputErr_notice">密碼不符</span>
                        </div>
                        <div class="login_input">
                            <input required="required" type="text" id="regist_email" name="regist_email">
                            <label class="login_lable" style="top: 18px; color: grey;">*電子信箱 </label>
                            <span class="inputErr_notice">非電子信箱</span>
                        </div>
                        <input type="submit" id="regist_btn" class="btn btn-o-nb" value="送出">

                    </div>
                </form>


                <img src="../img/login/login.png">
            </div>

        </div>
        <div class="login_box" style="">
            <div class="login_content">
                <span class="close">×</span>
                <h3>會員登入</h3>
                <div>
                    <div class="login_input">
                        <input type="text" id="memEmail" name="MEM_EMAIL">
                        <label class="login_lable" style="top: 18px; color: grey;">電子信箱 </label>
                    </div>
                    <div class="login_input">
                        <input type="password" id="memPsw" name="MEM_PSW">
                        <label class="login_lable" style="top: 18px; color: grey;">密碼 </label>
                    </div>
                    <button class="btn btn-o-nb" id="login_send">送出</button>
                </div>
                <span>還不是會員，立馬<span class="registBtn"> 註冊 </span></span>
                <img src="img/login/login.png">
            </div>
        </div>
    </div>



    <!-- content -->
    <section class="wrap">
        <img class="track1" src="img/refer/track-1.png" alt="">
        <img class="track2" src="img/refer/track-2.png" alt="">
        <!-- banner -->
        <div class="bannerPic">
            <div class="banner">
            <img src="img/refer/bgBanner.png" alt="">
        <!-- convas -->
            <!-- <div id="canvas-container" >
                <canvas id="sineCanvas"  width="800" height="200"></canvas>
            </div> -->
            <h3 class="title">不想自己安排行程，看看别人的吧!</h3>
            </div>
        </div>
        <!-- content -->
        <!-- 分享按鈕 -->
        <div class="shareBtn">
            <button id="tripShare" ><span>我要分享</span></button>
        </div>
        <div class="content">
            <!-- 分類按鈕 -->
             <div id="filters" class="button-group">
                <!-- <div class="buttonAll"> -->
                    <button class="button is-checked all" data-filter=".tripBox"><span>全&nbsp&nbsp部</span></button>
                    <button class="button" data-filter=".new"><span>最&nbsp&nbsp新</button>
                    <button class="button" data-filter=".popular"><span>人&nbsp&nbsp氣</span></button>
                    <button class="button" data-filter=".blue"><span>瓦特星</span></button>
                    <button class="button" data-filter=".orange"><span>達沙星</span></button>
                    <button class="button" data-filter=".green"><span>奧倫星</span></button>
                <!-- </div>  -->
            </div>
        <!-- 我要分享跳窗 -->
        <div class="shareLightBg">
            <div class="lightBox">
                <div class="close">
                    <img src="img/icon/clear-button-white.png">
                </div>
                <div class="shareContentBox">
                    <div class="mytripSocll">
                        <!-- <div class="mytrip">3天 ｜瓦特星大冒險</div>
                        <div class="mytrip">3天 ｜瓦特星大冒險</div> -->
                    </div>
                    <form class="upload" action="php/shareUpload.php" method="post" enctype="multipart/form-data">
                        <!-- <div class="upload"> -->
                            <input id="tripName" type="text" placeholder="請輸入行程名稱">
                            <div class="uploadPic">
                                <label>
                                    <input type="file" name="upFile" id="upFile">
                                    <img id="imgView" src="img/icon/photo-camera.png">
                                </label>
                            </div>
                            <div>
                                <input type="submit" value="分享行程" class="submit">
                            </div>
                        <!-- </div> -->
                    </form>
                </div>
            </div>
        </div>
        <!-- 分享行程 -->
            <div class="grid tripWrap">
                <!-- <div class="element-item tripBox new blue">
                    <div class="tripPic">
                        <a href="referdetial.html">
                            <img src="img/refer/p1_v7/p1_v7_08.jpg">
                        </a>
                        <div class="tripTag">
                            <span class="tripPlanet blue">瓦特星</span>
                            <span class="tripKind adventure">冒險</span>
                        </div>
                        <div class="tripIcon">
                            <div class="tripMessage">
                                <img src="img/icon/speech-bubbles-comment-option-blue.png">
                                <p>9487留言</p>
                            </div>
                            <div class="tripCollect">
                                <img src="img/icon/like-red.png">
                                <p>9487收藏</p>
                            </div>
                        </div>
                        <a class="grad" href="referdetial.html"></a>
                    </div>
                    <div class="tripTxt">
                            <h4><span>3天</span>瓦特星挑戰極限</h4>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>     
        <!-- <img src="img/footerbg-1.png"> -->
        <div class="copyright">
            <p>copyright@OhPlanets  2145</p>
        </div>           
    </footer>  
                 
<!-- jquery -->
    <!-- <script src="libs/jquery/dist/jquery.min.js"></script> -->
    
    <script src="libs/isotope/isotope.pkgd.min.js"></script>
    <!-- <script src="js/isotope.js"></script> -->
    <script src="js/style.js"></script>
    <script src="js/refer.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>