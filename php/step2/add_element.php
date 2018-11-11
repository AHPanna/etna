<?php

$DBname = $_GET['db_name'];
$table = $_GET['table'];
$element = $_GET['new_element'];
//$new_element=$element;

$servername = "localhost";
$username = "panna";
$password = "root";
$dbname = "$DBname";


$pdo = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
$sql = "ALTER TABLE $table ADD $element varchar(60)";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);

echo "ajout l'element $element par succes!<br/>";
$pdo = null;



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
