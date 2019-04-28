<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" type="text/css" href="css/expert.css">
    <link rel="stylesheet" type="text/css" href="css/member_favorite.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
 
    <link rel="icon" type="text/css" href="img/logovb.png">
    <script src="js/jquery-3.3.1.min.js"></script>
    <title>OH~PLANETS! | 專家帶你玩</title>
</head>

<body>

   <!--  -->
    <header>
        <?php include 'login.php';?>
    </header>


    <div class="container">
        <div class="all_content ">
            <div class="sidebar memberPage">
                <ul class="tab-grop">
                    <h1 class="where">會員中心</h1>
                    <li class="">
                        <a data-toggle="tab" rel="trip" href="member_mytrip.php">我的行程</a>
                    </li>
                    <li class="default">
                        <a data-toggle="tab" rel="favorite" href="member_favorite.php">專家收藏</a>
                    </li>
                    <!-- <li class="">
                        <a data-toggle="tab" rel="score" href="member_comment.html">專家評論</a>
                    </li> -->
                    <li class="">
                        <a data-toggle="tab" rel="order_mg" href="member_order.php">我的訂單</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="account" href="member_profile.php">會員資料修改</a>
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
                               
                                // ob_start();
                                // if (!isset($_SESSION)) { 
                                //     session_start(); 
                                // }
                                require_once("php/connectCd102g2.php");
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