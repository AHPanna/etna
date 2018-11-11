<?php

$DBname = $_GET['db_name'];
$table = $_GET['table'];

$servername = "localhost";
$username = "panna";
$password = "root";
$dbname = "$DBname";

//afficher le nombre de row dans une table;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT COUNT(*) as nb FROM $dbname.$table;";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
    foreach( $rowAll as $row )
    {
    echo 'nombre de row dans juste une table : '.$row['nb'].' <br/>' ;

    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;



//row totale
try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT SUM(TABLE_ROWS) FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$dbname';";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
    foreach( $rowAll as $row )
    {
    echo 'nombr de row totale dans la database : '.$row['SUM(TABLE_ROWS)'].' <br/>' ;

    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
