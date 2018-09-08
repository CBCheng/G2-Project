<?php
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

    $proId = $_REQUEST['productId'];

    $sql = "select * from product where productNo = :productNo";
    $pro = $pdo->prepare($sql);
    $pro->bindValue(':productNo',$proId);
    $pro->execute();
    $pros = $pro->fetch(PDO::FETCH_ASSOC);

    $proType1 = '1';
    $proType2 = '2';
    $proType3 = '3';
    if($pros['productClass'] == '1'){
        $proType1 = '1';
        $proType2 = '2';
        $proType3 = '3';
    }elseif($pros['productClass'] == '2'){
        $proType1 = '2';
        $proType2 = '1';
        $proType3 = '3';
    }else{
        $proType1 = '3';
        $proType2 = '1';
        $proType3 = '2';
    }

?>

<form class="lightBox" id="lightBox" action="changeProData.php" method="post" enctype="multipart/form-data">
    <h2>修改商品資料</h2>
        <table border="1">
            <tr>
                <td>商品編號</td>
                <td><?php echo $pros['productNo']?></td>
                <input type="hidden" name="productNo" value="<?php echo $pros['productNo']?>">
            </tr>
            <tr>
                <td>商品名稱</td>
                <td><input type="text" name="productName" value="<?php echo $pros['productName']?>"></td>
            </tr>
            <tr>
                <td>商品類別</td>
                <td>
                    <select name="productClass">
                        <option value="<?php echo $proType1?>"><?php echo $proType1?></option>
                        <option value="<?php echo $proType2?>"><?php echo $proType2?></option> 
                        <option value="<?php echo $proType3?>"><?php echo $proType3?></option>            
                    </select>
                </td>
            </tr>
            <tr>
                <td>單價</td>
                <td>
                    <input type="text" name="productPrice" value="<?php echo $pros['productPrice']?>">
                </td>
            </tr>
            <tr>
                <td>商品圖片</td>
                <td><?php echo $pros['productPic1']?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo $pros['productPic2']?></td>
            </tr>
            <tr>
                <td></td>
                <td><?php echo $pros['productPic3']?></td>
            </tr>
            
            <tr>
                <td>商品資訊</td>
                <td>
                    <textarea name="proText" id="proText" cols="30" rows="10"><?php echo $pros['productDital']?></textarea>
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