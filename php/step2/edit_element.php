<?php

$DBname = $_GET['db_name'];
$table = $_GET['table'];
$new_element = $_GET['new_element'];
$old_element=$_GET['old_element'];

$servername = "localhost";
$username = "panna";
$password = "root";
$dbname = "$DBname";


$pdo = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
$sql = "ALTER TABLE $table CHANGE COLUMN $old_element $new_element varchar(255);";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);

echo " l'element $old_element à $new_element bien ete renommer!<br/>";
$pdo = null;


//afficher
try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DESCRIBE personne;";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
    foreach( $rowAll as $row )
    {
    echo 'element : '.$row['Field'].' <br/>' ;

    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

