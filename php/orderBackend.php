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
    <link rel="stylesheet" href="css/orderBackend.css">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
    <div class="userFull">
        <nav>
            <div class="navUser">
                <div class="logo">
                    <img src="../img/phpImg/logo-backend.png" alt="LOGO">
                </div>
                <div class="userName">
                    <?php
                    if($_SESSION["mgrAccess"]=="一般" || $_SESSION["mgrAccess"]=="最高"){
                        echo '<h3>'.$_SESSION["mgrAccess"].'管理員<br>'.$_SESSION["mgrName"].'</h3>';
                    }else{
                        echo '<h3>'.$_SESSION["mgrAccess"].$_SESSION["mgrName"].'</h3>';
                    }
                    ?>
                    
                    <p>您好!</p>
                    <div class="loginOut">
                        <label for="logOutPic"></label>
                        <img src="../img/phpImg/logout.png" alt="登出" >
                        <a href="indexBackend.php">登出</a>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="navBarContent">
                    <!-- 登入判斷權限 -->
                <?php
if($_SESSION["mgrAccess"]=="一般"){
            echo '<a href="menberBackend.php">會員管理</a>';
            echo '<a href="landScapeBackend.php">景點管理</a>';
            echo '<a href="mallBackend.php">商城管理</a>';
            echo '<a href="orderBackend.php">訂單管理</a>';
            echo '<a href="expertBackend.php">專家管理</a>';
            echo '<a href="reportBackend.php">檢舉管理</a>';
            echo '<a href="serviceBackend.php">客服管理</a>';
}else if($_SESSION["mgrAccess"]=="專家"){
            echo '<a href="expertBackend.php">專家管理</a>';
}else{
            echo '<a href="userBackend.php" id="userBackend">使用者管理</a>';
            echo '<a href="menberBackend.php">會員管理</a>';
            echo '<a href="landScapeBackend.php">景點管理</a>';
            echo '<a href="mallBackend.php">商城管理</a>';
            echo '<a href="orderBackend.php">訂單管理</a>';
            echo '<a href="expertBackend.php">專家管理</a>';
            echo '<a href="reportBackend.php">檢舉管理</a>';
            echo '<a href="serviceBackend.php">客服管理</a>';
}

                ?>
            </div>
        </nav>
