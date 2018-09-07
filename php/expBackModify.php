<?php
try {
    
    require_once("connectExpert.php");

    $sql ="UPDATE expert SET expFood = :expFood , expHuman = :expHuman , expSmart = :expSmart , expAdven = :expAdven , expTech = :expTech WHERE expertNo = :expertNo";
    $update_member = $pdo->prepare($sql);
    $update_member->bindValue(":expFood",$_REQUEST["expFood"]);
    $update_member->bindValue(":expHuman",$_REQUEST["expHuman"]);
    $update_member->bindValue(":expSmart",$_REQUEST["expSmart"]);
    $update_member->bindValue(":expAdven",$_REQUEST["expAdven"]);
    $update_member->bindValue(":expTech",$_REQUEST["expTech"]);
    $update_member->bindValue(":expertNo",$_REQUEST["expertNo"]);
    $update_member->execute();

 	header("location:expertBackend.php");


    }

 catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>



