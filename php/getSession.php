<?php 
ob_start();
session_start();
if(isset($_SESSION["indexViewNo"])==false){
	$_SESSION["indexViewNo"]='';
	
}
if(isset($_SESSION["planet"])==false){
$_SESSION["planet"]='';	
}

if(isset($_SESSION["scheduleNo"])==false){
	$_SESSION["scheduleNo"]='';
}

?>
<input type="hidden" class="indexViewNo" name="indexViewNo" value="<?php echo $_SESSION["indexViewNo"]; ?>">
<?php  
$_SESSION["indexViewNo"]='';
?>
<input type="hidden" class="scheduleNo" name="scheduleNo" value="<?php echo $_SESSION["scheduleNo"]; ?>">
<?php
$_SESSION["scheduleNo"]='';
?>
<input type="hidden" class="planet"name="planet" value="<?php echo $_SESSION["planet"]; ?>">
<?php
$_SESSION["planet"]='';
 ?>

