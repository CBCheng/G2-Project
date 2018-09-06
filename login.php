<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">

    <!-- <link rel="stylesheet" href="css/expert.css"> -->
    <!-- plugin -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <!-- <script src="../libs/gsap/src/minified/TweenMax.min.js"></script> -->
    <!-- <script type="text/javascript" src="../js/parallax.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
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
                <a href="planning.html">開始冒險</a>
            </li>
            <li>
                <a href="refer.html">別人怎麼玩</a>
            </li>
        </ul>
        <a href="index.html" class="logo">
            <img src="img/logo-1.png">
        </a>
        <ul class="menu mLeft">
            <li>
                <a href="expert.html">專家帶你玩</a>
            </li>
            <li>
                <a href="shop.html">星際商城</a>
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
        session_start();
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
                <a href="planning.html">開始冒險</a>
            </li>
            <li>
                <a href="expert.html">專家帶你玩</a>
            </li>
            <li>
                <a href="refer.html">別人怎麼玩</a>
            </li>
            <li>
                <a href="shop.html">星際商城</a>
            </li>
            <li>
                <a href="member.html">會員專區</a>
            </li>
            <li>
                <a href="shop.html">購物車</a>
            </li>

        </ul>
    </nav>
    <div class="login_modal" id="lightBox" style="" ;>
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


                <img src="img/login/login.png">
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


    <!-- jquery -->
    
  
    <footer>
        <div class="copyright">
            <p>copyright@OhPlanets 2145</p>
        </div>
    </footer>
    <script src="js/style.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>