<!-- ==================================內容更改區================================================= -->
        <div class="wrapContent">
            
            <div class="content">
            <h1>訂單管理</h1>
            <!-- <div class="orderSearch">
                搜尋會員編號
                <i class="fa fa-search" id="i-advanced-search-i"></i>
                <input type="text" id="i-advanced-search" >
                搜尋訂單編號
                <i class="fa fa-search" id="i-advanced-search-i"></i>
                <input type="text" id="i-advanced-search" >
            </div> -->
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>訂單編號</td>
                        <td>會員編號</td>
                        <td>訂購日期</td>
                        <td>訂購人姓名</td>
                        <td>訂購人地址</td>
                        <td>檢視訂單</td>
                        <td>訂單金額</td>
                        <td>訂單狀態</td>
                        <td>修改訂單</td>
                    </tr>

        <?php
        try {
           require_once("connectCd102g2.php");

           $sql = "select * from ordermater";
           $ordermater = $pdo->query( $sql);  //ordermater 是 PDOStatement物件
           while($orderRow = $ordermater->fetch(PDO::FETCH_ASSOC)){
        ?>
                    <tr>
                        <form action="orderUpdateBackend.php">
                            <input type="hidden" name="orderNo" value="<?php echo $orderRow["orderNo"];?>">
                            <input type="hidden" name="memNo" value="<?php echo $orderRow["memNo"];?>">
                            <input type="hidden" name="orderTime" value="<?php echo $orderRow["orderTime"];?>">
                            <input type="hidden" name="totlePrice" value="<?php echo $orderRow["totlePrice"];?>">
                            <input type="hidden" name="orderName" value="<?php echo $orderRow["orderName"];?>">
                            <input type="hidden" name="address" value="<?php echo $orderRow["address"];?>">
                        <td class="orderNo"><?php echo $orderRow["orderNo"];?></td>
                        <td><?php echo $orderRow["memNo"];?></td>
                        <td><?php echo $orderRow["orderTime"];?></td>
                        <td><?php echo $orderRow["orderName"];?></td>
                        <td><?php echo $orderRow["address"];?></td>
                         <td class="orderlist">
                            <!-- <a class="toList" href="list.php?orderNo= echo $orderRow["orderNo"];?>"> echo '訂單明細';?></a> -->
                            <span class="lightBoxBtn">訂單明細</span>
                        </td>
                        <td><?php echo $orderRow["totlePrice"];?></td>

                           <?php
                            switch ($orderRow["orderStatus"]) {
                                case "0":
                                    echo "<td><select name='orderStatus'>";
                                    echo "<option value='0' selected>未付款</option>";
                                    echo "<option value='1'>已付款</option>";
                                    echo "<option value='2'>準備出貨</option>";
                                    echo "<option value='3'>配送中</option>";
                                    echo "<option value='4'>已到貨</option>";
                                    echo "</select></td>";
                                    break;

                                case "1":
                                    echo "<td><select name='orderStatus'>";
                                    echo "<option value='0'>未付款</option>";
                                    echo "<option value='1' selected>已付款</option>";
                                    echo "<option value='2'>準備出貨</option>";
                                    echo "<option value='3'>配送中</option>";
                                    echo "<option value='4'>已到貨</option>";
                                    echo "</select></td>";
                                    break;
                                case "2":
                                    echo "<td><select name='orderStatus'>";
                                    echo "<option value='0'>未付款</option>";
                                    echo "<option value='1'>已付款</option>";
                                    echo "<option value='2' selected>準備出貨</option>";
                                    echo "<option value='3'>配送中</option>";
                                    echo "<option value='4'>已到貨</option>";
                                    echo "</select></td>";
                                    break;
                                case "3":
                                    echo "<td><select name='orderStatus'>";
                                    echo "<option value='0'>未付款</option>";
                                    echo "<option value='1'>已付款</option>";
                                    echo "<option value='2'>準備出貨</option>";
                                    echo "<option value='3' selected>配送中</option>";
                                    echo "<option value='4'>已到貨</option>";
                                    echo "</select></td>";
                                    break;
                                case "4":
                                    echo "<td><select name='orderStatus'>";
                                    echo "<option value='0'>未付款</option>";
                                    echo "<option value='1'>已付款</option>";
                                    echo "<option value='2'>準備出貨</option>";
                                    echo "<option value='3'>配送中</option>";
                                    echo "<option value='4' selected>已到貨</option>";
                                    echo "</select></td>";
                                    break; 
                            }
                            ?>
                        <td>
                            <input type="submit" value="修改">
                        </td>
                        </form>     
                    </tr> 
                </div>
            </div>      
            <?php   
            }    
            } catch (PDOException $e) {
                echo "錯誤原因 : " , $e->getMessage(), "<br>";
                echo "錯誤行號 : " , $e->getLine(), "<br>"; 
            }
            ?>


            <script type="text/javascript">
            
            </script>

            <!-- ==========跳窗 -->   
            </table>
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

            <!-- ==========跳窗 -->  

    <script>
            function doFirst(){
                var lightBoxBtn = document.querySelectorAll('.lightBoxBtn');
                var lightBox = document.getElementById('lightBox');
                var cancelBtn = document.getElementById('cancelBtn');
                for (var i = 0 ; i < lightBoxBtn.length; i ++ ) {
                    lightBoxBtn[i].addEventListener('click',function(){
                    lightBox.style.display = 'block';

var $orderNo = this.parentNode.parentNode.querySelector('.orderNo').innerHTML;

                $.ajax({
                    url:'orderlist.php',  
                    dataType: 'text', 
                    data:{orderNo : $orderNo},

                    success: function(data){
                        $('.orderDetail table tbody tr+tr').remove();
                         $('.orderDetail table tbody').append(data);
                    }
                });
                });
                };
                               
                cancelBtn.addEventListener('click',function(){
                    lightBox.style.display = 'none';
                });
            }
            window.onload = doFirst;
    </script>

</body>
</html>