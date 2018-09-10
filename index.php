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
    <!-- css -->
    <link rel="icon" type="text/css" href="img/logovb.png">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/index.css">
    <!-- <link rel="stylesheet" href="css/fullpage.css"> -->
    <!-- plugin -->
    <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="libs/jquery/dist/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="libs/anime/anime.min.js"></script>
    <!-- <script src="libs/gsap/src/minified/TweenMax.min.js"></script> -->
    <!-- <script type="text/javascript" src="/libs/parallax/parallax.min.js"></script> -->
    <!-- scroll -->

    <title>Oh~ Planets!</title>
</head>

<body>
    
    <!-- nav start-->
    <div class="navColor">
        <!-- <img class="navPic" src="../img/bg.png" alt=""> -->
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
            //檢查是否已登入
        if( isset($_SESSION["MEM_NAME"]) === true ){ //已登入
        echo '<span id="memName">', $_SESSION["MEM_NAME"], '</span>';
        echo '<span id="spanLogin">登出</span>';
      }else{
        echo '<span id="memName">&nbsp;</span>';
        echo '<span id="spanLogin">登入</span>';
      }
      ?> 
                
            </li>
        </ul>
        <!-- mobile -->
        <div class="hambger">
            <div class="line"></div>
        </div>
        <ul class="menuMobile">
            <!-- <img class="navPic" src="img/bgM.png" alt=""> -->
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
                <a href="member.php">會員專區</a>
            </li>
            <li>
                <a href="shop.php">購物車</a>
            </li>

        </ul>
    </nav>
    <div class="login_modal" id="lightBox";>
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
                        <button type="submit" id="regist_btn" class="btn btn-o-nb">送出</button>

                    </div>
                </form>


                <img src="img/login/login.png">
            </div>

        </div>
        <div class="login_box">
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

    <!-- nav end-->

    <!-- part1 start -->
    <div id="section1">
        <div class="part1">
            <div class="choPlanet choPlt1">
                <img class="planetBg" src="img/index/planetBg.png">
                <img src="img/index/planetsan.png">
                <span>達沙星</span>
            </div>
            <div class="choPlanet choPlt2">
                <img class="planetBg" src="img/index/planetBg.png">
                <img src="img/index/planetwater.png">
                <span>瓦特星</span>
            </div>
            <div class="choPlanet choPlt3">
                <img class="planetBg" src="img/index/planetBg.png">
                <img src="img/index/planettree.png">
                <span>奧倫星</span>
            </div>
            
                <div class="bigPlt bigPltSan">
                    <img src="img/index/planetsan.png">
                    <div class="viewDot">
                            <div class="pvAll p2V1">
                                <div id="p2_v1" class="plVi speed1"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p2V2">
                                <div id="p2_v2" class="plVi speed1"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p2V3">
                                <div id="p2_v3" class="plVi speed1"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p2V4">
                                <div id="p2_v4" class="plVi speed2"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p2V5">
                                <div id="p2_v5" class="plVi speed2"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p2V6">
                                <div id="p2_v6" class="plVi speed2"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p2V7">
                                <div id="p2_v7" class="plVi speed3"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p2V8">
                                <div id="p2_v8" class="plVi speed3"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p2V9">
                                <div id="p2_v9" class="plVi speed3"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p2V10">
                                <div id="p2_v10" class="plVi speed3"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                    </div>
                </div>

                <div class="bigPlt bigPltWater">
                    <img src="img/index/planetwater.png">
                    <div class="viewDot">
                            <div class="pvAll p3V1">
                                <div id="p1_v1" class="plVi speed1" ></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p1V2">
                                <div id="p1_v2" class="plVi speed1"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p1V3">
                                <div id="p1_v3" class="plVi speed1"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p1V4">
                                <div id="p1_v4" class="plVi speed1"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p1V5">
                                <div id="p1_v5" class="plVi speed2"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p1V6">
                                <div id="p1_v6" class="plVi speed2"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p1V7">
                                <div id="p1_v7" class="plVi speed2"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p1V8">
                                <div id="p1_v8" class="plVi speed2"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p1V9">
                                <div id="p1_v9" class="plVi speed3"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p1V10">
                                <div id="p1_v10" class="plVi speed3"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p1V11">
                                <div id="p1_v11" class="plVi speed3"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p1V12">
                                <div id="p1_v12" class="plVi speed3"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p1V13">
                                <div id="p1_v13" class="plVi speed1"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p1V14">
                                <div id="p1_v14" class="plVi speed1"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p1V15">
                                <div id="p1_v15" class="plVi speed1"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p1V16">
                                <div id="p1_v16" class="plVi speed2"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p1V17">
                                <div id="p1_v17" class="plVi speed2"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                            <div class="pvAll p1V18">
                                <div id="p1_v18" class="plVi speed2"></div>  
                                <div class="pulse pulse0s"></div>
                            </div>
                            <div class="pvAll p1V19">
                                <div id="p1_v19" class="plVi speed3"></div>  
                                <div class="pulse pulse3s"></div>
                            </div>
                            <div class="pvAll p1V20">
                                <div id="p1_v20" class="plVi speed3"></div>  
                                <div class="pulse pulse6s"></div>
                            </div>
                    </div>
                </div>

                <div class="bigPlt bigPltTree">
                    <img src="img/index/planettree.png">
                    <div class="viewDot">
                        <div class="pvAll p3V1">
                            <div id="p3_v1" class="plVi speed1"></div>  
                            <div class="pulse pulse3s"></div>
                        </div>
                        <div class="pvAll p3V2">
                            <div id="p3_v2" class="plVi speed1"></div>  
                            <div class="pulse pulse6s"></div>
                        </div>
                        <div class="pvAll p3V3">
                            <div id="p3_v3" class="plVi speed1"></div>  
                            <div class="pulse pulse0s"></div>
                        </div>
                        <div class="pvAll p3V4">
                            <div id="p3_v4" class="plVi speed2"></div>  
                            <div class="pulse pulse3s"></div>
                        </div>
                        <div class="pvAll p3V5">
                            <div id="p3_v5" class="plVi speed2"></div>  
                            <div class="pulse pulse6s"></div>
                        </div>
                        <div class="pvAll p3V6">
                            <div id="p3_v6" class="plVi speed2"></div>  
                            <div class="pulse pulse0s"></div>
                        </div>
                        <div class="pvAll p3V7">
                            <div id="p3_v7" class="plVi speed3"></div>  
                            <div class="pulse pulse3s"></div>
                        </div>
                        <div class="pvAll p3V8">
                            <div id="p3_v8" class="plVi speed3"></div>  
                            <div class="pulse pulse6s"></div>
                        </div>
                        <div class="pvAll p3V9">
                            <div id="p3_v9" class="plVi speed3"></div>  
                            <div class="pulse pulse0s"></div>
                        </div>
                        <div class="pvAll p3V10">
                            <div id="p3_v10" class="plVi speed3"></div>  
                            <div class="pulse pulse3s"></div>
                        </div>
                    </div>
            </div>
            <img src="img/index/part1H1Bg.png" alt="part1H1Bg" class="part1H1Bg">
            <!-- 字體特效 -->
            <h1 class="ml14">
                <span class="text-wrapper">
                    <span class="letters">開始踏上旅程吧!</span>
                    <span class="under"></span>
                </span>
            </h1>
            

            <!-- 跳窗燈箱 -->
            <div class="viewBg">
                <!-- <div class="viewItem">
                    <img src="img/view/p1/v1/p1_v1_01.jpg" alt="viewImg" class="viewImg">
                    <div class="exit">
                        <img src="img/index/cancel.png" alt="exit">
                    </div>
                    <h2>天空之鏡</h2>
                    <a href="planning.html">將景點加入行程</a>
                </div> -->
            </div>

            <!-- 手機板景點選項 -->
            <div class="mobViewBox">
                <div class="mobViewItem item1">
                    <span id="p2_v1" class="viewName">土樓城堡</span>
                    <span id="p2_v2" class="viewName">百歲沙漠</span>
                    <span id="p2_v3" class="viewName">勾法斯</span>
                    <span id="p2_v4" class="viewName">地獄沙漠</span>
                    <span id="p2_v5" class="viewName">行星之眼</span>
                    <span id="p2_v6" class="viewName">奴隸莊園</span>
                    <span id="p2_v7" class="viewName">沙漠花園</span>
                    <span id="p2_v8" class="viewName">圓形農場</span>
                    <span id="p2_v9" class="viewName">波濤谷</span>
                    <span id="p2_v10" class="viewName">白色沙漠</span>
                </div>
                <div class="mobViewItem item2">
                    <span id="p1_v1" class="viewName">水上國王殿</span>
                    <span id="p1_v2" class="viewName">鏡海</span>
                    <span id="p1_v3" class="viewName">藍綠夢湖</span>
                    <span id="p1_v4" class="viewName">瓦特水神廟</span>
                    <span id="p1_v5" class="viewName">斷層黃金瀑布</span>
                    <span id="p1_v6" class="viewName">玫瑰粉紅湖</span>
                    <span id="p1_v7" class="viewName">三色火山湖</span>
                    <span id="p1_v8" class="viewName">彩虹河</span>
                    <span id="p1_v9" class="viewName">藍色大理石</span>
                    <span id="p1_v10" class="viewName">溫泉鏡湖</span>
                    <span id="p1_v11" class="viewName">格林冰谷</span>
                    <span id="p1_v12" class="viewName">福爾摩斯瀑布</span>
                    <span id="p1_v13" class="viewName">奧斯卡湖</span>
                    <span id="p1_v14" class="viewName">Baikal Lake</span>
                    <span id="p1_v15" class="viewName">深水裂縫</span>
                    <span id="p1_v16" class="viewName">藍色湖洞</span>
                    <span id="p1_v17" class="viewName">山水洞</span>
                    <span id="p1_v18" class="viewName">Horseshoe Bend</span>
                    <span id="p1_v19" class="viewName">神秘谷</span>
                    <span id="p1_v20" class="viewName">詩的洞窟</span>
                </div>
                <div class="mobViewItem item3">
                    <span id="p3_v1" class="viewName">扭曲森林</span>
                    <span id="p3_v2" class="viewName">龍血樹</span>
                    <span id="p3_v3" class="viewName">胖子樹</span>
                    <span id="p3_v4" class="viewName">聖猴森林</span>
                    <span id="p3_v5" class="viewName">壹陸國家公園</span>
                    <span id="p3_v6" class="viewName">雲霧林山</span>
                    <span id="p3_v7" class="viewName">山水洞森林</span>
                    <span id="p3_v8" class="viewName">巧克力巨人島</span>
                    <span id="p3_v9" class="viewName">飛龍風景區</span>
                    <span id="p3_v10" class="viewName">BaBa村莊</span>
                </div>
            </div>
        </div>
    </div>
        <!-- part1 end -->
        <!-- part2 start -->
    <div id="section2">
        <div class="part2">
            <div class="pt2Title">
                <h2 class="pt2Eng">CHOOSE ONE</h2>
                <h2 class="pt2Cn">對於星球之旅有想法嗎</h2>
            </div>
            <img src="img/index/yesNoInside.png" alt="yesNoInside" class="yesInside">
            <img src="img/index/yesNoOutside.png" alt="yesNoOutside" class="yesOutside">
            <img src="img/index/yesNoInside.png" alt="yesNoInside" class="NoInside">
            <img src="img/index/yesNoOutside.png" alt="yesNoOutside" class="NoOutside">
            <img src="img/index/indexpPt2Bg.jpg" class="yesNoImg noImg">
            <img src="img/index/indexpPt2Bg-2.jpg" class="yesNoImg yesImg">
            
            <div class="yesNo no">
                <span>NO</span>
                <p>那就試試看<br>我們的測驗吧</p>
                <a href="quizNew.php">開始測驗</a>
            </div>
            <div class="yesNo yes">
                <span>YES</span>
                <p>現在就開始規劃<br>您的星球之旅吧</p>
                <a href="planning.php">開始規劃</a>
            </div>
        </div>
    </div>
        <!-- part2 end -->
        <!-- part3 start -->
    <div id="section3">
        <div class="part3">
            <img src="img/index/expertTextBg.png" alt="expertTextBg" class="exTextBg">
            <h2>帶上我們的專家吧</h2>
            <h3>他會讓您的旅程更加精采</h3>
            <a href="expert.php">查看所有專家</a>

            <div class="expertAll expert1">
                <div class="exScreen scWhite"></div>
                <div class="exScreen scBlack"></div>
                <div class="zzz">
                    <img src="img/index/expert1.jpg" alt="expert1">
                    <div class="exAllText exText1">
                        <img src="img/index/crown.png" alt="crown">
                        <h3>奧倫星人氣專家</h3>
                        <h3>May J Lee</h3>
                        <div class="expSpan">
                            <p class="exp">人文</p><span></span>
                            <br>
                            <p class="exp">美食</p><span></span>
                            <br>
                            <p class="exp">科技</p><span></span>
                            <br>
                            <p class="exp">冒險</p><span></span>
                            <br>
                            <p class="exp">知性</p><span></span>
                        </div>
                        <!-- <a href="expert.html" class="aaa">專家詳情</a> -->
                    </div>
                </div>
            </div>
            <div class="expertAll expert2">
                <div class="exScreen scWhite"></div>
                <div class="exScreen scBlack"></div>
                <div class="zzz">
                    <img src="img/index/expert2.jpg" alt="expert2">
                    <div class="exAllText exText2">
                        <img src="img/index/crown.png" alt="crown">
                        <h3>瓦特星人氣專家</h3>
                        <h3>Tom Jeson</h3>
                        <div class="expSpan">
                            <p class="exp">人文</p><span></span>
                            <br>
                            <p class="exp">美食</p><span></span>
                            <br>
                            <p class="exp">科技</p><span></span>
                            <br>
                            <p class="exp">冒險</p><span></span>
                            <br>
                            <p class="exp">知性</p><span></span>
                        </div>
                        <!-- <a href="expert.html">專家詳情</a> -->
                    </div>
                </div>
            </div>
            <div class="expertAll expert3">
                <div class="exScreen scWhite"></div>
                <div class="exScreen scBlack"></div>
                <div class="zzz">
                    <img src="img/index/expert3.jpg" alt="expert3">
                    <div class="exAllText exText3">
                        <img src="img/index/crown.png" alt="crown">
                        <h3>奧倫星人氣專家</h3>
                        <h3>Andy Lin</h3>
                        <div class="expSpan">
                            <p class="exp">人文</p><span></span>
                            <br>
                            <p class="exp">美食</p><span></span>
                            <br>
                            <p class="exp">科技</p><span></span>
                            <br>
                            <p class="exp">冒險</p><span></span>
                            <br>
                            <p class="exp">知性</p><span></span>
                        </div>
                        <!-- <a href="expert.html">專家詳情</a> -->
                    </div>
                </div>
            </div>
            
            
            <div class="expertAll expert4">
                <div class="exScreen scWhite"></div>
                <div class="exScreen scBlack"></div>
                <div class="zzz">
                    <img src="img/index/expert4.jpg" alt="expert4">
                    <div class="exAllText exText4">
                        <img src="img/index/crown.png" alt="crown">
                        <h3>達沙星人氣專家</h3>
                        <h3>Steven Wang</h3>
                        <div class="expSpan">
                            <p class="exp">人文</p><span></span>
                            <br>
                            <p class="exp">美食</p><span></span>
                            <br>
                            <p class="exp">科技</p><span></span>
                            <br>
                            <p class="exp">冒險</p><span></span>
                            <br>
                            <p class="exp">知性</p><span></span>
                        </div>
                        <!-- <a href="expert.html">專家詳情</a> -->
                    </div>
                </div>
            </div>
           
        </div>
    </div>
        <!-- part3 end -->

        <!-- part4 start -->
    <div class="section4">
        <div class="part4">
            <h2>對於旅程還是沒想法嗎</h2>
            <h3>看看別人的分享吧</h3>
            <a href="refer.php" class="goAllRefer">查看所有分享行程</a>
            <img src="img/index/backArrowBg.png" alt="backArrowBg" class="backArrowBg">
            <img src="img/index/forwardArrowBg.png" alt="forwardArrowBg" class="forwardArrowBg">
            <img class="leftPage" id="leftPage" src="img/index/leftArrow.png" alt="back-arrow">
            <img class="rightPage" id="rightPage" src="img/index/rightArrow.png" alt="forward-arrow">
        
            <div class="travelGroup travelGroup1">
                <img src="img/index/outerFrame.png" alt="outerFrame" class="outerFrame">
                <div class="travelTxtGroup">
                    <div class="travelTitle">
                        <h4 class="trTitlePlanet">行星之眼</h4>
                        <h4 class="trTitleName">小資女的異星省錢之道</h4>
                        <p>
                        世界上最大的峽谷之一，是達沙星上自然界七大奇景之一。行星之眼因高原抬升時，多多河及其支流切割層層沉積岩而形成，色彩斑斕，峭壁險峻，可將近20億年來的地質變遷史一覽無餘。
                        </p>
                    </div>
                    <div class="travelPic">
                        <div class="travelDay">3天</div>
                        <div class="travelPicGroup">
                            <img src="img/index/designer9.png">
                            <img src="img/index/designer10.png">
                        </div>
                    </div>
                    <div class="travelBtn">
                        <a href="referdetial.php?scheduleNo=12" class="lookTravelBtn">查看行程</a>
                        <a href="planning.php" class="useTravelBtn btn1">引用行程</a>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>	
            <div class="clearfix"></div>
        
            <div class="travelGroup travelGroup2">
                <img src="img/index/outerFrame.png" alt="outerFrame" class="outerFrame">
                <div class="travelTxtGroup">
                    <div class="travelTitle">
                        <h4 class="trTitlePlanet">彩虹河</h4>
                        <h4 class="trTitleName">漫步在水舞端之上</h4>
                        <p>
                        在當地又被稱為「五彩河」或是「液體彩虹」。其鮮豔的色彩來自河底的水草顏色，並隨著季節變換而改變其河貌。
                        </p>
                    </div>
                    <div class="travelPic">
                        <div class="travelDay">5天</div>
                        <div class="travelPicGroup">
                            <img src="img/index/designer9.png">
                            <img src="img/index/designer10.png">
                        </div>
                    </div>
                    <div class="travelBtn">
                        <a href="referdetial.php?scheduleNo=11" class="lookTravelBtn">查看行程</a>
                        <a href="planning.php" class="useTravelBtn btn2">引用行程</a>
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>
            <div class="clearfix"></div> 
        
            <div class="travelGroup travelGroup3">
                <img src="img/index/outerFrame.png" alt="outerFrame" class="outerFrame">
                <div class="travelTxtGroup">
                    <div class="travelTitle">
                        <h4 class="trTitlePlanet">龍血樹</h4>
                        <h4 class="trTitleName">三天兩夜荒野之旅</h4>
                        <p>
                        龍血樹原產奧倫星西半球的加利群島，當地人傳說，龍血樹里流出的血色液體是龍血，因為龍血樹是在巨龍與大象交戰時，血灑大地而生出來的，這便是龍血樹名稱的由來。
                        </p>
                    </div>
                    <div class="travelPic">
                        <div class="travelDay">3天</div>
                        <div class="travelPicGroup">
                            <img src="img/index/designer9.png">
                            <img src="img/index/designer10.png">
                        </div>
                    </div>
                    <div class="travelBtn">
                        <a href="referdetial.php?scheduleNo=10" class="lookTravelBtn">查看行程</a>
                        <a href="planning.php" class="useTravelBtn btn3">引用行程</a>
                        
                    </div>
                    <!-- <div class="clearfix"></div> -->
                </div>
            </div>	
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- part4 end -->
    
    
    



    
    <!-- footer start -->
    <footer>
        
        <!-- <img src="img/index/footerbg-1.png"> -->
        <div class="copyright">
            <p>copyright@OhPlanets  2145</p>
        </div>
        
    </footer>
    <!-- footer end -->     
<!-- jquery -->
    
    <script src="js/style.js"></script>
    <script src="js/index.js"></script>
    <script src="js/login.js"></script>
    <script>
        // var bodyClass = document.getElementsByTagName('nav');
        lastScrollY = 300;
        window.addEventListener('scroll', function(){
        var st = this.scrollY;
        // 判斷是向上捲動，而且捲軸超過 200px
        if( st < lastScrollY) {
            $('nav').css('background-image','linear-gradient(to top, rgba(0, 255, 255, .1), rgba(0, 183, 255, .1) 100%)');
            //bodyClass.remove('hideUp');
        }else{
            $('nav').css('background-image','linear-gradient(to top, rgba(0, 150, 150, .5), rgba(0, 183, 255, .8) 100%)');
            //bodyClass.add('hideUp');
        }
        // lastScrollY = st;
        });
    </script>
    <!-- <script src="js/tween.js"></script> -->
</body>

</html>