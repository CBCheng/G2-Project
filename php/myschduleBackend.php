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
    <link rel="stylesheet" href="css/serviceBackend.css">
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
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
            echo '<a href="serviceBackend.php">行程管理</a>';
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
            echo '<a href="serviceBackend.php">行程管理</a>';
}

                ?>
            </div>
        </nav>
        <div class="wrapContent">
            <div class="content">
            <h1>行程管理</h1>
            <form>
                <select id="selecter" name="YourLocation" selected>
                 <option id="" value=""></option>
                　<option id="scheduleNo" value="scheduleNo">行程編號</option>
                　<option id="memNo" value="memNo" >會員編號</option>
                <option id="expertNo" value="expertNo" >專家編號</option>
                <option id="planet" value="planet" >星球名稱</option>
                <option id="share" value="share" >分享狀態</option>
                </select>
                <input id="inputValue" type="text" name="scheduleNo" value="">
                <input id="button" type="button" name="" value="搜尋">
                <input id="button2" type="button" name="" value="所有資料">
            </form>
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>行程編號</td>
                        <td>會員編號</td>
                        <td>專家編號</td>
                        <td>行程名稱</td>
                        <td>星球名稱</td>
                        <td>出發時間</td>
                        <td>結束時間</td>
                        <td>天數</td>
                        <td>行程內容</td>
                        <td>代表圖片</td>
                        <td>分享狀態</td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</body>

<script type="text/javascript">
    var tbody = document.querySelector('tbody');
    var selector = document.getElementById('selecter');
    var $selectIndex = selector.selectedIndex;
        // console.log(selecter);
    selector.addEventListener('change',function(){
        $selectIndex = document.getElementById('selecter').selectedIndex;
        
    });
    
    var input = document.getElementById('inputValue');
    var $inputValue =input.value;

    input.addEventListener('change',function(){
        $inputValue = document.getElementById('inputValue').value;
        

       
    });


    $('#button').click(function(){

         $.ajax({
                    url: 'myschedulebackendData.php',
                    dataType:'text',
                    type:'POST',
                    // async: false,
                    data:{
                            inputValue:$inputValue,
                            selectIndex:$selectIndex,
                            
                            },
                    success:function(data){
                        $('tbody tr+tr').remove();
                        $('tbody').append(data);
                      
                        },

                    error:function(xhr, ajaxOptions, thrownError)
                    { 
                    alert("error");
                    alert(xhr.status); 
                    alert(thrownError);  
                    }
                });
    })

    $('#button2').click(function(){

         $.ajax({
                    url: 'myschedulebackendData.php',
                    dataType:'text',
                    type:'POST',
                    // async: false,
                    data:{
                            inputValue:0,
                            selectIndex:0,
                            
                            },
                    success:function(data){
                        $('tbody tr+tr').remove();
                        $('tbody').append(data);
                      
                        },

                    error:function(xhr, ajaxOptions, thrownError)
                    { 
                    alert("error");
                    alert(xhr.status); 
                    alert(thrownError);  
                    }
                });
    })

    $.ajax({
                    url: 'myschedulebackendData.php',
                    dataType:'text',
                    type:'POST',
                    // async: false,
                    data:{
                            inputValue:$inputValue,
                            selectIndex:$selectIndex,
                            
                            },
                    success:function(data){
                        $('tbody tr+tr').remove();
                        $('tbody').append(data);
                      
                        },

                    error:function(xhr, ajaxOptions, thrownError)
                    { 
                    alert("error");
                    alert(xhr.status); 
                    alert(thrownError);  
                    }
                });
// console.log(inputValue);


</script>
</html>