<?php
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

    $viId = $_REQUEST['viewId'];

    $sql = "select * from view where viewNo = :viewNo ";
    $view = $pdo->prepare($sql);
    $view->bindValue(':viewNo',$viId);
    $view->execute();
    $views = $view->fetch(PDO::FETCH_ASSOC);


    $viType1 = '奧倫星';
    $viType2 = '瓦特星';
    $viType3 = '達沙星';
    if($views['planet'] == '奧倫星'){
        $viType1 = '奧倫星';
        $viType2 = '瓦特星';
        $viType3 = '達沙星';
    }elseif($views['planet'] == '瓦特星'){
        $viType1 = '瓦特星';
        $viType2 = '達沙星';
        $viType3 = '奧倫星';
    }else{
        $viType1 = '達沙星';
        $viType2 = '奧倫星';
        $viType3 = '瓦特星';
    }

    $check1 = '';
    $check2 = '';
    $check3 = '';
    $check4 = '';
    $check5 = '';
    if($views["viewFood"] == 1){
        $check1 = 'checked';
    }
    if($views["viewHuman"] == 1){
        $check2 = 'checked';
    }
    if($views["viewSmart"] == 1){
        $check3 = 'checked';
    }
    if($views["viewAdven"] == 1){
        $check4 = 'checked';
    }
    if($views["viewTech"] == 1){
        $check5 = 'checked';
    }

    ?>

<form class="lightBox" id="lightBox" action="changeViewData.php" method="post" enctype="multipart/form-data">
    <h2>修改景點資料</h2>
        <table border="1">
            <tr>
                <td>景點編號</td>
                <td><?php echo $views['viewNo']?></td>
                <input type="hidden" name="viewNo" value="<?php echo $views['viewNo']?>">
            </tr>
            <tr>
                <td>景點名稱</td>
                <td><input type="text" name="viewName" value="<?php echo $views['viewName']?>"></td>
            </tr>
            <tr>
                <td>星球名稱</td>
                <td>
                    <select name="planet">
                        <option value="<?php echo $viType1?>"><?php echo $viType1?></option>
                        <option value="<?php echo $viType2?>"><?php echo $viType2?></option> 
                        <option value="<?php echo $viType3?>"><?php echo $viType3?></option>            
                    </select>
                </td>
            </tr>
            <tr>
                <td>屬性類別</td>
                <td>
                    <input type="hidden" name="type1" value="0">
                    <input type="checkbox" name="type1" value="1" <?php echo $check1?>>美食<br>
                    <input type="hidden" name="type2" value="0">
                    <input type="checkbox" name="type2" value="1" <?php echo $check2?>>人文<br>
                    <input type="hidden" name="type3" value="0">
                    <input type="checkbox" name="type3" value="1" <?php echo $check3?>>知性<br>
                    <input type="hidden" name="type4" value="0">
                    <input type="checkbox" name="type4" value="1" <?php echo $check4?>>冒險<br>
                    <input type="hidden" name="type5" value="0">
                    <input type="checkbox" name="type5" value="1" <?php echo $check5?>>科技
                </td>
            </tr>
            <tr>
                <td>景點圖片</td>
                <td><?php echo $views['viewImg1']?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo $views['viewImg2']?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo $views['viewImg3']?></td>
            </tr>
            <tr>
                <td>景點狀態</td>
                <td>
                    <select name="upOrDown">
                        <option value="1">顯示</option> 
                        <option value="0">隱藏</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>景點介紹</td>
                <td>
                    <textarea name="viContent" id="viContent" cols="30" rows="10"><?php echo $views['viewContent']?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="button" id="cancelBtn" onclick="this.form.style.display='none';">取消</button>
                    <button>確認修改</button>
                </td>
            </tr>
        </table>
</form>

<?php
	} catch (PODException $e) {
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";	
	}
?>