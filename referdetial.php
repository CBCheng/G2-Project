
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="text/css" href="img/logovb.png">
    <title>OH~PLANETS! | 瓦特星大冒險</title>
    <!-- css -->
    <!-- <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/animate.css"> -->

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" href="css/referdetial.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>

    <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> -->
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
                <a href="expert.php">專家帶你玩</a>
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
        echo '<a id="mem_a" href="member_profile.php"><span id="memName">', $_SESSION["MEM_NAME"], '</span></a> '; 
        echo '<span id="spanLogin">登出</span>';
        echo '<input type="hidden" name="memNo" value="',$_SESSION["MEM_NO"],'">';
      }else{
        echo '<a id="mem_a" href="#"><span id="memName">&nbsp;</span></a> ';
        echo '<span id="spanLogin">登入</span>';
        echo '<input type="hidden" name="memNo" value="$_SESSION["MEM_NO"]">';
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
                <a href="member_profile.php">會員專區</a>
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
                <img src="../img/login/login.png">
            </div>
        </div>
    </div>

<!-- 內容============================================================================================= -->

<?php

//先把行程編號存到SESSION
$_SESSION['scheduleNo'] = $_REQUEST["scheduleNo"];
// $memNo = $_REQUEST["MEM_NO"];

//行程分享頁面傳值接收
$scheduleNo = $_REQUEST["scheduleNo"];

try {
	require_once("php/connectCd102g2.php");
    // 我的行程資料庫語法
  	$sql = "select * from myschedule where scheduleNo = $scheduleNo";
  	$schedule = $pdo->query($sql);
  	$scheduleRow = $schedule->fetchObject();

    //scheduleData解值
    $sql4 = "select * from myschedule where scheduleNo = $scheduleNo";

        $sch = $pdo->query( $sql4 );
        $schRow = $sch->fetch(PDO::FETCH_ASSOC);
        $scheduleData = json_decode($schRow['scheduleData']);

    // 我的行程JOIN會員資料語法
    $sql2 = "select * from cd102g2.myschedule as a join cd102g2.member as b on a.memNo=b.MEM_NO where a.scheduleNo=$scheduleNo";
    $member = $pdo->query($sql2);
    $memberRow = $member->fetchObject();

    //我的行程JOIN專家資料與法
    $sql3 = "select * from cd102g2.myschedule as a join cd102g2.expert as b on a.expertNo = b.expertNo where a.scheduleNo=$scheduleNo";
    $expert = $pdo->query($sql3);
    $expertRow = $expert->fetchAll(PDO::FETCH_ASSOC);
    

    
    // print($expertRow);
?>

<!-- 網站內容 -->
    
    <!-- content -->
    <section>
        <!-- banner -->
        <img class="bannerPic" src="img/refer/p1_v7" alt="">
        <div class="topic">
            <div class="memberPic">
                <img src="img/refer/<?php echo $memberRow->MEM_IMG?>" alt="">
            </div>
            <div class="tripTitle">
                <p><?php echo $scheduleRow->depTime?></p>
                <h2><?php echo $scheduleRow->planetName;?> | <?php echo $scheduleRow->scheduleName;?></h2>
            </div>
         </div> 
         <div class="detitle">
             <div class="topicIcon">
                <div class="topicMessage">
                    <img src="img/icon/speech-bubbles-comment-option-blue.png">
                    <p><span><?php echo $scheduleRow->messageNum;?></span>留言</p>
                </div>
                <!-- <div class="topicCollect">
                    <img src="img/icon/like-red.png">
                    <p>收藏</p>
                </div> -->
            </div>
            <a class="use" href="planning.html"> 
                <button>引用行程</button>
            </a>
        </div>
        <div class="wrap">
        <!-- 左邊欄 -->
        <div class="leftWrip">   
            <!-- 行程 -->
            <h3>行程詳細</h3>
            <div class="tripGroup">
<!-- 行程詳細========================================================================== -->
            <?php
                $dayCount = 0;
                            foreach ($scheduleData as $sche) {
                            $dayCount += 1;
            ?>
            <div class="tripWrip wow slideInLeft">
                
                <div class="tripDate">
                     <img src="img/refer/date1.png" alt="">
                     <img src="img/refer/date2.png" alt="">
                     <img src="img/refer/date3.png" alt="">
                     <p>D<?php echo $dayCount;?></p>
                </div>  
                <div class="tripContent">
            <?php

                    foreach ($sche as $sches) {
                        $sql2 = "select * from view where viewName = '$sches'";
                        $views = $pdo->query( $sql2 );
                        $viewRow = $views->fetch(PDO::FETCH_ASSOC);
            ?>
                          
                               <div class="tripSpot">
                               <h4><?php echo $sches; ?></h4>
                               <p><?php echo $viewRow['viewContent']; ?></p>
                               </div>        
                          
                                    
                    <?php
                    }
                    
                    ?>
                 </div>   
            </div>
            <?php
        }
        ?>

         </div>
<!-- ===================================================================================== -->

       
<!-- 留言板===================================================================================== -->
            <!-- 留言列表 -->
            <h3>相關留言</h3>



            <div class="commentGroup">
                
            <?php
            $sql5 = "select * from cd102g2.myschedule as a join cd102g2.itineraryre as b on a.scheduleNo = b.scheduleNo where a.scheduleNo=$scheduleNo ORDER BY b.commentNo ASC";
            $comments = $pdo->query($sql5);
            $commentRow = $comments->fetchAll(PDO::FETCH_ASSOC);

            

            foreach ($commentRow as $data) {
                $sql6 = "select *from member where MEM_NO = ".$data["memNo"]."";
                $coMember = $pdo->query($sql6);
                $coMemberRow = $coMember->fetch(PDO::FETCH_ASSOC);
                ?>
                <div class="commentWrip">
                    <div class="commentPic">
                        <img src="img/member/<?php echo $coMemberRow["MEM_IMG"]?>" alt="">
                    </div>
                    
                    <div class="commentContent">
                        <div class="tripSpot">
                            <input type="hidden" name="reportTime" value="<?php echo $data['commentNo']?>">
                            <p class="deta"><?php echo $data["commentTime"];?></p>
                            <p class="memName"><?php echo $coMemberRow["MEM_NAME"]?></p>
                            <p class="commentTxt"><?php echo $data["reContent"];?></p>
                            <button class="reportBtn">檢舉</button>
                        </div>
                    </div>
                    
                </div>
            <?php
            }

            ?>
        
            </div>
                
            
            <!-- 留言板 -->
            <h3>留言板</h3>
                <input type="hidden" class="commentSchNo" name="commentSchNo" value="<?php echo $scheduleRow->scheduleNo;?>">
                <div class="commentStyle">
                    <textarea name="comment" id="commentArea" cols="80" rows="10"></textarea>
                </div>
                <div class="comment">
                    <button class="writeMessage">送出留言</button>        
                </div>


                <script>
                        $('.reportBtn').on('click',function(){
                            var loginText = $('#spanLogin').text();
                            if(loginText== '登入'){
                                alert('請先登入會員');
                            }else{
                                alert('已檢舉該筆留言');
                                var commentNo = $(this).prev().prev().prev().prev().val();
                                $.ajax({
                                    url: 'php/reportMessage.php',                
                                    data: {no:commentNo},             
                                    type: 'POST',               
                                    dataType: 'text',           
                                    success: function(data){
                                        console.log(data);
                                        console.log(commentNo);
                                    }
                                });
                            }
                            

                        })
                        
                        
                        $('.writeMessage').on('click',function(){
                            var commentContent = $('#commentArea').val();
                            var commentSchNo = $('.commentSchNo').val();
                            var loginText = $('#spanLogin').text();
                            var referMemName = $('#memName').text();
                            console.log('====',loginText);
                            console.log('%%%%%',referMemName);
                            //判斷是否登入
                            if(loginText == '登入'){
                                    alert('請先登入您的會員帳號');
                                }else{
                                    
                                    $.ajax({
                                        url: 'php/writeMessage.php',                
                                        data: {content:commentContent,
                                               scheduleNo:commentSchNo,
                                               memName:referMemName,
                                            },             
                                        type: 'POST',               
                                        dataType: 'text',           
                                        success: function(data){
                                            $('.commentGroup').html(data);
                                            $('#commentArea').val('');
                                            console.log(commentContent);
                                            var commTime = $('#commTime').val();
                                            $('.topicMessage span').text(commTime);
                                            console.log(commTime);
                                        }
                                    });
                            }
                        });
                    </script>
        </div>
<!-- 留言板結束===================================================================================== -->


        <!-- 右邊欄 -->
        <div class="rightWrip">    
            <!-- 行程專家        -->
            <h3>行程領航專家</h3>
            <div class="export">
                <div class="exportPic">
                    <?php
                    foreach ($expertRow as $data) {
                        echo '<img src="'.$data['expertPic'].'" alt="">';
                        
                    
                    ?>
                </div>
                <div class="exportTxt">

                    
                    <?php
                    echo '<p>',$data["expertName"],'</p>';
                    }
                    ?>
                    <a href="expert.html"><button>查看專家</button></a>
                </div>              
            </div>
            <!-- 相關行程 -->
            <h3 class="shareH3">相關行程分享</h3>
            <div class="tripBox new blue">
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
            </div>

            <div class="tripBox new blue">
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
            </div>

        </div>
    </section>



<?php	
} catch (PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>"; 
}
?>


<!-- footer -->
    <footer>     
        <!-- <img src="img/footerbg-1.png"> -->
        <div class="copyright">
            <p>copyright@OhPlanets  2145</p>
        </div>           
    </footer>           
<!-- jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/style.js"></script>

    <script type="text/javascript" src="js/login.js"></script>
   <!-- <script src="js/wow.min.js"></script> -->
 <!-- <script>
    new WOW().init();
</script> --> 

</body>
</html>