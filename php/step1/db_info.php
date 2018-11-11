<?php 

$name = $_GET['db_info'];

$servername = "127.0.0.1";
$username = "panna";
$password = "root";
$dbname = "$name";

//affiche la date 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT  table_schema, MAX(create_time) create_time FROM information_schema.tables where table_schema = '$name'";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH); 
    foreach( $rowAll as $row )
    {
	echo 'la date de creation du db : '.$row['create_time'].'<br />';
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;


//affiche la taille
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT table_schema 'Nom', sum( data_length + index_length ) / 1024 / 1024 'size' FROM information_schema.TABLES where table_schema='$name' GROUP BY table_schema;";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
    foreach( $rowAll as $row )
    {
        echo 'la taille du db : '.$row['size'].' MB <br />';
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

//nombre de table dans la db 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT COUNT(*) as nb FROM INFORMATION_SCHEMA.TABLES WHERE table_schema ='$name';";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
    foreach( $rowAll as $row )
    {
        echo 'Nombre de tables dans la  db : '.$row['nb'].' <br />';
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
