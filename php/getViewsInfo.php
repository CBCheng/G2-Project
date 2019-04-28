
<?php
//連線資料庫
try{
  require_once("connectDatabase.php");
  $viewName = trim($_POST["viewName"]); 


  $sql = "select * from view where viewName = '{$viewName}'";
  $views = $pdo->query($sql);
  $viewRow=$views->fetchAll(PDO::FETCH_ASSOC);


  foreach($viewRow as $data){





  	?>
  	
	<div class="borderStyle viewIntroduce viewBorderStyle">
		<div class="viewName chinese">
			<p ><?php echo $data['viewName'] ?></p>
			<span><img src="img/planning/clear-button-blue.png"></span>
		</div>
		<div>
			<div class="borderStyle viewImg">
				<img src="<?php echo $data['viewImg1'] ?>">
				<label for="view<?php echo substr($data['viewNo'],4,2) ?>">
					<div class="addViewImg">
					<img src="img/planning/add-button-inside-black-circle-blue.png">
					</div>
				</label>
			</div>

			<div class="borderStyle viewDescrip chinese">
				<p>簡介</p>
				<p><span><?php echo $data['viewContent'] ?></span>
				</p>
			</div>
		</div> 
	</div>

  



<?php
  }

}catch(PDOException $e){
  echo "error~<br>";
  echo $e->getMessage() , "<br>";
}


?>	
	

</body>
</html>
