<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="text/css" href="img/logovb.png">
    <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/member.css"> -->
    <title>OH~PLANETS! | 別人怎麼玩</title>
    <!-- css -->
    <link rel="stylesheet" href="css/refer.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
     
    <!-- nav -->
    <header>
        <?php include 'login.php';?>
    </header>



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