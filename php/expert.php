<?php
try {
    require_once("connectExpert.php");
    $sql = "select * from expert";
    $members = $pdo->query($sql);
    $memRows = $members->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($memRow);
    foreach ($memRows as $memRow) {
    	echo '<h2 class ="h2Desk">', $memRow['planet'], '</h2>',
			 '<h3 class ="h3Desk">', $memRow['expertName'], '</h3>';
			

        echo '<h2 class ="h2Desk">', $memRow['planet'], '</h2>';
        echo '<h3 class ="h3Desk">', $memRow['expertName'], '</h3>';
    }
} catch (PDOException $e) {
    echo "錯誤原因 : ", $e->getMessage(), "<br>";
    echo "錯誤行號 : ", $e->getLine(), "<br>";
}
?>