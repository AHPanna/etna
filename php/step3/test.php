<?php
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
?>

<form action="" method="post">
  <input type="text" name="db_name"/>
  <input type="submit" name="SubmitButton"/>
</form>
