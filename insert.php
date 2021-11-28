<?php 
$dbHost = "localhost";
$dbName = "new";
$dbUser = "root";
$dbPass = "";

$pdo = new PDO("mysql:host={$dbHost}; dbname={$dbName}",$dbUser, $dbPass);
$statement = $pdo->query("SELECT CURDATE() AS date FROM DUAL");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['date']);

?>