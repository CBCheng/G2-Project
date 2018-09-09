<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" href="css/expert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <!-- plugin -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>

    <!-- scrollmagic -->
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="text/css" href="img/logovb.png">
    <title>OH~PLANETS! | 專家帶你玩</title>
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
                <a href="expertLogin.php">專家帶你玩</a>
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
                <a href="expertLogin.php">專家帶你玩</a>
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



    <div class="title">
        <h1>專家帶你玩</h1>
        <div id="can">
            <canvas id="canvas1" width="245" height="210">
            </canvas>
            <canvas id="canvas2" width="245" height="210">
            </canvas>
        </div>
        <div class="hex">
            <img class="hexWhite" src="img/expertImg/hexWhite.png" alt="hexWhite">
            <img class="hexBlue" src="img/expertImg/hexBlue.png" alt="hexBlue">
        </div>
    </div>




    
    <!-- <div class="section section05">
        <div class="hi1">tweenmax</div>
        <div class="hi2">scrollmagic is so cool</div>
    </div> -->


    <div id="trigger_01"></div>
    <div class="cloud_group">
        <img class="cloud1" src="img/expertImg/cloud.png">
        <img class="cloud2" src="img/expertImg/cloud.png">
    </div>



<div id="trigger_02"></div>
<img class="planetsan" src="img/expertImg/planetsan.png">

<div id="trigger_03"></div>
<img class="planettree" src="img/expertImg/planettree.png">


    <!-- ======filter===== -->
    <section class="panel">
        <div id="filters" class="button-group">
            <div class="button-top">
                <button class="button is-checked all" data-filter="*">
                    <span>全部</span>
                </button>
                <button class="button popular" data-filter=".popular">
                    <span>人氣</span>
                </button>
            </div>
            <div class="button-down">
                <button class="button" data-filter=".blue">
                    <span>瓦特星</span>
                </button>
                <button class="button" data-filter=".orange">
                    <span>達沙星</span>
                </button>
                <button class="button" data-filter=".green">
                    <span>奧倫星</span>
                </button>
            </div>
        </div>


        <div class="grid">
            
        </div>
    </section>
    <!-- ======filter===== -->




    <!-- ======exp_lightBox===== -->
    <div id="exp_lightBox_father" style="display: none;">
        
    </div>
    <!-- ======exp_lightBox===== -->




    <!-- footer -->
    <footer>

        <img src="img/expertImg/footerbg-3.png">
        <div class="copyright">
            <p>copyright@OhPlanets 2145</p>
        </div>

    </footer>






    <!-- script 引用-->
    <!-- <script src="libs/jquery/dist/jquery.min.js"></script> -->

    <!-- <script src="js/tween.js"></script> -->
    <script src="libs/isotope/isotope.pkgd.min.js"></script>
    <!-- <script src="js/isotope.js"></script> -->
    
    <script src="js/style.js"></script>
    <script src="js/expert.js"></script>
    <script src="js/login.js"></script>
</body>

</html>