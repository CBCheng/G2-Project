<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="../css/expert.css">
    <!-- <link rel="stylesheet" href="libs/lity/lity.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <!-- plugin -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script src="../libs/jquery/dist/jquery.min.js"></script>
    <script src="../libs/gsap/src/minified/TweenMax.min.js"></script>
    <!-- <script type="text/javascript" src="js/parallax.min.js"></script> -->
    <!-- scroll -->

    <link rel="icon" type="text/css" href="../img/logovb.png">
    <title>OH~PLANETS! | 專家帶你玩</title>
</head>

<body>
    <!-- nav -->
    <div class="navColor">
        <img class="navPic" src="img/bg.png" alt="">
    </div>
    <!-- <nav> -->
        <!-- desk -->
      <!--   <ul class="menu mRight">
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
                </a>
            </li>
            <li class="memberSign">
                <a href="member_mytrip.html">登入</a>
            </li>
        </ul>
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
    </nav> -->
    <header>
        <?php include 'login.php';?>
    </header>


    



   <!--  <div class="title">
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
    </div> -->




    <div class="cloud_group">
        <img class="cloud1" src="img/expertImg/cloud.png">
        <img class="cloud2" src="img/expertImg/cloud.png">
    </div>




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
            <!-- <div class="element-item expertBox blue popular ">
                <img class="king" src="img/expertImg/crown.png" alt="crown">
                <h2 class="h2Desk">瓦特星</h2>
                <h3 class="h3Desk">Christina</h3>
                <div class="attr">美食</div>
                <div class="pic">
                    <a>
                        <img id="box" src="img/expertImg/A01.jpg">
                    </a>
                    <div class="aside">
                        <h2 class="h2Ph">瓦特星</h2>
                        <h3 class="h3Ph">Christina</h3>
                        <div class="score">
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="mark">
                            <img src="img/expertImg/comment.png" alt="comment">
                            <span>5</span>
                            <img src="img/expertImg/love.png" alt="love">
                            <span>20</span>
                        </div>
                    </div>
                </div> 
            </div> -->
            <!-- <div class="element-item expertBox blue ">
                <h2 class="h2Desk">瓦特星</h2>
                <h3 class="h3Desk">Alan</h3>
                <div class="attr">美食</div>
                <div class="pic">
                    <a>
                        <img id="box" src="img/expertImg/A01.jpg">
                    </a>
                    <div class="aside">
                        <h2 class="h2Ph">瓦特星</h2>
                        <h3 class="h3Ph">Christina</h3>
                        <div class="score">
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="mark">
                            <img src="img/expertImg/comment.png" alt="comment">
                            <span>5</span>
                            <img src="img/expertImg/love.png" alt="love">
                            <span>20</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="element-item expertBox blue ">
                <h2 class="h2Desk">瓦特星</h2>
                <h3 class="h3Desk">Amos</h3>
                <div class="attr">美食</div>
                <div class="pic">
                    <a>
                        <img id="box" src="img/expertImg/A01.jpg">
                    </a>
                    <div class="aside">
                        <h2 class="h2Ph">瓦特星</h2>
                        <h3 class="h3Ph">Christina</h3>
                        <div class="score">
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="mark">
                            <img src="img/expertImg/comment.png" alt="comment">
                            <span>5</span>
                            <img src="img/expertImg/love.png" alt="love">
                            <span>20</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="element-item expertBox orange popular ">
                <img class="king" src="img/expertImg/crown.png" alt="crown">
                <h2 class="h2Desk">瓦特星</h2>
                <h3 class="h3Desk">Alan</h3>
                <div class="attr">美食</div>
                <div class="pic">
                    <a>
                        <img id="box" src="img/expertImg/A01.jpg">
                    </a>
                    <div class="aside">
                        <h2 class="h2Ph">瓦特星</h2>
                        <h3 class="h3Ph">Christina</h3>
                        <div class="score">
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="mark">
                            <img src="img/expertImg/comment.png" alt="comment">
                            <span>5</span>
                            <img src="img/expertImg/love.png" alt="love">
                            <span>20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="element-item expertBox orange ">
                <h2 class="h2Desk">瓦特星</h2>
                <h3 class="h3Desk">Alan</h3>
                <div class="attr">美食</div>
                <div class="pic">
                    <a>
                        <img id="box" src="img/expertImg/A01.jpg">
                    </a>
                    <div class="aside">
                        <h2 class="h2Ph">瓦特星</h2>
                        <h3 class="h3Ph">Christina</h3>
                        <div class="score">
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="mark">
                            <img src="img/expertImg/comment.png" alt="comment">
                            <span>5</span>
                            <img src="img/expertImg/love.png" alt="love">
                            <span>20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="element-item expertBox green popular ">
                <img class="king" src="img/expertImg/crown.png" alt="crown">
                <h2 class="h2Desk">瓦特星</h2>
                <h3 class="h3Desk">Alan</h3>
                <div class="attr">美食</div>
                <div class="pic">
                    <a>
                        <img id="box" src="img/expertImg/A01.jpg">
                    </a>
                    <div class="aside">
                        <h2 class="h2Ph">瓦特星</h2>
                        <h3 class="h3Ph">Christina</h3>
                        <div class="score">
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="mark">
                            <img src="img/expertImg/comment.png" alt="comment">
                            <span>5</span>
                            <img src="img/expertImg/love.png" alt="love">
                            <span>20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="element-item expertBox green ">
                <h2 class="h2Desk">瓦特星</h2>
                <h3 class="h3Desk">Alan</h3>
                <div class="attr">美食</div>
                <div class="pic">
                    <a>
                        <img id="box" src="img/expertImg/A01.jpg">
                    </a>
                    <div class="aside">
                        <h2 class="h2Ph">瓦特星</h2>
                        <h3 class="h3Ph">Christina</h3>
                        <div class="score">
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="mark">
                            <img src="img/expertImg/comment.png" alt="comment">
                            <span>5</span>
                            <img src="img/expertImg/love.png" alt="love">
                            <span>20</span>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </section>
    <!-- ======filter===== -->




    <!-- ======lightBox===== -->
    <div id="lightBox_father" style="display: none;">
        <!-- <section id="lightBox">
            <i class="fas fa-times"></i>
            <div class="content_desk">
                <article class="conLeft">
                    <img class="crown_phone" src="img/expertImg/crown.png" alt="crown">
                    <div class="expPic">
                        <img class="crown" src="img/expertImg/crown.png" alt="crown">
                        <div class="attr">屬性</div>
                        <img src="img/expertImg/A01.jpg" alt="A01">
                    </div>
                </article>
                <article class="conRight">
                    <h1>瓦特星專家</h1>
                    <h2>Alan
                        <img src="img/expertImg/rocket.png" class="rocket">
                    </h2>
                    <div class="attr_phone">美食</div>
                    <div class="data">
                        <div class="score">
                            <h3>評價</h3>
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="chart">
                            <h3>能力值</h3>
                            <span>美食</span>
                            <div class="value focus"></div>
                            <br>
                            <span>知性</span>
                            <div class="value"></div>
                            <br>
                            <span>人文</span>
                            <div class="value"></div>
                            <br>
                            <span>冒險</span>
                            <div class="value"></div>
                            <br>
                            <span>科技</span>
                            <div class="value"></div>
                            <br>
                        </div>
                    </div>
                    <div class="record">
                        <div class="collect">
                            <img class="heart" src="img/expertImg/heartWhite.png" alt="heartWhite" title="加入收藏">
                            <p id="Cnum">20人收藏</p>
                        </div>
                        <div class="writeComment">
                            <img id="write" src="img/expertImg/write.png" alt="write" title="撰寫評論">
                            <p id="Wnum">3則評論</p>
                        </div>
                    </div>
                </article>
            </div>
            
            <div class="content_phone">
                <div class="chart_phone">
                    <h3>能力值</h3>
                    <span>美食</span>
                    <div class="value focus"></div>
                    <br>
                    <span>知性</span>
                    <div class="value"></div>
                    <br>
                    <span>人文</span>
                    <div class="value"></div>
                    <br>
                    <span>冒險</span>
                    <div class="value"></div>
                    <br>
                    <span>科技</span>
                    <div class="value"></div>
                    <br>
                </div>
                <div class="record_phone">
                    <div class="collect">
                        <img class="heart" src="img/expertImg/heartWhite.png" alt="heartWhite" title="加入收藏">
                        <p id="Cnum">20人收藏</p>
                    </div>
                    <div class="writeComment">
                        <img id="write" src="img/expertImg/write.png" alt="write" title="撰寫評論">
                        <p id="Wnum">3則評論</p>
                    </div>
                </div>
            </div>
            <div class="comment">
                <h2>評論</h2>
                <div class="message">
                    <div class="user">
                        <div class="name">董董</div>
                        <img src="img/expertImg/userPic.jpg" alt="user">
                    </div>
                    <p>妙麗超專業的，人很nice又漂亮，下次一定還要預約！</p>
                </div>
                <div class="message">
                    <div class="user">
                        <div class="name">董董</div>
                        <img src="img/expertImg/userPic.jpg" alt="user">

                    </div>
                    <p>妙麗超專業的，人很nice又漂亮，下次一定還要預約！</p>
                </div>
            </div>
        </section> -->
    </div>
    <!-- ======lightBox===== -->




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
    <script src="../libs/isotope/isotope.pkgd.min.js"></script>
    <!-- <script src="js/isotope.js"></script> -->
    
    <script src="../js/style.js"></script>
    <script src="../js/expert.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>