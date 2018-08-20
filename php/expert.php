<?php
try {
    require_once("connectExpert.php");
    $sql = "select * from expert";
    $members = $pdo->query($sql);
    $memRow = $members->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($memRow);

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>