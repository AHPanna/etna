<?php 

function test() {
?>
<form action="#" method="post">
?>
/*
<select name="Color">
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
*/
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
            ?>
             <select name="db_name" class="form-control" id="exampleSelect1">
        <?php
        foreach( $rowAll as $row )
            {

                echo '<option name="db_name" > &#9889 : '.$row['Database'].'</option>' ;

            }
            ?>
                </select>
                <?php
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>

    
<input type="submit" name="submit" value="Get Selected Values" />
</form>

<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['db_name'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
}
?>


