<?php
try {
    require_once("connectCd102g2.php");
    $expertName = $_REQUEST['expertName'];
    $sql = "select * from expert where expertName = '$expertName'";
    $members = $pdo->query($sql);
    $memRows = $members->fetchAll(PDO::FETCH_ASSOC);


    foreach ($memRows as $memRow) {
  
    	
?>		
		<!-- 能力值內容 -->
		
		<h3>能力值</h3>
        <span style="color: #fff;">美食</span>
        <input class="ch_food" type="hidden" value="<?php echo $memRow["expFood"] ;?>">
        <div class="value"></div>
        <span class="num" style="color: #fff;"><?php echo $memRow["expFood"] * 10;?>%</span>
        <br>
        <span style="color: #fff;">人文</span>
        <input class="ch_human" type="hidden" value="<?php echo $memRow["expHuman"] ;?>">
        <div class="value"></div>
        <span class="num" style="color: #fff;"><?php echo $memRow["expHuman"] * 10;?>%</span>
        <br>
        <span style="color: #fff;">知性</span>
        <input class="ch_smart" type="hidden" value="<?php echo $memRow["expSmart"] ;?>">
        <div class="value"></div>
        <span class="num" style="color: #fff;"><?php echo $memRow["expSmart"] * 10 ;?>%</span>
        <br>
        <span style="color: #fff;">冒險</span>
        <input class="ch_advan" type="hidden" value="<?php echo $memRow["expAdven"] ;?>">
        <div class="value"></div>
        <span class="num" style="color: #fff;"><?php echo $memRow["expAdven"] * 10;?>%</span>
        <br>
        <span style="color: #fff;">科技</span>
        <input class="ch_tech" type="hidden" value="<?php echo $memRow["expTech"] ;?>">
        <div class="value"></div>
        <span class="num" style="color: #fff;"><?php echo $memRow["expTech"] * 10;?>%</span>
        <br>


	
<?php
    }
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>