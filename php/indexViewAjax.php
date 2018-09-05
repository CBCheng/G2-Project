<?php
ob_start();
session_start();
	try {
		$dsn = "mysql:host=localhost;port=3306;dbname=cd102g2;charset=utf8";
		$user = "cheng2";
		$password = "9453";
		$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$pdo = new PDO( $dsn, $user, $password, $options);  

		$thisId = $_REQUEST['thisId'];
		// $thisId = 'p1_v1';
		$sql = "select * from view where viewNo = :viewNo";
		$view = $pdo->prepare($sql);

		$view->bindValue(':viewNo',$thisId);
		$view->execute();
		$views = $view->fetch(PDO::FETCH_ASSOC);
		// echo $views['viewName'];
		// echo $views['viewImg1'];
		$_SESSION["indexViewNo"]=$views["viewNo"];
		echo $_SESSION["indexViewNo"];
?>

<div class="viewItem">
    <img src="<?php echo $views['viewImg1']?>" alt="viewImg" class="viewImg">
    <div class="exit">
        <img src="img/index/cancel.png" alt="exit">
    </div>
    <h2><?php echo $views['viewName'] ?></h2>
    <a href="planning.html">將景點加入行程</a>
    <script type="text/javascript">
    	$('.exit').on('click',function(){
	        $('.viewBg').css('transform','rotateX(90deg)');
	    });
    </script>
</div>
<?php
	} catch (PODException $e) {
		echo "錯誤原因 : " , $e->getMessage(), "<br>";
		echo "錯誤行號 : " , $e->getLine(), "<br>";	
	}
?>