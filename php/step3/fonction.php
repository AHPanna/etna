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



function tables(){

    if(isset($_POST['SubmitButton'])){ //check if form was submitted
  $input = $_POST['db_name']; //get input text
  $servername = "localhost";
$username = "panna";
$password = "root";
$pdo = new PDO("mysql:host=$servername;dbname=$input", $username, $password);
$sql = "SHOW TABLES";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
foreach($tables as $table){
    echo '&#127937;'.$table[0], '<br>';
}
}

$pdo =null;

}



function element() {
if(isset($_POST['SubmitButton'])){
$input = $_POST['db_name'];//$_POST['db_name']; //get input text
$table =$_POST['table'];
$servername = "localhost";
$username = "panna";
$password = "root";

$pdo = new PDO("mysql:host=$servername;dbname=$input", $username, $password);
$sql = "DESCRIBE $table";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
foreach($tables as $table){
    echo '&#128123;'.$table[0].'<br>';
}
}
$pdo =null;
}
?>
