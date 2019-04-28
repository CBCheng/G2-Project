<?php 
ob_start();
session_start();
if(isset($_SESSION["MEM_NO"])===true){
	echo $_SESSION["MEM_NO"];
}
else{
	echo '';
}
?>