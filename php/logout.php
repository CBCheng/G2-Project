<?php 
ob_start();
session_start();
session_destroy();

header("member_profile.php");
?>