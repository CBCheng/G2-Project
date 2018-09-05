<?php
try{
  require_once("connectDatabase.php");
  $viewNo = trim($_POST["viewNo"]); 
  // $viewNo = 'p2_v1'; 
  $sql = "select * from view where viewNo = '$viewNo'";
  $views = $pdo->query($sql);
  $viewRow=$views->fetch(PDO::FETCH_ASSOC);

  
    
          $txt ='';
          if($viewRow['viewFood']==1){
            $txt .='<span class="tag fod">美食</span>';
          }
          if($viewRow['viewHuman']==1){
            $txt .='<span class="tag hum">人文</span>';
          }
          if($viewRow['viewSmart']==1){
            $txt .='<span class="tag int">知性</span>';
          }
          if($viewRow['viewAdven']==1){
            $txt .='<span class="tag adv">冒險</span>';;
          }
          if($viewRow['viewTech']==1){
            $txt .='<span class="tag tec">科技</span>';;
          }
         $viewNoo = substr($viewRow['viewNo'],4,2);

?>
          <li  data-schdule="<?php echo $viewNoo;?>" >
            <div class="Itemcontent">
              <p class=" ItemName">
                <?php echo $viewRow['viewName'];?>
              </p>
              <span></span>
              <div class="tagBox">
                <?php echo $txt; ?>
              </div>
              <span class="deleteIcon">
                <img src="img/planning/trash.png">
              </span>
            </div>
          </li>






<?php

}catch(PDOException $e){
  echo "error~<br>";
  echo $e->getMessage() , "<br>";
}


?>	
	

</body>
</html>
