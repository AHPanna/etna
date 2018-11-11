<?php

$DB_name=$_GET['db_name'];

$servername = "localhost";
$username = "panna";
$password = "root";
$dbname = "$DB_name";


$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SHOW TABLES";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
foreach($tables as $table){
    echo '&#127937;'.$table[0], '<br>';
}







?>
