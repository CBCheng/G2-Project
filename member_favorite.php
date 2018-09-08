<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/member_favorite.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/expert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 
    <link rel="icon" type="text/css" href="img/logovb.png">
    <script src="js/jquery-3.3.1.min.js"></script>
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



    <div class="container">
        <div class="all_content ">
            <div class="sidebar memberPage">
                <ul class="tab-grop">
                    <h1 class="where">會員中心</h1>
                    <li class="">
                        <a data-toggle="tab" rel="trip" href="member_mytrip.html">我的行程</a>
                    </li>
                    <li class="default">
                        <a data-toggle="tab" rel="favorite" href="member_favorite.html">我的收藏</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="score" href="member_comment.html">專家評論</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="order_mg" href="member_order.html">我的訂單</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="account" href="member_profile.html">會員資料修改</a>
                    </li>
                </ul>
            </div>

            <div id="favorite" class="tabPage active" style="">
                <div class="tabPage_border">
                    <div class="favorite_box">
                        <div class="member_title">
                            <h3>專家收藏</h3>
                        </div>
                        <div class="title_line clearfix">
                            <div class="title_circle big">
                                <div class="title_circle small"></div>
                            </div>
                            <div class="title_center_line"></div>
                        </div>
                        <div id="favorite_recipe" class="favorite_page active" style="">
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="mob_hidden">專家圖片</th>
                                        <th>專家姓名</th>
                                        <th>星球</th>                             
                                        <th>查看</th>       
                                        <th>取消收藏</th>
                                    </tr>

                            <?php
                             try {
        //                         ob_start();
        // if (!isset($_SESSION)) { 
        //     session_start(); 
        // }
                                require_once("php/connectExpert.php");
                                $memNo = $_SESSION['MEM_NO'];
                                //$memNo = '1';

                                $sql = "select * from expertcollect join expert using(expertNo) where expertcollect.memNo = '$memNo'";
                                $members = $pdo->query($sql);
                                $memRows = $members->fetchAll(PDO::FETCH_ASSOC);
                                if ($members->rowCount() == 0) {
                                    echo "<tr>
                                        <td colspan='5'>您尚未收藏專家</td>
                                    </tr>";
                                }
                                foreach ($memRows as $memRow) {

                            ?>
                                <tr>
                                    <td class="mob_hidden">
                                        <img id="member_recipe_img" src="<?php echo $memRow["expertPic"];?>">
                                    </td>
                                    <td><?php echo $memRow["expertName"];?></td>
                                    <td><?php echo $memRow["planet"];?></td>
                                    <td>
                                        <div data-name="<?php echo $memRow['expertName'];?>" class="look_detail">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-no="<?php echo $memRow['expertNo'];?>" class="member_delete re_del" id="delete3">
                                            <i class="fas fa-trash-alt" id="delete3"></i>
                                        </div>
                                    </td>
                                </tr>

                                <div id="exp_lightBox_father" style="display: none;"></div>

                            <?php
                                }
                             } catch (PDOException $e) {
                                echo "錯誤原因 : ", $e->getMessage(), "<br>";
                                echo "錯誤行號 : ", $e->getLine(), "<br>";
                             }
                             ?>
                                    <!--專家收藏結束-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(function () {
                $(".look_detail").click(function () {
                    $("#exp_lightBox_father").show(800);
                })
            })
    </script>


    <!-- footer -->
    <footer>
        <!-- <img src="img/footerbg-1.png"> -->
        <div class="copyright">
            <p>copyright@OhPlanets 2145</p>
        </div>
    </footer>
    <!-- jquery -->
    
    <!-- <script src="js/member_like.js"></script> -->
    <script src="js/style.js"></script>
    <script src="js/login.js"></script>
    <script src="js/member.js"></script>
    <script src="js/member_favorite.js"></script>
    
</body>

</html>