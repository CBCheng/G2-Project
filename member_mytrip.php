<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/member_mytrip.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/member.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/member.css"> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>
    <title>Document</title>
</head>

<body>
 <header><?php include 'login.php';?></header>

    
    
    <div class="container">
            <!-- <div class="m_leftBox">
                <div class="m_nav">	
                    <ul>
                        <li>
                            <a href="memberdata.php">我的行程</a>
                        </li>
                        <li>
                            <a href="memberLM.php">我的收藏</a>
                        </li>
                        <li>
                            <a href="memberfree.php">我的訂單</a>
                        </li>
                        <li>
                            <a href="memberW.php">專家評論</a>
                        </li>
                        <li>
                            <a href="memberpack.php" class="m_nav_active">會員資料收藏</a>
                        </li>
                    </ul>	
                </div>
            </div> -->
        <div class="all_content ">
            <div class="sidebar memberPage">
                <ul class="tab-grop">
                    <h1 class="where">會員中心</h1>
                    <li class="default">
                        <a data-toggle="tab" rel="trip" href="member_mytrip.php">我的行程</a>
                    </li> 
                     <li class="">
                        <a data-toggle="tab" rel="favorite" href="member_favorite.php">我的收藏</a>
                    </li> 
                    <!-- <li class="">
                        <a data-toggle="tab" rel="score" href="member_comment.php">專家評論</a>
                    </li> -->
                    <li class="">
                        <a data-toggle="tab" rel="order_mg" href="member_order.php">我的訂單</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="account" href="member_profile.php">會員資料修改</a>
                    </li>
                </ul>
            </div>

            <div id="order_mg" class="tabPage active" style="">
                <div class="tabPage_border">
                    <div class="order_mg_box">
                        <div class="member_title">
                            <h3>我的行程</h3>
                        </div>
                        <div class="title_line clearfix">
                            <div class="title_circle big">
                                <div class="title_circle small"></div>
                            </div>
                            <div class="title_center_line"></div>
                        </div>

                        


                        <div class="m_rightBox ch">
                            <!-- 右邊程式編寫區塊 -->

                          <!--   <div class="mW_bigBox">
                                <div class="mW_delete"><i class="fas fa-trash-alt"></i></div>
                                <div class="mW_box">
                                    <input type="hidden" value="30">
                                    <div class="mW_look">查看詳細</div> -->
                                    <!-- <div class="mW_edit">轉為我的行程</div> -->
                                 <!--    <div class="mW_tabBox">
                                        <div class="line_tab pingC_tab">專家小陳</div>
                                        <div class="mW_imgBox">
                                            <img src="img/p3_v10_05.jpg">
                                        </div>
                                    </div>
                                    <div class="mW_txtBox">
                                        <p class="mW_day"><span>4</span>天</p>
                                        <p class="mW_title">瓦特星四日遊</p>
                                        <p class="mW_lorem">彩虹湖 &gt; 巧克力山 &gt; 黃龍風景區 &gt; 紅龜麵店 &gt; 平溪老街 &gt; 十分旅人民宿</p>
                                    </div>
                                    <div class="clearFix"></div>
                                </div>
                            </div> -->
                           
                        </div>

                        <div class="plightBox ch" style="display: none; width: 100%;">
                            <div class="plightBoxAll" style="opacity: 0;">
                                <div class="pexit"><i class="icon-cancel"></i></div>
                                <div class="plightBoxContent">
                                    <div class="plBImg">
                                        <div>
                                            <img src="images/LM/53.jpg">
                                        </div>
                                    </div>
                                    <div class="plBTitle">

                                        <h2>遊台灣遊平溪</h2>
                                    </div>
                                    <ul class="pchangeDay">
                                        <li class="dayStyle"><span class="pdayNumber">1</span></li>
                                    </ul>
                                    <div class="plBTour">
                                        <ul class="plBdotA">
                                            <li class="plBdotCenter"><span class="plBdot"><div class="ptourName">靜安吊橋</div></span><span class="plBline"></span><span class="plBdot"><div class="ptourName">平溪天燈節</div></span><span class="plBline"></span><span class="plBdot"><div class="ptourName">菁桐鐵道故事館</div></span>
                                                <span class="plBline"></span><span class="plBdot"><div class="ptourName">紅龜麵店</div></span><span class="plBline"></span><span class="plBdot"><div class="ptourName">平溪老街</div></span><span class="plBline"></span>
                                                <span class="plBdot">
                                                    <div class="ptourName">十分旅人民宿</div>
                                                    </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="phonechangeDay">
                                    </ul>
                                </div>
                                <!-- 手機端天數-->
                                <!-- 手機端行程 -->
                                <div class="plBphoneTour">
                                    <ul>
                                        <li class="phonedayTour"><span class="plBphoneDot"><div class="plBphoneName">靜安吊橋</div></span><span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">平溪天燈節</div></span><span class="plBphoneLine"></span>
                                            <span class="plBphoneDot">
                                                <div class="plBphoneName">菁桐鐵道故事館</div>
                                                </span><span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">紅龜麵店</div></span><span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">平溪老街</div></span>
                                            <span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">十分旅人民宿</div></span>
                                            <span< li=""></span<>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--plightBoxAll-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="plightBox ch" style="display: none; width: 100%;">
        <div class="plightBoxAll" style="opacity: 0;">
            <div class="pexit">
                <i class="fas fa-times fa-2x">
                    <!-- <img class="pexit_pic" src="img/times-solid.svg" alt=""> -->
                  </i></div>
            <div class="plightBoxContent">
                <div class="plBImg">
                    <div>
                        <img src="img/p1_v8_04.png">
                    </div>
                </div>
                <div class="plBTitle">

                    <h2>遊台灣遊平溪</h2>
                </div>
                <ul class="pchangeDay">
                    <li class="dayStyle"><span class="pdayNumber">1</span></li>
                </ul>
                <div class="plBTour">
                    <ul class="plBdotA">
                        <li class="plBdotCenter"><span class="plBdot"><div class="ptourName">巧克力山</div></span><span class="plBline"></span><span class="plBdot"><div class="ptourName">彩虹湖</div></span><span class="plBline"></span><span class="plBdot"><div class="ptourName">小村莊</div></span>
                            <span class="plBline"></span><span class="plBdot"><div class="ptourName">冰山一角</div></span><span class="plBline"></span><span class="plBdot"><div class="ptourName">水簾洞</div></span></li>
                    </ul>
                </div>
                <ul class="phonechangeDay">
                </ul>
            </div>
            <!-- 手機端天數-->
            <!-- 手機端行程 -->
            <div class="plBphoneTour">
                <ul>
                    <li class="phonedayTour"><span class="plBphoneDot"><div class="plBphoneName">靜安吊橋</div></span><span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">平溪天燈節</div></span><span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">菁桐鐵道故事館</div></span>
                        <span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">紅龜麵店</div></span><span class="plBphoneLine"></span><span class="plBphoneDot"><div class="plBphoneName">平溪老街</div></span></li>
                </ul>
            </div>
        </div>
        <!--plightBoxAll-->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- footer -->
    <footer>
        <!-- <img src="img/footerbg-1.png"> -->
        <div class="copyright">
            <p>copyright@OhPlanets 2145</p>
        </div>
    </footer>
    <!-- jquery -->
    <script src="js/style.js"></script>

    <script>
        // 天數切換
        $(function() {
            var lightBoxWidth = $(document).width();
            $(window).on('resize', function() {
                lightBoxWidth = $(document).width();
            });
            $(document).on("click", ".mW_look", function(event) {
                event.preventDefault();
                $('body').css({
                    'overflow-y': 'hidden'
                }); //lightBox出現時不準下滑
                // 圖片位置
                var imgsrc = $(this).parent().find('.mW_tabBox div.mW_imgBox img').attr('src');
                var lightBoxBgImg = $('.plBImg div img'); //找到lightBox放圖片的地方
                // 圖片更換
                if (imgsrc == "" || imgsrc == null) {
                    lightBoxBgImg.attr('src', 'images/city_1.jpg'); //如果行程圖片沒有就帶預設圖片
                    // console.log(lightBoxBgImg);
                } else {
                    lightBoxBgImg.attr('src', imgsrc); //否則代入實際圖
                    // console.log("OK"+lightBoxBgImg);  
                }
                //日期重置
                function resetDay() {
                    $('.pchangeDay').children().remove(); //將手機和桌機端的行程天數元素刪除
                    $('.phonechangeDay').children().remove();
                }
                //設定天數樣式等等
                function setDay() {
                    resetDay();
                    for (var i = 1; i <= parseInt(pAllday); i++) {
                        var day = document.createTextNode(i);
                        var dayli = document.createElement('li');
                        var dayspan = document.createElement('span');
                        dayspan.append(day);
                        var x = dayli.append(dayspan);
                        if (lightBoxWidth <= 960) { //lightBox 大小小於960產生手機端天數
                            pchangeDay.children().remove();
                            phoneday.append(dayli);
                        } else {
                            phoneday.children().remove(); //產生桌機端天數
                            pchangeDay.append(dayli);
                        }
                        $('.pchangeDay li').addClass('dayStyle');
                        $('.dayStyle span').addClass('pdayNumber');
                        $('.phonechangeDay li').addClass('phonedayStyle');
                        $('.phonedayStyle span').addClass('phonedayNumber');
                        if (lightBoxWidth <= 960) {
                            pchangeDay.children().remove();
                            phoneday.append(dayli);
                            $('.phonechangeDay li').removeClass('dayStyle');
                            $('.phonedayStyle span').removeClass('pdayNumber');
                            $('.phonechangeDay li').addClass('phonedayStyle');
                            $('.phonedayStyle span').addClass('phonedayNumber');
                        } else {
                            phoneday.children().remove();
                            pchangeDay.append(dayli);
                            $('.pchangeDay li').removeClass('phonedayStyle');
                            $('.dayStyle span').removeClass('phonedayNumber');
                            $('.pchangeDay li').addClass('dayStyle');
                            $('.dayStyle span').addClass('pdayNumber');
                        }
                    }
                }
                // 日期建立
                resetDay();
                var pAllday = $(this).parent().find('.mW_txtBox p.mW_day span').text(); //抓取天數
                var phoneday = $('.phonechangeDay'); //手機
                var pchangeDay = $('.pchangeDay'); //桌機
                setDay();
                //螢幕尺寸改變時重新設定天數
                $(window).on('resize', function() {
                    resetDay();
                    setDay();
                });

                if ($('.pchangeDay,.phonechangeDay').has('li')) {
                    // console.log("yes");
                    // 切換天數動畫
                    $(document).on('click', '.dayStyle', function() {
                        var x = $('.pchangeDay').find(this).index(); //找到自己的li
                        console.log(x);
                        $(".dayStyle").css({
                            "backgroundColor": "#075f9b"
                        });
                        $(this).css({
                            "backgroundColor": "#35BFB3"
                        });
                        $(".pdayNumber").css({
                            "color": "#075f9b"
                        });
                        $(this).children().css({
                            "color": "#35BFB3"
                        });
                        $('.plBdotCenter').stop(true).fadeOut(500, function() {
                            $('.plBdotCenter').eq(x).stop(true).fadeIn(500);
                        });
                        // $('.phonedayTour').stop(true).fadeOut(500,function(){
                        //     $('.phonedayTour').eq(x).stop(true).fadeIn(700).css({'display':'inline-flex'}); 
                        // });

                    });
                    $(document).on('click', '.phonedayStyle', function() {
                        var x = $(this).index();
                        $('.phonedayTour').stop(true).fadeOut(500).eq(x).stop(true).fadeIn(700).css({
                            'display': 'inline-flex'
                        });

                        // $('.plBdotCenter').stop(true).fadeOut(500,function(){
                        //     $('.plBdotCenter').eq(x).stop(true).fadeIn(500); 
                        // });
                    });
                } else {
                    console.log('error');
                }
                // lightBox動畫
                $('.plightBox').css({
                    display: "block",
                    width: 0
                }).animate({
                    width: '100%'
                }, function() {
                    $('.plightBoxAll').animate({
                        opacity: '1'
                    });
                });
                //抓取標題
                var plBTitle = $('.plBTitle');
                var ptitle = $(this).parent().find('.mW_txtBox p.mW_title').text();
                var titleH2 = document.createElement('h2');
                plBTitle.children().remove();
                plBTitle.append(titleH2);
                // console.log(plBTitle);
                // console.log(ptitle);
                if (plBTitle.has('h2')) {
                    $('.plBTitle>h2').html(ptitle);
                } else {
                    titleH2 = document.createElement('h2');
                    plBTitle.append(titleH2);
                    $('.plBTitle>h2').html(ptitle);
                }
            });

            $(document).on('click', '.pexit', function() {
                $('body').css({
                    'overflow-y': 'auto'
                });
                $('.plightBox').css({
                    display: "none"
                });
                $('.plightBoxAll').css({
                    opacity: '0'
                });
            });


        });
    </script>

    <!-- <script src="js/style.js"></script> -->
    <!-- <script type="text/javascript" src="js/login.js"></script> -->
    <script type="text/javascript">
       

    $.ajax({
             url: 'php/mytrip.php',
            dataType:'text',
            type:'POST',
            
            success:function(data){
                    $('.m_rightBox').html(data);             

                    $('.mW_delete').click(function(){

                        var $conf=confirm('確定要刪除嗎?');
                        if($conf==true){
                            alert('刪除成功');
                            $(this).parent().remove(); 

                        var $schNo = $(this).data('schno');
                        // console.log($schNo);
                        $.ajax({
                                 url: 'php/deleteMytrip.php',
                                dataType:'text',
                                type:'POST',
                                data:{schNo:$schNo},
                                success:function(data){
                                   
                                },

                                error:function(xhr, ajaxOptions, thrownError){ 
                                alert("error");
                                alert(xhr.status); 
                                alert(thrownError);  
                                }


                             });
                        }
                        
                        });

                 },

            error:function(xhr, ajaxOptions, thrownError){ 
            alert("error");
            alert(xhr.status); 
            alert(thrownError);  
            }


         });



    </script>
</body>

</html>