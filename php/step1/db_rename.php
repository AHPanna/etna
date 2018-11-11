<?php

$old_name = $_GET['old_name'];
$new_name = $_GET['new_name'];

$host="localhost";
$user="panna";
$pass="root";


//delete db
$db = new PDO("mysql:host=$host", $user, $pass);
$db-> setAttribute( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );

try{
    $stmt = $db-> prepare( "DROP DATABASE $old_name;" );
    $stmt->execute();
    }catch( PDOException $e ){
    print_r( $e );
}
echo "db supprimer <br>";

//create db
try{
    $stmt = $db-> prepare( "CREATE DATABASE $new_name;" );
    $stmt->execute();
}catch( PDOException $e ){
    print_r( $e );

}
	echo "db crée succes <br>";


?>
