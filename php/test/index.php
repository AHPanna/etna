<?php
$input = "projet";//$_POST['db_name']; //get input text
$servername = "localhost";
$username = "panna";
$password = "root";

$pdo = new PDO("mysql:host=$servername;dbname=$input", $username, $password);
$sql = "DESCRIBE user";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
foreach($tables as $table){
    echo $table[0].'<br>';
}
$pdo =null;
?>