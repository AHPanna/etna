<?php require("fonction.php"); ?>
<!-- afficher les db disponible dans mysql -->


<html>
<header>
<title>STEP 3</title>
<!-- les styles css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</header>

<body>

<div class="container-fluid">
<div>
<h4> Les db disponibles dans la bdd & tables: </h4>
<?php
echo "<h5>Databases :<h5>";
print_db();
echo "<h5>Tables :<h5>";
tables();
echo "<h5>Elements :<h5>";
element();
?>
</div>

<form action="" method="post">
<br> taper le db :  <input type="text" name="db_name" placeholder="db name"/>
<br> taper le db :  <input type="text" name="table" placeholder="table"/>
  <input type="submit" name="SubmitButton" value="send" class="btn btn-primary"/>
</form>

<!-- ajout des fonction -->




<!-- ajout row in table -->

<h4> add row ex : 'row' -> 'nom' </h4>
<form action="add_row.php" method="GET">
votre db :  <input type="text" name="db_name" placeholder="db name"/> 
votre table :  <input type="text" name="table" placeholder="table name"/>=>
valeur à ajouté :  <input type="text" name="value" placeholder="valeur"/>
  <input type="submit" name="SubmitButton" value="send" class="btn btn-primary"/>
</form>



<!-- supprimer row in table -->

<h4> supprimer row ex : 'row' -> 'nom' </h4>
<form name="frm" action="delete_row.php" method="GET">
votre db :  <input type="text" name="db_name" placeholder="db name"/>
votre table :  <input type="text" name="table" placeholder="table name"/>=>
valeur à ajouté :  <input type="text" name="val" placeholder="valeur"/>
  <input type="submit" name="SubmitButton" value="send" onclick="return confirmation() " class="btn btn-primary"/>
</form>



<!-- update l'element row in table -->

<h4> update table row ex : 'row' -> 'nom' </h4>
<form name="frm" action="edit_row.php" method="GET">
votre db :  <input type="text" name="db_name" placeholder="db name"/>
votre table :  <input type="text" name="table" placeholder="table name"/><br>
valeur à modifier :  <input type="text" name="val" placeholder="valeur"/> =>
valeur à ajouté :  <input type="text" name="new_val" placeholder="nouveau valeur"/>
 
 <input type="submit" name="SubmitButton" value="send" class="btn btn-primary"/>
</form>


























<script>
function confirmation() {
if(document.forms['frm'].db_name.value === "" || document.forms['frm'].val.value === "" || document.forms['frm'].table.value === "" )
  {
    alert("empty");
    return false;
  }
    alert("vous etes sur de vous pour continuer");
    return true;

}
</script>
</body>
</html>


