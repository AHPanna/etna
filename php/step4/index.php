<?php require("fonction.php"); ?>
<!-- afficher les db disponible dans mysql -->


<html>
<header>
<title>STEP 4</title>
<!-- les styles css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</header>

<body>


<div class="form">




<?php

if(isset($_POST['SubmitButton'])){ //check if form was submitted
$input = $_POST['query']; //get input text
$servername = "localhost";
$username = "panna";
$password = "root";

$pdo = new PDO("mysql:host=$servername", $username, $password);
$sql = "$input";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
foreach($tables as $table){
    echo '&#127937;'.$table[0], '<br>';
}
}
?>
</div>

<form action="" method="post">
  <input type="text" name="query" placeholder="votre requete ici"/><br>
  <input type="submit" name="SubmitButton" value="Send" class="btn btn-primary"/>
</form>



</body>
</html>
