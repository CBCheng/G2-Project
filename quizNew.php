<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Oh!planet!quiz</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    
    <link rel="stylesheet" href="css/expert.css">
    <link rel="stylesheet" href="css/styleQuizNew.css">
    





</head>
<body>
<!-- 開場動畫 -->

<header>
        <?php include 'php/login.php';?>
</header>






<h1 class="ml11">
        <span class="text-wrapper">
        <span class="mlline mlline1"></span>
        <span class="letters">歡迎使用旅行測驗</span>
        </span>
    </h1>
    <!-- nav -->
    <!-- <div class="navColor">
            <img class="navPic" src="img/bg.png" alt="">
        </div>
        <nav>
           
            <ul class="menu mRight">
                <li><a href="planning.html">開始冒險</a></li>
                <li><a href="expert.html">專家帶你玩</a></li>
            </ul>
            <a href="index.html" class="logo">
                <img src="img/logo-1.png">
            </a>
            <ul class="menu mLeft">
                <li><a href="refer.html">別人怎麼玩</a></li>
                <li><a href="shop.html">星際商城</a></li>
            </ul>
            <ul class="member">
                <li class="shoppingCar">
                    <a href="#">
                        <img class="shoppingCarPic" src="img/shopping car.png" alt="">
                        
                    </a>
                </li>
                <li class="memberSign"><a href="#">登入</a></li>
            </ul>
            <ul class="memberSelect">
                <li>Hi ~ 冒險者</li>
                <li><a href="member_mytrip.html">我的行程</a></li>
                <li><a href="member_favorite.html">我的收藏</a></li>
                <li><a href="member_order.html">我的訂單</a></li>
                <li><a href="member_comment.html">專家評論</a></li>
                <li><a href="member_profile.html">會員資料修改</a></li>
                <li><a href="sign.html">登出</a></li>
            </ul>
           
            <div class="hambger">
                <div class="line"></div>
            </div>
            <ul class="menuMobile">
                <li><a href="planning.html">開始冒險</a></li>
                <li><a href="expert.html">專家帶你玩</a></li>
                <li><a href="refer.html">別人怎麼玩</a></li>
                <li><a href="shop.html">星際商城</a></li>
                <li><a href="member.html">會員專區</a></li>
                <li><a href="shop.html">購物車</a></li>
            </ul>
        </nav> -->




<!-- quiz -->

<div class="full">
        
    <div class="slider">
        <div class="wrapQuiz" id="wrapQuiz">

    <!-- result -->
            <div class="sectionQuiz sectionQuiz1">
                <div class="ansTrip">
                    <h2>推薦行程如下</h2>
                    <div class="recommendTrip">
                        <div class="ansTxtGroup">
                            <h4 id="resultPlanet"></h4>
                            <h3 id="resultName"></h3>
                        </div>
                        <img src="img/poa/resultSan.png" alt="" class="sandPlanet" id="resultPlanetPic">
                        <img src="img/poa/result2_1.jpg" alt="" class="sandPic" id="resultPic">
                        <img src="img/poa/borderimg1.png" alt="" class="sandBorder">
                        <div class="ansBtn"><span>引入行程</span></div>
                    </div>
                    
                </div>
            </div>

        <!-- quiz4 -->
            <div class="sectionQuiz sectionQuiz2">
                <div class="quiz4">
                    <h2>Q4:請選擇預計行程天數</h2>
                    <div class="days">
                        <div class="daysGroup">
                            <img src="img/poa/cyc4_11.png" alt="cir1" class="cirCenter">
                            <img src="img/poa/cyc4_22.png" alt="cir2" class="cirMiddle">
                            <img src="img/poa/borderimg2-2.png" alt="" class="cirBorder">
                            <div class="thedays days3" data-set="3">
                                <span>3天</span>
                            </div>
                        </div>
                    </div>
                    <div class="days">
                        <div class="daysGroup">
                            <img src="img/poa/cyc4_11.png" alt="cir1" class="cirCenter">
                            <img src="img/poa/cyc4_22.png" alt="cir2" class="cirMiddle">
                            <img src="img/poa/borderimg2-2.png" alt="" class="cirBorder">
                            <div class="thedays days5" data-set="5">
                                <span>5天</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- quiz3 -->
        <input type="hidden" id="landValue">
        <div class="sectionQuiz sectionQuiz3">
            <div class="quiz3">
                <h2>Q3:下面景點圖片選擇其一</h2>
                <div class="landscape">
                    <div class="landscapePic">
                        <img src="img/poa/volcanic-q3.png" alt="volcanic">
                        <img src="img/poa/borderimg4.png" alt="" class="landPicBorder">
                    </div>
                    <div class="landscapeBtn" >
                        <h5 class="theLands" data-set="達沙星">火山</h5>
                    </div>
                </div>
                <div class="landscape">
                    <div class="landscapePic">
                        <img src="img/poa/lake-q3.png" alt="lake">
                        <img src="img/poa/borderimg4.png" alt="" class="landPicBorder">
                    </div>
                    <div class="landscapeBtn">
                        <h5 class="theLands" data-set="瓦特星">冰湖</h5>
                    </div>
                </div>
                <div class="landscape">
                    <div class="landscapePic">
                        <img src="img/poa/mountain-q3.png" alt="mountain">
                        <img src="img/poa/borderimg4.png" alt="" class="landPicBorder">
                    </div>
                    <div class="landscapeBtn">
                        <h5 class="theLands" data-set="奧倫星">山脈</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- quiz2 -->
            <div class="sectionQuiz sectionQuiz4">
                <div class="quiz2">
                    <h2>Q2:選擇一個最喜歡的外星人</h2>
                    <div class="alien">
                        <div class="alienPic">
                            <img src="img/poa/waterman1.jpg" alt="water">
                            <img src="img/poa/borderimg1.png" alt="" class="alienPicBorder">
                        </div>
                        <div class="alienBtn">
                            <h5>水星人</h5>
                        </div>
                    </div>
                    <div class="alien">
                        <div class="alienPic">
                            <img src="img/poa/treeman1.jpg" alt="tree">
                            <img src="img/poa/borderimg1.png" alt="" class="alienPicBorder">
                        </div>
                        <div class="alienBtn">
                            <h5>木星人</h5>
                        </div>
                    </div>
                    <div class="alien">
                        <div class="alienPic">
                            <img src="img/poa/fireman1.jpg" alt="fire">
                            <img src="img/poa/borderimg1.png" alt="" class="alienPicBorder">
                        </div>
                        <div class="alienBtn">
                            <h5>火星人</h5>
                        </div>
                    </div>
                </div>
            </div>
            
        <!-- Quiz1 -->
            <div class="sectionQuiz sectionQuiz5">
                <div class="quiz1">
                    <h2>Q1:請問您的性別為</h2>
                    <div class="gender">
                        <div class="genderPic">
                            <img src="img/poa/man.jpg" alt="man">
                            <img src="img/poa/borderimg1.png" alt="" class="genderBorderL">
                        </div>
                        <div class="genderBtn">
                            <h5>男冒險家</h5>
                        </div>
                    </div>
                    <div class="gender">
                        <div class="genderPic">
                            <img src="img/poa/woman.jpg" alt="woman">
                            <img src="img/poa/borderimg1.png" alt="" class="genderBorderR">
                        </div>
                        <div class="genderBtn">
                            <h5>女冒險家</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="particles-js"></div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<script src="js/particles.min.js"></script>
<script src="libs/anime/anime.min.js"></script>

<script src="js/quizNew.js"></script>

</body>
</html>