<?php
ob_start();
session_start();
require_once("connect_g2.php");

//$isModified = $_REQUEST['isModified'];
//$memberPsw = $_REQUEST['new_psw'];

/* 
TODOa: remove
*/
// echo $_REQUEST['isModified'];
// echo $_REQUEST['new_psw'];


function getMemberInfo($pdo) {
    try {
        $sql = "SELECT * FROM member";
        $query = $pdo->prepare($sql);
        
        $query->execute();
        if ($query->rowCount() == 0) {
            echo "Member does not exist";
        } else {
            $memberRow = $query->fetchAll(PDO::FETCH_ASSOC);
            //echo json_encode($memberRow);
            return $memberRow;
        }
    } catch(Exception $ex) {
        echo 'error：' . $ex->getMessage();
    }
} 

$memberInfo = getMemberInfo($pdo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/memberBackend.css">
    <title>Document</title>
</head>
<body>
<!-- nav -->
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
            <h1>會員管理</h1>
                <table class="userTable">
                    <tr class="tableTitle">
                        <td>會員編號</td>
                        <td>帳號</td>
                        <td>密碼</td>
                        <td>姓名</td>
                        <td>電話</td>
                        <td>email</td>
                        <td>生日</td>
                        <td>地址</td>
                        <td>狀態</td>
                        <td>會員圖片</td>
                        <!-- <td>修改</td> -->
                    </tr>
                <!-- <form method="post" action="menberBackend.php" enctype="multipart/form-data" id="file" name="file" class="member_img"> -->
                <?php
                            $i=count($memberInfo);
                            for($j=0 ; $j<$i ; $j++){
                                echo '<tr>';
                                echo '<td>'.$memberInfo[$j]['MEM_NO'].'</td>';
                                echo '<td>'.$memberInfo[$j]['MEM_ID'].'</td>';
                                echo '<td>'.$memberInfo[$j]['MEM_PSW'].'</td>';
                                echo '<td>'.$memberInfo[$j]['MEM_NAME'].'</td>';
                                echo '<td>'.$memberInfo[$j]['MEM_PHONE'].'</td>';
                                echo '<td>'.$memberInfo[$j]['MEM_EMAIL'].'</td>';
                                echo '<td>'.$memberInfo[$j]['MEM_BD'].'</td>';
                                echo '<td>'.$memberInfo[$j]['MEM_ADDRESS'].'</td>';
                                if($memberInfo[$j]['MEM_STATUS']==1) {
                                    echo '<td>正常</td>';
                                }
                                else {
                                    echo '<td>停權</td>';
                                }
                                // echo '<td>'.$memberInfo[$j]['MEM_STATUS'].'<input type="radio" name="memStatus" value="1">正常'.'<input type="radio" name="memStatus" value="0">停權'.'</td>';
                               
                                // <td><img src="../img/member/comment05.jpg"></td>
                                //會員圖片的串接,共同的字串直接接起來,會變的要串接
                                // arr = [1, 2, 3]
                                // arr[2] -> 3
                                // arr[0] -> 1
                                /**
                                 * memberInfo
                                 * [
                                 *    {
                                 *      'MEM_IMG': 'comment.jpg'
                                 *    },
                                 *    {},
                                 *    {}  
                                 * ]
                                 * memberInfo[0]['MEM_IMG']
                                 */
                                echo '<td><img id="show_pic" name="show_pic" src="../img/member/'.$memberInfo[$j]["MEM_IMG"].'"></td>';
                                // echo '<td>'.'<button id="lightBoxBtn">修改</button>'.'</td>';
                                echo '</tr>';
                            }
                            
                    /*<tr>
                    
                        <td></td>
                        <td>
                            <input type="radio" name="memStatus" value="1">
                            <input type="radio" name="memStatus" value="0">
                        </td>
                        <td><figure>
                                <img id="show_pic" name="show_pic" src="../img/member/<?php echo $memberInfo["MEM_IMG"]?>">
                            </figure>
                        </td>
                        <td>
                            <button id="lightBoxBtn">修改</button>
                        </td>
                    </tr>
                    */
                    ?>    
                <!-- </form>  -->
                </table>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</body>
</html>