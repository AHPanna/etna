
<?php

$DBname = $_GET['db_name'];
$table = $_GET['table'];
$element = $_GET['new_element'];
//$new_element=$element;

$servername = "localhost";
$username = "panna";
$password = "root";
$dbname = "$DBname";





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

