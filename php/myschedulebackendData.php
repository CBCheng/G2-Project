<?php 

try{
require_once("connectDatabase.php");
$selectIndex=$_POST['selectIndex'];
$inputValue=$_POST['inputValue'];
// $expertNo= $_POST['expertNo'];
// $inputValue= $_POST['inputValue'];
// $planet= $_POST['planet'];
// $share= $_POST['share'];                    

if($selectIndex==0){
	$sql = "select * from myschedule ";
}
if($selectIndex==1){
	$sql = "select * from myschedule where scheduleNo = $inputValue";
}
if($selectIndex==2){
	$sql = "select * from myschedule where memNo = $inputValue";
}
if($selectIndex==3){
	$sql = "select * from myschedule where expertNo = $inputValue";
}
if($selectIndex==4){
	$sql = "select * from myschedule where planetName = '$inputValue'";
}
if($selectIndex==5){
	$sql = "select * from myschedule where share = $inputValue";
}
$schs = $pdo->query($sql);
$schRow=$schs->fetchAll(PDO::FETCH_ASSOC);

foreach ($schRow as $data) {
	$scharr = json_decode($data['scheduleData']);
	$days=count($scharr);
                          
                      
?>
<tr>
    <td><?php echo $data['scheduleNo']; ?></td>
    <td><?php echo $data['memNo']; ?></td>
    <td><?php echo $data['expertNo']; ?></td>
    <td><?php echo $data['scheduleName']; ?></td>
    <td><?php echo $data['planetName']; ?></td>
    <td><?php echo $data['depTime']; ?></td>
    <td><?php echo $data['arrTime']; ?></td>
    <td><?php echo $days; ?></td>

	
	<td class="schContent">
	<?php
	$count =1;
	foreach ($scharr as $viNameRow) {

		$day='Day';
		echo $day,$count,':';
		foreach ($viNameRow as  $viewName) {

			echo $viewName,' , '; 
	 
		}
		echo '<br>';
		$count+=1;
	}
	?>
	</td>
	 

    <td class="pic"><?php echo $data['ItineraryPic']; ?></td>

    <td><?php echo $data['share']; ?></td>
                       
                        
   </tr>
<?php
}

	}catch(PDOException $e){
 	echo "error~<br>";
	echo $e->getMessage() , "<br>";
	}
 ?>  