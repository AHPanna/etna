<?php
$DBname = $_GET['del_name'];
$host="localhost";
$user="panna";
$pass="root";

//delete db
$db = new PDO("mysql:host=$host", $user, $pass);
$db-> setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );

try{
    $stmt = $db-> prepare( "DROP DATABASE $DBname;" );
    $stmt->execute();
    }catch( PDOException $e ){
    print_r( $e );
}
echo "db supprimer <br>";
?>

