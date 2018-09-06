<?php
//連線資料庫
try{
  require_once("connectDatabase.php");
  $planet = trim($_POST["planet"]); 


  $sql = "select * from view where planet = '${planet}'";
  $views = $pdo->query($sql);
  $viewRow=$views->fetchAll(PDO::FETCH_ASSOC);
  // $arr='';
  $num=0;
  foreach($viewRow as $data){
    $arr='';
    if($data['viewSmart']==1){
        $data['viewSmart']='知性';
        $arr .='<span class="tag int">'.$data['viewSmart'].'</span>';
      }else{
        $data['viewSmart']='';
      }
      if($data['viewFood']==1){
        $data['viewFood']='美食';
        $arr .='<span class="tag fod">'.$data['viewFood'].'</span>';
      }else{
        $data['viewFood']='';
      }
      if($data['viewHuman']==1){
        $data['viewHuman']='人文';
        $arr .='<span class="tag hum">'.$data['viewHuman'].'</span>';
      }else{
        $data['viewHuman']='';
      }
      if($data['viewAdven']==1){
        $data['viewAdven']='冒險';
        $arr .='<span class="tag adv">'.$data['viewAdven'].'</span>';
      }else{
        $data['viewAdven']='';
      }
      if($data['viewTech']==1){
        $data['viewTech']='科技';
        $arr .='<span class="tag tec">'.$data['viewTech'].'</span>';
      }else{
        $data['viewTech']='';
      }

      
      $num += 1;


      // $aa += "<span class='tag'>",,"</span>"

  	?>
  	<li data-view="<?php echo $num; ?>" class="viewLi ">
		<div class="imgBorderStyle viewsBoxSetting">
			<div class="viewContent">
        <div class="viewImgBox">
          <img src="<?php echo $data['viewImg1']; ?>">
        </div>
          <div class="tagBox">
          <?php echo $arr; ?>
          </div>
  				<p class="viewTitle" ><?php echo $data['viewName']; ?></p>
  				<p><?php echo  mb_substr($data['viewContent'],0,10,"UTF-8"),'...'; ?></p>
			</div>
			<span class="chinese addSchdule">
				+<input type="radio" name="views" id="view<?php echo $num; ?>">
									
				<span class="mobiTxt">
									加入景點
				</span>
			</span>
			<span class="chinese viewInfo">
				<img src="img/planning/info.png">
			</span>
		</div>  
	</li>

<?php
  }

}catch(PDOException $e){
  echo "error~<br>";
  echo $e->getMessage() , "<br>";
}


?>	
	

</body>
</html>
