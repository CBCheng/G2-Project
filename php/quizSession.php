<?php 
ob_start();
session_start();

echo $_SESSION["schPlanet"];
echo $_SESSION["schName"];
echo $_SESSION["quizPic"];
echo $_SESSION["quizPlanetPic"];
echo $_SESSION["schDay"];
?>