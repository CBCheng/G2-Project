<?php

$content = htmlspecialchars($_REQUEST['content']);
$scheduleNo = $_REQUEST['scheduleNo'];
$memName = $_REQUEST['memName'];
try {
	require_once("connectCd102g2.php");
    //先抓到會員編號
    $sqlName = "select * from member where MEM_NAME='$memName'";
    $catchName = $pdo->query($sqlName);
    $catchNameRow = $catchName->fetch(PDO::FETCH_ASSOC);
    $memNo = $catchNameRow['MEM_NO'];

    //把留言寫入資料庫
	$sql = "insert into itineraryre values (null, :scheduleNo, :memNo, now(), :content, 0)";
	$comment = $pdo->prepare($sql);
	$comment->bindValue(":scheduleNo",$scheduleNo);
	$comment->bindValue(":memNo",$memNo);
	$comment->bindValue(":content",$content);
	$comment->execute();
    
    //留言加起來
    $sqlMessage = "update myschedule set messageNum = messageNum+1 where scheduleNo=$scheduleNo";
    $message = $pdo->exec($sqlMessage);

    //把留言資料傳回頁面
	$sqlAdd = "select * from cd102g2.itineraryre as a join cd102g2.member as b on a.memNo = b.MEM_NO where scheduleNo=$scheduleNo ORDER BY a.commentNo ASC";
	$itineraryre = $pdo->query($sqlAdd);
	$itiRow = $itineraryre->fetchAll(PDO::FETCH_ASSOC);
	foreach ($itiRow as $data) {
  //       //抓會員編號的SQL
		// $sqlMem = "select * from cd102g2.itineraryre as a join cd102g2.member as b on a.memNo = b.MEM_NO";
  //       $memName = $pdo->query($sqlMem);
  //       $memRow = $memName->fetch(PDO::FETCH_ASSOC);
        //抓行程編號留言數SQL
        $sqlCom = "select * from myschedule where scheduleNo=$scheduleNo";
		$com = $pdo->query($sqlCom);
        $comRow = $com->fetch(PDO::FETCH_ASSOC);
?>
		<div class="commentWrip">
                    <div class="commentPic">
                        <img src="img/member/<?php echo $data['MEM_IMG']?>" alt="">
                    </div>
                    
                    <div class="commentContent">
                        <div class="tripSpot">
                            <input type="hidden" id="commTime" value="<?php echo $comRow['messageNum']?>">
                            <input type="hidden" name="reportTime" value="<?php echo $data['commentNo']?>">
                            <p class="deta"><?php echo $data['commentTime']?></p>
                            <p class="memName"><?php echo $data['MEM_NAME']?></p>
                            <p class="commentTxt"><?php echo $data['reContent']?></p>
                            <button class="reportBtn">檢舉</button>
                        </div>
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
	$('.reportBtn').on('click',function(){
                            var commentNo = $(this).prev().prev().prev().prev().val();
                            $.ajax({
                                url: 'php/reportMessage.php',                
                                data: {no:commentNo},             
                                type: 'POST',               
                                dataType: 'text',           
                                success: function(data){
                                    console.log(data);
                                    console.log(commentNo);
                                }
                            });

                        });



</script>