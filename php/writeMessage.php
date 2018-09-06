<?php

$content = $_REQUEST['content'];
$scheduleNo = $_REQUEST['scheduleNo'];
$memNo = $_REQUEST['memNo'];
try {
	require_once("connectCd102g2.php");
	$sql = "insert into itineraryre values (null, :scheduleNo, :memNo, now(), :content, 0)";
	$comment = $pdo->prepare($sql);
	$comment->bindValue(":scheduleNo",$scheduleNo);
	$comment->bindValue(":memNo",$memNo);
	$comment->bindValue(":content",$content);
	$comment->execute();

	$sqlAdd = "select * from itineraryre ORDER BY itineraryre.commentNo ASC";
	$itineraryre = $pdo->query($sqlAdd);
	$itiRow = $itineraryre->fetchAll(PDO::FETCH_ASSOC);
	foreach ($itiRow as $data) {
		$sqlMem = "select * from cd102g2.itineraryre as a join cd102g2.member as b on a.memNo = b.MEM_NO";
		$memName = $pdo->query($sqlMem);
		$memRow = $memName->fetch(PDO::FETCH_ASSOC);
?>
		<div class="commentWrip">
                    <div class="commentPic">
                        <img src="img/member_pic.jpg" alt="">
                    </div>
                    
                    <div class="commentContent">
                        <div class="tripSpot">
                            <input type="hidden" name="reportTime" value="<?php echo $data['commentNo']?>">
                            <p class="deta"><?php echo $data['commentTime']?></p>
                            <p class="memName"><?php echo $memRow['MEM_NAME']?></p>
                            <p class="commentTxt"><?php echo $data['reContent']?></p>
                            <button class="reportBtn">檢舉</button>
                        </div>
                    </div>
                    
                </div>
       <?php         
	}

	
				


	
} catch (PDOException $e) {
	echo "error~<br>";
  	echo $e->getMessage() , "<br>";
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

                        })
</script>