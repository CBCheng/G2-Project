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
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- plugin -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>
    <title>我的訂單</title>
    <style>

    </style>
</head>

<body>
    <!-- nav -->
    <div class="navColor">
        <img class="navPic" src="img/bg.png" alt=""> 
    </div>
    <nav>          
        <!-- desk -->
        <ul class="menu mRight">
            <li><a href="planning.html">開始冒險</a></li>
            <li><a href="refer.html">別人怎麼玩</a></li>
        </ul>
            <a href="index.html" class="logo">
                <img src="img/logo-1.png">
            </a>
        <ul class="menu mLeft">
            <li><a href="expert.html">專家帶你玩</a></li>
            <li><a href="shop.php">星際商城</a></li>
        </ul>
        <ul class="member">
            <li class="shoppingCar"><a href="cartShow.php">
                <img class="shoppingCarPic" src="img/shopping car.png" alt="">
                <!-- <span>(</span> -->
                <span id="pNu"></span>
                <!-- <span>)</span> -->

                <!-- <img class="shoppingCarHover" src="img/shoppingCarHover.png" alt=""> -->
            </a></li>
            <li class="memberSign">

                <?php
                //檢查是否已登入
                    if( isset($_SESSION["MEM_NAME"]) === true ){ //已登入
                    echo '<a id="mem_a" href="member_profile.php"><span id="memName">', $_SESSION["MEM_NAME"], '</span></a> '; 
                    echo '<span id="spanLogin">登出</span>';
                    echo '<input type="hidden" name="memNo" value="',$_SESSION["MEM_NO"],'">';
                    }else{
                        echo '<a id="mem_a" href="#"><span id="memName">&nbsp;</span></a> ';
                        echo '<span id="spanLogin">登入</span>';
                        echo '<input type="hidden" name="memNo" value="',$_SESSION["MEM_NO"],'">';
                    }
                ?> 
            </li>
        </ul>
        <!-- mobile -->
        <div class="hambger">
            <div class="line"></div>
        </div>
        <ul class="menuMobile">
            <li><a href="planning.html">開始冒險</a></li>
            <li><a href="expert.html">專家帶你玩</a></li>
            <li><a href="refer.html">別人怎麼玩</a></li>
            <li><a href="shop.php">星際商城</a></li>
            <li><a href="member.html">會員專區</a></li>
            <li><a href="cartShow.php">購物車</a></li>
        </ul>
    </nav>
    <!-- 會員註冊lightbox -->
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
    
    <!-- content -->
    <div class="container">
        <div class="all_content ">
            <div class="sidebar memberPage">
                <ul class="tab-grop">
                    <h1 class="where">會員中心</h1>
                    <li class="">
                        <a data-toggle="tab" rel="trip" href="member_mytrip.php">我的行程</a>
                    </li> 
                     <li class="">
                        <a data-toggle="tab" rel="favorite" href="member_favorite.php">專家收藏</a>
                    </li> 
                    <li class="default">
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
                            <h3>我的訂單</h3>
                        </div>
                        <div class="title_line clearfix">
                            <div class="title_circle big">
                                <div class="title_circle small"></div>
                            </div>
                            <div class="title_center_line"></div>
                        </div>
                        <table>
                            <tbody>
                                <tr>
                                    <th>訂單編號</th>
                                    <th>訂購日期</th>
                                    <th>訂單明細</th>
                                    <th class="mob_hidden">應付金額</th>
                                    <th class="mob_hidden">訂單狀態</th>
                                </tr>
        <?php
            try {
                require_once("connectBooks.php");
                $memNo = $_SESSION["MEM_NO"];
                $sql = "select * from ordermater where memNo='$memNo'";
                $ordermater = $pdo->query( $sql);  //ordermater 是 PDOStatement物件   
                while($orderRow = $ordermater->fetch(PDO::FETCH_ASSOC)){
        ?>
                                <tr>
                                    <td align="center"><?php echo $orderRow["orderNo"];?></td>
                                    <td align="center"><?php echo $orderRow["orderTime"];?></td>
                                    <td align="center" class="check">查看明細</td>
                                    <td align="center"><?php echo $orderRow["totlePrice"];?></td>
                                    <td align="center"><?php
                                                       if($orderRow["orderStatus"]==0){echo '未付款';}
                                                       if($orderRow["orderStatus"]==1){echo '已付款';}
                                                       if($orderRow["orderStatus"]==2){echo '準備出貨';}
                                                       if($orderRow["orderStatus"]==3){echo '配送中';}
                                                       if($orderRow["orderStatus"]==4){echo '已到貨';}    
                                                       ?> 
                                    </td>
                                    <td colspan="3"></td>
                                </tr>
        <?php       
    }
    echo '</table>';
} catch (PDOException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>"; 
}
?>                        




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 跳窗 -->
    <div class="lightBox" id="lightBox">
                    <h2>訂單明細</h2>
                        <table>
                            <tr>
                                <td>訂單編號</td>
                                <td id="number"></td>
                                </tr>
                        </table>
                    <div class="orderDetail">
                        <span>訂單明細</span>
                            <table>
                                <tr> 
                                    <td>商品編號</td>
                                    <td>商品名稱</td>
                                    <td>單價</td>
                                    <td>數量</td>
                                </tr>
                            </table>
                    </div>
                    <div class="receive"></div>
                        <span class="cancelBtn" id="cancelBtn">關閉</span>
                    </div>
        
    <div class="clearfix"></div>


    <!-- footer -->
    <footer>
        <!-- <img src="img/footerbg-1.png"> -->
        <div class="copyright">
            <p>copyright@OhPlanets 2145</p>
        </div>
    </footer>

    <script>
        document.getElementById("pNu").innerHTML = <?php echo $_SESSION["pnu"] ?>;
    </script> 
    <!-- jquery -->
    <script src="js/login.js"></script>
    <!-- <script src="js/style.js"></script> -->
    <script>
            function doFirst(){
                var lightBoxBtn = document.querySelectorAll('.check');
                var lightBox = document.getElementById('lightBox');
                var cancelBtn = document.getElementById('cancelBtn');
                for (var i = 0 ; i < lightBoxBtn.length; i ++ ) {
                    lightBoxBtn[i].addEventListener('click',function(){
                    lightBox.style.display = 'block';

            // var $orderNo = this.parentNode.parentNode.querySelector('.orderNo').innerHTML;

                // $.ajax({
                //     url:'orderlist.php',  
                //     dataType: 'text', 
                //     data:{orderNo : $orderNo},

                //     success: function(data){
                //         $('.orderDetail table tbody tr+tr').remove();
                //          $('.orderDetail table tbody').append(data);
                //     }
                // });
                // });
                // };
                               
                cancelBtn.addEventListener('click',function(){
                    lightBox.style.display = 'none';
                });
            }
            window.onload = doFirst;
    </script>


</body>

</html>