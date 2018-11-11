<?php 

$DBname = $_GET['db_name'];

$host="localhost"; 
$user="panna";
$pass="root";

    try {
        $dbh = new PDO("mysql:host=$host", $user, $pass);

        $dbh->exec("CREATE DATABASE $DBname;") 
        or die(print_r($dbh->errorInfo(), true));
	echo "Database created successfully";
    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
	echo "Error creating database";
    }



?>

