

<?php require("fonction.php"); ?>

<html>
<header>
<title>STEP 1</title>
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




<form  action="add_db.php" methode="get">
        <h4> ajout db </h4>
        <input type="text" name="db_name" placeholder="db name">
        <input type="submit" class="btn btn-primary">
</form>

<form  action="db_rename.php" methode="get">
	<h4> rename db </h4>
	<input type="text" name="old_name" placeholder="ancien db"> =>
        <input type="text" name="new_name" placeholder="nouveau db">
	<input type="submit" class="btn btn-primary">
</form>


<form  action="db_delete.php" methode="get" name="frm">
        <h4> db delete </h4>
        <input type="text" name="del_name" placeholder="db a supprimer">
        <input type="submit" onclick="return confirmation();" class="btn btn-primary">
</form>

<form  action="db_info.php" methode="get">
        <h4> db get info utiliser : projet </h4>
        <input type="text" name="db_info" placeholder="get db info">
        <input type="submit" class="btn btn-primary">
</form>


</div>

<script>
function confirmation() {
if(document.forms['frm'].del_name.value === "")
  {
    alert("les champs ne peuvents pas etre vides!");
    return false;
  }
    alert("vous etes sur de vous pour continuer");
    return true;

}
</script>


</body>
</html>
