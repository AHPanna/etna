
<?php require("fonction.php"); ?>


<html>
<header>
<title>STEP 2</title>
<!-- les styles css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</header>

<body>

<div class="container-fluid">
<!-- afficher les db disponible dans mysql -->
<h4> Les db disponibles dans la bdd : </h4>
<?php
print_db();
?>




<!--print tables -->
<form action="show_tables.php" method="get">
 	<h4> afficher les tables ex: projet_test </h4>
	 nom du db <input type="text" name="db_name" placeholder="nom du db">
    <input type="submit" value="Submit" class="btn btn-primary">
</form> 

<!-- rename tables -->

<form action="rename_tables.php" method="get">
        <h4> renommer les tables ex: projet_test </h4>
         nom du db <input type="text" name="db_name" placeholder="nom du db"> <br>
	nom de la table à modifier <input type="text" name="old_table" placeholder="ancien tables">
	 nouveau nom de la table <input type="text" name="new_table" placeholder="nouveau table"> 
    	<input type="submit" value="Submit" class="btn btn-primary">
</form>


<!-- add elment tables -->

<form action="add_element.php" method="get">
        <h4> ajouter des elements dans table ex: projet_test </h4>
         nom du db <input type="text" name="db_name" placeholder="nom du db"> => 
	la table ajouté l'element <input type="text" name="table" placeholder="table"><br>
        nom element a ajouter dans la table <input type="text" name="new_element" placeholder="new element">
        <input type="submit" value="Submit" class="btn btn-primary">
</form>

<!-- delete elment tables -->

<form action="delete_element.php" name="frm" method="get">
        <h4> supprimer des elements dans table ex: projet_test </h4>
         nom du db <input type="text" name="db_name" placeholder="nom du db"> =>
	 la table ajouté l'element <input type="text" name="table" placeholder="table"><br>
        nom de l'element a supprimer dans la table <input type="text" name="new_element" placeholder="new element">
        <input type="submit" onclick="return confirmation()" value="Submit" class="btn btn-primary">
</form>

<!-- edit elment tables -->

<form action="edit_element.php" method="get">
        <h4> editer le nom de l'elements dans table ex: projet_test </h4>
         nom du db <input type="text" name="db_name" placeholder="nom du db"> =>
         la table ajouté l'element <input type="text" name="table" placeholder="table"><br>
        nom de l'element <input type="text" name="old_element" placeholder="old element">
	=> nouveau nom de l'element <input type="text" name="new_element" placeholder="new element">
        <input type="submit" value="Submit" class="btn btn-primary">
</form>


<!-- affiche nb elment tables -->

<form action="info_table.php" method="get">
        <h4> afficher le nombre de lignes de la table ex: projet_test </h4>
         nom du db <input type="text" name="db_name" placeholder="nom du db"> =>
         nom de la table <input type="text" name="table" placeholder="table">
         <input type="submit" value="Submit" class="btn btn-primary">
</form>


<script>
function confirmation() {
if(document.forms['frm'].db_name.value === "" || document.forms['frm'].new_element.value === "" || document.forms['frm'].table.value === "" )
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

