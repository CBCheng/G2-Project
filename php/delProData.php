<?php
try{
    $dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
    $user = "cheng2";
    $password = "9453";
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    $pdo = new PDO( $dsn, $user, $password, $options);

    $delId = $_REQUEST['delProId'];
    //$delId = '18';

    $sql = "delete from product where productNo = :delNo";
    $del = $pdo->prepare($sql);
    $del->bindValue(':delNo',$delId);
    $del->execute();

    $sql2 = "select * from product";
    $pros = $pdo->query($sql2);
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
                <button class="lightBoxBtn" type="button" value="<?php echo $proRow["productNo"]?>">修改</button>
            </td>
            <td>
                <button class="delProBtn" type="button" value="<?php echo $proRow["productNo"]?>">刪除</button>
            </td>
        </tr>
<?php
}
?>
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

            $('#cancelBtn').on('click',function(){
                $('.addBox').css('display','none');
            });

            $('.delProBtn').on('click',function(){
                var delId = $(this).val();
                var r=confirm("確定刪除嗎?");
                //alert(delId);
                if (r==true){
                    $.ajax({
                        url:'delProData.php',
                        dataType:'text',
                        type: 'POST',
                        data:{delProId:delId},
                        success: function (data) {
                            $('.proList').remove();
                            $('.tableTitle').after(data);
                            //alert(data);
                        },
                        error: function () {
                            alert('error');
                        }
                    });
                }
            });
        });
    </script>

<?php
    
} catch (PODException $e) {
    echo "錯誤原因 : " , $e->getMessage(), "<br>";
    echo "錯誤行號 : " , $e->getLine(), "<br>";	
}
?>