<?php
// connect to database
// $dsn = "mysql:host=127.0.0.1;dbname=cd102g2;charset=utf8mb4";
// $pdo = new PDO($dsn, 'root', 'admin');

$dsn = "mysql:host=127.0.0.1;dbname=cd102g2";
$userName = "root";
$pwd = "admin";
$pdo;

try {
    $pdo = new PDO($dsn, $userName, $pwd);
    echo '连接成功'."\n";
    getMemberInfo($pdo, 1);

} catch (PDOException $e) {
    echo '连接失败：' . $e->getMessage();
}

// function createMember($a1, $a2, $a3 ) {
//     $query = 'INSERT INTO `member` (`memNo`, `memName`, `memId`, `memPsw`, 
//     `memTel`, `memEmail`, `memAddress`, `memBd`, `memImg`, `memStatus`) 
//     VALUES ($a1, $a2, $a3, 'aaa', '0910100100', 'aaa@gmail.com', 'aaa', '1980/01/02', 'aaa.jpg', '1')';

//     $result = mysqli_query($query) or die('Query failed: ' . mysql_error());
//     echo $result;
// }

function getMemberInfo($pdo, $mId) {
    $query = "SELECT * FROM member WHERE memNo = " . $mId;
    echo $query . "\n";
    foreach ($pdo->query($query) as $row) {
        print $row['memNo'] . "\t";
        print $row['memName'] . "\t";
        print $row['memId'] . "\n";
    }
}

// createMember('', $_POST['regist_email'] )
?>