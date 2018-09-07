<?php
try {
    ob_start();
    session_start();
    require_once("connectExpert.php");
    $expertName = $_REQUEST['expertName'];
    $expertNo = $_REQUEST['expertNo'];
    $memNo = @$_SESSION['MEM_NO'];
    // $memNo = '1';

    $sql = "select * from expert where expertName = '$expertName'";
    $members = $pdo->query($sql);
    $memRows = $members->fetchAll(PDO::FETCH_ASSOC);

    $sql1 = "select * from expertcollect where memNo = '$memNo' and expertNo = '$expertNo'";
    $members1 = $pdo->query($sql1);
    $memRows1 = $members1->fetchAll(PDO::FETCH_ASSOC);

    $sql2 = "select * from expertcollect where expertNo = '$expertNo'";
    $members2 = $pdo->query($sql2);
    $memRows2 = $members2->fetchAll(PDO::FETCH_ASSOC);

    
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
    		$attr_phone .= '<div class="attr_phone smart">'.$memRow["expSmart"].'</div>';
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
		<section id="exp_lightBox" >
            <i class="fas fa-times"></i>
            <div class="content_desk">
                <article class="conLeft">
                    <?php echo $crown_phone ;?>
                    <div class="expPic">
                        <?php echo $crown ;?>
                        <?php echo $attr ;?> 
                        <img src="<?php echo $memRow["expertPic"];?>">
                    </div>
                </article>
                <article class="conRight">
                	<?php echo $planet ;?>
                    <h2><?php echo $memRow["expertName"];?>
                        <img src="img/expertImg/rocket.png" class="rocket">
                    </h2>
                    <?php echo $attr_phone ;?>
                    <div class="data">
                        <div class="chart">
                            <!-- 放桌機能力值 -->
                        </div>
                    </div>
                    <div class="record">
                        <div class="collect">
                            <img class="heart" src=
                            <?php 
                                if($members1->rowCount() == 0) {
                                    echo'img/expertImg/heartWhite.png';
                                } else {
                                    echo'img/expertImg/heartRed.png';
                                }
                            ?>
                             alt="heartWhite" title=
                             <?php 
                                if($members1->rowCount() == 0) {
                                    echo '加入收藏';
                                } else {
                                    echo '取消收藏';
                                }
                            ?> data-expert='<?php echo $memRow["expertNo"];?>'>
                            <p id="Cnum"><?php echo $members2->rowCount();?>人收藏</p>
                        </div>
                    </div>
                </article>
            </div>
            
            <div class="content_phone">
                <div class="chart_phone">
                    <!-- 放手機能力值 -->
                </div>
                <div class="record_phone">
                    <div class="collect">
                        <img class="heart" src=
                            <?php 
                                if($members1->rowCount() == 0) {
                                    echo'img/expertImg/heartWhite.png';
                                } else {
                                    echo'img/expertImg/heartRed.png';
                                }
                            ?>
                             alt="heartWhite" title=
                             <?php 
                                if($members1->rowCount() == 0) {
                                    echo '加入收藏';
                                } else {
                                    echo '取消收藏';
                                }
                            ?> data-expert='<?php echo $memRow["expertNo"];?>'>
                        <p id="Cnum">
                            <?php echo $members2->rowCount();?>人收藏
                        </p>
                    </div>
                </div>
            </div>
        </section>


        
        <script type="text/javascript">
        
        	// =====跳窗關閉=====
			//e.target觸發的物件 //e.currentTarget監聽的事件
			$("#exp_lightBox_father").click(function (e) {
				if (e.target == e.currentTarget)
					$("#exp_lightBox_father").hide(500);
			})

			$(function () {
				$(".fas").click(function () {
					$("#exp_lightBox_father").hide(500);
				})
			})

            <?php 
            if(isset($_SESSION['MEM_NO'])) {
                    echo "
                            function switchFavorite(){
                            if(this.title === '加入收藏'){  
                                this.src = 'img/expertImg/heartRed.png';
                                this.title = '取消收藏';
                            }
                            else{
                                this.src = 'img/expertImg/heartWhite.png';
                                this.title = '加入收藏';
                            }
                        }
                          var heart1 = document.getElementsByClassName('heart')[0];
                          var heart2 = document.getElementsByClassName('heart')[1];
                          
                        heart1.addEventListener('click', switchFavorite, false);
                        heart2.addEventListener('click', switchFavorite, false);
                        ";

                    }
            ?>

            
            
			//=====愛心換圖JS=====
            
        </script>
	
<?php
    }
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>