<?php
try {
    require_once("connectExpert.php");
    $expertName = $_REQUEST['expertName'];
    $sql = "select * from expert where expertName = '$expertName'";
    $members = $pdo->query($sql);
    $memRows = $members->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($memRow);

  
    foreach ($memRows as $memRow) {
    	//判斷人氣
    	$crown = '';
    	$crown_phone = '';
    	if($memRow["expertPopular"]>=30){
    		$crown .= '<img class="crown" src="img/expertImg/crown.png" alt="crown">';
    		$crown_phone .= '<img class="crown_phone" src="img/expertImg/crown.png" alt="crown">';
    	}


    	//判斷屬性
    	$attr='';
    	$attr_phone='';
    	if($memRow["expFood"]==10){
    		$memRow["expFood"]='美食';
    		$attr .= '<div class="attr food">'.$memRow["expFood"].'</div>';
    		$attr_phone .= '<div class="attr_phone food">'.$memRow["expFood"].'</div>';
    	}else{
    		$memRow["expFood"]='';
    	}

    	if($memRow["expHuman"]==10){
    		$memRow["expHuman"]='人文';
    		$attr .= '<div class="attr human">'.$memRow["expHuman"].'</div>';
    		$attr_phone .= '<div class="attr_phone human">'.$memRow["expHuman"].'</div>';
    	}else{
    		$memRow["expHuman"]='';
    	}
    	if($memRow["expSmart"]==10){
    		$memRow["expSmart"]='知性';
    		$attr .= '<div class="attr smart">'.$memRow["expSmart"].'</div>';
    		$attr_phone .= '<div class="attr_phone smart">'.$memRow["expHuman"].'</div>';
    	}else{
    		$memRow["expSmart"]='';
    	}
    	if($memRow["expAdven"]==10){
    		$memRow["expAdven"]='冒險';
    		$attr .= '<div class="attr adven">'.$memRow["expAdven"].'</div>';
    		$attr_phone .= '<div class="attr_phone adven">'.$memRow["expAdven"].'</div>';
    	}else{
    		$memRow["expAdven"]='';
    	}
    	if($memRow["expTech"]==10){
    		$memRow["expTech"]='科技';
    		$attr .= '<div class="attr tech">'.$memRow["expTech"].'</div>';
    		$attr_phone .= '<div class="attr_phone tech">'.$memRow["expTech"].'</div>';
    	}else{
    		$memRow["expFood"]='';
    	}

    	//判斷星球h1顏色
    	$planet='';
    	if($memRow["planet"]=='瓦特星'){
    		$planet .= '<h1 class="plBlue">'.$memRow["planet"].'專家</h1>';
    	}elseif($memRow["planet"]=='達沙星'){
    		$planet .= '<h1 class="plOrange">'.$memRow["planet"].'專家</h1>';
    	}else{
    		$planet .= '<h1 class="plGreen">'.$memRow["planet"].'專家</h1>';
    	} 

?>		
	

		<!-- 專家跳窗介紹 -->
		<section id="lightBox" >
            <i class="fas fa-times"></i>
            <div class="content_desk">
                <article class="conLeft">
                    <?php echo $crown_phone ;?>
                    <div class="expPic">
                        <?php echo $crown ;?>
                        <!-- <div class="attr">美食</div> -->
                        <?php echo $attr ;?> 
                        <img src="<?php echo $memRow["expertPic"];?>">
                    </div>
                </article>
                <article class="conRight">
                	<?php echo $planet ;?>
                    <h2><?php echo $memRow["expertName"];?>
                        <img src="img/expertImg/rocket.png" class="rocket">
                    </h2>
                    <div class="attr_phone">美食</div>
                    <?php echo $attr_phone ;?>
                    <div class="data">
                        <div class="score">
                            <h3>評價</h3>
                            <span>5</span>
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                            <img src="img/expertImg/star.png" alt="star">
                        </div>
                        <div class="chart">
                            
                        </div>
                    </div>
                    <div class="record">
                        <div class="collect">
                            <img id="heart" src="img/expertImg/heartWhite.png" alt="heartWhite" title="加入收藏">
                            <p id="Cnum">20人收藏</p>
                        </div>
                        <div class="writeComment">
                            <img id="write" src="img/expertImg/write.png" alt="write" title="撰寫評論">
                            <p id="Wnum">3則評論</p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- content_phone改變能力值和收藏位置 -->
            <div class="content_phone">
                <div class="chart_phone">
                    <h3>能力值</h3>
                    <span>美食</span>
                    <div class="value focus"></div>
                    <br>
                    <span>人文</span>
                    <div class="value"></div>
                    <br>
                    <span>知性</span>
                    <div class="value"></div>
                    <br>
                    <span>冒險</span>
                    <div class="value"></div>
                    <br>
                    <span>科技</span>
                    <div class="value"></div>
                    <br>
                </div>
                <div class="record_phone">
                    <div class="collect">
                        <img id="heart" src="img/expertImg/heartWhite.png" alt="heartWhite" title="加入收藏">
                        <p id="Cnum">20人收藏</p>
                    </div>
                    <div class="writeComment">
                        <img id="write" src="img/expertImg/write.png" alt="write" title="撰寫評論">
                        <p id="Wnum">3則評論</p>
                    </div>
                </div>
            </div>
            <div class="comment">
                <h2>評論</h2>
                <div class="message">
                    <div class="user">
                        <div class="name">董董</div>
                        <img src="img/expertImg/userPic.jpg" alt="user">
                    </div>
                    <p>妙麗超專業的，人很nice又漂亮，下次一定還要預約！</p>
                </div>
                <div class="message">
                    <div class="user">
                        <div class="name">董董</div>
                        <img src="img/expertImg/userPic.jpg" alt="user">

                    </div>
                    <p>妙麗超專業的，人很nice又漂亮，下次一定還要預約！</p>
                </div>
            </div>
        </section>


        
        <script type="text/javascript">
        
        	// =====跳窗開關=====
   //      	$(function () {
			// 	$(".element-item").click(function () {
			// 		$("#lightBox_father").show(500);
			// 	})
			// })
			//e.target觸發的物件 //e.currentTarget監聽的事件
			$("#lightBox_father").click(function (e) {
				if (e.target == e.currentTarget)
					$("#lightBox_father").hide(500);
			})

			$(function () {
				$(".fas").click(function () {
					$("#lightBox_father").hide(500);
				})
			})


			//=====愛心換圖=====
			$("#heart").click(function () {
				if (heart.title === "加入收藏") {
					$(this).attr("src", "img/expertImg/heartRed.png");
					$(this).attr("title", "取消收藏");
				} else {
					$(this).attr("src", "img/expertImg/heartWhite.png");
					$(this).attr("title", "加入收藏");
				}
			})


        </script>
	
<?php
    }
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>