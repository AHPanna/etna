<?php

function db(){

$servername = "localhost";
$username = "panna";
$password = "root";
//afficher le nombre de row dans une table;
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SHOW DATABASES;";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
   
    foreach( $rowAll as $row )
    {

    echo '&#9889 : '.$row['Database'].'<br>' ;

    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

}





function print_db() {
    
$servername = "localhost";
$username = "panna";
$password = "root";
//afficher le nombre de row dans une table;
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SHOW DATABASES;";
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
    $rowAll = $stmt->fetchAll(PDO::FETCH_BOTH);
  
    foreach( $rowAll as $row )
    {

    echo '&#9889 : '.$row['Database'].'<br>' ;

    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
}


?>
