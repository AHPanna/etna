<?php

$DBname = $_GET['db_name'];
$table = $_GET['table'];
$value = $_GET['val'];
$new_value = $_GET['new_val'];
$servername = "localhost";
$username = "panna";
$password = "root";
$dbname = "$DBname";


$pdo = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
$sql = "UPDATE $table SET nom='$new_value' WHERE nom='$value'";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);

echo " commande bien effectué!<br/>";
$pdo = null;

//afficher les contenues de la table
try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from $table";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
    echo "le contenu de la table : $table <br>";
        foreach( $rowAll as $row )
    {
    echo ' &#x1f52e '.$row[0].' <br/>' ;

    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;



?>
