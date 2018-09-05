<?php 
ob_start();
session_start();
session_destroy();

header("php/member_profile.php");
?>