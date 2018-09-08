<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="css/expert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <!-- plugin -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/gsap/src/minified/TweenMax.min.js"></script>
    <!-- <script type="text/javascript" src="js/parallax.min.js"></script> -->
    <!-- scroll -->

    <link rel="icon" type="text/css" href="img/logovb.png">
    <title>OH~PLANETS! | 專家帶你玩</title>
</head>

<body>
   
    <header>
        <?php include 'login.php';?>
    </header>



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