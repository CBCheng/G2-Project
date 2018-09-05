<?php 
ob_start();
session_start();
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

