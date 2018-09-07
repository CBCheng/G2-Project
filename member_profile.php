<?php
ob_start();
session_start();

require_once("php/connect_g2.php");

//$isModified = $_REQUEST['isModified'];
//$memberPsw = $_REQUEST['new_psw'];

/* 
TODOa: remove
*/
// echo $_REQUEST['isModified'];
// echo $_REQUEST['new_psw'];


function getMemberInfo($pdo, $mId) {
    try {
        $sql = "SELECT * FROM member WHERE MEM_NO = :MEM_NO";
        $query = $pdo->prepare($sql);
        $query->bindValue(":MEM_NO", $mId);
        $query->execute();
        if ($query->rowCount() == 0) {
            echo "Member does not exist";
        } else {
            $memberRow = $query->fetch(PDO::FETCH_ASSOC);
            //echo json_encode($memberRow);
            return $memberRow;
        }
    } catch(Exception $ex) {
        echo 'error：' . $ex->getMessage();
    }
} 

$memberInfo = getMemberInfo($pdo, @$_SESSION['MEM_NO']);

function updateMember ($pdo, $memPWD, $member_add, $member_phone, $member_bd, $member_id) {
	$sql = "UPDATE member SET MEM_PSW = :MEM_PSW, MEM_ADDRESS = :MEM_ADDRESS, MEM_PHONE = :MEM_PHONE, MEM_BD = :MEM_BD WHERE MEM_NO = :MEM_NO";	
 	
 	$member = $pdo->prepare($sql); 
 	$member->bindParam(":MEM_PSW", $_REQUEST['new_psw'], PDO::PARAM_STR);
 	$member->bindParam(":MEM_ADDRESS", $_REQUEST['mem_Add'], PDO::PARAM_STR); 
 	$member->bindParam(":MEM_PHONE", $_REQUEST['mem_number'], PDO::PARAM_STR); 
 	$member->bindParam(":MEM_BD", $_REQUEST['mem_Bir'], PDO::PARAM_STR);
 	$member->bindParam(":MEM_NO", $member_id, PDO::PARAM_INT);

 	$member->execute();

 	echo $member->rowCount();
}

//control whether modify member
if (@$_REQUEST['isModified'] == true) {
	echo 'modify memberInfo';
	updateMember($pdo, $_REQUEST['new_psw'], $_REQUEST['mem_Add'], $_REQUEST['mem_number'], $_REQUEST['mem_Bir'], $_SESSION['MEM_NO']);
	
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/member.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- plugin -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>
    <title>會員資訊</title>
	

</head>
<body>
    <header>
        <?php include 'login.php';?>
    </header>
<div class="nav"></div>

<div class="container">
        <div class="all_content ">
            <div class="sidebar memberPage">
                <ul class="tab-grop">
                    <h1 class="where">會員中心</h1>
                    <li class="">

                        <a data-toggle="tab" rel="trip" href="member_mytrip.php">我的行程</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="favorite" href="member_favorite.php">我的收藏</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="score" href="member_comment.php">專家評論</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" rel="order_mg" href="member_order.php">我的訂單</a>
                    </li>
                    <li class="default">
                        <a data-toggle="tab" rel="account" href="#">會員資料修改</a>
                    </li>
                </ul>
            </div>

            		
<?php
$member_pic = 'member_pic/'.@$_SESSION["MEM_IMG"];
?>
            <div id="account" class="tabPage active" style="">
                <div class="tabPage_border clearfix">
                    <div class="account_box">
                        <div class="member_title">
                            <h3>會員資訊</h3>
                        </div>
                        <div class="title_line clearfix">
                            <div class="title_circle big">
                                <div class="title_circle small"></div>
                            </div>
                            <div class="title_center_line"></div>
                        </div>
                        <div class="form_box">
                            <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                            <div class="col-sm-6 col-xs-12 ">
                                <form method="post" action="php/new_upfile.php" enctype="multipart/form-data" id="file" class="member_img">
                                    <input type="hidden" name="memNo" value="140">
                                    <figure>
                                        <img id="show_pic" src="img/member/<?php echo $memberInfo["MEM_IMG"]?>">

                                    </figure>
                                    <input id="upfile" name="upfile" type="file" name="upfile">
                                    <div class="img_btn_div">
                                        <button type="button" class="btn btn-o-nb" id="member_pic" style="display: block;">上傳</button>
                                    </div>
                                </form>
                                <div id="show_name"><?php echo @$_SESSION['MEM_ID']; ?></div>
                            </div>
                            <div class="col-sm-6 col-xs-12 member_form ">
                            	<form method="post" action="member_profile.php">
                            		<input type="hidden" name="isModified" value=true>
                                	<table class="member_mod" style="display: none;">
                                    <tbody>
                                        <tr>
                                            <th class="mob_hidden">姓名 :</th>
                                            <td>

                                                <?php echo @$memberInfo["MEM_NAME"]?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="mob_hidden">e-mail :</th>
                                            <td><?php echo $memberInfo["MEM_EMAIL"]?></td>
                                        </tr>
                                        <tr>
                                            <th class="mob_hidden">原密碼 :</th>
                                            <td>
                                                <input id="old_psw" name="old_psw" class="memUpdate_OriPsw" type="password" maxlength="12" placeholder="請輸入原密碼">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="mob_hidden">新密碼 :</th>
                                            <td>
                                                <input id="new_ps1" name="new_psw" type="password" maxlength="12" placeholder="請輸入新密碼">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="mob_hidden">二次確認密碼 :</th>
                                            <td>
                                                <input id="new_ps2" name="chech_psw" type="password" placeholder="請再次輸入密碼">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="mob_hidden">地址 :</th>
                                            <td>
                                                <input type="text" id="memAdd" name="mem_Add" value="" placeholder="如需修改 ，請輸入地址">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="mob_hidden">電話 :</th>
                                            <td>
                                                <input type="text" id="phone_number" name="mem_number" value="" placeholder="如需修改，請輸入電話">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="mob_hidden">生日 :</th>
                                            <td>
                                                <input type="date" id="memBir" name="mem_Bir" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <a href="member_profile.php">
                                                    <button type="button" id="cxl_btn" class="btn btn-w-nb">取消</button>
                                                </a>
                                                <button name="error" class="btn btn-o-nb" id="mem_update_btn" type="submit">送出</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                	</table>
                                </form>
                                <table class="member_info" style="display: block;">
                                    <tbody>
                                        <tr>
                                            <th>姓名 :</th>
                                            <td><?php echo $memberInfo["MEM_NAME"]?></td>
                                        </tr>
                                        <tr>
                                            <th>e-mail :</th>
                                            <td><?php echo $memberInfo["MEM_EMAIL"]?></td>
                                        </tr>
                                        <tr>
                                            <th>地址 :</th>
                                            <td>
                                                <?php echo $memberInfo["MEM_ADDRESS"]?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>電話 :</th>
                                            <td>
                                                <?php echo $memberInfo["MEM_PHONE"]?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>生日 :</th>
                                            <td>
                                                <?php echo $memberInfo["MEM_BD"]?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <button id="member_mod_btn" class="btn btn-o-nb">修改</button>
                                            </td>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



	<script src="js/upfile.js"></script>
	<script src="js/update_phone_psw.js"></script>
	<script src="js/member.js"></script>
    <script src="js/login.js"></script>

</body>
</html>