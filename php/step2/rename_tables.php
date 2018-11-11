<?php
$DBname = $_GET['db_name'];
$old_name = $_GET['old_table'];
$new_name = $_GET['new_table'];
$news=$new_name;

$servername = "localhost";
$username = "panna";
$password = "root";
$dbname = "$DBname";


$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "RENAME TABLE $old_name TO $news";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);

echo "modification tables succes!";








?>
