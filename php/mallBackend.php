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
    <link rel="stylesheet" type="text/css" href="css/mallBackend.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
            <h1>商城管理</h1>
            <div class="wrapChoice">
                <select name="" id="" >
                    <option value="">商品類別</option>
                <option value="">類別1</option>
                <option value="">類別2</option>
                <option value="">類別3</option>
            </select>
            <button id="addPro">新增商品</button>
            </div>
            
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>商品編號</td>
                        <td>商品圖片</td>
                        <td>商品名稱</td>
                        <td>商品資訊</td>
                        <td>單價</td>
                        <td>商品類別</td>
                        
                        <td>狀態</td>
                        <td>修改</td>
                        <td>刪除</td>
                    </tr>

<?php
try{
    require_once("connect_g2.php");

    $sql = "select * from product";
    $pros = $pdo->query($sql);
    $proRows = $pros->fetchAll(PDO::FETCH_ASSOC);

    foreach ($proRows as $proRow) {
    if($proRow["sale"] == '1'){
        $proUpDown = '上架';
    }else{
        $proUpDown = '下架';
    }
?>
                    <tr class="proList">
                        <td><?php echo $proRow["productNo"]?></td>
                        <td><img src="../img/shop/<?php echo $proRow["productPic1"]?>" alt="商品圖片"></td>
                        <td><?php echo $proRow["productName"]?></td>
                        <td><?php echo $proRow["productDital"]?></td>
                        <td><?php echo $proRow["productPrice"]?></td>
                        <td><?php echo $proRow["productClass"]?></td>
                        <td><?php echo $proUpDown?></td>
                        <td>
                            <button class="lightBoxBtn" value="<?php echo $proRow["productNo"]?>">修改</button>
                        </td>
                        <td>
                            <button>刪除</button>
                        </td>
                    </tr>
<?php
    }              
} catch (PODException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>


                </table>
            


                <form class="lightBox addBox" action="changeProData.php" method="post" enctype="multipart/form-data">
                    <h2>新增商品資料</h2>
                        <table border="1">
                            <tr>
                                <td>商品編號</td>
                                <td>自動新增</td>
                                <input type="hidden" name="productNo" value="0">
                            </tr>
                            <tr>
                                <td>商品名稱</td>
                                <td><input type="text" name="productName" placeholder="請輸入商品名稱"></td>
                            </tr>
                            <tr>
                                <td>商品類別</td>
                                <td>
                                    <select name="productClass">
                                        <option value="0">類別1</option>
                                        <option value="1">類別2</option> 
                                        <option value="2">類別3</option>            
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>單價</td>
                                <td>
                                    <input type="text" name="productPrice" placeholder="請輸入商品單價">
                                </td>
                            </tr>
                            <tr>
                                <td>商品圖片</td>
                                <td>圖片1</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>圖片2</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>圖片3</td>
                            </tr>
                            
                            <tr>
                                <td>商品資訊</td>
                                <td>
                                    <textarea name="proText" id="proText" cols="30" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>狀態</td>
                                <td>
                                    <select name="upDown" id="upDown">
                                        <option value="1">上架</option>
                                        <option value="0">下架</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button id="cancelBtn">取消</button>
                                    <button>確認新增</button>
                                </td>
                            </tr>
                            
                        </table>
                </form>

            </div>
            
        </div>
    </div>
    <div class="clearfix"></div>


    <!-- <script>
            function doFirst(){
                var lightBoxBtn = document.getElementById('lightBoxBtn');
                var lightBox = document.getElementById('lightBox');
                var cancelBtn = document.getElementById('cancelBtn');
                lightBoxBtn.addEventListener('click',function(){
                    lightBox.style.display = 'block';
                })
                cancelBtn.addEventListener('click',function(){
                    lightBox.style.display = 'none';
                })
            }
            window.onload = doFirst;
        </script> -->
    <script>
    $(function(){
            $('.lightBoxBtn').on('click',function(){
                var proId = $(this).val();
                $.ajax({
                    url:'mallChangeData.php',
                    dataType:'text',
                    type: 'POST',
                    data:{productId:proId},
                    success: function (data) {
                        $('.addBox').css('display','none');
                        $('#lightBox').remove();
                        $('.userTable').after(data);
                        $('#lightBox').css('display','block');
                        //alert(data);
                    },
                    error: function () {
                        alert('error');
                    }
                });
            });

            $('#addPro').on('click',function(){
                $('#lightBox').css('display','none');
                $('.addBox').css('display','block');
            });




        });
    </script>
</body>
</html>